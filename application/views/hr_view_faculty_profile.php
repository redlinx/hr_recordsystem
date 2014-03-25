<div class="body">
    <script>
    function goBack()
        {
            window.history.go(-1)
        }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <img align="right" id="facultyPic" src ="<?php echo base_url('uploads/'.$faculty_profile['emp_id'].'_profPic.jpg')?>"></img>
    <br/>
        <h3>
            <?php echo "Faculty Profile"; ?>
        </h3>
    <br/><br/>
    <ul class="nav nav-pills">
        <?php echo '<li><a href="'.base_url().'index.php/hr_update_form/faculty/'.$faculty_profile['emp_id'].'">'; ?> <button type="button" class="btn btn-primary">Update</button></a></li>
        <?php echo '<li><a href="' . base_url() . 'index.php/Report_controller/files_reports/'. $faculty_profile['emp_id'] .'">';?> <button type="button" class="btn btn-primary">Generate Report</button> </a></li>
    </ul>
    <ul class="nav nav-pills nav-justified">
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
    <br/>
    <table align="left" class="table table-striped">
        <?php
                echo "<tr><th>Name</th>        <td>:</td>  <th colspan='4'>".$faculty_profile['lastname'].", ".$faculty_profile['firstname']." ".$faculty_profile['middlename']."</th></tr>";
                // echo "<tr><th>First Name</th>       <td>:</td>  <td>".$faculty_profile['firstname']."</td></tr>";
                // echo "<tr><th>Middle Name</th>      <td>:</td>  <td>".$faculty_profile['middlename']."</td></tr>";
                echo "<tr><th>Birthday</th>         <td>:</td>  <td>".$faculty_profile['MonthName'].' '.$faculty_profile['Day'].', '.$faculty_profile['Year']."</td>";
                echo "<th>Birth Place</th>      <td>:</td>  <td>".$faculty_profile['birthplace']."</td></tr>";
                echo "<tr><th>Gender</th>           <td>:</td>  <td>".$faculty_profile['gender']."</td>";
                echo "<th>Civil Status</th>     <td>:</td>  <td>".$faculty_profile['civil_status']."</td></tr>";
                echo "<tr><th>Religion</th>         <td>:</td>  <td>".$faculty_profile['religion']."</td>";
                echo "<th>Email </th>               <td>:</td>  <td>".$faculty_profile['email']."</td></tr>";
                echo "<tr><th>Cell No.</th>         <td>:</td>  <td>".$faculty_profile['cell_no']."</td>";
                echo "<th>Tell No.</th>             <td>:</td>  <td>".$faculty_profile['tell_no']."</td></tr>";
                echo "<tr><th>City Address</th>     <td>:</td>  <td>".$faculty_profile['city_add']."</td>";
                echo "<th>Prov. Address</th>        <td>:</td>  <td>".$faculty_profile['prov_add']."</td></tr>";
                echo "<tr><th>Phil Health No.</th>  <td>:</td>  <td>".$faculty_profile['philhealth']."</td>";
                echo "<th>Pag-Ibig No.</th>         <td>:</td>  <td>".$faculty_profile['pag_ibig']."</td></tr>";
                echo "<tr><th>SSS No.</th>          <td>:</td>  <td>".$faculty_profile['sss']."</td>";
                echo "<th>TIN </th>                 <td>:</td>  <td>".$faculty_profile['tin']."</td></tr>";
                echo "<tr><th>Program</th>          <td>:</td>  <td>".$faculty_profile['prog_name']."</td>";
                echo "<th>Rank</th>             <td>:</td>   <td>".$faculty_profile['rank_desc']."</td></tr>";
                echo "<tr><th>Date Hired</th>       <td>:</td>  <td>".$faculty_profile['HMonthName'].' '.$faculty_profile['HDay'].', '.$faculty_profile['HYear']."</td>";
                echo "<th>Date Regularized</th>     <td>:</td>  <td>".$faculty_profile['RMonthName'].' '.$faculty_profile['RDay'].', '.$faculty_profile['RYear']."</td></tr>";
        ?>    
     
    </table>
    <br/>
</div>