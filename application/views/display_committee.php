<div id="body">
	<?php
	for($x=0;$x<count($page_content);$x++)
    {
        $program_option[$page_content[$x]['prog_id']] = $page_content[$x]['prog_name'];
    }
    ?>
	<br/>
	<table width="400" align="left">
			<tr align="left">
				<th>Last Name</th>
				<th>First Name</th>
				<th>Program to Rank</th>
				<th></th>
			</tr>
			<?php
				// echo '<pre>';
				// print_r($page_view_content);
				// echo '</pre>'; 
				for($x=0;$x<count($page_view_content);$x++)
				{
					echo form_open('ranking_committee/set_program');
					echo form_hidden('empID', $page_view_content[$x]['faculty_emp_id'] );
					echo '<tr>';
					echo '<td>'.$page_view_content[$x]['lastname'].'</td>';
					echo '<td>'.$page_view_content[$x]['firstname'].'</td>';
					echo '<td>'.form_dropdown('program', $program_option).'</td>';
					echo '<td>'.form_submit('mysubmit', 'Set').'</td>';
					echo form_close();
				}
			?>
	</table>
</div>