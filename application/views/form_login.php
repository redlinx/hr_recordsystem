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
        padding: 10px 15px 65px 10px;
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
    }
    
    #forgotPass
    {
    	color: Grey;
    	font-size: 13px;
    	text-decoration: none;
        font-weight: normal;
    }

    #body
    {
       margin: 0 15px 0 15px;
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
            <form action="<?php echo base_url();?>index.php/login/form_login" method="post" name="login">
                <table>
                <tr>
                    <td> <input id="username" type="text" size="20" name="username" value="<?php echo set_value('username');?>" placeholder="Username"class="inputan"> <?php echo form_error('username');?> </td>
                    <td> <input id="password" type="password" size="20" name="password" value="<?php echo set_value('password');?>" placeholder="Password" class="inputan"> <?php echo form_error('password');?> </td>
                </tr>
                <tr>
                    <td> <a href="" id="forgotPass">Forgot Password? </a> </td>
                    <td> <input id="submit" type="submit" name="login" value="Login" class="button"> </td>
                </tr>
                </table>
            </form>
        </div>
    </div>
    <div id="body">
    	
    </div>
    <p class="footer">© Human Resource Office, University of the Immaculate Conception, Davao City, Philippines</p>
</div>

</body>
</html>