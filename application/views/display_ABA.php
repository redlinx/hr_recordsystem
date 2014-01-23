<h3>Accountancy/Business Administration Program</h3>
<table width="400" align="left">
		<tr>
			<th>Last Name</th>
			<th>First Name</th>
			<th>View</th>
			<th>Update</th>
		</tr>
		<?php
			// echo '<pre>';
			// print_r($faculty_list);
			// echo '</pre>'; 

			for($x=0;$x<count($faculty_list);$x++)
			{
				echo '<tr>';
				echo '<td>'.$faculty_list[$x]['lastname'].'</td>';
				echo '<td>'.$faculty_list[$x]['firstname'].'</td>';
				echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty_list[$x]['emp_id'].'">View</a></td>';
				echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty_list[$x]['emp_id'].'">Update</a></td>';
			}
		?>
			
</table>
