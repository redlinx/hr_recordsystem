<div id="content">
    <br/>
    <script>
        function goBack()
          {
            window.history.go(-1)
          }
    </script>
        <br/><button onclick="goBack()" class="btn btn-primary"> Back </button><br/>
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
            echo '<td><img src = "'.base_url('uploads/'.$page_view_content['file_name']).'" width="1000px" height="900px"></img></td>';
            echo '</tr>';
            echo '</table>';
        ?>
        <br/>
</div>