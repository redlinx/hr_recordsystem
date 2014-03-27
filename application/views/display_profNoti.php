<div class="body">
    <h3>Profile</h3>
    <table width="400" align="left" class="table table-striped">
        <tr align="left" bgcolor="#E3E3E4">
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Updates</th>
            <th>View</th>
            <th>Action</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
               
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['RMonthName'].', '.$page_view_content[$x]['RDay'].' '.$page_view_content[$x]['RYear']."</td>";
                    echo '<td><a href="'.base_url().'index.php/display_notification/view_profile/'.$page_view_content[$x]['emp_id'].'"><button class="btn btn-primary btn-sm">View</button></a></td>';
                    echo '<td><a href="'.base_url().'index.php/display_notification/verify_profile/'.$page_view_content[$x]['emp_id'].'"><button class="btn btn-danger btn-sm">Verify</button></a></td>';
                    echo '</tr>';
               
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
            }
        ?>  
    </table>
</div>
