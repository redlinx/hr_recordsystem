<html>
<head>
	<title> Registration</title>
	<link href="Final_Project.css" rel="stylesheet" type="text/css" />
	<style>
		body
		{
			background-image:url('bg.jpg');
		}
		#wrapper
		{
			background-image:url('bg.jpg');
			width:70%;
			margin:auto;
		}
		#header
		{
			background-color: MediumBlue;
			height:120px;
			margin-top: 10px;
		}

		#wrapper, #header
		{
			border-top-left-radius:30px;
			border-top-right-radius:30px;
		}

		#wrapper, #footer
		{
			border-bottom-left-radius:30px;
			border-bottom-right-radius:30px;
		}
		#title
		{
			float:left;
			font-family: Allstar;
			font-size: 30px;
			margin-top:25px;
			margin-left: 5px;
			margin-bottom:0px;
			color: white;
		}
		#subtitle
		{
			float:left;
			font-family: Allstar;
			font-size: 20px;
			margin-top:28px;
			margin-left: 5px;
			margin-bottom:0px;
			color: white;
		}
		#content
		{
			width:70%;
			float:left;
			text-align:justify;
			padding:0 5px 0 5px;
		}
		#footer
		{
			text-align:center;
			background-color: MediumBlue;
			clear:both;
			color: white;
		}
	</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<p>
			<h2 id="title"> Web Based Records Management System </h2>
			<h3 id="subtitle"> Human Resource Office | University of the Immaculate Conception</h3>
		</p>
	</div>
	<div id="content">
		<h2> Faculty Registration </h2>
		<?php echo form_open("add/create");?>

			<table width="600" border="0" align="left">

				<tr>
					<td width="130" align="left" bgcolor="#FFFFFF">Username: </td>
					<td><input type="text" name="username" value="<?php echo set_value('username'); ?>"  size="30" required /></td>
				</tr>
				<tr>
					<td width="130" align="left" bgcolor="#FFFFFF">Password: </td>
					<td><input type="text" name="password" value="<?php echo set_value('password'); ?>" size="30" required /></td>
				</tr>
				<tr>
					<td width="130" align="left" bgcolor="#FFFFFF">Last Name: </td>
					<td><input type="text" name="lname" value="<?php echo set_value('fname'); ?>"  size="30" required /></td>
				</tr>
				<tr>
					<td align="left" bgcolor="#FFFFFF">First Name:</td>
					<td><input type="text" name="fname" value="<?php echo set_value('lname'); ?>"  size="30" required /></td>
				</tr>
				<tr>
					<td align="left" bgcolor="#FFFFFF">Middle Name:</td>
					<td><input type="text" name="mname" value="<?php echo set_value('mname'); ?>"  size="30" required /></td>
				</tr>
				<tr>
					<td align="left" bgcolor="#FFFFFF">Gender:</td>
					<td><input type="text" name="gender" value="<?php echo set_value('gender'); ?>"  size="30" required /></td>
				</tr>
				<tr>
					<td align="left" bgcolor="#FFFFFF">Date of Birth:</td>
					<td><input type="text" name="bday" value="<?php echo set_value('bday'); ?>"  size="30" required /></td>
				</tr>
				<tr>
					<td align="left" bgcolor="#FFFFFF">Email Address:</td>
					<td><input type="text" name="email" value="<?php echo set_value('email'); ?>" size="30" required /></td>
				</tr>

				<tr>
					<td align="right" bgcolor="#FFFFFF">&nbsp;</td>
					<td>
						<input type="submit" value="Submit" />
						<input type="reset" value="Clear" />
				</tr>
			</table>
		<?php echo form_close();
		?>
	</div>
	<div id="footer">
		All Rights Reserved 2013
	</div>
</div>
	
</body>
</html>