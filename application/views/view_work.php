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
    <a href="http://localhost/hr_recordsystem/index.php/forms/work"> <?php echo form_submit('mysubmit', 'Add') ?> </a>
     <table class="table table-striped">
        <tr align="left">
            <th>Company</th>
            <th>Address</th>
            <th>Position</th>
            <th>Work Started</th>
            <th>Work Ended</th>
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
    <p><b>Educational and Professional Trainings</b></p>
    <button onclick="goBack()"> Back </button>
    <a href="http://localhost/hr_recordsystem/index.php/forms/work"> <?php echo form_submit('mysubmit', 'Add') ?> </a>
    <table width="540" align="left">
        <tr align="left">
            <th>Institution</th>
            <th>Address</th>
            <th>Position</th>
            <th>Date</th>
            <th>No. 0f Years</th>
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
            <th>Edit</th>
        </tr>
    <?php
        for($x=0;$x<count($page_view_content);$x++)
        {
            echo '<tr>';
            echo '<td>'.$page_view_content[$x]['company'].'</td>';
            echo '<td>'.$page_view_content[$x]['address'].'</td>';
            echo '<td>'.$page_view_content[$x]['position'].'</td>';
<<<<<<< HEAD
            echo '<td>'.$page_view_content[$x]['StartMonthName'].' '.$page_view_content[$x]['StartDay'].', '.$page_view_content[$x]['StartYear'].'</td>';
            echo '<td>'.$page_view_content[$x]['EndMonthName'].' '.$page_view_content[$x]['EndDay'].', '.$page_view_content[$x]['EndYear'].'</td>';
             echo '<td><a href="'.base_url().'index.php/update_form/work/'.$page_view_content[$x]['work_exp_id'].'">Edit</a></td>';
=======
<<<<<<< HEAD
            echo '<td>'.$page_view_content[$x]['StartMonthName'].' '.$page_view_content[$x]['StartDay'].', '.$page_view_content[$x]['StartYear'].'</td>';
            echo '<td>'.$page_view_content[$x]['EndMonthName'].' '.$page_view_content[$x]['EndDay'].', '.$page_view_content[$x]['EndYear'].'</td>';
             echo '<td><a href="'.base_url().'index.php/update_form/work/'.$page_view_content[$x]['work_exp_id'].'">Edit</a></td>';
=======
<<<<<<< HEAD
            echo '<td>'.$page_view_content[$x]['StartMonthName'].' '.$page_view_content[$x]['StartDay'].', '.$page_view_content[$x]['StartYear'].'</td>';
            echo '<td>'.$page_view_content[$x]['EndMonthName'].' '.$page_view_content[$x]['EndDay'].', '.$page_view_content[$x]['EndYear'].'</td>';
             echo '<td><a href="'.base_url().'index.php/update_form/work/'.$page_view_content[$x]['work_exp_id'].'">Edit</a></td>';
=======
<<<<<<< HEAD
            echo '<td>'.$page_view_content[$x]['StartMonthName'].' '.$page_view_content[$x]['StartDay'].', '.$page_view_content[$x]['StartYear'].'</td>';
            echo '<td>'.$page_view_content[$x]['EndMonthName'].' '.$page_view_content[$x]['EndDay'].', '.$page_view_content[$x]['EndYear'].'</td>';
             echo '<td><a href="'.base_url().'index.php/update_form/work/'.$page_view_content[$x]['work_exp_id'].'">Edit</a></td>';
=======
<<<<<<< HEAD
            echo '<td>'.$page_view_content[$x]['StartMonthName'].' '.$page_view_content[$x]['StartDay'].', '.$page_view_content[$x]['StartYear'].'</td>';
            echo '<td>'.$page_view_content[$x]['EndMonthName'].' '.$page_view_content[$x]['EndDay'].', '.$page_view_content[$x]['EndYear'].'</td>';
             echo '<td><a href="'.base_url().'index.php/update_form/work/'.$page_view_content[$x]['work_exp_id'].'">Edit</a></td>';
=======
<<<<<<< HEAD
            echo '<td>'.$page_view_content[$x]['StartMonthName'].' '.$page_view_content[$x]['StartDay'].', '.$page_view_content[$x]['StartYear'].'</td>';
            echo '<td>'.$page_view_content[$x]['EndMonthName'].' '.$page_view_content[$x]['EndDay'].', '.$page_view_content[$x]['EndYear'].'</td>';
             echo '<td><a href="'.base_url().'index.php/update_form/work/'.$page_view_content[$x]['work_exp_id'].'">Edit</a></td>';
=======
            echo '<td>'.$page_view_content[$x]['StartMonthName'].' '.$page_view_content[$x]['StartDay'].', '.$page_view_content[$x]['StartYear'].' - ' .$page_view_content[$x]['EndMonthName'].' '.$page_view_content[$x]['EndDay'].', '.$page_view_content[$x]['EndYear'].'</td>';
            echo '<td>'.$page_view_content[$x]['YearsOfService'].'</td>';
            echo '<td><a href="'.base_url().'index.php/update_form/work/'.$page_view_content[$x]['work_exp_id'].'">Edit</a></td>';
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
            echo '</tr>';
        }
    ?>
    </table>
</div>