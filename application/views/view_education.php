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
<<<<<<< HEAD
    <button onclick="goBack()"> Back </button>
        <a href="http://localhost/hr_recordsystem/index.php/forms/education"> <?php echo form_submit('mysubmit', 'Add') ?> </a>
        <table class="table table-striped">

=======
    <p><b>Academic and Professional Preparation</b></p>
    <button onclick="goBack()"> Back </button>
        <a href="http://localhost/hr_recordsystem/index.php/forms/education"> <?php echo form_submit('mysubmit', 'Add') ?> </a>
        <table width="540" align="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
            <tr align="left">
                <th>School</th>
                <th>Address</th>
                <th>Year</th>
                <th>Type</th>
                <th>Degree</th>
                <th>Edit</th>
            </tr>
            <?php
                for($x=0;$x<count($page_view_content);$x++)
                {
                    echo '<tr>';
                    echo '<td>'.$page_view_content[$x]['school_name'].'</td>';
                    echo '<td>'.$page_view_content[$x]['address'].'</td>';
                    echo '<td>'.$page_view_content[$x]['year'].'</td>';
                    echo '<td>'.$page_view_content[$x]['type_desc'].'</td>';
                    echo '<td>'.$page_view_content[$x]['degree'].'</td>';
                    echo '<td><a href="'.base_url().'index.php/update_form/education/'.$page_view_content[$x]['educ_id'].'">Edit</a></td>';
                    echo '</tr>';
                }
            ?>
        </table>
</div>