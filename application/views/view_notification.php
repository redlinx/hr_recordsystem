<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
<div>
    <h3>Uploads Notification</h3>
	 <table class="table table-striped">
        <tr align="left">
            <th>Lastname</th>
            <th>Category</th>
            <th>Title</th>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<div id="body">
    <h3>Uploads</h3>
	<table width="560" align="left">
        <tr align="left">
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Title</th>
            <th>Category</th>
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
            <th>View</th>
            <th>Verify</th>
           
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo form_open();
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
<<<<<<< HEAD
                    echo "<td>".$page_view_content[$x]['category_name']."</td>";
                    echo "<td>".$page_view_content[$x]['title']."</td>";
                    echo '<td><a href="'.base_url().'index.php/upload/view/"> View </a></td>';
=======
<<<<<<< HEAD
                    echo "<td>".$page_view_content[$x]['category_name']."</td>";
                    echo "<td>".$page_view_content[$x]['title']."</td>";
                    echo '<td><a href="'.base_url().'index.php/upload/view/"> View </a></td>';
=======
<<<<<<< HEAD
                    echo "<td>".$page_view_content[$x]['category_name']."</td>";
                    echo "<td>".$page_view_content[$x]['title']."</td>";
                    echo '<td><a href="'.base_url().'index.php/upload/view/"> View </a></td>';
=======
<<<<<<< HEAD
                    echo "<td>".$page_view_content[$x]['category_name']."</td>";
                    echo "<td>".$page_view_content[$x]['title']."</td>";
                    echo '<td><a href="'.base_url().'index.php/upload/view/"> View </a></td>';
=======
<<<<<<< HEAD
                    echo "<td>".$page_view_content[$x]['category_name']."</td>";
                    echo "<td>".$page_view_content[$x]['title']."</td>";
                    echo '<td><a href="'.base_url().'index.php/upload/view/"> View </a></td>';
=======
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['title']."</td>";
                    echo "<td>".$page_view_content[$x]['category_name']."</td>";
                    echo '<td><a href="'.base_url().'index.php/view_hr/view_upload/'.$page_view_content[$x]['upload_id'].'"> View </a></td>';
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
                    echo '<td><a href="'.base_url().'index.php/display_notification/verify_notification/'.$page_view_content[$x]['upload_id'].'"> Verify </a></td>';
                    echo '</tr>';
                echo form_close();
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
            }
        ?>    
    </table>
</div>