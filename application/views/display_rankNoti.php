<div class="body">
    <h3>New Rank Faculty</h3>
    <table width="500" align="left" class="table">
        <tr align="left">
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Program</th>
            <th>Current Rank</th>
            <th>TotalPoints</th>
            <th>Promote</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
            $page_content = $this->hr->totalPoints($page_view_content[$x]['emp_id']);
            echo form_open();
                echo '<tr>';
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['prog_name']."</td>";
                    echo "<td>".$page_view_content[$x]['rank_desc']."</td>";
                    echo "<td>".$page_content['TotalPoints']."</td>";
                    echo '<td><a href="'.base_url().'index.php/display_notification/promote/'.$page_view_content[$x]['emp_id'].'"> Promote </a></td>';
                echo '</tr>';
            echo form_close();
            }
        ?>  
    </table>
</div>