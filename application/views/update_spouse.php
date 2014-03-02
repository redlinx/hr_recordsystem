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
<<<<<<< HEAD
    }?>
    <table class="table table-striped">
    <?php
=======
    }
        echo "<table>";
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
            $this->load->helper('form');
            echo form_open('update/spouse');
                echo form_hidden('spouse_id', $page_view_content['spouse_id']);
                echo "<tr><td>Last Name</td><td>".form_input('lastname', $page_view_content['lastname'])."</td></tr>";
                echo "<tr><td>First Name</td><td>".form_input('firstname', $page_view_content['firstname'])."</td></tr>";
                echo "<tr><td>Middle Name</td><td>".form_input('middlename', $page_view_content['middlename'])."</td></tr>";
                //echo "<tr><td>Birthday</td><td>".form_input('bday', $page_view_content['bday'])."</td></tr>";
                echo "<tr><td>Birthday</td><td>".form_dropdown('month',$months, $page_view_content['Month'])."".form_dropdown('day',$days, $page_view_content['Day'])."".form_dropdown('year',$year, $page_view_content['Year'])."</td></tr>";
                echo "<tr><td>Birth Place</td><td>".form_input('birth_place', $page_view_content['birth_place'])."</td></tr>";
                echo "<tr><td>Spouse Col</td><td>".form_input('spousecol', $page_view_content['faculty_spousecol'])."</td></tr>";
                echo "<tr><td>Contact No.</td><td>".form_input('contact', $page_view_content['contact_no'])."</td></tr>";
                echo "<tr><td>Highest Educ. Attain.</td><td>".form_input('educ_attain', $page_view_content['educational_attainment'])."</td></tr>";
                echo "<tr><td>Occupation</td><td>".form_input('occupation', $page_view_content['occupation'])."</td></tr>";
                echo "<tr><td>Employer</td><td>".form_input('employer', $page_view_content['employer'])."</td></tr>";
                echo "<tr><td>Address</td><td>".form_input('address', $page_view_content['address'])."</td></tr>";
                echo "<tr><td>SSS</td><td>".form_input('SSS', $page_view_content['SSS'])."</td></tr>";
                echo "<tr><td>Pag-Ibig</td><td>".form_input('pag_ibig', $page_view_content['pag_ibig'])."</td></tr>";
                echo "<tr><td>PhilHealth</td><td>".form_input('philhealth', $page_view_content['philhealth'])."</td></tr>";
                echo "<tr><td>TIN</td><td>".form_input('TIN', $page_view_content['TIN'])."</td></tr>";
                echo "<tr><td colspan=2>".form_submit('mysubmit', 'Update')."</td></tr>";  
            echo form_close();
        echo "</table>";
    ?>
</div>