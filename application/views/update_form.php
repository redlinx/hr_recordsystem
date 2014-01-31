<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Update Profile</title>
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
            <?php
                foreach($page_content as $page)
                {
                    if ($page['prog_name'] == $page_view_content['prog_name'])
                    {
                        $current_program = $page['prog_id'];
                    }
                    $page_array[$page['prog_id']] = $page['prog_name'];
                }

                echo "<table>";
                    echo form_open('update_faculty/update_record');
                        echo "<tr><td>Last Name</td><td>".form_input('lastname', $page_view_content['lastname'])."</td></tr>";
                        echo "<tr><td>First Name</td><td>".form_input('firstname', $page_view_content['firstname'])."</td></tr>";
                        echo "<tr><td>Middle Name</td><td>".form_input('middlename', $page_view_content['middlename'])."</td></tr>";
                        echo "<tr><td>Birthday</td><td>".form_input('bday', $page_view_content['bday'])."</td></tr>";
                        echo "<tr><td>Gender</td><td>".form_input('gender', $page_view_content['gender'])."</td></tr>";
                        echo "<tr><td>Civil Status</td><td>".form_input('civil_status', $page_view_content['civil_status'])."</td></tr>";
                        echo "<tr><td>Cell #</td><td>".form_input('cell_no', $page_view_content['cell_no'])."</td></tr>";
                        echo "<tr><td>Tell #</td><td>".form_input('tell_no', $page_view_content['tell_no'])."</td></tr>";
                        echo "<tr><td>Email </td><td>".form_input('email', $page_view_content['email'])."</td></tr>";
                        /*echo "<tr><td>Program</td><td>".form_dropdown('program', $page_array, $current_program)."</td></tr>";*/
                        echo "<tr><td colspan=2>".form_submit('mysubmit', 'Update')."</td></tr>";   
                    echo form_close();
                echo "</table>";
            ?>
        </div>
        
        <p class="footer"> Human Resource Office, University of the Immaculate Conception, Davao City, Philippines</p>
    </div>
</body>
</html>