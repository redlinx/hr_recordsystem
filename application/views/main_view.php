<!DOCTYPE html>
    
    <html lang ="en">
        <head>
            <meta charset="utf-8">
                <title>
                    LOGIN
                </title>
             <style type="text/css">
                
             </style>
        </head>
    <body>
        <div id="container">
            
            <h1>Login</h1>
            <?php
            echo form_open('main_controller/main_view_validation');
            
            echo validation_errors();
            
            echo "<p>Username: ";
            echo form_input('username');
            echo "</p>";
            
            echo "<p>Password: ";
            echo form_password('password');
            echo "</p>";
            
            echo "<p>";
            echo form_submit('main_view_submit', 'Login');
            echo "</p>";
            
            echo form_close();
            ?>
         </div>
        
    </body>
    </html>