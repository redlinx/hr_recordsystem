<div class="body">
    <h3> Regular Faculty</h3>
    <?php echo '<a href="' . base_url() . 'index.php/Report_controller/reports">';?>
    <button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-print"></span></button> </a>
    <br/><br/>
    <table width="400" align="left" class="table table-striped sortable">
        <tr align="left" bgcolor="#E3E3E4">
            <th>LastName</th>
            <th>FirstName</th>
            <th>Program</th>
            <th>Date Hired</th>
            <th>Date Regular</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['prog_name']."</td>";
                    echo "<td>".$page_view_content[$x]['MonthName'].' '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year']."</td>";
                    echo "<td>".$page_view_content[$x]['RMonthName'].', '.$page_view_content[$x]['RDay'].', '.$page_view_content[$x]['RYear']."</td>";
                    echo '</tr>';
            }
        ?>    
    </table>

</div>