<div class="body">
    <br/>
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
            }
            echo "<table>";
                echo form_open('update/eligibility');
                    echo form_hidden('eligibilityID', $page_view_content['eligibility_id']);
                    echo "<tr><td>Exam Name</td><td>".form_input('examName', $page_view_content['exam_name'], 'class="form-control input-sm"')."</td></tr>";
                    echo "<tr><td>Exam Date</td><td>".form_dropdown('month',$months, $page_view_content['Month'])."".form_dropdown('day',$days, $page_view_content['Day'])."".form_dropdown('year',$year, $page_view_content['Year'])."</td></tr>";
                    echo "<tr><td>Exam Place</td><td>".form_input('examPlace', $page_view_content['exam_place'], 'class="form-control input-sm"')."</td></tr>";
                    echo "<tr><td>Rating</td><td>".form_input('rating', $page_view_content['rating'], 'class="form-control input-sm"')."</td></tr>";
                    echo "<tr><td colspan=2>".form_submit('mysubmit', 'Update', 'class="btn btn-primary"')."</td></tr>";   
                echo form_close();
            echo "</table>";
        ?>
        <br/>
</div>