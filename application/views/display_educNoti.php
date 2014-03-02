<div id="body">
<<<<<<< HEAD
    <h3>Educational Attainment Notification</h3>
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <h3>Educational Attainment Notification</h3>
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <h3>Educational Attainment Notification</h3>
    <table class="table table-striped">
=======
    <h3>Educational Attainment</h3>
    <table width="400" align="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
        <tr align="left">
            <th>Firstname</th>
            <th>Lastname</th>
            <th>View</th>
            <th>Verify</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo form_open();
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo '<td><a href="'.base_url().'index.php/display_notification/view_education/'.$page_view_content[$x]['educ_id'].'">View</a></td>';
                    echo '<td><a href="'.base_url().'index.php/display_notification/verify_education/'.$page_view_content[$x]['educ_id'].'"> Verify </a></td>';
                    echo '</tr>';
                echo form_close();
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
            }
        ?>  
    </table>
</div>