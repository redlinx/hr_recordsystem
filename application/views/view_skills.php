<div class="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <br/>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <a href="http://localhost/hr_recordsystem/index.php/forms/skill"> <button type="mysubmit" class="btn btn-primary">Add</button> </a>
    <br/><br/>
    <table width="540" align="left" class="table">
        <tr align="left">
            <th>Skills</th>
            <th>Edit</th>
        </tr>
    <?php
        for($x=0;$x<count($page_view_content);$x++)
        {
            echo '<tr>';
            echo '<td>'.$page_view_content[$x]['skill_name'].'</td>';
            echo '<td><a href="'.base_url().'index.php/update_form/skill/'.$page_view_content[$x]['skill_id'].'">Edit</a></td>';
            echo '</tr>';
        }
    ?>
    </table>
    <br/>
</div>