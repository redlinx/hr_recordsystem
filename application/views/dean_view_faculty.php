<<<<<<< HEAD
<body id="content">
	<table class="table table-striped">
=======
<<<<<<< HEAD
<body id="content">
	<table class="table table-striped">
=======
<div id="body">
	<br/>
	<table id="list" width="400" align="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
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
					echo '<td><a href="'.base_url().'index.php/view_dean/faculty/'.$faculty_list[$x]['emp_id'].'">View</a></td>';
				}
			?>
	</table>
<<<<<<< HEAD
</body>
=======
<<<<<<< HEAD
</body>
=======
</div>
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
