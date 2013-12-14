<html>
<head>
<title>Upload Form</title>
<body bgcolor="pink">
    <p></p><center><b>University of the Immaculate Conception
    <br/>Fr. Selga Street, Davao City
    <br/><br/> FACULTY'S INFORMATION SHEET</b></center></p>
    <br/>
</head>
<body>


<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>
<center>
 <fieldset style="width: 320px;">
<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</fieldset>
</form>
</center>
</body>
</html>