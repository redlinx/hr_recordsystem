<div class="body">
    <h3>Eligibility</h3>
    <br/><table width="400" align="left" class="table table-striped">
        <tr align="left">
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Updates</th>
            <th>View</th>
            <th>Status</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {   
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['MonthName'].', '.$page_view_content[$x]['Day'].' '.$page_view_content[$x]['Year']."</td>";
                    echo '<td><a href="'.base_url().'index.php/display_notification/view_eligibility/'.$page_view_content[$x]['eligibility_id'].'">View</a></td>';
                    echo '<td><a href="'.base_url().'index.php/display_notification/verify_eligibility/'.$page_view_content[$x]['eligibility_id'].'"> Verify </a></td>';
            }
        ?>  
    </table>
</div>