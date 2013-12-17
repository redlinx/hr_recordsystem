<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View</title>
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
<body>
<table width="600" border="0" align="center">
	<tr>
		<td id="header">
			<h2>Records Management System</h2>
			<h4>Human Resource Office | University of the Immaculate Conception</h4>
		</td>
	</tr>
	<tr>
		<td>
            <a href="http://localhost/hr_recordsystem/index.php/home">
                <input id="buttons" name="New" type="button" value="Home">
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

    <table width="600" border="0" align="center">

        <tr>
            <td width="130" align="left" bgcolor="#FFFFFF">Username: </td>
            <td><?php echo  $user['username'] ?></td>
        </tr>
        <tr>
            <td width="130" align="left" bgcolor="#FFFFFF">Last Name: </td>
            <td><?php echo  $user['lastname'] ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">First Name:</td>
            <td><?php echo $user['firstname']  ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">Middle Name:</td>
            <td><?php echo  $user['middlename'] ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">Gender:</td>
            <td><?php echo  $user['gender']  ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">Religion:</td>
            <td><?php echo $user['religion']?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">Date of Birth:</td>
            <td><?php echo $user['bday'] ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">Place of Birth:</td>
            <td><?php echo  $user['birthplace']  ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">City Address:</td>
            <td><?php echo $user['city_add']  ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">Province Address:</td>
            <td><?php echo  $user['prov_add'] ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">Telephone Number:</td>
            <td><?php echo $user['tell_no']  ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">Cellphone Number:</td>
            <td><?php echo  $user['cell_no']  ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">Email Address:</td>
            <td><?php echo $user['email']  ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">Civil Status:</td>
            <td><?php echo  $user['civil_stat']  ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">Program:</td>
            <td><?php echo $user['program']  ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">User Type:</td>
            <td><?php echo  $user['user_type']  ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">Status:</td>
            <td><?php echo  $user['status']  ?></td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF">Rank:</td>
            <td><?php echo  $user['rank'] ?></td>
        </tr>
    </table>
</body>
</html>