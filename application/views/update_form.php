<?php
for($x=0;$x<count($program);$x++)
{
	$program_option[$program[$x]['prog_id']] = $program[$x]['prog_name'];
}



// for($x=0;$x<count($program);$x++)
// {
// 	$program_option[$program[$x]['prog_id']] = $program[$x]['prog_name'];
// }
echo "<h3> Update Faculty</h3>";
/*echo "<table>";
$this->load->helper('form');
	echo form_open('update_faculty/update_record');
		echo "<tr><td>Last Name</td><td>".form_input('lname')."</td></tr>";
		echo "<tr><td>First Name</td><td>".form_input('fname')."</td></tr>";
		echo "<tr><td>Middle Name</td><td>".form_input('mname')."</td></tr>";
		echo "<tr><td>Birthday</td><td>".form_input('bday')."</td></tr>";
		echo "<tr><td>Gender</td><td>".form_input('gender')."</td></tr>";
		echo "<tr><td>Civil Status</td><td>".form_input('civStat')."</td></tr>";
		echo "<tr><td>Cell No.</td><td>".form_input('cellNo')."</td></tr>";
		echo "<tr><td>Tell No.</td><td>".form_input('tellNo')."</td></tr>";
		echo "<tr><td>Email Name</td><td>".form_input('email')."</td></tr>";
		echo "<tr><td>Username</td><td>".form_input('username')."</td></tr>";
		echo "<tr><td>Password</td><td>".form_password('userpass')."</td></tr>";
		echo "<tr><td>Program</td><td>".form_dropdown('program',$program_option)."</td></tr>";
		echo "<tr><td colspan=2>".form_submit('mysubmit', 'Update')."</td></tr>";
	echo form_close();
echo "</table>";*/

echo "<table>";
	echo form_open('update_faculty/update_record');
		echo "<tr><td>Last Name</td><td>".form_input('lastname', $faculty_profile['lastname'])."</td></tr>";
		echo "<tr><td>First Name</td><td>".form_input('firstname', $faculty_profile['firstname'])."</td></tr>";
		echo "<tr><td>Middle Name</td><td>".form_input('middlename', $faculty_profile['middlename'])."</td></tr>";
		echo "<tr><td>Birthday</td><td>".form_input('bday', $faculty_profile['bday'])."</td></tr>";
		echo "<tr><td>Gender</td><td>".form_input('gender', $faculty_profile['gender'])."</td></tr>";
		echo "<tr><td>Civil Status</td><td>".form_input('civil_status', $faculty_profile['civil_status'])."</td></tr>";
		echo "<tr><td>Cell #</td><td>".form_input('cell_no', $faculty_profile['cell_no'])."</td></tr>";
		echo "<tr><td>Tell #</td><td>".form_input('tell_no', $faculty_profile['tell_no'])."</td></tr>";
		echo "<tr><td>Email </td><td>".form_input('email', $faculty_profile['email'])."</td></tr>";
		echo "<tr><td>Program</td><td>".form_input('program', $faculty_profile['prog_name'])."</td></tr>";
		echo "<tr><td colspan=2>".form_submit('mysubmit', 'Update')."</td></tr>";	
	echo form_close();

echo "</table>";

?>