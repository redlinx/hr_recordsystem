<<<<<<< HEAD
<div>
=======
<<<<<<< HEAD
<div>
=======
<<<<<<< HEAD
<div>
=======
<<<<<<< HEAD
<div>
=======
<<<<<<< HEAD
<div>
=======
<<<<<<< HEAD
<div>
=======
<div id="body">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
    <button onclick="goBack()"> Back </button>
        <a href="http://localhost/hr_recordsystem/index.php/forms/education"> <?php echo form_submit('mysubmit', 'Add') ?> </a>
        <table class="table table-striped">

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
    <p><b>Academic and Professional Preparation</b></p>
    <button onclick="goBack()"> Back </button>
        <a href="http://localhost/hr_recordsystem/index.php/forms/education"> <?php echo form_submit('mysubmit', 'Add') ?> </a>
        <table width="540" align="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
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