<div id="body">
	<p><b>Ranking Committee Members</b></p>
	<table id="list" width="250" align="left">
			<tr align="left">
				<th>Last Name</th>
				<th>First Name</th>
			</tr>
			<?php
				
				for($x=0;$x<count($page_view_content);$x++)
				{
					echo '<tr>';
					echo '<td>'.$page_view_content[$x]['lastname'].'</td>';
					echo '<td>'.$page_view_content[$x]['firstname'].'</td>';
					echo '</tr>';
				}
			?>
	</table>
</div>