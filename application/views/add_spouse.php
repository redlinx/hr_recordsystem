<div id="body">
    <?php
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
        echo "<table>";
            $this->load->helper('form');
            echo form_open('add/spouse');
                echo "<tr><td>Last Name</td><td>".form_input('lastname')."</td></tr>";
                echo "<tr><td>First Name</td><td>".form_input('firstname')."</td></tr>";
                echo "<tr><td>Middle Name</td><td>".form_input('middlename')."</td></tr>";
                //echo "<tr><td>Birthday</td><td>".form_input('bday')."</td></tr>";
                echo "<tr><td>Birthday</td><td>".form_dropdown('month',$months)."".form_dropdown('day',$days)."".form_dropdown('year',$year)."</td></tr>";
                echo "<tr><td>Birth Place</td><td>".form_input('birth_place')."</td></tr>";
                echo "<tr><td>Spouse Col</td><td>".form_input('spousecol')."</td></tr>";
                echo "<tr><td>Contact No.</td><td>".form_input('contact')."</td></tr>";
                echo "<tr><td>Highest Educ. Attain.</td><td>".form_input('educ_attain')."</td></tr>";
                echo "<tr><td>Occupation</td><td>".form_input('occupation')."</td></tr>";
                echo "<tr><td>Employer</td><td>".form_input('employer')."</td></tr>";
                echo "<tr><td>Address</td><td>".form_input('address')."</td></tr>";
                echo "<tr><td>SSS</td><td>".form_input('SSS')."</td></tr>";
                echo "<tr><td>Pag-Ibig</td><td>".form_input('pag_ibig')."</td></tr>";
                echo "<tr><td>PhilHealth</td><td>".form_input('philhealth')."</td></tr>";
                echo "<tr><td>TIN</td><td>".form_input('TIN')."</td></tr>";
                echo "<tr><td colspan=2>".form_submit('mysubmit', 'Add')."</td></tr>";
            echo form_close();
        echo "</table>";
    ?>
</div>