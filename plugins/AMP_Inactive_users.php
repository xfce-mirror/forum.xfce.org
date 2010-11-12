<?php

// Make sure no one attempts to run this script "directly"
if (!defined('PUN'))
	exit;

$no_visit_age = 60*60*24*30;
$no_login_age = $no_visit_age * 6;
$limit = 100;

// Tell admin_loader.php that this is indeed a plugin and that it is loaded
define('PUN_PLUGIN_LOADED', 1);

// Display the admin navigation menu
generate_admin_menu($plugin);

$deleted = 0;
if (isset($_POST['delete-users']) && is_array($_POST['delete-users']))
{
	if ($pun_user['g_id'] > PUN_ADMIN)
		message($lang_common['No permission']);

	confirm_referrer('admin_loader.php');

	if (isset($_POST['deleted']))
	{
		$deleted = intval($_POST['deleted']);
	}

	foreach($_POST['delete-users'] as $user)
	{
		if (!preg_match('/^\d+$/', $user))
		{
			continue;
		}

		// Delete any subscriptions
		$db->query('DELETE FROM '.$db->prefix.'subscriptions WHERE user_id='.$user) or error('Unable to delete subscriptions', __FILE__, __LINE__, $db->error());

		// Remove him/her from the online list (if they happen to be logged in)
		$db->query('DELETE FROM '.$db->prefix.'online WHERE user_id='.$user) or error('Unable to remove user from online list', __FILE__, __LINE__, $db->error());

		// Delete the user
		$db->query('DELETE FROM '.$db->prefix.'users WHERE num_posts=0 AND id='.$user) or error('Unable to delete user', __FILE__, __LINE__, $db->error());
		if ($db->affected_rows() > 0)
		{
			$deleted++;
		}

		// Delete user avatar
		delete_avatar($user);
	}
}

?>
	<div class="plugin blockform">
		<h2><span>Inactive profile detector</span></h2>
		<?php
			if ($deleted > 0)
			{
			echo '<div class="box"><p>Deleted '.$deleted.' users!</p></div>';
			}
		?>
		<div class="box">
			<div class="inbox">
				<p>Search for users with no posts and the following setting:</p>
				<div class="inform">
					<table class="aligntop" style="width:300px;">
						<tr>
							<td>Never made a visit in<br />and regsitered before:</td>
							<td><?php echo gmdate('M d Y H:i:s', time() - $no_visit_age); ?></td>
						</tr>
						<tr>
							<td>Never visited since:</td>
							<td><?php echo gmdate('M d Y H:i:s', time() - $no_login_age); ?></td>
						</tr>
						<tr>
							<td>Limited to:</td>
							<td><?php echo $limit; ?> users</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<h2 class="block2"><span>Inactive users:</span></h2>
		<div class="box">
			<div class="inbox"><p><?php
			$user_result = $db->query('SELECT id, username, email, url FROM '.$db->prefix.'users WHERE group_id=4 AND num_posts = 0 AND (
			                          (last_visit = 0 AND registered < (UNIX_TIMESTAMP() - '.$no_visit_age.'))
			                          OR
			                          (last_visit < (UNIX_TIMESTAMP() - '.$no_login_age.'))) ORDER BY registered DESC LIMIT '.$limit) or error('All clear', __FILE__, __LINE__, $db->error());

			if ($db->num_rows($user_result))
			{
				echo '<form method="post" action="'.pun_htmlspecialchars($_SERVER['REQUEST_URI']).'">
				<input type="submit" name="submit" value="Delete Users" />
				<table><tr><th>username</th><th>Delete</th><th>E-mail</th><th>Website</th></tr>';

				while ($cur_user = $db->fetch_assoc($user_result))
				{
					echo '<tr>
						<td style="width:150px;"><a href="profile.php?id='.$cur_user['id'].'">'.pun_htmlspecialchars($cur_user['username']).'</a></td>
							<td style="width:50px;"><input type="checkbox" name="delete-users[]" value="'.$cur_user['id'].'" checked /></td>
							<td>'.pun_htmlspecialchars(stripslashes($cur_user['email'])).'</td>
							<td>'.pun_htmlspecialchars(stripslashes($cur_user['url'])).'</td>
						</tr>';
				}

				echo '</table>
					<input type="hidden" name="deleted" value="'.$deleted.'" />
					<input type="submit" name="submit" value="Delete Users" />
				</form>';
			}
			?></p></div>
		</div>
	</div>
<?php

