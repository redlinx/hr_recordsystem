<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
<div class="body">
    <h3> UnRegular Faculty</h3>
	<table class="table table-striped">
        <tr>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<div id="body">
    <h3> UnRegular Faculty</h3>
	<table width="500" align="left">
        <tr align="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Date Hired</th>
           
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo form_open();
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['MonthName'].', '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year']."</td>";
                    echo '<td><a href="'.base_url().'index.php/display/display_unRegular_faculty/"></a></td>';
            
                    echo '</tr>';
                echo form_close();
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
            }?>    
            <button type="button" class="btn btn-default btn-mm"> 
                <?php echo '<a href="' . base_url() . 'index.php/Report_controller/Un_Reg_reports">'; ?>
                <span class="glyphicon glyphicon-print"></span> Generate
                </a></button>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
            }
            echo '<a href="' . base_url() . 'index.php/Report_controller/Un_Reg_reports">Generate</a>';
        ?>    
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
    </table>
</div>