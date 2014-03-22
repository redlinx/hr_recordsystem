<div id="body">
        <?php
        for ($x=date('o'); $x>=1940; $x--)
        {
            $year[$x] = $x;
        }
            for($x=0;$x<count($page_content);$x++)
            {
                $type_option[$page_content[$x]['type_id']] = $page_content[$x]['type_desc'];
            } ?>
            <table class="table table-striped">
            <?php
                    echo form_open('add/education');
                        echo "<tr><td>School Name</td><td>".form_input('school_name')."</td></tr>";
                        echo "<tr><td>Address</td><td>".form_input('address')."</td></tr>";
                        echo "<tr><td>Year</td><td>".form_dropdown('year',$year)."</td></tr>";
                        echo "<tr><td>Type</td><td>".form_dropdown('type',$type_option)."</td></tr>";
                        echo "<tr><td>Degree</td><td>".form_input('degree')."</td></tr>";
                        ?>
                        <tr><td colspan=2><button type="mysubmit" class="btn btn-primary">Add</button></td></tr>
            <?php        echo form_close();
                echo "</table>";
        ?>
</div>