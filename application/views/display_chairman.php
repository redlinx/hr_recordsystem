<div class="body">
	<?php
		foreach($page_content as $page)
		{
			$page_array[$page['prog_id']] = $page['prog_name'];
		}
	?>
	<br/>
	<a href="http://localhost/hr_recordsystem/index.php/ranking_committee/view_rankMembers">[View Members]</a>
	<table width="400" align="left" class="table">
			<tr align="left">
				<th>Last Name</th>
				<th>First Name</th>
				<th>Program to Rank</th>
			</tr>
			<?php
				for($x = 0; $x < count($page_view_content); $x++)
				{
					echo form_open('ranking_committee/set_chairProgram');
						echo form_hidden('empID', $page_view_content[$x]['faculty_emp_id'] );
						echo '<tr>';
							echo '<td>'.$page_view_content[$x]['lastname'].'</td>';
							echo '<td>'.$page_view_content[$x]['firstname'].'</td>';
							echo '<td>'.form_dropdown('program', $page_array, $page_view_content[$x]['prog_id']).'</td>';
							echo '<td>'.form_submit('mysubmit', 'Set').'</td>';
						echo '</tr>';
					echo form_close();
				}
			?>
	</table>
	<br/>
</div>