<body id="content">
	<?php
	for($x=0;$x<$faculty_profile['prog_id'];$x++)
	{
		$program_option[$program[$x]['prog_id']] = $program[$x]['prog_name'];
	}
	echo "<h3>View Faculty</h3>";
	echo "<table>";
		$this->load->helper('form');
		echo form_open('');
			echo "<tr><td>Select Program</td><td>".form_dropdown('program',$program_option)."</td></tr>"; ?>
			<tr><td colspan=2><button type="mysubmit" class="btn btn-primary">View</button></td></tr>
		<?php
		echo form_close();
	echo "</table>";
	?>
</body>