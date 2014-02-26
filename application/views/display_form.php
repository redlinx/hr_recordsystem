<div id="body">
	<?php
	for($x=0;$x<count($program);$x++)
	{
		$program_option[$program[$x]['prog_id']] = $program[$x]['prog_name'];
	}
	?>
	<br/>
	<table id="list">
		<?php
			echo form_open('');
				echo "<tr><td>Select Program</td><td>".form_dropdown('program',$program_option)."</td></tr>";
				echo "<tr><td colspan=2>".form_submit('', 'View')."</td></tr>";
			echo form_close();
		?>
	</table>
</div>