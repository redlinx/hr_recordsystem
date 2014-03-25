<div class="body">
    <script>
        function goBack()
        {
            window.history.go(-1)
        }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><h2>Trainings</h2><br/>
    <table width="500" align="left" class="table table-striped">
        <tr align="left">
            <th>Title</th>
            <th>Venue</th>
            <th>Date</th>
            <th>Organizer</th>
            <th>Role</th>
            <th>Type</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo '<tr>';
                echo '<td>'.$page_view_content[$x]['training_title'].'</td>';
                echo '<td>'.$page_view_content[$x]['venue'].'</td>';
                echo '<td>'.$page_view_content[$x]['MonthName'].' '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year'].'</td>';
                echo '<td>'.$page_view_content[$x]['organizer'].'</td>';
                echo '<td>'.$page_view_content[$x]['role'].'</td>';
                echo '<td>'.$page_view_content[$x]['type_desc'].'</td>';
                echo '</tr>';
            }
        ?>
    </table>
</div>