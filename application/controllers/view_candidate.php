<div id="body">
	<table width="600" align="left">
        <tr align="left">
            <th>Year of Services</th>
            <th>Date Hired</th>
            <th>Lastname</th>
            <th>Firstname</th>
        </tr>
        <?php
            $faculty = $this->hr->display_regularization_candidate();
            for($x=0;$x<count($faculty);$x++)
            {
                echo form_open();
                    echo '<tr>';
                    echo "<td>".$faculty[$x]['Years_Of_Service']."</td>";
                    echo "<td>".$faculty[$x]['date_hired']."</td>";
                    echo "<td>".$faculty[$x]['lastname']."</td>";
                    echo "<td>".$faculty[$x]['firstname']."</td>";
                    echo '</tr>';
                echo form_close();
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
            }
        ?>    
    </table>
</div>