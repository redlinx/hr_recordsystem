<div class="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><br/><h4>Children</h4><br/>
    <table width="500" align="left" class="table table-striped">
        <tr align="left">
            <th>Name</th>
            <th>Birthday</th>
        </tr>
    <?php
        if($faculty_spouse != NULL)
        {
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo '<tr>';
                echo '<td>'.$page_view_content[$x]['name'].'</td>';
                echo '<td>'.$page_view_content[$x]['MonthName'].' '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year'].'</td>';
                echo '</tr>';
            }
        }
        else
        {
            echo "<script> alert('No Data Found'); </script>";
        }
    ?>
    </table>
    <br/>
</div>