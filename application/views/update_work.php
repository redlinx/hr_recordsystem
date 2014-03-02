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
    } ?>
    <table class="table table-striped">
    <?php
=======
    }
            echo "<table>";
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
                echo form_open('update/work');
                    echo form_hidden('workID', $page_view_content['work_exp_id']);
                    echo "<tr><td>Company</td><td>".form_input('company', $page_view_content['company'])."</td></tr>";
                    echo "<tr><td>Address</td><td>".form_input('address', $page_view_content['address'])."</td></tr>";
                    echo "<tr><td>Position</td><td>".form_input('position', $page_view_content['position'])."</td></tr>";
                    //echo "<tr><td>Date Started</td><td>".form_input('start_date', $page_view_content['start_date'])."</td></tr>";
                    echo "<tr><td>Start Date</td><td>".form_dropdown('smonth',$months, $page_view_content['StartMonth'])."".form_dropdown('sday',$days, $page_view_content['StartDay'])."".form_dropdown('syear',$year, $page_view_content['StartYear'])."</td></tr>";
                    //echo "<tr><td>Date Ended</td><td>".form_input('end_date', $page_view_content['end_date'])."</td></tr>";
                    echo "<tr><td>End Date</td><td>".form_dropdown('emonth',$months, $page_view_content['EndMonth'])."".form_dropdown('eday',$days, $page_view_content['EndDay'])."".form_dropdown('eyear',$year, $page_view_content['EndYear'])."</td></tr>";
                    echo "<tr><td colspan=2>".form_submit('mysubmit', 'Update')."</td></tr>";   
                echo form_close();
            echo "</table>";
        ?>
</div>