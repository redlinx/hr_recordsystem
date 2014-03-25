<div id="body">
    <script>
        function goBack()
        {
            window.history.go(-1)
        }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button><br/><br/>
    <?php
    foreach($page_content2 as $page)
    {
        if ($page['rank_desc'] == $page_view_content['rank_desc'])
        {
                $current_rank = $page['rank_id'];
        }
            $page_array2[$page['rank_id']] = $page['rank_desc'];
    }
    $x = $total_points['TotalPoints'];
    if($x >= 4.0 && $x <= 8.99)
    {
        $new_rank = 3;
    }
    else if($x >= 9.0 && $x <= 13.99)
    {
        $new_rank = 4;
    }
    else if($x >= 14.0 && $x <= 18.99)
    {
        $new_rank = 5;
    }
    else if($x >= 19.0 && $x <= 28.99)
    {
        $new_rank = 6;
    }
    else if($x >= 29.0 && $x <= 38.99)
    {
        $new_rank = 7;
    }
    else if($x >= 39.0 && $x <= 48.99)
    {
        $new_rank = 8;
    }
    else if($x >= 49.0 && $x <= 58.99)
    {
        $new_rank = 9;
    }
    else if($x >= 59.0 && $x <= 68.99)
    {
        $new_rank = 10;
    }
    else if($x >= 69.0 && $x <= 78.99)
    {
        $new_rank = 11;
    }
    else if($x >= 79.0 && $x <= 93.99)
    {
        $new_rank = 12;
    }
    else if($x >= 94.0 && $x <= 108.99)
    {
        $new_rank = 13;
    }
    else if($x >= 109.0 && $x <= 123.99)
    {
        $new_rank = 14;
    }
    else if($x >= 124.0 && $x <= 138.99)
    {
        $new_rank = 15;
    }
    else if($x >= 139.0 && $x <= 153.99)
    {
        $new_rank = 16;
    }
    else if($x >= 154.0 && $x <= 168.99)
    {
        $new_rank = 17;
    }
    else if($x >= 169.0 && $x <= 208.99)
    {
        $new_rank = 18;
    }
    else if($x >= 209.0 && $x <= 228.99)
    {
        $new_rank = 19;
    }
    else if($x >= 229.0 && $x <= 248.99)
    {
        $new_rank = 20;
    }
    else if($x >= 249.0 && $x <= 268.99)
    {
        $new_rank = 21;
    }
    else if($x >= 269.0 && $x <= 288.99)
    {
        $new_rank = 22;
    }
    else if($x >= 289.0 && $x <= 308.99)
    {
        $new_rank = 23;
    }
    else if($x >= 309.0 && $x <= 328.99)
    {
        $new_rank = 24;
    }
    else if($x >= 329.0 && $x <= 348.99)
    {
        $new_rank = 25;
    }
        echo "<table class='table table-striped'>";
            echo form_open('display_notification/promote_faculty');
                echo form_hidden('emp_id', $page_view_content['emp_id']);
                echo form_hidden('TotalPoints', $total_points['TotalPoints']);
                echo form_hidden('rank', $new_rank);
                echo "<tr><td>Total Points</td><td>:</td><td>".$total_points['TotalPoints']."</td></tr>";
                echo "<tr><td>Rank</td><td>:</td><td class='form-group'>
                        <fieldset disabled>"
                            .form_dropdown('rank', $page_array2, $new_rank, 'id="disabledSelect" class="form-control"').
                        "</fieldset></td></tr>";
                echo "<tr><td align=right colspan=3>".form_submit('mysubmit', 'Promote', 'class="btn btn-primary"')."</td></tr>";   
            echo form_close();
        echo "</table>";
    ?>
</div>