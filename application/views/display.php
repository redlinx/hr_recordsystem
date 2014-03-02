<<<<<<< HEAD
<body class="body">
	
	<table class="table table-striped">
=======
<div id="body">
	<br/>
	<table id="list" width="400" align="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
			<tr align="left">
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
					echo '<td><a href="'.base_url().'index.php/view_hr/faculty/'.$faculty_list[$x]['emp_id'].'">View</a></td>';
<<<<<<< HEAD
				}
			?>
	</table>
</body>
=======
					echo '</tr>';
				}
			?>
	</table>
</div>
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
