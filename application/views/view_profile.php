<div class="body">
    <br/>
    <ul class="nav nav-pills nav-justified" id-"profile_menu">
        <?php echo '<li><a href="'.base_url().'index.php/update_form/profile/'.$this->session->userdata('emp_id').'">'; ?> Update </a></li>
        <?php echo '<li><a href="'.base_url().'index.php/view_faculty/spouse/'.$this->session->userdata('emp_id').'">'; ?> Spouse </a></li>
        <?php echo '<li><a href="'.base_url().'index.php/view_faculty/children/'.$this->session->userdata('emp_id').'">'; ?> Children </a></li>
        <?php echo '<li><a href="'.base_url().'index.php/view_faculty/rankPoints/'.$this->session->userdata('emp_id').'">'; ?> Rank Points </a></li>
        <?php echo '<li><a href="'.base_url().'index.php/view_faculty/rankHistory/'.$this->session->userdata('emp_id').'">'; ?> Rank History </a></li>
    </ul>
    <br/><br/>
    <table align="left" class="table table-striped">
        <?php
            echo form_open();
                echo "<tr><td>Last Name</td><td>:  ".$faculty_profile['lastname']."</td></tr>";
                echo "<tr><td>First Name</td><td>:  ".$faculty_profile['firstname']."</td></tr>";
                echo "<tr><td>Middle Name</td><td>:  ".$faculty_profile['middlename']."</td></tr>";
                echo "<tr><td>Birthday</td><td>:  ".$faculty_profile['MonthName'].' '.$faculty_profile['Day'].', '.$faculty_profile['Year']."</td></tr>";
                echo "<tr><td>Birth Place</td><td>:  ".$faculty_profile['birthplace']."</td></tr>";
                echo "<tr><td>Gender</td><td>:  ".$faculty_profile['gender']."</td></tr>";
                echo "<tr><td>Civil Status</td><td>:  ".$faculty_profile['civil_status']."</td></tr>";
                echo "<tr><td>Religion</td><td>:  ".$faculty_profile['religion']."</td></tr>";
                echo "<tr><td>Cell #</td><td>:  ".$faculty_profile['cell_no']."</td></tr>";
                echo "<tr><td>Tell #</td><td>:  ".$faculty_profile['tell_no']."</td></tr>";
                echo "<tr><td>Email </td><td>:  ".$faculty_profile['email']."</td></tr>";
                echo "<tr><td>City Address</td><td>:  ".$faculty_profile['city_add']."</td></tr>";
                echo "<tr><td>Prov. Address</td><td>:  ".$faculty_profile['prov_add']."</td></tr>";
                echo "<tr><td>Phil Health #</td><td>:  ".$faculty_profile['philhealth']."</td></tr>";
                echo "<tr><td>Pag-Ibig # #</td><td>:  ".$faculty_profile['pag_ibig']."</td></tr>";
                echo "<tr><td>SSS #</td><td>:  ".$faculty_profile['sss']."</td></tr>";
                echo "<tr><td>TIN #</td><td>:  ".$faculty_profile['tin']."</td></tr>";
                echo "<tr><td>Program</td><td>:  ".$faculty_profile['prog_name']."</td></tr>";
                echo "<tr><td>Rank</td><td>:  ".$faculty_profile['rank_desc']."</td></tr>";
            echo form_close();
        ?>
    </table>
    <br/>
</div>