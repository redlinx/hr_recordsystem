<div class="body">
    <script>
    function goBack()
    {
        window.history.go(-1)
    }
    </script>
    <br/>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><h4>Rank History</h4><br/>
    <table width="400" align="left" class="table">
        <tr align="left">
            <th>Rank</th>
            <th>Rank Points </th>
            <th>Date Promoted</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo form_open();
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['rank_desc']."</td>";
                    echo "<td>".$page_view_content[$x]['totalPoints']."</td>";
                    echo '<td>'.$page_view_content[$x]['MonthName'].' '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year'].'</td>';
                    echo '</tr>';
                echo form_close();
            }
        ?>  
    </table>
</div>