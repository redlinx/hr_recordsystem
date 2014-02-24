<div id="body">
    <script>
        function goBack()
        {
            window.history.go(-1)
        }
    </script>
    <button onclick="goBack()"> Back </button>   
    <?php echo '<a href="'.base_url().'index.php/view_rankMember/spouse/'.$faculty_profile['emp_id'].'">'; ?> Spouse </a> |
    <?php echo '<a href="'.base_url().'index.php/view_rankMember/children/'.$faculty_profile['emp_id'].'">'; ?> Children </a> |
    <?php echo '<a href="'.base_url().'index.php/view_rankMember/education/'.$faculty_profile['emp_id'].'">'; ?> Education </a> |
    <?php echo '<a href="'.base_url().'index.php/view_rankMember/training/'.$faculty_profile['emp_id'].'">'; ?> Trainings </a> |
    <?php echo '<a href="'.base_url().'index.php/view_rankMember/work/'.$faculty_profile['emp_id'].'">'; ?> Work Experience </a> |
    <?php echo '<a href="'.base_url().'index.php/view_rankMember/skill/'.$faculty_profile['emp_id'].'">'; ?> Skills </a> |
    <?php echo '<a href="'.base_url().'index.php/view_rankMember/uploads/'.$faculty_profile['emp_id'].'">'; ?> Uploads </a> |
    <?php echo '<a href="'.base_url().'index.php/ranking_committee/rank_form/'.$faculty_profile['emp_id'].'">'; ?> Rank </a>
    <br/>
    <img id="facultyPic" src = "<?php echo base_url('uploads/'. $faculty_profile['lastname'] .'_'. $faculty_profile['firstname'] . '_profPic.jpg')?>" width="100" height="100"></img>
    <table lign="left">
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
                //echo "<tr><td>Program</td><td>:  ".$faculty_profile['prog_name']."</td></tr>";
            echo form_close();
        ?>
    </table>
</div>