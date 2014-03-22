<div id="body">
	<?php
	for($x=0;$x<count($program)-2;$x++)
	{
		$program_option[$program[$x]['prog_id']] = $program[$x]['prog_name'];
	}
	?>
	<br/>
	<table id="list">
		<?php
			echo form_open('');
				echo "<tr><td>Select Program:</td><td></td><td>".form_dropdown('program', $program_option, NULL, 'class="form-control input-sm"')."</td></tr>";
				echo "<tr><td colspan=3>".form_submit('', 'View','class="btn btn-default"')."</td></tr>";
			echo form_close();
		?>
	</table>
</div>
<br/>