<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home</title>
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
            <form>
				  <fieldset style="width: 500px;">
				    <legend>
				      <b>
				        Uploading Faculty Credentials:
				      </b>
				    </legend>
				  <?php echo form_open_multipart('upload/do_upload');?>
				  1.<input type="file" name="userfile" size="20" /> <br/>
				  2.  <?php
				      $category = array(
				                ''    => 'Choose Options:',
				                'EQ'  => 'Educational Qualification',
				                'CES'   => 'Community Extension Services (within or outside UIC',
				                'TPS' => 'Training Programs, Seminars, ETC.',
				                'IPO' => 'Involvement in Professional Organizations'
				                //'value' => $this->form_validation->set_value('program'),
				              );
				      ?>
				  <tr>
				    <td align="left" bgcolor="#FFFFFF"> Categories: </td>
				    <td> <?php echo form_dropdown('category', $category); ?> </td>
				  </tr>
				  <br />
				  3. <?php
				      $choose = array(
				              ''    => 'Choose Options:',
				              'EQ'  => 'Educational Qualification',
				              'CES'   => 'Community Extension Services (within or outside UIC',
				              'TPS' => 'Training Programs, Seminars, ETC.',
				              'IPO' => 'Involvement in Professional Organizations'
				              //'value' => $this->form_validation->set_value('program'),
				              );
				    ?>
				      <tr>
				        <td align="left" bgcolor="#FFFFFF"> Set: </td>
				        <td> <?php echo form_dropdown('set', $choose); ?> </td>
				      </tr>
				      <br/>
				  4. Remarks <br/> 
				  <textarea rows="4" cols="50">
				  </textarea> <br/>
				  <input type="submit" value="Upload" />
				</form>
        </div>
        
        <p class="footer"> Human Resource Office, University of the Immaculate Conception, Davao City, Philippines</p>
    </div>
</body>
</html>