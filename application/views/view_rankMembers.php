<div class="body">
	<br/>
	<p>
		<b>Ranking Chairman</b>
		<a href="http://localhost/hr_recordsystem/index.php/ranking_committee/chairman">[Set Chairman]</a>
	</p>
	<table id="list" width="400" align="left" class="table">
			<tr align="left">
				<th>Last Name</th>
				<th>First Name</th>
				<th>Program to Rank</th>
			</tr>
			<?php
				for($x=0;$x<count($page_content);$x++)
				{
					echo '<tr>';
					echo '<td>'.$page_content[$x]['lastname'].'</td>';
					echo '<td>'.$page_content[$x]['firstname'].'</td>';
					echo '<td>'.$page_content[$x]['prog_name'].'</td>';
					echo '</tr>';
				}
			?>
	</table>
	<p>
		<b>Ranking Member</b>
		<a href="http://localhost/hr_recordsystem/index.php/ranking_committee/members">[Set Members]</a>
	</p>
	<table id="list" width="400" align="left" class="table">
			<tr align="left">
				<th>Last Name</th>
				<th>First Name</th>
				<th>Program to Rank</th>
			</tr>
			<?php
				
				for($x=0;$x<count($page_view_content);$x++)
				{
					echo '<tr>';
					echo '<td>'.$page_view_content[$x]['lastname'].'</td>';
					echo '<td>'.$page_view_content[$x]['firstname'].'</td>';
					echo '<td>'.$page_view_content[$x]['prog_name'].'</td>';
					echo '</tr>';
				}
			?>
	</table>
	<br/>
</div>