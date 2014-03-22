<div class="body">
	<br/>
	<p>
		<b>Ranking Committee Chairman</b>
	</p>
	<?php echo '<a href="'.base_url().'index.php/ranking_committee/set_rankChairman">'; ?> [Add Chairman] </a>
	<table id="list" width="400" align="left" class="table table-stripped" >
			<tr align="left">
				<th>Last Name</th>
				<th>First Name</th>
				<th>Program to Rank</th>
				<th>Unset</th>
			</tr>
			<?php
				
				for($x=0;$x<count($page_view_content);$x++)
				{
					echo '<tr>';
					echo '<td>'.$page_view_content[$x]['lastname'].'</td>';
					echo '<td>'.$page_view_content[$x]['firstname'].'</td>';
					echo '<td>'.$page_view_content[$x]['prog_name'].'</td>';
					echo '<td><a href="'.base_url().'index.php/ranking_committee/unset_chairman/'.$page_view_content[$x]['faculty_emp_id'].'">Unset</a></td>';
					echo '</tr>';
				}
			?>
	</table>
	<br/>
</div>