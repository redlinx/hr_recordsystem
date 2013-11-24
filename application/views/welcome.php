<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
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
#home, #reg
{
    background-color: MediumBlue;
    color:white;
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
            <a href="http://localhost/hr_recordsystem/">
                <input id="home" name="New" type="button" value="Home">
            </a>
            <input id="reg" name="New" type="button" value="Login" onclick="window.location='index.php/home/log'" />
        </td>
    </tr>
    <tr>
        <td>
            <h2>
                <center>
                    Welcome
                </center> 
            </h2>    
        </td>
    </tr>
</table>

</body>
</html>