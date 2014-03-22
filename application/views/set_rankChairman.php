<div class="body">
	<table id="list" width="500" align="left" class="table">
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
					echo '<td><a href="'.base_url().'index.php/ranking_committee/set_rankingChairman/'.$page_view_content[$x]['emp_id'].'">Set</a></td>';
					echo '</tr>';
				}
			?>
	</table>
	<br/>
</div>