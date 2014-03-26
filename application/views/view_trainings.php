<div class="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><br/>
    <a href="http://localhost/hr_recordsystem/index.php/forms/training"><button type="mysubmit"class="btn btn-primary">Add</button> </a>
    <a href="http://localhost/hr_recordsystem/index.php/upload/training"><button class="btn btn-primary">Upload</button></a>
    <?php echo '<a href="'.base_url().'index.php/view_faculty/uploads/'.$this->session->userdata('emp_id').'">'; ?> <button type="submit" class="btn btn-primary">Gallery</button></a>
    <br/><br/><h4>Trainings and Seminars</h4><br/>
    <table width="650" align="left" class="table table-striped">
        <tr align="left">
            <th>Title</th>
            <th>Venue</th>
            <th>Date</th>
            <th>Organizer</th>
            <th>Role</th>
            <th>Type</th>
            <th>Edit</th>
            <th>Status</th>
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
            echo '<td><a href="'.base_url().'index.php/update_form/training/'.$page_view_content[$x]['training_id'].'"><button class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a></td>';
            if($page_view_content[$x]['training_status'] == 1)
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