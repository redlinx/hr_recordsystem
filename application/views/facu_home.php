<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Records Management System</title>
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

<div id="container">
    <h1>Welcome to Records Management System!</h1>

    <div id="body">
    <div id="menu">
      <?php echo '<a href="'.base_url().'index.php/view_faculty/view/'.$this->session->userdata('emp_id').'">'; ?>
        <input name="View" type="button" value="View Profile">
      </a> <br/>
      <a href="http://localhost/hr_recordsystem/index.php/upload">
        <input name="View" type="button" value="Upload">
      </a> <br/>
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
          <h2>
            <?php echo $this->session->userdata('firstname');?> <?php echo $this->session->userdata('lastname'); ?>
          </h2>
          <?php echo $this->session->userdata('emp_id')?>
        </center>
    <?php
      }
      else if ($this->session->userdata('level') == "2")
      {
    ?>
        <center> <br/>
        <h2>
          <?php echo $this->session->userdata('firstname');?> <?php echo $this->session->userdata('lastname'); ?>
        </h2>
        <a href="http://localhost/hr_recordsystem/index.php/display_faculty">
          <input name="View" type="button" value="View Faculty">
        </a>  
        </center>
    <?php
      }
      if($this->session->userdata('level') == "3")
      {
    ?>
        <center>
        <a href="http://localhost/hr_recordsystem/index.php/home">RANKING COMMITTE</a>
        <h2> <?php echo $this->session->userdata('firstname');?> <?php echo $this->session->userdata('lastname'); ?></h2>
        </center>
    <?php
      }
    ?>
    </div>
    </center>

    </div>
    
    <p class="footer"> Human Resource Office, University of the Immaculate Conception, Davao City, Philippines</p>
</div>

</body>
</html>