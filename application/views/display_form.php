<<<<<<< HEAD
<body id="content">
=======
<<<<<<< HEAD
<body id="content">
=======
<<<<<<< HEAD
<body id="content">
=======
<<<<<<< HEAD
<body id="content">
=======
<div id="body">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
	<?php
	for($x=0;$x<count($program);$x++)
	{
		$program_option[$program[$x]['prog_id']] = $program[$x]['prog_name'];
	}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
	echo "<h3>View Faculty</h3>";
	echo "<table>";
		$this->load->helper('form');
		echo form_open('');
			echo "<tr><td>Select Program</td><td>".form_dropdown('program',$program_option)."</td></tr>";
			echo "<tr><td colspan=2>".form_submit('', 'View')."</td></tr>";
		echo form_close();
	echo "</table>";
	?>
<<<<<<< HEAD
</body>
=======
<<<<<<< HEAD
</body>
=======
<<<<<<< HEAD
</body>
=======
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
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
