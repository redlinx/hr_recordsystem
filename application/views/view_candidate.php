<<<<<<< HEAD
<div class="body">
    <table class="table table-striped">
=======
<div id="body">
    <table width="525" align="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
        <tr align="left">
            <th>Last Name</th>
            <th>First Name</th>
            <th>Date Hired</th>
<<<<<<< HEAD
            <th>Years of Service</th>
=======
            <th>YoS</th>
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
            <th>Education</th>
            <th>Regular</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
<<<<<<< HEAD
            
            {

=======
            {
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
                echo form_open();
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['MonthName'].' '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year']."</td>";
                    echo "<td>".$page_view_content[$x]['Years_Of_Service']."</td>";
                    echo '<td><a href="'.base_url().'index.php/view_hr/education/'.$page_view_content[$x]['faculty_profile_emp_id'].'">View</a></td>';
                    echo '<td><a href="'.base_url().'index.php/regularization_candidate/verify_regularization/'.$page_view_content[$x]['account_id'].'"> Regular </a></td>';
                    echo '</tr>';
                echo form_close();
<<<<<<< HEAD
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
            }  ?> 
            <button type="button" class="btn btn-default btn-mm"> 
              <?php echo '<a href="' . base_url() . 'index.php/Report_controller/candidate_reports"';  ?> 
            <span class="glyphicon glyphicon-print"></span> Generate
                </a></button>
         
=======
            }
             echo '<a href="' . base_url() . 'index.php/Report_controller/candidate_reports">Generate</a>';
        ?>    
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
    </table>
</div>