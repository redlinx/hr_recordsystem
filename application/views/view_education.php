<div class="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><br/>
    <a href="http://localhost/hr_recordsystem/index.php/forms/education"> <button type="mysubmit"class="btn btn-primary">Add</button> </a>
    <a href="http://localhost/hr_recordsystem/index.php/upload/education"><button class="btn btn-primary">Upload</button></a>
    <?php echo '<a href="'.base_url().'index.php/view_faculty/uploads/'.$this->session->userdata('emp_id').'">'; ?> <button type="submit" class="btn btn-primary">Gallery</button></a>
    <br/><br/><h4>Academic and Professional Preparation</h4><br/>
        <table width="700" align="left" class="table table-striped">
            <tr align="left">
                <th>School</th>
                <th></th>
                <th>Address</th>
                <th>Year</th>
                <th>Level</th>
                <th>Degree</th>
                <th>Edit</th>
                <th>Status</th>
            </tr>
            <?php
                for($x=0;$x<count($page_view_content);$x++)
                {
                    echo '<tr>';
                    echo '<td>'.$page_view_content[$x]['school_name'].'</td>';
                    echo '<td></td>';
                    echo '<td>'.$page_view_content[$x]['address'].'</td>';
                    echo '<td>'.$page_view_content[$x]['year'].'</td>';
                    echo '<td>'.$page_view_content[$x]['type_desc'].'</td>';
                    echo '<td>'.$page_view_content[$x]['degree'].'</td>';
                    echo '<td><a href="'.base_url().'index.php/update_form/education/'.$page_view_content[$x]['educ_id'].'"><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button></a></td>';
                    if($page_view_content[$x]['status'] == 1)
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