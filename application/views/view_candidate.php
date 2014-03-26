    <div class="body">
    <h3>Candidate of Regularization</h3>
    <?php echo '<a href="' . base_url() . 'index.php/Report_controller/candidate_reports">';?>
    <button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-print"></span></button> </a>
    <br/><br/>
    <table width="600" align="left" class="table table-striped">
        <tr align="left">
            <th>Last Name</th>
            <th>First Name</th>
            <th>Date Hired</th>
            <th>Years of Service</th>
            <th>Program</th>
            <th>Education</th>
            <th>Action</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['MonthName'].' '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year']."</td>";
                    echo "<td>".$page_view_content[$x]['Years_Of_Service']."</td>";
                    echo "<td>".$page_view_content[$x]['prog_name']."</td>";
                    echo '<td><a href="'.base_url().'index.php/view_hr/education/'.$page_view_content[$x]['faculty_profile_emp_id'].'"><button class="btn btn-primary btn-sm">View</button></a></td>';
                    echo '<td><a href="'.base_url().'index.php/regularization_candidate/verify_regularization/'.$page_view_content[$x]['account_id'].'"><button class="btn btn-primary btn-sm">Promote</button></a></td>';
                    echo '</tr>';
            }
        ?>    
    </table>
    <br/>
</div>