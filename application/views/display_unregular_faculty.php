<div class="body">
    <h3> Probationary Faculty</h3>
    <?php echo '<a href="' . base_url() . 'index.php/Report_controller/Un_Reg_reports">';?>
    <button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-print"></span></button> </a>
    <br/><br/>
    <table width="450" align="left" class="table table-striped">
        <tr align="left">
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Program</th>
            <th>Date Hired</th>
           
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['prog_name']."</td>";
                    echo "<td>".$page_view_content[$x]['MonthName'].', '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year']."</td>";
                    echo '</tr>';            
            }
        ?>    
    </table>
</div>