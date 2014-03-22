<div class="body">
    <h3> Regular Faculty</h3>
    <?php echo '<a href="' . base_url() . 'index.php/Report_controller/reports">';?>
    <button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-print"></span></button> </a>
    <br/><br/>
    <table width="400" align="left" class="table">
        <tr align="left">
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Program</th>
            <th>Date Regular</th>

        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {

                echo form_open();
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['prog_name']."</td>";
                    echo "<td>".$page_view_content[$x]['RMonthName'].', '.$page_view_content[$x]['RDay'].', '.$page_view_content[$x]['RYear']."</td>";
                    echo '<td><a href="'.base_url().'index.php/display/display_regular_faculty/"></a></td>';
            
                    echo '</tr>';
                echo form_close();
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';

                // echo $program->prog_name;
                // foreach ($faculties as $value) {
                //     // echo '<pre>';
                //     // print_r($value);
                //     // echo '</pre>';
                //     if ($program->prog_name == $value->prog_name) {
                //         echo form_open();
                //             echo '<tr>';
                //             echo "<td>".$value->lastname."</td>";
                //             echo "<td>".$value->firstname."</td>";
                //             echo "<td>".$value->prog_name."</td>";
                //             echo "<td>".$value->RMonthName.', '.$value->RDay.', '.$value->RYear."</td>";
                //             echo '<td><a href="'.base_url().'index.php/display/display_regular_Faculty/"></a></td>';
                //             echo '</tr>';
                //         echo form_close();
                     // }             
                // }  

            }
        ?>    
    </table>

</div>