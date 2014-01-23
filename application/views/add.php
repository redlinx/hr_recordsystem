<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Records Management System</title>

    <style type="text/css">

    ::selection{ background-color: #E13300; color: white; }
    ::moz-selection{ background-color: #E13300; color: white; }
    ::webkit-selection{ background-color: #E13300; color: white; }

    body {
        background-color: #fff;
        margin: auto;
        margin-top: 50px;
        width: 60%;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }

   h1 {
        color: #444;
        background-color: transparent;
        border-bottom: 1px solid #D0D0D0;
        font-size: 19px;
        font-weight: normal;
        margin: 0 0 14px 0;
        padding: 14px 15px 10px 15px;
    }

    #body{
       margin: 0 15px 0 15px;
    }
    
    p.footer{
        text-align: right;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 40% 0 0 0;
    }
    
    #container{
        margin: 10px;
        border: 1px solid #D0D0D0;
        border-top-style: solid;
        border-top-width: 5px;
        border-top-color: MediumBlue;
        -webkit-box-shadow: 0 0 8px #D0D0D0;
    }
    </style>
</head>
<body>
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
>>>>>>> a779f36a824c1b57de5f9b20cb437690429f3b81
<div id="wrapper">
	<div id="header">
		<p>
			<h2 id="title"> Web Based Records Management System </h2>
<<<<<<< HEAD
			<h3 id="subtitle"> Human Resource Office | University of the Immaculate Conception</h3>
		</p>
	</div>
	<div id="content">
		<h2> Faculty Registration </h2>
		<?php echo form_open("add/create");?>

			<table width="600" border="0" align="left">

=======
			<h3 id="subtitle"> Human Resource Office | University of the Immaculate Conception</h3><br/>
			
		</p>


	</div>
	<div id="content">
	
		<h2> Faculty Registration </h2>

		<?php echo form_open("add/create");?>

<div id="container">
    <h1>Welcome to Records Management System!</h1>

    <div id="body">
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
                    <td>
                        <select name="gender" value="<?php echo set_value('gender'); ?>" required>
                            <option value="">Select Gender:</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
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
                    <td align="left" bgcolor="#FFFFFF">Program:</td>
                    <td>
                        <select name="program" value="<?php echo set_value('program'); ?>" required>
                            <option value="">Select Program:</option>
                            <option value="ITE">Information Technology Education</option>
                            <option value="MLS">Medical Laboratory Science</option>
                            <option value="Pharmacy">Pharmacy</option>
                            <option value="Nursing">Nursing</option>
                            <option value="Music">Music</option>
                            <option value="ND/HRM">ND/HRM</option>
                            <option value="LA">Liberal Arts</option>
                            <option value="ABA">ABA</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Education">Education</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
                    <td>
                        <input type="submit" value="Submit" />
                        <input type="reset" value="Clear" />
                </tr>
            </table>
        <?php echo form_close();?>
    
    </div>

    <p class="footer"> Human Resource Office, University of the Immaculate Conception, Davao City, Philippines</p>
=======
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
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
<<<<<<< HEAD
					<td align="left" bgcolor="#FFFFFF">Date of Birth:</td>
=======
					<td align="left" bgcolor="#FFFFFF">Date of Birth: (Y-M-D)</td>
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
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
<<<<<<< HEAD
=======

>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
				</tr>
			</table>
		<?php echo form_close();
		?>
<<<<<<< HEAD
=======
		
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
	</div>
	<div id="footer">
		All Rights Reserved 2013
	</div>
<<<<<<< HEAD
</div>
	
=======
>>>>>>> cbd265133764c8ddfd9359898cfa1d2fb9f1e33d
</div>

>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
</body>
</html>