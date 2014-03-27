<div class="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><h3>Rank Points</h3><br/>
    <table width="900" align="left" class="table table-striped">
        <tr align="left">
            <th width="1">Educational Qualification</th>
            <th width="1">Teaching Proficiency</th>
            <th width="1">Research</th>
            <th width="1">Community Services</th>
            <th width="1">Training Programs</th>
            <th width="1">Involvements</th>
            <th width="1">Total Points</th>
            <th width="1">Date</th>
        </tr>   
       
    <?php
        for($x=0;$x<count($page_view_content);$x++)
        {
            echo '<tr>';
            echo '<td>'.$page_view_content[$x]['educational_qualification'].'</td>';
            echo '<td>'.$page_view_content[$x]['teaching_proficiency'].'</td>';
            echo '<td>'.$page_view_content[$x]['research'].'</td>';
            echo '<td>'.$page_view_content[$x]['community_services'].'</td>';
            echo '<td>'.$page_view_content[$x]['training_programs'].'</td>';
            echo '<td>'.$page_view_content[$x]['involvements'].'</td>';
            echo '<td>'.$page_view_content[$x]['total_points'].'</td>';
            echo '<td>'.$page_view_content[$x]['MonthName'].' '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year'].'</td>';
            echo '</tr>';
        }
    ?>
    </table>
    <br/>
</div>