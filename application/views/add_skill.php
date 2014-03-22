<div id="body">
            <table class="table table-striped">
            <?php
                echo form_open('add/skill');
                    echo "<tr><td>Skill</td><td>".form_input('skill_name')."</td></tr>"; ?>
                    <tr><td colspan=2><button type="mysubmit" class="btn btn-primary">Add</button></td></tr>   
                <?php
                echo form_close();
            echo "</table>";
        ?>
</div>