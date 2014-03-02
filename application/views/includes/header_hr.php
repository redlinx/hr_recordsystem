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
        <div class="nav">
    
    <nav class="navbar navbar-primary" role="navigation">
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
      <li style="margin-left:140px;">
        <?php echo form_open('search/execute_search'); ?>
        
       
            <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
             <input type="text" name="search" class="form-control" placeholder="Search Faculty">
             <?php echo form_submit('search_submit','Search');?>
            </div>
            <button type="button" class="btn btn-primary btn-mm">
            <span class="glyphicon glyphicon-search"></span>
            </button>
            </form>

        </li>
     </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">

        <li style="margin-left:350px;">
            <a href="http://localhost/hr_recordsystem/index.php/verifylogin"><span class="glyphicon glyphicon-home"></span></a>
        </li>
          <li>
          <?php echo '<a href="'.base_url().'index.php/view_faculty/profile/'.$this->session->userdata('emp_id').'">'; ?>Profile
        </a></li>
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Faculty<b class="caret"></b></a>
    <ul class="dropdown-menu">
       
        <li>
            <a href="http://localhost/hr_recordsystem/index.php/register_faculty">Add Faculty</a>
        </li>
        <li>
            <a href="http://localhost/hr_recordsystem/index.php/display">View Faculty</a>
        </li>
         <li>
            <a href="http://localhost/hr_recordsystem/index.php/display/display_regular_faculty"> Regular Faculty </a>
        </li>
         <li>
            <a href="http://localhost/hr_recordsystem/index.php/display/display_unRegular_faculty"> Unregular Faculty </a>
        </li>
         <li>
            <a href="http://localhost/hr_recordsystem/index.php/regularization_candidate"> Candidate for Regularization </a>
        </li>
    </ul>
    </li>
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ranking Committee <b class="caret"></b></a>
          <ul class="dropdown-menu">
         <li>
        <a href="http://localhost/hr_recordsystem/index.php/ranking_committee/set"> Add Member </a>
         </li>
         <li>
        <a href="http://localhost/hr_recordsystem/index.php/ranking_committee/view_rankMembers"> View Members </a>
         </li>
          </ul>
        </li>
        <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notification <b class="caret"></b></a>
          <ul class="dropdown-menu">
        <li>
            <a href="http://localhost/hr_recordsystem/index.php/display_notification/display_profUpdate"> Profile </a>
        </li>
        <li>
            <a href="http://localhost/hr_recordsystem/index.php/display_notification"> Upload </a>
        </li>
        <li>
            <a href="http://localhost/hr_recordsystem/index.php/display_notification/display_education"> Education </a>
        </li>
        <li>
            <a href="http://localhost/hr_recordsystem/index.php/display_notification/display_trainingNoti"> Training </a>
        </li>
        <li>
            <a href="http://localhost/hr_recordsystem/index.php/display_notification/display_workExp"> Work Experience </a>
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