<div class="body">
	<table id="list" width="500" align="left" class="table table-striped sortable">
			<tr align="left">
				<th>Last Name</th>
				<th>First Name</th>
				<th>Assign</th>
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
					if($page_view_content[$x]['rank_level'] == 1)
					{
						echo '<td><a href="'.base_url().'index.php/ranking_committee/add_rankingCommittee/'.$page_view_content[$x]['emp_id'].'"><button class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a></td>';
					}
					else
					{
						echo '<td><a href="'.base_url().'index.php/ranking_committee/unset_member/'.$page_view_content[$x]['emp_id'].'"><button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span></button></a></td>';	
					}
					echo '</tr>';
				}
			?>
	</table>
</div>