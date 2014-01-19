<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ranking Committe</title>
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



	</tr>
		<td>
            <p>!!!----COURSE NAME------!!!</p>
             <a href="http://localhost/hr_recordsystem/index.php/rank_cont">
                <input id="view_uploads" name="View Uploads" type="button" value="view_uploads">
            </a>
        </td>
	</tr>

		

	<tr>

</table>
       <form name="list" method="post">
	<input type="hidden" name="rid" />
	<input type="hidden" name="command" />
	<table width="600" align="center">
        <tr>

			<th>ID No</th>
			<th>Faculty Name</th>
			<th>Summarized Points</th>
	</tr>
</table>
  

   
    <table width="600" border="0" align="center">

      
	
    </table>
    <?php echo form_close();
?>
</body>
</html>