<div class="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <a href="http://localhost/hr_recordsystem/index.php/forms/eligibilty"> <button type="mysubmit" class="btn btn-primary">Add</button> </a>
    <br/><br/><h4>Eligibilities</h4><br/>
        <table width="540" align="left" class="table table-striped">
            <tr align="left">
                <th>Exam Name</th>
                <th>Exam Date</th>
                <th>Exam PLace</th>
                <th>Rating</th>
                <th>Edit</th>
                <th>Status</th>
            </tr>
            <?php
                for($x=0;$x<count($page_view_content);$x++)
                {
                    echo '<tr>';
                    echo '<td>'.$page_view_content[$x]['exam_name'].'</td>';
                    echo '<td>'.$page_view_content[$x]['MonthName'].' '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year'].'</td>';
                    echo '<td>'.$page_view_content[$x]['exam_place'].'</td>';
                    echo '<td>'.$page_view_content[$x]['rating'].'</td>';
                    echo '<td><a href="'.base_url().'index.php/update_form/eligibility/'.$page_view_content[$x]['eligibility_id'].'">Edit</a></td>';
                    if($page_view_content[$x]['eligi_status'] == 1)
                    {
                        echo '<td>Verified</td>';
                    }
                    else
                    {
                        echo '<td>Pending</td>';
                    }
                    echo '</tr>';
                }
            ?>
        </table>
        <br/>
</div>