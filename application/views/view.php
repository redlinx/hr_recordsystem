<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View</title>
<style>
table
{
    border:1px solid HotPink;
    border-radius: 6px;
}
td, th
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
		<td id="nav">
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
</table>

Hai, <?php $query['lastname']?>.
Your Username is <?php $query['username']?>

</body>
</html>