<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
<body id="content2">
	<br/>
	<table class="table table-striped">
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
				}
			?>
	</table>
<<<<<<< HEAD
</body>
=======
<<<<<<< HEAD
</body>
=======
</body>
=======
<div id="body">
	<?php
	for($x=0;$x<count($page_content);$x++)
    {
        $program_option[$page_content[$x]['prog_id']] = $page_content[$x]['prog_name'];
    }
    ?>
	<br/>
	<table width="400" align="left">
			<tr align="left">
				<th>Last Name</th>
				<th>First Name</th>
				<th>Program to Rank</th>
				<th></th>
			</tr>
			<?php
				// echo '<pre>';
				// print_r($page_view_content);
				// echo '</pre>'; 
				for($x=0;$x<count($page_view_content);$x++)
				{
					echo form_open('ranking_committee/set_program');
					echo form_hidden('empID', $page_view_content[$x]['faculty_emp_id'] );
					echo '<tr>';
					echo '<td>'.$page_view_content[$x]['lastname'].'</td>';
					echo '<td>'.$page_view_content[$x]['firstname'].'</td>';
					echo '<td>'.form_dropdown('program', $program_option).'</td>';
					echo '<td>'.form_submit('mysubmit', 'Set').'</td>';
					echo form_close();
				}
			?>
	</table>
</div>
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
