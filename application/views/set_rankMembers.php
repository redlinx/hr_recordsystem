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
					echo '<td><a href="'.base_url().'index.php/ranking_committee/set_rankingMember/'.$page_view_content[$x]['emp_id'].'">Set</a></td>';
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
					echo '</tr>';
				}
			?>
	</table>
</div>