<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Profile</title>
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
                    <a href="http://localhost/hr_recordsystem/index.php/verifylogin">Home</a>
                  </li>
                  <li>
                    <?php echo '<a href="'.base_url().'index.php/view_faculty/view/'.$this->session->userdata('emp_id').'">'; ?>
                    Profile
                    </a>
                  </li>
                  <li>
                    <?php echo '<a href="'.base_url().'index.php/update_faculty/update_form/'.$this->session->userdata('emp_id').'">'; ?>
                    Update
                    </a>
                  </li>
                  <li>
                      <?php echo '<a href="'.base_url().'index.php/education/educ_form/'.$this->session->userdata('emp_id').'">'; ?>
                      Education
                    </a>
                  </li>
                  <li>
                      <a href="http://localhost/hr_recordsystem/index.php/add_training/training_form">Add Training</a>
                  </li>
                  <li>
                      <a href="http://localhost/hr_recordsystem/index.php/upload_facu_cred">Upload</a>
                  </li>
                  <li>
                        <a href="http://localhost/hr_recordsystem/index.php/change_pass">Change Password</a>
                  </li>
            </ul>
        </div>
        <div id="body">
            <table align="center">
                <?php
                    echo form_open();
                        echo "<tr><td>Last Name</td><td>:  ".$faculty_profile['lastname']."</td></tr>";
                        echo "<tr><td>First Name</td><td>:  ".$faculty_profile['firstname']."</td></tr>";
                        echo "<tr><td>Middle Name</td><td>:  ".$faculty_profile['middlename']."</td></tr>";
                        echo "<tr><td>Birthday</td><td>:  ".$faculty_profile['bday']."</td></tr>";
                        echo "<tr><td>Gender</td><td>:  ".$faculty_profile['gender']."</td></tr>";
                        echo "<tr><td>Civil Status</td><td>:  ".$faculty_profile['civil_status']."</td></tr>";
                        echo "<tr><td>Cell #</td><td>:  ".$faculty_profile['cell_no']."</td></tr>";
                        echo "<tr><td>Tell #</td><td>:  ".$faculty_profile['tell_no']."</td></tr>";
                        echo "<tr><td>Email </td><td>:  ".$faculty_profile['email']."</td></tr>";
                        echo "<tr><td>Program</td><td>:  ".$faculty_profile['prog_name']."</td></tr>";
                    echo form_close();
                ?>
            </table>
        </div>
        
        <p class="footer"> Human Resource Office, University of the Immaculate Conception, Davao City, Philippines</p>
    </div>
</body>
</html>