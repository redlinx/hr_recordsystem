<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Records Management System</title>

    <style type="text/css">

    ::selection{ background-color: #E13300; color: white; }
    ::moz-selection{ background-color: #E13300; color: white; }
    ::webkit-selection{ background-color: #E13300; color: white; }

    body {
        background-color: #fff;
        margin: auto;
        margin-top: 50px;
        width: 60%;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }

   h1 {
        color: #444;
        background-color: transparent;
        border-bottom: 1px solid #D0D0D0;
        font-size: 19px;
        font-weight: normal;
        margin: 0 0 14px 0;
        padding: 14px 15px 10px 15px;
    }

    #body{
       margin: 0 15px 0 15px;
    }

    p.footer{
        text-align: right;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 10% 0 0 0;
    }
    
    #container{
        margin: 10px;
        border: 1px solid #D0D0D0;
        border-top-style: solid;
        border-top-width: 5px;
        border-top-color: MediumBlue;
        -webkit-box-shadow: 0 0 8px #D0D0D0;
    }
    form
    {
        text-align: left;
        
    }
    </style>
</head>
<body>

<div id="container">
    <h1>Welcome to Records Management System!</h1>

    <div id="body">
        <form name="list" method="post">
        <input type="hidden" name="rid" />
        <input type="hidden" name="command" />
        <table width="600" align="center">
            <tr>
                <th>ID No</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Program</th>
            </tr>
            <?php
                foreach ($users as $user)
                {
                    $user_id = $user['emp_id'];
            ?>
                <tr>


                    <td><?php echo $user['emp_id'] ?></td>
                    <td><?php echo $user['lname'] ?></td>
                    <td><?php echo $user['fname'] ?></td>
                    <td><?php echo $user['program'] ?></td> 
                </tr>
            <?php
                }
            ?>
        </table>
    </form>
    </div>

    <p class="footer"> Human Resource Office, University of the Immaculate Conception, Davao City, Philippines</p>
</div>

</body>
</html>