<div id="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()"> Back </button>
    <table align="center">
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