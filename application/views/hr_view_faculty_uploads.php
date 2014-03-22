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
    <br/><h4>Uploads</h4><br/>
    <table width="500" align="left" class="table table-stripped">
        <tr align="left">
            <th>File Name</th>
            <th>Title</th>
            <th>Category</th>
            <th>View</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo '<tr>';
                echo '<td>'.$page_view_content[$x]['file_name'].'</td>';
                echo '<td>'.$page_view_content[$x]['title'].'</td>';
                echo '<td>'.$page_view_content[$x]['category_name'].'</td>';
                echo '<td><a href="'.base_url().'index.php/view_hr/view_upload/'.$page_view_content[$x]['upload_id'].'"> View </a></td>';
                //echo '<td><img src = "'.base_url('uploads/'.$page_view_content[$x]['file_name']).'" width="50px"></img></td>';
                echo '</tr>';
            }
        ?>
    </table>
    <br/>
</div>