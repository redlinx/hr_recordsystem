<div id="body">
        <?php
        for ($x=date('o'); $x>=1940; $x--)
        {
            $year[$x] = $x;
        }
            for($x=0;$x<count($page_content);$x++)
            {
                $type_option[$page_content[$x]['type_id']] = $page_content[$x]['type_desc'];
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
                    echo form_open('add/education');
                        echo "<tr><td>School Name</td><td>".form_input('school_name')."</td></tr>";
                        echo "<tr><td>Address</td><td>".form_input('address')."</td></tr>";
                        echo "<tr><td>Year</td><td>".form_dropdown('year',$year)."</td></tr>";
                        echo "<tr><td>Type</td><td>".form_dropdown('type',$type_option)."</td></tr>";
                        echo "<tr><td>Degree</td><td>".form_input('degree')."</td></tr>";
                        echo "<tr><td colspan=2>".form_submit('mysubmit', 'Add')."</td></tr>";
                    echo form_close();
                echo "</table>";
        ?>
</div>