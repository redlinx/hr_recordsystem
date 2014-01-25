<?php
	// echo '<pre>';
	// print_r($faculty_profile);
	// echo '</pre>'; 
echo "<h2> My Profile </h2>";
echo "<table>";
	echo form_open();
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
	echo form_close();
echo "</table>";

?>