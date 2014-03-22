<div class="body">
    <br/>
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()"> Back </button>
    <table class="table">
        <?php
            if($page_view_content != NULL)
            {
                echo form_open();
                    echo "<tr><td>Exam Name</td><td>:  ".$page_view_content['exam_name']."</td></tr>";
                    echo "<tr><td>Exam Date</td><td>:  ".$page_view_content['MonthName'].' '.$page_view_content['Day'].', '.$page_view_content['Year']."</td></tr>";
                    echo "<tr><td>Exam Place</td><td>:  ".$page_view_content['exam_place']."</td></tr>";
                    echo "<tr><td>Rating</td><td>:  ".$page_view_content['rating']."</td></tr>";
                echo form_close();
            }
            else
            {
                echo "<script> alert('No Data Found'); </script>";
            }
        ?>
    </table>
    <br/>
</div>