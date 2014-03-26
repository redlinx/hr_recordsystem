<div class="body">
	<?php
		foreach($page_content as $page)
		{
			$page_array[$page['rank_id']] = $page['rank_level'];
		}
	?>
	<h2>Ranking Committee</h2></br>
	<?php echo '<a href="'.base_url().'index.php/ranking_committee/add_Commitee">'; ?> <button class="btn btn-primary">Add Member</button></a>
	<br/><br/>
	<table id="list" width="400" align="left" class="table table-striped sortable">
			<tr align="left">
				<th>Last Name</th>
				<th>First Name</th>
				<th>Program to Rank</th>
				<th>Level</th>
				<th>Action</th>
				<th>Action</th>
			</tr>
			<?php
				for($x=0;$x<count($page_view_content);$x++)
				{
					echo form_open('ranking_committee/set_level');
					echo form_hidden('empID', $page_view_content[$x]['faculty_emp_id'] );
						echo '<tr>';
							echo '<td>'.$page_view_content[$x]['lastname'].'</td>';
							echo '<td>'.$page_view_content[$x]['firstname'].'</td>';
							echo '<td>'.$page_view_content[$x]['prog_name'].'</td>';
							echo '<td>'.form_dropdown('level',$page_array, $page_view_content[$x]['rank_id'], 'class="form-control input-sm"') .'</td>';
							echo '<td>'.form_submit('mysubmit', 'Assign', 'class="btn btn-sm btn-primary"').'</td>';
							echo '<td><a href="'.base_url().'index.php/ranking_committee/unset_member/'.$page_view_content[$x]['faculty_emp_id'].'"><button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>';
						echo '</tr>';
					echo form_close();
				}
			?>
	</table>
	<br/>
</div>