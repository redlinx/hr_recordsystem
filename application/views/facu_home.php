<html>
    <title> Faculty Home Page </title>
<body bgcolor="pink">
    <p></p><center><b>University of the Immaculate Conception
    <br/>Fr. Selga Street, Davao City
    <br/><br/> FACULTY'S INFORMATION SHEET</b></center></p>

    <br/><img src = "pic.jpg" width="170" height="140"></img>
      
      <h2>Welcome <?php echo $username; ?>!</h2>
    <a href="home_controller/logout">Logout</a>


    <br/><center><img src = "images/bg.jpg" width="170" height="140"></img></center>
<style>

{
font-family:Calibri;
}
</style>

    <?php
  if($level == "1")
  {
 ?>
 <center><h2>Hi <?php echo $user->firstname;?> <?php echo $user->lastname; ?></h2>


 <a href="http://localhost/hr_recordsystem/index.php/login/logout">
                <input name="New" type="button" value="Logout"></a></center>
  
 <?php
 }else
 {
  ?>
  <center>  <a href="http://localhost/hr_recordsystem/index.php/home">View employees</a><br/>
  <h2>Hi <?php echo $user->firstname;?> <?php echo $user->lastname;?></h2>
   <a href="http://localhost/hr_recordsystem/index.php/login/logout">
              <input name="New" type="button" value="Logout"></a></center>
  <?php

 }
 ?>

<center>
  <form>

		<fieldset style="width: 320px;">
		<legend><b>Select:</b></legend>
                <a href="http://localhost/hr_recordsystem/index.php/facu_cont/firstpage">View Profile</a><br/>
                <a href="http://localhost/hr_recordsystem/index.php/facu_cont/upload_facu_cred">Upload Credentials</a>
                </fieldset>
  </form>
</center>  
</body>
</html>
