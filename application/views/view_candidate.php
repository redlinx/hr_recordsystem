<div id="body">
    <table width="525" align="left">
        <tr align="left">
            <th>Last Name</th>
            <th>First Name</th>
            <th>Date Hired</th>
            <th>YoS</th>
            <th>Education</th>
            <th>Regular</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
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
            }
             echo '<a href="' . base_url() . 'index.php/Report_controller/candidate_reports">Generate</a>';
        ?>    
    </table>
</div>