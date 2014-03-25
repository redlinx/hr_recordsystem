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
        <link href="<?php echo base_url('assets/css/dashboard.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/layout.css'); ?>" rel="stylesheet">
        <script src="<?php echo base_url('assets/js/metro.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/metro-dropdown.js'); ?>"></script>
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a id="header" class="navbar-brand" href="http://localhost/hr_recordsystem/index.php/verifylogin"><b>Web Based Records Management System</b></a>
        </div>
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" style="float: right">
                <li>
                    <a href="http://localhost/hr_recordsystem/index.php/verifylogin"><span class="glyphicon glyphicon-home"></span></a>
                </li>
                <ul class="nav navbar-nav navbar-right">
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
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar nav-stacked">
                <li>
                    <a href="http://localhost/hr_recordsystem/index.php/upload_profPic">
                        <img id="ProfPic" src = "<?php echo base_url('uploads/'. $this->session->userdata('emp_id') . '_profPic.jpg') ?>"></img>
                    </a>
                </li>
                <h4 class="h4_1">
                    <a href="http://localhost/hr_recordsystem/index.php/verifylogin">
                        <?php echo $this->session->userdata('firstname'); ?> <?php echo $this->session->userdata('lastname'); ?>
                    </a>
                </h4>
                <div id="faculty"> 
                    <h4 style="width=50px; cursor: pointer" class="h4_1">Informations</h4> 
                    <div class="nav nav-pills nav-stacked">
                        <h4><?php echo '<a class="sub_menu" href="'.base_url().'index.php/view_faculty/profile/'.$this->session->userdata('emp_id').'">'; ?>Profile</a></h4>
                        <h4><?php echo '<a class="sub_menu" href="'.base_url().'index.php/view_faculty/education/'.$this->session->userdata('emp_id').'">'; ?>Education</a></h4>
                        <h4><?php echo '<a class="sub_menu" href="'.base_url().'index.php/view_faculty/eligibility/'.$this->session->userdata('emp_id').'">'; ?>Eligibility</a></h4>
                        <h4><?php echo '<a class="sub_menu" href="'.base_url().'index.php/view_faculty/training/'.$this->session->userdata('emp_id').'">'; ?>Training</a></h4>
                        <h4><?php echo '<a class="sub_menu" href="'.base_url().'index.php/view_faculty/work/'.$this->session->userdata('emp_id').'">'; ?>Work</a></h4>
                        <h4><?php echo '<a class="sub_menu" href="'.base_url().'index.php/view_faculty/skill/'.$this->session->userdata('emp_id').'">'; ?>Skills</a></h4>
                        <h4><a class="sub_menu" href="http://localhost/hr_recordsystem/index.php/upload">Upload</a></h4>
                    </div> 
                </div>
                    <?php if($this->session->userdata('rank_level') == 3)
                    { ?>
                            <h4 style="width=50px; cursor: pointer" class="h4_1">
                                <a href="http://localhost/hr_recordsystem/index.php/ranking_committee/view_rankMembers">View Committee</a>
                            </h4>
                            <h4 style="width=50px; cursor: pointer" class="h4_1">
                                <a href="http://localhost/hr_recordsystem/index.php/ranking_committee/chairman_faculty_list">Rank Program</a>
                            </h4>
                    <?php
                    }
                    else if($this->session->userdata('rank_level') == 2)
                    {?>
                            <h4 style="width=50px; cursor: pointer" class="h4_1">
                                <a href="http://localhost/hr_recordsystem/index.php/ranking_committee/member_faculty_list">Rank Program</a>
                            </h4>
                <?php } ?>
            </ul>     
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">