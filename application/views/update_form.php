<div id="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()"> Back </button>
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
    foreach($page_content as $page)
    {
        if ($page['prog_name'] == $page_view_content['prog_name'])
        {
            $current_program = $page['prog_id'];
        }
            $page_array[$page['prog_id']] = $page['prog_name'];
    }
        echo "<table>";
            echo form_open('update/profile');
                echo "<tr><td>Last Name</td><td>".form_input('lastname', $page_view_content['lastname'])."</td></tr>";
                echo "<tr><td>First Name</td><td>".form_input('firstname', $page_view_content['firstname'])."</td></tr>";
                echo "<tr><td>Middle Name</td><td>".form_input('middlename', $page_view_content['middlename'])."</td></tr>";
                echo "<tr><td>Birthday</td><td>".form_dropdown('month', $months, $page_view_content['Month'])."".form_dropdown('day',$days, $page_view_content['Day'])."".form_dropdown('year',$year, $page_view_content['Year'])."</td></tr>";
                echo "<tr><td>Birth Place </td><td>".form_input('birthplace', $page_view_content['birthplace'])."</td></tr>";
                echo "<tr><td>Gender</td><td>".form_dropdown('gender', $gender, $page_view_content['gender'])."</td></tr>";
                echo "<tr><td>Civil Status</td><td>".form_dropdown('civil_status', $civilStatus, $page_view_content['civil_status'])."</td></tr>";
                echo "<tr><td>Cell #</td><td>".form_input('cell_no', $page_view_content['cell_no'])."</td></tr>";
                echo "<tr><td>Tell #</td><td>".form_input('tell_no', $page_view_content['tell_no'])."</td></tr>";
                echo "<tr><td>Email </td><td>".form_input('email', $page_view_content['email'])."</td></tr>";
                echo "<tr><td>City Address </td><td>".form_input('city_add', $page_view_content['city_add'])."</td></tr>";
                echo "<tr><td>Provincial Address </td><td>".form_input('prov_add', $page_view_content['prov_add'])."</td></tr>";
                echo "<tr><td>PhilHealth # </td><td>".form_input('philhealth', $page_view_content['philhealth'])."</td></tr>";
                echo "<tr><td>Pag-Ibig # </td><td>".form_input('pag_ibig', $page_view_content['pag_ibig'])."</td></tr>";
                echo "<tr><td>SSS # </td><td>".form_input('sss', $page_view_content['sss'])."</td></tr>";
                echo "<tr><td>TIN # </td><td>".form_input('tin', $page_view_content['tin'])."</td></tr>";
                /*echo "<tr><td>Program</td><td>".form_dropdown('program', $page_array, $current_program)."</td></tr>";*/
                echo "<tr><td colspan=2>".form_submit('mysubmit', 'Update')."</td></tr>";   
            echo form_close();
        echo "</table>";
    ?>
</div>