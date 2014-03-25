<div id="body">
    <?php
    $gender = array(
                    'Male' => 'Male',
                    'Female' => 'Female');
    $civilStatus = array(
                    'Single'                         => 'Single',
                    'Married'                        => 'Married',
                    'Head of the Family'             => 'Head of the Family',
                    'Legally Separated'              => 'Legally Separated',
                    'Working Spouse'                 => 'Working Spouse',
                    'Non-Working Spouse'             => 'Non-Working Spouse',
                    'Entitled Exemption Units'       => 'Entitled Exemption Units',
                    'Not Entitled to Exemption Unit' => 'Not Entitled to Exemption Unit');
    $months = array(    
                    '1'  => 'Jan',
                    '2'  => 'Feb',
                    '3'  => 'Mar',
                    '4'  => 'Apr',
                    '5'  => 'May',
                    '6'  => 'Jun',
                    '7'  => 'Jul',
                    '8'  => 'Aug',
                    '9'  => 'Sep',
                    '10' => 'Oct',
                    '11' => 'Nov',
                    '12' => 'Dec',
                    );
    for ($x=1; $x<=31; $x++)
    {
        $days[$x] = $x;
    }
    for ($x=date('o'); $x>=1940; $x--)
    {
        $year[$x] = $x;
    }
    for($x=0;$x<count($page_content)-1;$x++)
    {
        $program_option[$page_content[$x]['prog_id']] = $page_content[$x]['prog_name'];
    }
    for($x=0;$x<count($page_view_content);$x++)
    {
        $level_option[$page_view_content[$x]['level_id']] = $page_view_content[$x]['level_name'];
    }
        echo "<table class='table table-striped'>";
            $this->load->helper('form');
            echo form_open('register_faculty/add_new_record');
                echo "<tr><td>Last Name</td><td>".form_input('lastname', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>First Name</td><td>".form_input('firstname', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Middle Name</td><td>".form_input('middlename', NULL, 'class="form-control input-sm"')."</td></tr>";;
                echo "<tr><td>Birthday</td><td>".form_dropdown('month',$months, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('day',$days, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('year',$year, NULL, 'class="span1" class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Gender</td><td>".form_dropdown('gender', $gender, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Civil Status</td><td>".form_dropdown('civStat', $civilStatus, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Cell No.</td><td>".form_input('cellNo', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Tell No.</td><td>".form_input('tellNo', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Email Name</td><td>".form_input('email', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Username</td><td>".form_input('username', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Password</td><td>".form_password('password', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Level</td><td>".form_dropdown('level',$level_option, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Program</td><td>".form_dropdown('program',$program_option, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td colspan=2>".form_submit('mysubmit', 'Register', 'class="btn btn-primary"')."</td></tr>";
            echo form_close();
        echo "</table>";
    ?>
    <br/>
</div>