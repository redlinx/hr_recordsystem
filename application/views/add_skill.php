<div id="body">
<<<<<<< HEAD
      
    <table class="table table-striped">
    <?php
=======
        <?php
            echo "<table>";
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
                echo form_open('add/skill');
                    echo "<tr><td>Skill</td><td>".form_input('skill_name')."</td></tr>";
                    echo "<tr><td colspan=2>".form_submit('mysubmit', 'Add')."</td></tr>";   
                echo form_close();
            echo "</table>";
        ?>
</div>