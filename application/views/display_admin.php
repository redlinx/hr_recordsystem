<div class="body">
	<br/>
	<table id="list" width="400" align="left" class="table table-striped">
			<tr align="left" bgcolor="#E3E3E4">
				<th>Last Name</th>
				<th>First Name</th>
				<th>View</th>
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
					echo '<td><a href="'.base_url().'index.php/view_admin/faculty/'.$faculty_list[$x]['emp_id'].'">View</a></td>';
					echo '</tr>';
				}
			?>
	</table>
	<br/>
</div>