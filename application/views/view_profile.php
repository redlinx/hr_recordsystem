<div>
    <?php echo '<a href="'.base_url().'index.php/update_form/profile/'.$this->session->userdata('emp_id').'">'; ?> <?php echo form_submit('mysubmit', 'Update') ?> </a>
    <?php echo '<a href="'.base_url().'index.php/view_faculty/spouse/'.$this->session->userdata('emp_id').'">'; ?> <?php echo form_submit('mysubmit', 'Spouse') ?> </a>
    <?php echo '<a href="'.base_url().'index.php/view_faculty/children/'.$this->session->userdata('emp_id').'">'; ?> <?php echo form_submit('mysubmit', 'Children') ?> </a>
     <table class="table table-striped">
        <?php
            echo form_open();
                echo "<tr><td>Last Name</td><td>:  ".$faculty_profile['lastname']."</td></tr>";
                echo "<tr><td>First Name</td><td>:  ".$faculty_profile['firstname']."</td></tr>";
                echo "<tr><td>Middle Name</td><td>:  ".$faculty_profile['middlename']."</td></tr>";
                echo "<tr><td>Birthday</td><td>:  ".$faculty_profile['MonthName'].' '.$faculty_profile['Day'].', '.$faculty_profile['Year']."</td></tr>";
                echo "<tr><td>Gender</td><td>:  ".$faculty_profile['gender']."</td></tr>";
                echo "<tr><td>Civil Status</td><td>:  ".$faculty_profile['civil_status']."</td></tr>";
                echo "<tr><td>Cell #</td><td>:  ".$faculty_profile['cell_no']."</td></tr>";
                echo "<tr><td>Tell #</td><td>:  ".$faculty_profile['tell_no']."</td></tr>";
                echo "<tr><td>Email </td><td>:  ".$faculty_profile['email']."</td></tr>";
                echo "<tr><td>Program</td><td>:  ".$faculty_profile['prog_name']."</td></tr>";
            echo form_close();
        ?>
    </table>
</div>