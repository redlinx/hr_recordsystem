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
        <div id="header">
            <div id="banner">
                <div id="title">
                    HUMAN RESOURCE RECORDS MANAGEMENT SYSTEM
                </div>
                <div id="subtitle">
                    Human Resource Office, University of the Immaculty Conception
                </div>
            </div>
            <div id="form_login">
                <?php echo $this->session->userdata('firstname'); ?> <?php echo $this->session->userdata('lastname'); ?>
                <a href="http://localhost/hr_recordsystem/index.php/login/logout">
                  [Logout]
                </a>
            </div>
        </div>
        <div id="nav">
            <ul>
            <li>
                <a href="http://localhost/hr_recordsystem/index.php/register_faculty">Add Faculty</a>
            </li>
            <li>
                <a href="http://localhost/hr_recordsystem/index.php/display_faculty">View Faculty</a>
            </li>
            </ul>
        </div>
        <div id="body">
            <h3>
                Welcome  <?php echo $this->session->userdata('firstname'); ?> <?php echo $this->session->userdata('lastname'); ?>!
            </h3>
            <img src = "<?php echo base_url('assets/images/pic.jpg') ?>" width="200" height="150"></img>
        </div>
        
        <p class="footer"> Human Resource Office, University of the Immaculate Conception, Davao City, Philippines</p>
    </div>
</body>
</html>