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
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
        <?php
            if($page_view_content != NULL)
            {
                echo form_open();
                    echo "<tr><td>Company</td><td>:  ".$page_view_content['training_title']."</td></tr>";
                    echo "<tr><td>Venue</td><td>:  ".$page_view_content['venue']."</td></tr>";
                    echo "<tr><td>Date</td><td>:  ".$page_view_content['MonthName'].' '.$page_view_content['Day'].', '.$page_view_content['Year']."</td></tr>";
                    echo "<tr><td>Organizer</td><td>:  ".$page_view_content['organizer']."</td></tr>";
                    echo "<tr><td>Role</td><td>:  ".$page_view_content['role']."</td></tr>";
                    echo "<tr><td>Type</td><td>:  ".$page_view_content['type_desc']."</td></tr>";
        
                echo form_close();
            }
            else
            {
                echo "<script> alert('No Data Found'); </script>";
            }
        ?>
    </table>
</div>