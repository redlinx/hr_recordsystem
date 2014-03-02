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
<<<<<<< HEAD
    <table class="table table-striped" align="center">
=======
    <table align="center">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
        <?php
            if($page_view_content != NULL)
            {
                echo form_open();
                    echo "<tr><td>School Name</td><td>:  ".$page_view_content['school_name']."</td></tr>";
                    echo "<tr><td>Address</td><td>:  ".$page_view_content['address']."</td></tr>";
                    echo "<tr><td>Year Graduated</td><td>:  ".$page_view_content['year']."</td></tr>";
                    echo "<tr><td>Type</td><td>:  ".$page_view_content['type_desc']."</td></tr>";
                    echo "<tr><td>Degree</td><td>:  ".$page_view_content['degree']."</td></tr>";
                echo form_close();
            }
            else
            {
                echo "<script> alert('No Data Found'); </script>";
            }
        ?>
    </table>
</div>