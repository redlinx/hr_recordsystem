<div class="body">
	<?php
		foreach($page_content as $page)
		{
			$page_array[$page['prog_id']] = $page['prog_name'];
		}
	?>
	<h3>Ranking Committee</h3>
	<br/>
	<table class="table table-striped">
			<tr align="left">
				<th>Last Name</th>
				<th>First Name</th>
				<th>Program</th>
				<th>Level</th>
				<th>Program to Rank</th>
				<th></th>
			</tr>
			<?php
				for($x = 0; $x < count($page_view_content); $x++)
				{
					echo form_open('ranking_committee/set_program');
						echo form_hidden('empID', $page_view_content[$x]['faculty_emp_id'] );
						echo '<tr>';
							echo '<td>'.$page_view_content[$x]['lastname'].'</td>';
							echo '<td>'.$page_view_content[$x]['firstname'].'</td>';
							echo '<td>'.$page_view_content[$x]['Program'].'</td>';
							echo '<td>'.$page_view_content[$x]['rank_level'].'</td>';
							echo '<td>'.form_dropdown('program', $page_array, $page_view_content[$x]['prog_id']).'</td>';
							echo '<td>'.form_submit('mysubmit', 'Assign', 'class="btn btn-sm btn-primary"').'</td>';
						echo '</tr>';
					echo form_close();
				}
			?>
	</table>
</div>