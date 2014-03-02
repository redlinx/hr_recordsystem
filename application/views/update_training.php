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
        for ($x=2014; $x>=1940; $x--)
        {
            $year[$x] = $x;
        }
            foreach($page_content as $page)
            {
                if ($page['type_desc'] == $page_view_content['type_desc'])
                {
                    $current_type = $page['type_id'];
                }
                    $page_array[$page['type_id']] = $page['type_desc'];
            } ?>
    <table class="table table-striped">
    <?php
                echo form_open('update/training');
                    echo form_hidden('trainingID', $page_view_content['training_id']);
                    echo "<tr><td>Training Title</td><td>".form_input('trainingTitle', $page_view_content['training_title'])."</td></tr>";
                    echo "<tr><td>Venue</td><td>".form_input('venue', $page_view_content['venue'])."</td></tr>";
                    //echo "<tr><td>Date</td><td>".form_input('date', $page_view_content['date'])."</td></tr>";
                    echo "<tr><td>Date</td><td>".form_dropdown('month',$months, $page_view_content['MonthName'])."".form_dropdown('day',$days, $page_view_content['Day'])."".form_dropdown('year',$year, $page_view_content['Year'])."</td></tr>";
                    echo "<tr><td>Organizer</td><td>".form_input('organizer', $page_view_content['organizer'])."</td></tr>";
                    echo "<tr><td>Role</td><td>".form_input('role', $page_view_content['role'])."</td></tr>";
                    echo "<tr><td>Type</td><td>".form_dropdown('type',$page_array, $current_type)."</td></tr>";
                    echo "<tr><td colspan=2>".form_submit('mysubmit', 'Update')."</td></tr>";   
                echo form_close();
            echo "</table>";
        ?>
</div>