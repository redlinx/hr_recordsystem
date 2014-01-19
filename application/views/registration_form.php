<?php


for($x=0;$x<count($program);$x++)
{
	$program_option[$program[$x]['prog_id']] = $program[$x]['prog_name'];
}

echo "<table>";

$this->load->helper('form');
echo form_open('register_faculty/add_new_record');
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
echo "<tr><td colspan=2>".form_submit('mysubmit', 'Register')."</td></tr>";
echo form_close();

echo "</table>";

?>