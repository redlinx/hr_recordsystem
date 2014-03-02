<div id="content">
    <script>
        function goBack()
          {
          window.history.go(-1)
          }
        </script>
        <br/>
        <button onclick="goBack()"> Back </button>
    <?php
        echo '<table>';
        echo '<tr>';
        echo '<td><h3>'.$page_view_content['file_name'].'</h3></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td><img src = "'.base_url('uploads/'.$page_view_content['file_name']).'" width="792px" height="550px"></img></td>';
        echo '</tr>';
        echo '</table>';
    ?>
</div>