<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>Home</title>
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url().'assets/css/bootstrap-theme.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/jumbotron.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/layout.css') ?>" rel="stylesheet" type="text/css" />
     <style>
        body
        {
            background-color: #fff;
            margin: auto;
          
            width: 90%;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }
    </style>
</head>

<body>
      <div class="container">
        <div class="row">
            <div class="span12">
                <div class="well">
                    <h2>HUMAN RESOURCE RECORDS MANAGEMENT SYSTEM</h2>
                     <h4>Human Resource Office, University of the Immaculate Conception</h4>
                 </div>
                
            </div>
       
    
    
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>
 <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
 
     </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">
        <li style="margin-left: 150px;"> <a class="navbar-brand" href="http://localhost/hr_recordsystem/index.php/verifylogin">Web Based Records Management System</a>
        </li>    
        <li class="active" style="margin-left:450px;">
            <a href="http://localhost/hr_recordsystem/index.php/verifylogin"><span class="glyphicon glyphicon-home"></span></a>
        </li>
          <li>
            <?php echo '<a href="'.base_url().'index.php/view_faculty/profile/'.$this->session->userdata('emp_id').'">'; ?>Profile</a>
        </li>
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information<b class="caret"></b></a>
    <ul class="dropdown-menu">
       <li>
            <?php echo '<a href="'.base_url().'index.php/view_faculty/education/'.$this->session->userdata('emp_id').'">'; ?>
            Education
            </a>
        </li>
       <li>
            <?php echo '<a href="'.base_url().'index.php/view_faculty/training/'.$this->session->userdata('emp_id').'">'; ?>
            Training
        </a></li>
         <li>
            <?php echo '<a href="'.base_url().'index.php/view_faculty/work/'.$this->session->userdata('emp_id').'">'; ?>
            Work
        </a>
         <li>
            <?php echo '<a href="'.base_url().'index.php/view_faculty/skill/'.$this->session->userdata('emp_id').'">'; ?>
            Skills
        </a>
        </li>
         <li>
            <a href="http://localhost/hr_recordsystem/index.php/upload">Upload</a>
        </li>

      </ul>
      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        
                          <span class="glyphicon glyphicon-cog"></span>
                      
                          <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li>
                        <a href="http://localhost/hr_recordsystem/index.php/change_pass">Change Password</a>
                        </li>
                        <li>
                        <a href="http://localhost/hr_recordsystem/index.php/login/logout">Logout</a>
                        </li>

                        </ul>
        </li>

        
        
      </ul>
      </div>
    </div>
    </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
 <!-- Main jumbotron for a primary marketing message or call to action -->
 
       
     <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>