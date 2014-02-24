<div id="body">
        <?php
            echo "<table>";
                echo form_open('update/skill');
                	echo form_hidden('skillID', $page_view_content['skill_id']);
                    echo "<tr><td>Skill</td><td>".form_input('skill_name', $page_view_content['skill_name'])."</td></tr>";
                    echo "<tr><td colspan=2>".form_submit('mysubmit', 'Update')."</td></tr>";   
                echo form_close();
            echo "</table>";
        ?>
</div>