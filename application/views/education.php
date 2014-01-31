<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Education</title>
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
            <div id="content2">
              <?php
                for($x=0;$x<count($page_content);$x++)
                {
                    $type_option[$page_content[$x]['type_id']] = $page_content[$x]['type_desc'];
                }
                echo "<table>";
                    echo form_open('education/add_educ');
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
            <hr>
            <div id="content2"> 
              <table width="600" align="left">
                  <tr align="left">
                      <th>School</th>
                      <th>Address</th>
                      <th>Year</th>
                      <th>Type</th>
                      <th>Degree</th>
                  </tr>
                  <?php
                      for($x=0;$x<count($page_view_content);$x++)
                      {
                          echo '<tr>';
                          echo '<td>'.$page_view_content[$x]['school_name'].'</td>';
                          echo '<td>'.$page_view_content[$x]['address'].'</td>';
                          echo '<td>'.$page_view_content[$x]['year'].'</td>';
                          echo '<td>'.$page_view_content[$x]['type_desc'].'</td>';
                          echo '<td>'.$page_view_content[$x]['degree'].'</td>';
                          echo '</tr>';
                      }
                  ?>
              </table>
            </div>
        </div>
        
        <p class="footer"> Human Resource Office, University of the Immaculate Conception, Davao City, Philippines</p>
    </div>
</body>
</html>