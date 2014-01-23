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
        margin: 10% 0 0 0;
    }
    
    #container{
        margin: 10px;
        border: 1px solid #D0D0D0;
        border-top-style: solid;
        border-top-width: 5px;
        border-top-color: MediumBlue;
        -webkit-box-shadow: 0 0 8px #D0D0D0;
    }
    form
    {
        text-align: left;
        
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
<<<<<<< HEAD
=======
<<<<<<< HEAD

    <table width="600" border="0" align="center">
=======
>>>>>>> cbd265133764c8ddfd9359898cfa1d2fb9f1e33d
>>>>>>> a779f36a824c1b57de5f9b20cb437690429f3b81

<div id="container">
    <h1>Welcome to Records Management System!</h1>

    <div id="body">
        <form name="list" method="post">
        <input type="hidden" name="rid" />
        <input type="hidden" name="command" />
        <table width="600" align="center">
            <tr>
                <th>ID No</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Program</th>
            </tr>
            <?php
                foreach ($users as $user)
                {
                    $user_id = $user['emp_id'];
            ?>
                <tr>
                    <td><?php echo $user['emp_id'] ?></td>
                    <td><?php echo $user['lname'] ?></td>
                    <td><?php echo $user['fname'] ?></td>
                    <td><?php echo $user['program'] ?></td> 
                </tr>
            <?php
                }
            ?>
        </table>
    </form>
    </div>

    <p class="footer"> Human Resource Office, University of the Immaculate Conception, Davao City, Philippines</p>
</div>
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a

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