<div class="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><h2>Skills</h2><br/>
    <table width="500" align="left" class="table table-striped">
        <tr align="left">
            <th>Skills</th>
        </tr>
    <?php
        for($x=0;$x<count($page_view_content);$x++)
        {
            echo '<tr>';
            echo '<td>'.$page_view_content[$x]['skill_name'].'</td>';
        }
    ?>
    </table>
</div>