<html>
<<<<<<< HEAD
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
=======
<head>
    <title> Faculty Home Page </title>
</head>
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
    #menu
    {
      float: right;
      border-radius: 20px;
    }
    #content
    {
      width:70%;
      margin: auto;
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
<body>
<div id="wrapper">
    <div id="header">
      <p>
        <h2 id="title"> Web Based Records Management System </h2>
        <h3 id="subtitle"> Human Resource Office | University of the Immaculate Conception</h3><br/>
        
      </p>
    </div>
    <div id="menu">
      <a href="http://localhost/hr_recordsystem/index.php/facu_cont/firstpage">
        <input name="View" type="button" value="View Profile">
      </a>
      <a href="http://localhost/hr_recordsystem/index.php/upload">
        <input name="View" type="button" value="Upload">
      </a>
      <a href="http://localhost/hr_recordsystem/index.php/login/logout">
        <input name="New" type="button" value="Logout">
      </a>
    </div>
    <div id="content">
      
    <center>
      <h2>FACULTY'S INFORMATION SHEET</h2>
      <img src = "<?php echo base_url('assets/images/pic.jpg') ?>" width="200" height="140"></img>
    </center>

  <?php
    if($this->session->userdata('level') == "1")
    {
  ?>
  <center>
    <h2>Hi <?php echo $this->session->userdata('firstname');?> <?php echo $this->session->userdata('lastname'); ?></h2>
  </center>
  
 <?php
   }
   else
   {
  ?>
<center>
<a href="http://localhost/hr_recordsystem/index.php/home">View employees</a>
<br/>
<center>
  <h2>Hi <?php echo $this->session->userdata('firstname');?> <?php echo $this->session->userdata('lastname'); ?></h2>

   
</center>
  <?php
 }
 ?>
    </div>
    <div id="footer">
    All Rights Reserved 2013
  </div>
</div>
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
</body>
</html>
