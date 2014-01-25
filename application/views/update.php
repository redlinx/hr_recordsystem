<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update</title>
<style>
table, td, th
{
border:1px solid HotPink;
}
#header
{
background-color: MediumBlue;
color:white;
}
th
{
background-color: MediumBlue;
color:white;
}
#buttons
{
    background-color: MediumBlue;
    color:white;
    padding: 4px;
    width: 115px;
    border-radius: 6px;
}
#username, #pass
{
    background-color: white;
    color:black;
    width: 150px;
    border-radius: 6px;

}

#list
{
    text-align: center;
}
#container
{
    margin: auto;
}
</style>
</head>
<<<<<<< HEAD
<body>
=======
<<<<<<< HEAD
<body>
=======
<body >
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
>>>>>>> 4150845dfd5919a39081843690f6565a950188ef
<table width="600" border="0" align="center">
	<tr>
		<td id="header">
			<h2>Records Management System</h2>
			<h4>Human Resource Office | University of the Immaculate Conception</h4>
		</td>
	</tr>
	<tr>
		<td>
<<<<<<< HEAD
            <a href="http://localhost/hr_recordsystem/">
=======
<<<<<<< HEAD
            <a href="http://localhost/hr_recordsystem/">
=======
            <a href="http://localhost/hr_recordsystem/index.php/home">
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
>>>>>>> 4150845dfd5919a39081843690f6565a950188ef
                <input id="buttons" name="New" type="button" value="Home">
            </a>
            <a href="http://localhost/hr_recordsystem/index.php/home/login">
                <input id="buttons" name="New" type="button" value="Login">
            </a>
            <a href="http://localhost/hr_recordsystem/index.php/home/add">
                <input id="buttons" name="New" type="button" value="Register">
            </a>
        </td>
	</tr>
</table>
  

    <?php
        foreach ($users as $user)
        {
            $user_id = $user['id'];
    ?>
    <br/>
    <?php
        }
    ?>

    <?php echo form_open("home/update_validation");?>
    <table width="600" border="0" align="center">
