<div id="body">
    <h3>Uploads</h3>
	<table width="560" align="left">
        <tr align="left">
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Title</th>
            <th>Category</th>
            <th>View</th>
            <th>Verify</th>
           
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo form_open();
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['title']."</td>";
                    echo "<td>".$page_view_content[$x]['category_name']."</td>";
                    echo '<td><a href="'.base_url().'index.php/view_hr/view_upload/'.$page_view_content[$x]['upload_id'].'"> View </a></td>';
                    echo '<td><a href="'.base_url().'index.php/display_notification/verify_notification/'.$page_view_content[$x]['upload_id'].'"> Verify </a></td>';
                    echo '</tr>';
                echo form_close();
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
            }
        ?>    
    </table>
</div>