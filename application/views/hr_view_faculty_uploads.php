<div class="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><h2>Uploads</h2><br/>
    <table width="500" align="left" class="table table-striped">
        <tr align="left">
            <th>File Name</th>
            <th>Title</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo '<tr>';
                echo '<td>'.$page_view_content[$x]['file_name'].'</td>';
                echo '<td>'.$page_view_content[$x]['title'].'</td>';
                echo '<td>'.$page_view_content[$x]['category_name'].'</td>';
                echo '<td><a href="'.base_url().'index.php/view_hr/view_upload/'.$page_view_content[$x]['upload_id'].'"><button class="btn btn-sm btn-primary">View</button></a></td>';
                echo '</tr>';
            }
        ?>
    </table>
</div>