<div class="body">
	<br/>
	<table id="list" width="500" align="left">
			<tr align="left">
				<th>Last Name</th>
				<th>First Name</th>
				<th>View</th>
				<th>Status</th>
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
					echo '<td><a href="'.base_url().'index.php/view_hr/faculty/'.$faculty_list[$x]['emp_id'].'">View</a></td>';
					if($faculty_list[$x]['acct_stat'] == 1)
					{
						echo '<td><a href="'.base_url().'index.php/hr_update/deactivate/'.$faculty_list[$x]['emp_id'].'">Deactivate</a></td>';
					}
					else
					{
						echo '<td><a href="'.base_url().'index.php/hr_update/activate/'.$faculty_list[$x]['emp_id'].'">Activate</a></td>';
					}
					echo '</tr>';
				}
			?>
	</table>
	<br/>
</div>