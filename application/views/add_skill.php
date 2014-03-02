<div id="body">
      
    <table class="table table-striped">
    <?php
                echo form_open('add/skill');
                    echo "<tr><td>Skill</td><td>".form_input('skill_name')."</td></tr>";
                    echo "<tr><td colspan=2>".form_submit('mysubmit', 'Add')."</td></tr>";   
                echo form_close();
            echo "</table>";
        ?>
</div>