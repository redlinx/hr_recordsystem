<div class="body">
    <h3>Newly Rank Faculty</h3>
    <br/>
    <table width="500" align="left" class="table table-striped">
        <tr align="left">
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Program</th>
            <th>Current Rank</th>
            <th>TotalPoints</th>
            <th>Date Ranked</th>
            <th>Promote</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
            $page_content = $this->hr->totalPoints($page_view_content[$x]['emp_id']);
                echo '<tr>';
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['prog_name']."</td>";
                    echo "<td>".$page_view_content[$x]['rank_desc']."</td>";
                    echo "<td>".$page_content['TotalPoints']."</td>";
                    echo "<td>".$page_view_content[$x]['MonthName'].' '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year']."</td>";
                    echo '<td><a href="'.base_url().'index.php/display_notification/promote/'.$page_view_content[$x]['emp_id'].'"> <button class="btn btn-primary">Promote</button> </a></td>';
                echo '</tr>';
            }
        ?>  
    </table>
</div>