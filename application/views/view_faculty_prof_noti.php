<div id="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()"> Back </button>
<<<<<<< HEAD
    <table class="table table-striped" align="center">
=======
<<<<<<< HEAD
    <table class="table table-striped" align="center">
=======
<<<<<<< HEAD
    <table class="table table-striped" align="center">
=======
<<<<<<< HEAD
    <table class="table table-striped" align="center">
=======
<<<<<<< HEAD
    <table class="table table-striped" align="center">
=======
    <table align="center">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
        <?php
            echo form_open();
                echo "<tr><td>Last Name</td><td>:  ".$faculty_profile['lastname']."</td></tr>";
                echo "<tr><td>First Name</td><td>:  ".$faculty_profile['firstname']."</td></tr>";
                echo "<tr><td>Middle Name</td><td>:  ".$faculty_profile['middlename']."</td></tr>";
                echo "<tr><td>Birthday</td><td>:  ".$faculty_profile['MonthName'].' '.$faculty_profile['Day'].', '.$faculty_profile['Year']."</td></tr>";
                echo "<tr><td>Gender</td><td>:  ".$faculty_profile['gender']."</td></tr>";
                echo "<tr><td>Civil Status</td><td>:  ".$faculty_profile['civil_status']."</td></tr>";
                echo "<tr><td>Cell #</td><td>:  ".$faculty_profile['cell_no']."</td></tr>";
                echo "<tr><td>Tell #</td><td>:  ".$faculty_profile['tell_no']."</td></tr>";
                echo "<tr><td>Email </td><td>:  ".$faculty_profile['email']."</td></tr>";
                echo "<tr><td>Program</td><td>:  ".$faculty_profile['prog_name']."</td></tr>";
            echo form_close();
        ?>
    </table>
</div>