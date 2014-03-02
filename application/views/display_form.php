<<<<<<< HEAD
<body id="content">
=======
<div id="body">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
	<?php
	for($x=0;$x<count($program);$x++)
	{
		$program_option[$program[$x]['prog_id']] = $program[$x]['prog_name'];
	}
<<<<<<< HEAD
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
=======
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
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
