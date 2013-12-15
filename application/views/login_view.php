<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
   <p></p><center><b>University of the Immaculate Conception
    <br/>Fr. Selga Street, Davao City
    <br/><br/> FACULTY'S INFORMATION SHEET</b></center></p>
    <br/>
<body bgcolor="pink">
  </head>
  <style>
  input
  {
    border-radius: 6px;  
  }
  </style>
  <body>
  <?php echo validation_errors(); ?>
    <?php echo form_open('verifylogin'); ?>
 <form>
 <center>
  <fieldset style="width: 320px;">
<legend><b>Login</b></legend>
 
      <label for="username">Username:</label>
      <input type="text" size="20" id="username" name="username"/>
      <br/>
      <label for="password">Password:</label>
      <input type="password" size="20" id="password" name="password"/>
      <br/>
      <input type="submit" value="Login"/>
    </form>
</center>
  </fieldset>
  </body>
</html>
