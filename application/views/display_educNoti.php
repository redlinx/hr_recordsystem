<div class="body">
    <h3>Educational Attainment</h3>
    <br/>
    <table class="table table-striped">
        <tr align="left">
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Updates</th>
            <th>View</th>
            <th>Action</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['MonthName'].', '.$page_view_content[$x]['Day'].' '.$page_view_content[$x]['Year']."</td>";     
                    echo '<td><a href="'.base_url().'index.php/display_notification/view_education/'.$page_view_content[$x]['educ_id'].'"><button class="btn btn-primary btn-sm">View</button></a></td>';
                    echo '<td><a href="'.base_url().'index.php/display_notification/verify_education/'.$page_view_content[$x]['educ_id'].'"><button class="btn btn-danger btn-sm">Verify</button></a></td>';
                    echo '</tr>';
            }
        ?>  
    </table>
</div>