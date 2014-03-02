<div id="body">
<<<<<<< HEAD
     
    <table class="table table-striped">
    <?php
=======
<<<<<<< HEAD
     
    <table class="table table-striped">
    <?php
=======
<<<<<<< HEAD
     
    <table class="table table-striped">
    <?php
=======
        <?php
            echo "<table>";
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
                echo form_open('update/skill');
                	echo form_hidden('skillID', $page_view_content['skill_id']);
                    echo "<tr><td>Skill</td><td>".form_input('skill_name', $page_view_content['skill_name'])."</td></tr>";
                    echo "<tr><td colspan=2>".form_submit('mysubmit', 'Update')."</td></tr>";   
                echo form_close();
            echo "</table>";
        ?>
</div>