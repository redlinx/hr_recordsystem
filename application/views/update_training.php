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
<<<<<<< HEAD
            } ?>
    <table class="table table-striped">
    <?php
=======
<<<<<<< HEAD
            } ?>
    <table class="table table-striped">
    <?php
=======
<<<<<<< HEAD
            } ?>
    <table class="table table-striped">
    <?php
=======
<<<<<<< HEAD
            } ?>
    <table class="table table-striped">
    <?php
=======
<<<<<<< HEAD
            } ?>
    <table class="table table-striped">
    <?php
=======
            }
            echo "<table>";
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
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