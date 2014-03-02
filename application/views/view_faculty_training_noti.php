<div id="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()"> Back </button>
    <table class="table table-striped" align="center">
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