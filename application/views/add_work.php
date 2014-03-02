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
        } ?>
    <table class="table table-striped">
    <?php
                echo form_open('add/work');
                    echo "<tr><td>Company</td><td>".form_input('company')."</td></tr>";
                    echo "<tr><td>Address</td><td>".form_input('address')."</td></tr>";
                    echo "<tr><td>Position</td><td>".form_input('position')."</td></tr>";
                    echo "<tr><td>Date Started</td><td>".form_dropdown('month',$months)."".form_dropdown('day',$days)."".form_dropdown('year',$year)."</td></tr>";
                    echo "<tr><td>Date Ended</td><td>".form_dropdown('month',$months)."".form_dropdown('day',$days)."".form_dropdown('year',$year)."</td></tr>";
                    echo "<tr><td colspan=2>".form_submit('mysubmit', 'Add')."</td></tr>";   
                echo form_close();
            echo "</table>";
        ?>
</div>