<?php echo form_hidden('id', $user['id']); ?>
        <tr>
			<td width="130" align="left" bgcolor="#FFFFFF">Username: </td>
			<td><?php echo form_input('username', $user['username']); ?></td>
		</tr>
		<tr>
			<td width="130" align="left" bgcolor="#FFFFFF">Password: </td>
			<td><?php echo form_input('password', $user['password']); ?></td>
		</tr>
		<tr>
			<td width="130" align="left" bgcolor="#FFFFFF">Last Name: </td>
			<td><?php echo form_input('lastname', $user['lastname']); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">First Name:</td>
			<td><?php echo form_input('firstname', $user['firstname']); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Middle Name:</td>
			<td><?php echo form_input('middlename', $user['middlename']); ?></td>
		</tr>
		<?php
		$gender = array(
				''  	=> 'Gender:',
				'M'    	=> 'Male',
				'F' 	=> 'Female',
				//'value' => $this->form_validation->set_value('gender'),
			);
		?>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Gender:</td>
			<td><?php echo form_dropdown('gender',$gender,$user['gender']); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Religion:</td>
			<td><?php echo form_input('religion', $user['religion']); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Date of Birth:</td>
			<td><?php echo form_input('bday', $user['bday']); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Place of Birth:</td>
			<td><?php echo form_input('birthplace', $user['birthplace']); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">City Address:</td>
			<td><?php echo form_input('city_add', $user['city_add']); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Province Address:</td>
			<td><?php echo form_input('prov_add', $user['prov_add']); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Telephone Number:</td>
			<td><?php echo form_input('tell_no', $user['tell_no']); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Cellphone Number:</td>
			<td><?php echo form_input('cell_no', $user['cell_no']); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Email Address:</td>
			<td><?php echo form_input('email', $user['email']); ?></td>
		</tr>
		
		<?php
		$civil_stat = array(
				''  							=> 'Civil Status:',
				'Single' 						=> 'Single',
				'Married' 						=> 'Married',
				'Head of the Family' 			=> 'Head of the Family',
				'Legally Separated' 			=> 'Legally Separated',
				'Working Spouse' 				=> 'Working Spouse',
				'Non-Working Spouse' 			=> 'Non-Working Spouse',
				'Entitled Exemption Units' 		=> 'Entitled Exemption Units',
				'Not Entitled Exemption Units' 	=> 'Not Entitled Exemption Units',
				//'value' => $this->form_validation->set_value('civil_stat'),
			);
		
		?>
		
		<tr>
			<td align="left" bgcolor="#FFFFFF">Civil Status:</td>
			<td><?php echo form_dropdown('civil_stat', $civil_stat, $user['civil_stat']); ?></td>
		</tr>
		
		<?php
		$program = array(
				''  					=> 'Program:',
				'LA' 					=> 'Liberal Arts',
				'ABA' 					=> 'Accountancy and Business Administration',
				'Engineering'			=> 'Engineering',
				'Education'				=> 'Education',
				'ND/HRM'				=> 'Nutrition and Dietetics/ Hotel and Restaurant Management',
				'Music'					=> 'Music',
				'ITE'					=> 'Information Technology Education',
				'MLS'					=> 'Medical Laboratory Science',
				'Pharma/Chem'			=> 'Pharmacy/Chemistry',
				'Nursing'				=> 'Nursing',
				//'value' => $this->form_validation->set_value('program'),
			);
		?>
			
			
			
		<tr>
			<td align="left" bgcolor="#FFFFFF">Program:</td>
			<td><?php echo form_dropdown('program', $program,$user['program']); ?></td>
		</tr>
		
		<?php
		$user_type = array(
				''  		=> 'User Type:',
				'Admin' 	=> 'Administrator',
				'Dean' 		=> 'Dean',
				'Faculty' 	=> 'Faculty',
				//'value' => $this->form_validation->set_value('user_type'),
			);
			
			?>
		<tr>
			<td align="left" bgcolor="#FFFFFF">User Type:</td>
			<td><?php echo form_dropdown('user_type', $user_type,$user['user_type']); ?></td>
		</tr>
		
		<?php
		$status = array(
				''  		=> 'Status:',
				'Regular' 	=> 'Regular',
				'Probi1' 	=> 'Probationary 1',
				'Probi2' 	=> 'Probationary 2',
				'Probi3' 	=> 'Probationary 3',
				//'value' => $this->form_validation->set_value('status'),
			);
			
			?>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Status:</td>
			<td><?php echo form_dropdown('status', $status,$user['status']); ?></td>
		</tr>
		
		<?php
		$rank = array(
				''  		=> 'Rank:',
				'Instructor I' 	=> 'Instructor I',
				'Instructor II' => 'Instructor II',
				'Assis. Prof' 	=> 'Assistang Professor',
				'Agg. Prof' 	=> 'Aggregate Professor',
				'Assoc. Prof' 	=> 'Associate Professor',
				'Prof' 		=> 'Full Professor',
				'Prof I' 	=> 'Full Professor I',
				'Prof II' 	=> 'Full Professor II',
				'Prof III' 	=> 'Full Professor III',
				'Prof IV' 	=> 'Full Professor IV',
				'Prof V' 	=> 'Full Professor V',
				'Prof VI' 	=> 'Full Professor VI',
				'Prof Emeritus' => 'Professor Emeritus',
				//'value' => $this->form_validation->set_value('rank'),
			);
			
			?>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Rank:</td>
			<td><?php echo form_dropdown('rank', $rank,$user['rank']); ?></td>
		</tr>
		
		
			
		<tr>
			<td align="right" bgcolor="#FFFFFF">&nbsp;</td>
			<td>
				<?php echo form_submit('submit', 'Update');?>
				<?php echo form_reset('reset', 'Clear');?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
>>>>>>> 4150845dfd5919a39081843690f6565a950188ef
		</tr>
	
    </table>
    <?php echo form_close();
?>
</body>
</html>