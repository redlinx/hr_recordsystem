<div id="body">
    <?php
    $gender = array(
                    'Male' => 'Male',
                    'Female' => 'Female');
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
    for($x=0;$x<count($page_content);$x++)
    {
        $program_option[$page_content[$x]['prog_id']] = $page_content[$x]['prog_name'];
    }
    for($x=0;$x<count($page_view_content);$x++)
    {
        $level_option[$page_view_content[$x]['level_id']] = $page_view_content[$x]['level_name'];
    } ?>
    <table class="table table-striped">
    <?php
            $this->load->helper('form');
            echo form_open('register_faculty/add_new_record');
                echo "<tr><td>Last Name</td><td>".form_input('lastname')."</td></tr>";
                echo "<tr><td>First Name</td><td>".form_input('firstname')."</td></tr>";
                echo "<tr><td>Middle Name</td><td>".form_input('middlename')."</td></tr>";;
                echo "<tr><td>Birthday</td><td>".form_dropdown('month',$months)."".form_dropdown('day',$days)."".form_dropdown('year',$year)."</td></tr>";
                // echo "<tr><td>Gender</td><td>".form_input('gender')."</td></tr>";
                echo "<tr><td>Gender</td><td>".form_dropdown('gender', $gender)."</td></tr>";
                echo "<tr><td>Civil Status</td><td>".form_input('civStat')."</td></tr>";
                echo "<tr><td>Cell No.</td><td>".form_input('cellNo')."</td></tr>";
                echo "<tr><td>Tell No.</td><td>".form_input('tellNo')."</td></tr>";
                echo "<tr><td>Email Name</td><td>".form_input('email')."</td></tr>";
                echo "<tr><td>Username</td><td>".form_input('username')."</td></tr>";
                echo "<tr><td>Password</td><td>".form_password('password')."</td></tr>";
                //echo "<tr><td>Level</td><td>".form_dropdown('level',$level_option)."</td></tr>";
                echo "<tr><td>Program</td><td>".form_dropdown('program',$program_option)."</td></tr>";
                echo "<tr><td colspan=2>".form_submit('mysubmit', 'Register')."</td></tr>";
            echo form_close();
        echo "</table>";
    ?>
</div>