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
			echo "<tr><td>Select Program</td><td>".form_dropdown('program',$program_option)."</td></tr>";
			echo "<tr><td colspan=2>".form_submit('', 'View')."</td></tr>";
		echo form_close();
	echo "</table>";
	?>
</body>