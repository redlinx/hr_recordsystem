fghjmgfrew

<?php
echo "<table>";
echo "<tr><td>Username</td><td>".form_input('username', $faculty_account['username'])."</td></tr>";
echo "<tr><td>New Password</td><td>".form_input('userpass', $faculty_account['userpass'])."</td></tr>";
echo "<tr><td>Verify New Password</td><td>".form_input('verify_password', $faculty_account['verify_password'])."</td></tr>";
		echo "<tr><td colspan=2>".form_submit('mysubmit', 'Update')."</td></tr>";	
	echo form_close();