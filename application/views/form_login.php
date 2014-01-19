<html>
<head>
<title>Form Login</title>
<style>
body
{
font-family:Calibri;
margin:50px;
}
#form-login{
margin:auto;
width:500px;
padding:10px;
border:1px #ccc solid;
font-size:18px;
font-weight:bold;
<<<<<<< HEAD
color:#FF6600;
=======
color: MediumBlue;
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
}
.inputan
{
padding:3px;
font-family:Calibri;
border:1px solid #ccc;
}
.button
{
padding:5px;
<<<<<<< HEAD
background:#FF6600;
=======
background:MediumBlue;
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
color:#FFF;
font-weight:bold;
font-family:Calibri;
font-size:15px;
border:#eee 1px solid;
}
.error
{
color:#FF6600;
font-size:11px;
}
<<<<<<< HEAD
=======
#form-login, #form
{
	background-color: HotPink;
}
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
</style>
</head>
<body>
<form action="<?php echo base_url();?>index.php/login/form_login" method="post" name="login">
<div id="form-login">
<<<<<<< HEAD
Human Resource
<br><br>
<table border="0" cellpadding="4">
=======
	<h3> Web Based Records Management System </h3>
<table id="form" border="0" cellpadding="4">
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
<tr>
<td>Username</td>
<td>:</td>
<td><input type="text" size="40" name="username" value="<?php echo set_value('username');?>" class="inputan"> <?php echo form_error('username');?></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" size="40" name="password" value="<?php echo set_value('password');?>" class="inputan"> <?php echo form_error('password');?></td>
</tr>
<tr>
<td>Level</td>
<td>:</td>
<td><select name="level" class="inputan">
<option value="1">Faculty</option>
<<<<<<< HEAD
<option value="2">Hr officer</option>
=======
<option value="2">HR Officer</option>
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a

</select></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="login" value="Login" class="button"> </td>
</tr>
</table>
</div>
</form>