<div id="body">
    <br/>
    <?php
        for ($x=date('o'); $x>=1940; $x--)
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
        echo "<table class='table table-striped'>";
            echo form_open('update/education');
                echo form_hidden('educID', $page_view_content['educ_id']);
                echo "<tr><td>School Name</td><td>".form_input('school_name', $page_view_content['school_name'], 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Address</td><td>".form_input('address', $page_view_content['address'], 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Year</td><td>".form_dropdown('year',$year, $page_view_content['year'], 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Level</td><td>".form_dropdown('type',$page_array, $current_type, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Degree</td><td>".form_input('degree', $page_view_content['degree'], 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td colspan=2>".form_submit('mysubmit', 'Update', 'class="btn btn-primary"')."</td></tr>";
            echo form_close();
        echo "</table>";
    ?>
    <br/>
</div>