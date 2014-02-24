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
                echo form_open('update/children');
                	echo form_hidden('childID', $page_view_content['child_id']);
                    echo "<tr><td>Name</td><td>".form_input('name', $page_view_content['name'])."</td></tr>";
                    //echo "<tr><td>Birthday</td><td>".form_input('bday', $page_view_content['child_bday'])."</td></tr>";
                    echo "<tr><td>Birthday</td><td>".form_dropdown('month',$months, $page_view_content['Month'])."".form_dropdown('day',$days, $page_view_content['Day'])."".form_dropdown('year',$year, $page_view_content['Year'])."</td></tr>";
                    echo "<tr><td colspan=2>".form_submit('mysubmit', 'Update')."</td></tr>";   
                echo form_close();
            echo "</table>";
        ?>
</div>	