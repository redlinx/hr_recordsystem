<div class="body">
    <script>
        function goBack()
          {
          window.history.go(-1)
          }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button><br/><br/>
    <?php
        echo '<table>';
        echo '<tr>';
        echo '<td>File name: <b>'.$page_view_content['file_name'].'</b></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Title: <b>'.$page_view_content['title'].'</b></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Category: <b>'.$page_view_content['category_name'].'</b></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Remarks: <p>'.$page_view_content['remarks'].'</p></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td><img src = "'.base_url('uploads/'.$page_view_content['file_name']).'" width="935px" height="590px"></img></td>';
        echo '</tr>';
        echo '</table>';
    ?>
    <br/>
</div>