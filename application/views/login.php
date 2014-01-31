<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link href="<?php echo base_url('assets/css/layout.css') ?>" rel="stylesheet" type="text/css" />
    <style>
        body
        {
            background-color: #fff;
            margin: auto;
            margin-top: 50px;
            width: 60%;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
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
            <a href="http://localhost/hr_recordsystem/">
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
    <tr>
</table>
<table width="600" border="0" align="center">
<div id="container">
    <center>
    <h3> Login </h3>
    <form action="" method="POST">
        <input id="username" type="text" name="username"><br>
        <input id="pass" type="password" name="password"><br>
        <input id="buttons" type="submit" value="Login">
    </form>
</center>
</table>

</body>
</html>