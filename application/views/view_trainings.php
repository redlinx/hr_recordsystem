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
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
<<<<<<< HEAD
    <button onclick="goBack()"> Back </button>
    <a href="http://localhost/hr_recordsystem/index.php/forms/training"> <?php echo form_submit('mysubmit', 'Add') ?> </a>
     <table class="table table-striped">
=======
<<<<<<< HEAD
    <button onclick="goBack()"> Back </button>
    <a href="http://localhost/hr_recordsystem/index.php/forms/training"> <?php echo form_submit('mysubmit', 'Add') ?> </a>
     <table class="table table-striped">
=======
<<<<<<< HEAD
    <button onclick="goBack()"> Back </button>
    <a href="http://localhost/hr_recordsystem/index.php/forms/training"> <?php echo form_submit('mysubmit', 'Add') ?> </a>
     <table class="table table-striped">
=======
<<<<<<< HEAD
    <button onclick="goBack()"> Back </button>
    <a href="http://localhost/hr_recordsystem/index.php/forms/training"> <?php echo form_submit('mysubmit', 'Add') ?> </a>
     <table class="table table-striped">
=======
<<<<<<< HEAD
    <button onclick="goBack()"> Back </button>
    <a href="http://localhost/hr_recordsystem/index.php/forms/training"> <?php echo form_submit('mysubmit', 'Add') ?> </a>
     <table class="table table-striped">
=======
    <p><b>Trainings and Seminars</b></p>
    <button onclick="goBack()"> Back </button>
    <a href="http://localhost/hr_recordsystem/index.php/forms/training"> <?php echo form_submit('mysubmit', 'Add') ?> </a>
    <table width="540" align="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
        <tr align="left">
            <th>Title</th>
            <th>Venue</th>
            <th>Date</th>
            <th>Organizer</th>
            <th>Role</th>
            <th>Type</th>
            <th>Edit</th>
        </tr>
    <?php
        for($x=0;$x<count($page_view_content);$x++)
        {
            echo '<tr>';
            echo '<td>'.$page_view_content[$x]['training_title'].'</td>';
            echo '<td>'.$page_view_content[$x]['venue'].'</td>';
            echo '<td>'.$page_view_content[$x]['MonthName'].' '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year'].'</td>';
            echo '<td>'.$page_view_content[$x]['organizer'].'</td>';
            echo '<td>'.$page_view_content[$x]['role'].'</td>';
            echo '<td>'.$page_view_content[$x]['type_desc'].'</td>';
            echo '<td><a href="'.base_url().'index.php/update_form/training/'.$page_view_content[$x]['training_id'].'">Edit</a></td>';
            echo '</tr>';
        }
    ?>
    </table>
</div>