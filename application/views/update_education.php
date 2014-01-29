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
                      <a href="http://localhost/hr_recordsystem/index.php/update_education/educ_form">Add Education</a>
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
            <?php
                for($x=0;$x<count($type);$x++)
                {
                    $type_option[$type[$x]['type_id']] = $type[$x]['type_desc'];
                }
                echo "<table>";
                    echo form_open('update_education/add_educ');
                        echo "<tr><td>School Name</td><td>".form_input('school_name')."</td></tr>";
                        echo "<tr><td>Address</td><td>".form_input('address')."</td></tr>";
                        echo "<tr><td>Year</td><td>".form_input('year')."</td></tr>";
                        echo "<tr><td>Type</td><td>".form_dropdown('type',$type_option)."</td></tr>";
                        echo "<tr><td>Degree</td><td>".form_input('degree')."</td></tr>";
                        echo "<tr><td colspan=2>".form_submit('mysubmit', 'Add')."</td></tr>";   
                    echo form_close();
                echo "</table>";
            ?>
        </div>
        
        <p class="footer"> Human Resource Office, University of the Immaculate Conception, Davao City, Philippines</p>
    </div>
</body>
</html>