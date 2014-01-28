<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Records Management System</title>

    <style type="text/css">

    ::selection{ background-color: #E13300; color: white; }
    ::moz-selection{ background-color: #E13300; color: white; }
    ::webkit-selection{ background-color: #E13300; color: white; }

    body
    {
        background-color: #fff;
        margin: auto;
        margin-top: 50px;
        width: 60%;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }
   
   #header
   {
        color: #444;
        background-color: transparent;
        border-bottom: 1px solid #D0D0D0;
        font-size: 17px;
        font-weight: bold;
        margin: 0 0 14px 0;
        padding: 10px 15px 50px 10px;
    }

    #subtitle
    {
        font-size: 12px;
        font-weight: normal;
    }

    #banner
    {
        float: left;
    }

    #form_login
    {
        float: right;
        font-size: 13px;
        text-decoration: none;
        margin-top: 3%;
    }
    
    #forgotPass
    {
        color: Grey;
        font-size: 13px;
        text-decoration: none;
        font-weight: normal;
    }

    #nav
    {
        float: left;
        border: 1px solid #D0D0D0;
        padding: 0px 15px 25px 0px;
    }

    a
    {
        text-decoration: none;
        color: Black ;

    }
    #body
    {
       float: left;
       border: 0px solid #D0D0D0;
       padding: 3px 15px 25px 20px;

    }
    
    p.footer
    {
        text-align: right;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 40% 0 0 0;
    }

    #container
    {
        margin: 10px;
        border: 1px solid #D0D0D0;
        border-top-style: solid;
        border-top-width: 5px;
        border-top-color: MediumBlue;
        -webkit-box-shadow: 0 0 8px #D0D0D0;
    }

    form
    {
      float: right;
    }
    #username, #password
    {
      width: 110px;
      height: 15px;
    }
    #submit
    {
      float: right;
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
                  <a href="http://localhost/hr_recordsystem/index.php/upload">Upload</a>
              </li>
            </ul>
        </div>
        <div id="body">
            <h3>
                Welcome  <?php echo $this->session->userdata('firstname'); ?> !
            </h3>
            <img src = "<?php echo base_url('assets/images/sample.jpg') ?>" width="220" height="200"></img>
        </div>
        
        <p class="footer"> Human Resource Office, University of the Immaculate Conception, Davao City, Philippines</p>
    </div>
</body>
</html>