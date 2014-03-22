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
        <?php        echo form_open('add/children');
                    echo "<tr><td>Name</td><td>".form_input('name')."</td></tr>";
                    echo "<tr><td>Birthday</td><td>".form_dropdown('month',$months)."".form_dropdown('day',$days)."".form_dropdown('year',$year)."</td></tr>";
                    ?>
                    <tr><td colspan=2><button type="mysubmit" class="btn btn-primary">Add</button></td></tr>
        <?php        echo form_close();
            echo "</table>";
        ?>
</div>