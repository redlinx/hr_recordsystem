<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Welcome to Records Management System</title>
     <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url().'assets/css/bootstrap-theme.css'?>" rel="stylesheet" type="text/css">
    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/signin.css'); ?>" rel="stylesheet">
   
 
  </head>

  <body>

   <div class="container"> 
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Human Resource Records Management</div>
                       
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                       
                    <?php  echo validation_errors(); ?>
  
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="password"> 
                                <?php echo form_error('username');?>   
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="passconf" type="password" class="form-control" name="passconf"  placeholder="Password Confirmation">
                                <?php echo form_error('password');?>
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <div class="col-sm-12 controls">
                                <input id="btn-login" type="submit" name="submit" value="submit" class="btn btn-primary"></a>
                                </div>
                            </div>
                            <div class="form-group">
                            <hr>
                            <div class="col-md-12 control">
                                <div style="float: right; font-size:11px" >
                                    © Human Resource Office, University of the Immaculate Conception
                                </div>
                            </div>
                        </div>
                       </form>
                        </div>                     
                    </div>  
        </div>
         </div> 
    </div>

  </body>
</html>
