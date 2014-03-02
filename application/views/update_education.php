<div id="body">
        <?php
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
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
                echo form_open('update/education');
                    echo form_hidden('educID', $page_view_content['educ_id']);
                    echo "<tr><td>School Name</td><td>".form_input('school_name', $page_view_content['school_name'])."</td></tr>";
                    echo "<tr><td>Address</td><td>".form_input('address', $page_view_content['address'])."</td></tr>";
                    echo "<tr><td>Year</td><td>".form_dropdown('year',$year, $page_view_content['year'])."</td></tr>";
                    echo "<tr><td>Type</td><td>".form_dropdown('type',$page_array, $current_type)."</td></tr>";
                    echo "<tr><td>Degree</td><td>".form_input('degree', $page_view_content['degree'])."</td></tr>";
                    echo "<tr><td colspan=2>".form_submit('mysubmit', 'Update')."</td></tr>";
                echo form_close();
            echo "</table>";
        ?>
</div>