<div class="body">
    <script>
    function goBack()
        {
            window.history.go(-1)
        }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><h4>Faculty Profile</h4><br/>
    <img id="facultyPic" src = "<?php echo base_url('uploads/'. $faculty_profile['emp_id'] .'_profPic.jpg')?>"></img>
    <br/>
    <ul class="nav nav-pills" id-"profile_menu">
        <?php echo '<li><a href="'.base_url().'index.php/hr_update_form/faculty/'.$faculty_profile['emp_id'].'">'; ?> <button type="button" class="btn btn-default">Update</button> </a></li>
        <?php echo '<li><a href="' . base_url() . 'index.php/Report_controller/files_reports/'. $faculty_profile['emp_id'] .'">';?> <button type="button" class="btn btn-default">Generate Report</button> </a></li>
    </ul>
    <ul class="nav nav-pills nav-justified" id-"profile_menu">
    <br/>
        <?php echo '<li><a href="'.base_url().'index.php/view_hr/spouse/'.$faculty_profile['emp_id'].'">'; ?> Spouse </a></li>
        <?php echo '<li><a href="'.base_url().'index.php/view_hr/children/'.$faculty_profile['emp_id'].'">'; ?> Children </a>
        <?php echo '<li><a href="'.base_url().'index.php/view_hr/education/'.$faculty_profile['emp_id'].'">'; ?> Education </a></li>
        <?php echo '<li><a href="'.base_url().'index.php/view_hr/eligibility/'.$faculty_profile['emp_id'].'">'; ?> Eligibility </a></li>
        <?php echo '<li><a href="'.base_url().'index.php/view_hr/training/'.$faculty_profile['emp_id'].'">'; ?> Trainings </a></li>
        <?php echo '<li><a href="'.base_url().'index.php/view_hr/work/'.$faculty_profile['emp_id'].'">'; ?> Work Experience </a></li>
        <?php echo '<li><a href="'.base_url().'index.php/view_hr/skill/'.$faculty_profile['emp_id'].'">'; ?> Skills </a></li>
        <?php echo '<li><a href="'.base_url().'index.php/view_hr/uploads/'.$faculty_profile['emp_id'].'">'; ?> Uploads </a></li>
        <?php echo '<li><a href="'.base_url().'index.php/view_hr/rankPoints/'.$faculty_profile['emp_id'].'">'; ?> Rank Points </a></li>
        <?php echo '<li><a href="'.base_url().'index.php/view_hr/rankHistory/'.$faculty_profile['emp_id'].'">'; ?> Rank History </a></li>
    </ul>
    <br/><br/>
    <table align="left" class="table table-striped">
        <?php
            echo form_open();
                echo "<tr><td>Last Name</td><td>:   ".$faculty_profile['lastname']."</td></tr>";
                echo "<tr><td>First Name</td><td>:   ".$faculty_profile['firstname']."</td></tr>";
                echo "<tr><td>Middle Name</td><td>:   ".$faculty_profile['middlename']."</td></tr>";
                echo "<tr><td>Birth Place</td><td>:   ".$faculty_profile['birthplace']."</td></tr>";
                echo "<tr><td>Birthday</td><td>:   ".$faculty_profile['MonthName'].' '.$faculty_profile['Day'].', '.$faculty_profile['Year']."</td></tr>";
                echo "<tr><td>Gender</td><td>:   ".$faculty_profile['gender']."</td></tr>";
                echo "<tr><td>Civil Status</td><td>:   ".$faculty_profile['civil_status']."</td></tr>";
                echo "<tr><td>Religion</td><td>:   ".$faculty_profile['religion']."</td></tr>";
                echo "<tr><td>Cell #</td><td>:   ".$faculty_profile['cell_no']."</td></tr>";
                echo "<tr><td>Tell #</td><td>:   ".$faculty_profile['tell_no']."</td></tr>";
                echo "<tr><td>Email </td><td>:   ".$faculty_profile['email']."</td></tr>";
                echo "<tr><td>City Address</td><td>:   ".$faculty_profile['city_add']."</td></tr>";
                echo "<tr><td>Prov. Address</td><td>:   ".$faculty_profile['prov_add']."</td></tr>";
                echo "<tr><td>Phil Health #</td><td>:   ".$faculty_profile['philhealth']."</td></tr>";
                echo "<tr><td>Pag-Ibig #</td><td>:   ".$faculty_profile['pag_ibig']."</td></tr>";
                echo "<tr><td>SSS #</td><td>:   ".$faculty_profile['sss']."</td></tr>";
                echo "<tr><td>TIN #</td><td>:   ".$faculty_profile['tin']."</td></tr>";
                echo "<tr><td>Program</td><td>:   ".$faculty_profile['prog_name']."</td></tr>";
                echo "<tr><td>Rank</td><td>:   ".$faculty_profile['rank_desc']."</td></tr>";
            echo form_close();
        ?>    
     
    </table>
    <br/>
</div>