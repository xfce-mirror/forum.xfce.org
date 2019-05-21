<?php

class addon_xfcesha extends flux_addon
{
    function register($manager)
    {
        $manager->bind('register_after_validation', array($this, 'hook_register_after_validation'));
        $manager->bind('register_before_submit', array($this, 'hook_register_before_submit'));
    }

    function hook_register_after_validation()
    {
        global $errors;

        if (empty($errors) && !$this->verify_user_response())
        {
            $errors[] = 'Please prove that you are human and know how the Linux terminal works.';
        }
    }

    function hook_register_before_submit()
    {
?>
        <div class="inform">
            <fieldset>
                <legend>Are you an human?</legend>
                <div class="infldset">
                    <label class="required">
                        <p><strong>What is the output of this command :</strong><br />
			Linux: <tt>date -u +%jXfce|sha256sum|sed 's/\W//g'</tt><br />
			FreeBSD/OpenBSD: <tt>date -u +%jXfce|sha256|sed 's/\W//g'</tt><br />
			NetBSD: <tt>date -u +%jXfce|sum -a sha256|sed 's/\W//g'</tt><br />
                        <input type="text" name="themousetoldyou" value="" size="50" /><br />
                    </label>
                </div>
            </fieldset>
        </div>
<?php
    }

    function sha256question_normalize($answer)
    {
        return preg_replace('/[^a-z0-9]/', '', strtolower($answer));
    }
    
    function verify_user_response()
    {
        if (empty($_POST['themousetoldyou']))
            return false;

        $user_answer = $this->sha256question_normalize ($_POST['themousetoldyou']);
        
        // Because the user might be in a different time zone, or day changed right
        // after submit, we also check the hash of yesterday and tomorrow.
        foreach (array (0, 1, -1) as $i)
        {
            // The date command adds a new line at the end
            $str = gmstrftime ("%jXfce", time() - ($i * 60*60*24)) ."\n";
            $answer = hash ("sha256", $str);

            if ($this->sha256question_normalize ($answer) == $user_answer)
                return true;
        }
        
        return false;
    }
}

