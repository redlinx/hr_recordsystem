<div id="body">
    <script>
        function goBack()
        {
            window.history.go(-1)
        }
    </script>
    <button onclick="goBack()"> Back </button>
    <br/>
<<<<<<< HEAD
    <?php echo '<a href="'.base_url().'index.php/hr_update_form/faculty/'.$faculty_profile['emp_id'].'">'; ?> <?php echo form_submit('mysubmit', 'Update') ?> </a>
    <?php echo '<a href="'.base_url().'index.php/view_hr/spouse/'.$faculty_profile['emp_id'].'">'; ?> <?php echo form_submit('mysubmit', 'Spouse') ?> </a>
    <?php echo '<a href="'.base_url().'index.php/view_hr/children/'.$faculty_profile['emp_id'].'">'; ?> <?php echo form_submit('mysubmit', 'Children') ?> </a>
    <?php echo '<a href="'.base_url().'index.php/view_hr/education/'.$faculty_profile['emp_id'].'">'; ?> <?php echo form_submit('mysubmit', 'Education') ?> </a>
    <?php echo '<a href="'.base_url().'index.php/view_hr/training/'.$faculty_profile['emp_id'].'">'; ?> <?php echo form_submit('mysubmit', 'Trainings') ?> </a>
    <?php echo '<a href="'.base_url().'index.php/view_hr/work/'.$faculty_profile['emp_id'].'">'; ?> <?php echo form_submit('mysubmit', 'Work Experience') ?> </a>
    <?php echo '<a href="'.base_url().'index.php/view_hr/skill/'.$faculty_profile['emp_id'].'">'; ?> <?php echo form_submit('mysubmit', 'Skills') ?> </a>
    <br/>
    <table class="table table-striped">
=======
    <?php echo '<a href="'.base_url().'index.php/hr_update_form/faculty/'.$faculty_profile['emp_id'].'">'; ?> Update </a> |
    <?php echo '<a href="'.base_url().'index.php/view_hr/spouse/'.$faculty_profile['emp_id'].'">'; ?> Spouse </a> |
    <?php echo '<a href="'.base_url().'index.php/view_hr/children/'.$faculty_profile['emp_id'].'">'; ?> Children </a> |
    <?php echo '<a href="'.base_url().'index.php/view_hr/education/'.$faculty_profile['emp_id'].'">'; ?> Education </a> |
    <?php echo '<a href="'.base_url().'index.php/view_hr/training/'.$faculty_profile['emp_id'].'">'; ?> Trainings </a> |
    <?php echo '<a href="'.base_url().'index.php/view_hr/work/'.$faculty_profile['emp_id'].'">'; ?> Work Experience </a> |
    <?php echo '<a href="'.base_url().'index.php/view_hr/skill/'.$faculty_profile['emp_id'].'">'; ?> Skills </a> |
    <?php echo '<a href="'.base_url().'index.php/view_hr/uploads/'.$faculty_profile['emp_id'].'">'; ?> Uploads </a> |
    <?php echo '<a href="' . base_url() . 'index.php/Report_controller/files_reports/'. $faculty_profile['emp_id'] .'">';?> Generate </a>
    <br/>
    <img id="facultyPic" src = "<?php echo base_url('uploads/'. $faculty_profile['lastname'] .'_'. $faculty_profile['firstname'] . '_profPic.jpg')?>" width="100" height="100"></img>
    <table lign="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
        <?php
            echo form_open();
                echo "<tr><td>Last Name</td><td>:  ".$faculty_profile['lastname']."</td></tr>";
                echo "<tr><td>First Name</td><td>:  ".$faculty_profile['firstname']."</td></tr>";
                echo "<tr><td>Middle Name</td><td>:  ".$faculty_profile['middlename']."</td></tr>";
<<<<<<< HEAD
=======
                echo "<tr><td>Birth Place</td><td>:  ".$faculty_profile['birthplace']."</td></tr>";
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
                echo "<tr><td>Birthday</td><td>:  ".$faculty_profile['MonthName'].' '.$faculty_profile['Day'].', '.$faculty_profile['Year']."</td></tr>";
                echo "<tr><td>Gender</td><td>:  ".$faculty_profile['gender']."</td></tr>";
                echo "<tr><td>Civil Status</td><td>:  ".$faculty_profile['civil_status']."</td></tr>";
                echo "<tr><td>Cell #</td><td>:  ".$faculty_profile['cell_no']."</td></tr>";
                echo "<tr><td>Tell #</td><td>:  ".$faculty_profile['tell_no']."</td></tr>";
                echo "<tr><td>Email </td><td>:  ".$faculty_profile['email']."</td></tr>";
<<<<<<< HEAD
                echo "<tr><td>Program</td><td>:  ".$faculty_profile['prog_name']."</td></tr>";
            echo form_close();
        ?>
=======
                echo "<tr><td>City Address</td><td>:  ".$faculty_profile['city_add']."</td></tr>";
                echo "<tr><td>Provincial Address</td><td>:  ".$faculty_profile['prov_add']."</td></tr>";
                echo "<tr><td>Phil Health #</td><td>:  ".$faculty_profile['philhealth']."</td></tr>";
                echo "<tr><td>Pag-Ibig #</td><td>:  ".$faculty_profile['pag_ibig']."</td></tr>";
                echo "<tr><td>SSS #</td><td>:  ".$faculty_profile['sss']."</td></tr>";
                echo "<tr><td>TIN #</td><td>:  ".$faculty_profile['tin']."</td></tr>";
                echo "<tr><td>Program</td><td>:  ".$faculty_profile['prog_name']."</td></tr>";
            echo form_close();
        ?>    
     
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
    </table>
</div>