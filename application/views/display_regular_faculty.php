<<<<<<< HEAD
<div class="body">
    <h3> Regular Faculty</h3>
	<table class="table table-striped">
        <tr>
=======
<div id="body">
    <h3> Regular Faculty</h3>
	<table width="500" align="left">
        <tr align="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Date Regular</th>
           
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo form_open();
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['MonthName'].', '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year']."</td>";
                    echo '<td><a href="'.base_url().'index.php/display/display_regular_faculty/"></a></td>';
            
                    echo '</tr>';
                echo form_close();
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
<<<<<<< HEAD
            }    ?>    
            <button type="button" class="btn btn-default btn-mm"> 
             <?php echo '<a href="' . base_url() . 'index.php/Report_controller/reports">'; ?>
                <span class="glyphicon glyphicon-print"></span> Generate
                </a></button>
        </table>
=======
            }
            echo '<a href="' . base_url() . 'index.php/Report_controller/reports">Generate</a>';
        ?>    
    </table>
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
</div>