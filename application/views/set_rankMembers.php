<div id="body">
	<p><b>Set Ranking Members</b></p>
	<table id="list" width="500" align="left">
			<tr align="left">
				<th>Last Name</th>
				<th>First Name</th>
				<th>Set</th>
			</tr>
			<?php
				// echo '<pre>';
				// print_r($faculty_list);
				// echo '</pre>'; 
				for($x=0;$x<count($page_view_content);$x++)
				{
					echo '<tr>';
					echo '<td>'.$page_view_content[$x]['lastname'].'</td>';
					echo '<td>'.$page_view_content[$x]['firstname'].'</td>';
<<<<<<< HEAD
					echo '<td><a href="'.base_url().'index.php/ranking_committee/set_rankingMember/'.$page_view_content[$x]['faculty_emp_id'].'">Set</a></td>';
=======
<<<<<<< HEAD
					echo '<td><a href="'.base_url().'index.php/ranking_committee/set_rankingMember/'.$page_view_content[$x]['faculty_emp_id'].'">Set</a></td>';
=======
<<<<<<< HEAD
					echo '<td><a href="'.base_url().'index.php/ranking_committee/set_rankingMember/'.$page_view_content[$x]['faculty_emp_id'].'">Set</a></td>';
=======
					echo '<td><a href="'.base_url().'index.php/ranking_committee/set_rankingMember/'.$page_view_content[$x]['emp_id'].'">Set</a></td>';
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
					echo '</tr>';
				}
			?>
	</table>
</div>