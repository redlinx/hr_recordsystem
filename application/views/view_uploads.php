<div class="body">
    <br/>
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <a href="http://localhost/hr_recordsystem/index.php/upload/"> <button type="mysubmit" class="btn btn-primary">Upload</button> </a>
    <br/><br/><table width="500" align="left" class="table table-striped">
        <tr align="left">
            <th>File Name</th>
            <th>Title</th>
            <th>Category</th>
            <th>View</th>
            <th>Status</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo '<tr>';
                echo '<td>'.$page_view_content[$x]['file_name'].'</td>';
                echo '<td>'.$page_view_content[$x]['title'].'</td>';
                echo '<td>'.$page_view_content[$x]['category_name'].'</td>';
                echo '<td><a href="'.base_url().'index.php/view_faculty/view_upload/'.$page_view_content[$x]['upload_id'].'"> View </a></td>';
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