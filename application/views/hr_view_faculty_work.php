<div class="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><h2>Work Experience</h2><br/>
    <table width="500" align="left" class="table table-striped">
        <tr align="left">
            <th>Company</th>
            <th>Address</th>
            <th>Position</th>
            <th>Work Started</th>
            <th>Work Ended</th>
            <th>No. 0f Years</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo '<tr>';
                echo '<td>'.$page_view_content[$x]['company'].'</td>';
                echo '<td>'.$page_view_content[$x]['address'].'</td>';
                echo '<td>'.$page_view_content[$x]['position'].'</td>';
                echo '<td>'.$page_view_content[$x]['StartMonthName'].' '.$page_view_content[$x]['StartDay'].', '.$page_view_content[$x]['StartYear'].'</td>';
                echo '<td>'.$page_view_content[$x]['EndMonthName'].' '.$page_view_content[$x]['EndDay'].', '.$page_view_content[$x]['EndYear'].'</td>';
                echo '<td>'.$page_view_content[$x]['YearsOfService'].'</td>';
                echo '</tr>';
            }
        ?>
    </table>
</div>