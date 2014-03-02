<div id="body">
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
        for ($x=date('o'); $x>=1940; $x--)
        {
            $year[$x] = $x;
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
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
                echo form_open('add/children');
                    echo "<tr><td>Name</td><td>".form_input('name')."</td></tr>";
                    echo "<tr><td>Birthday</td><td>".form_dropdown('month',$months)."".form_dropdown('day',$days)."".form_dropdown('year',$year)."</td></tr>";
                    echo "<tr><td colspan=2>".form_submit('mysubmit', 'Add')."</td></tr>";   
                echo form_close();
            echo "</table>";
        ?>
</div>