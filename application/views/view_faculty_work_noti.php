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