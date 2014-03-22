<div class="body">
    <br/>
    <script>
        function goBack()
        {
            window.history.go(-1)
        }
    </script>
    <br/>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><h4>Eligibilities</h4><br/>
        <table width="500" align="left" class="table">
            <tr align="left">
                <th>Exam Name</th>
                <th>Exam Date</th>
                <th>Exam PLace</th>
                <th>Rating</th>
            </tr>
            <?php
                for($x=0;$x<count($page_view_content);$x++)
                {
                    echo '<tr>';
                    echo '<td>'.$page_view_content[$x]['exam_name'].'</td>';
                    echo '<td>'.$page_view_content[$x]['MonthName'].' '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year'].'</td>';
                    echo '<td>'.$page_view_content[$x]['exam_place'].'</td>';
                    echo '<td>'.$page_view_content[$x]['rating'].'</td>';
                    echo '</tr>';
                }
            ?>
        </table>
        <br/>
</div>