<div class="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <br/>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <a href="http://localhost/hr_recordsystem/index.php/forms/training"> <button type="mysubmit"class="btn btn-primary">Add</button> </a>
    <br/><br/><h4>Trainings and Seminars</h4><br/>
    <table width="650" align="left" class="table">
        <tr align="left">
            <th>Title</th>
            <th>Venue</th>
            <th>Date</th>
            <th>Organizer</th>
            <th>Role</th>
            <th>Type</th>
            <th>Edit</th>
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
            echo '<td><a href="'.base_url().'index.php/update_form/training/'.$page_view_content[$x]['training_id'].'">Edit</a></td>';
            echo '</tr>';
        }
    ?>
    </table>
    <br/>
</div>