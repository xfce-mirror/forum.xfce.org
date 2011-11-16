<?php

if (!defined('PUN'))
	exit;

$question_format = "%jXfce";
$question_fld_name = "the_mouse_told_you";

function sha256question_normalize($answer)
{
	return preg_replace('/[^a-z0-9]/', '', strtolower($answer));
}

function sha256question_get()
{
	global $question_format, $question_fld_name;

	$command = "date -u +$question_format|sha256sum|sed 's/\W//g'";

	return '<div class="inform">
			<fieldset>
				<legend>Your answer</legend>
				<div class="infldset">
					<p>What is the output of <strong>'.$command.'</strong> if you run it in a terminal emulator?<span>'.$lang_common['Required'].'></p>
					<label class="required">
						<input type="text" name="'.$question_fld_name.'" value="" size="50" /><br />
					</label>
                                        <p>Note that on some platforms (FreeBSD for example) sha256sum should be replaced with sha256 or gsha256sum.</p>
				</div>
			</fieldset>
		</div>';
}

function sha256question_check()
{
	global $question_format, $question_fld_name;

	// Get the users' reply
	if (!empty ($_POST[$question_fld_name]))
		$user_answer = sha256question_normalize ($_POST[$question_fld_name]);
	else
		return False;

	// Because the user might be in a different time zone, or day changed right
	// after submit, we also check the hash of yesterday and tomorrow.
	$timstamp = time();
	foreach (array (0, 1, -1) as $i)
	{
		// The date command adds a new line at the end
		$str = gmstrftime ($question_format, $timstamp - ($i * 60*60*24)) ."\n";
		$answer = hash ("sha256", $str);

		if (sha256question_normalize ($answer) == $user_answer)
			return True;
	}

	return False;
}
