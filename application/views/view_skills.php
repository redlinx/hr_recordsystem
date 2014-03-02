<<<<<<< HEAD
<div>
=======
<div id="body">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()"> Back </button>
    <a href="http://localhost/hr_recordsystem/index.php/forms/skill"> <?php echo form_submit('mysubmit', 'Add') ?> </a>
<<<<<<< HEAD
     <table class="table table-striped">
=======
    <table width="540" align="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
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
</div>