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
            if($page_view_content != NULL)
            {
                echo form_open();
                    echo "<tr><td>Company</td><td>:  ".$page_view_content['company']."</td></tr>";
                    echo "<tr><td>Address</td><td>:  ".$page_view_content['address']."</td></tr>";
                    echo "<tr><td>Position</td><td>:  ".$page_view_content['position']."</td></tr>";
                    echo "<tr><td>Work Started</td><td>:  ".$page_view_content['StartMonthName'].' '.$page_view_content['StartDay'].', '.$page_view_content['StartYear']."</td></tr>";
                    echo "<tr><td>Work Started</td><td>:  ".$page_view_content['EndMonthName'].' '.$page_view_content['EndDay'].', '.$page_view_content['EndYear']."</td></tr>";
                echo form_close();
            }
            else
            {
                echo "<script> alert('No Data Found'); </script>";
            }
        ?>
    </table>
</div>