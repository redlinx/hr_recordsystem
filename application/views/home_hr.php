<<<<<<< HEAD
<div class="body" align="center">
=======
<<<<<<< HEAD
<div class="body" align="center">
=======
<div id="body">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
	<b>
    	<font size="3">
    		Welcome  <?php echo $this->session->userdata('firstname'); ?> <?php echo $this->session->userdata('lastname'); ?>!
    	</font>
    </b><br/><br/>
    <a href="http://localhost/hr_recordsystem/index.php/upload_profPic">
<<<<<<< HEAD
    	<img src = "<?php echo base_url('uploads/'. $this->session->userdata('lastname') .'_'. $this->session->userdata('firstname') . '_profPic.jpg') ?>"></img>	
    </a>
=======
<<<<<<< HEAD
    	<img src = "<?php echo base_url('uploads/'. $this->session->userdata('lastname') .'_'. $this->session->userdata('firstname') . '_profPic.jpg') ?>"></img>	
    </a>
=======
    	<img id="ProfPic" src = "<?php echo base_url('uploads/'. $this->session->userdata('lastname') .'_'. $this->session->userdata('firstname') . '_profPic.jpg') ?>"></img>	
    </a>
   </br>
    	<table width ="400" align ="center">
    		<tr align ="center">
    			<?php
		    echo form_open('search/execute_search');

		    echo form_input(array('name'=>'search', 'placeholder' => 'Search Faculty'));

		    echo form_submit('search_submit','Search');


?>
	</tr>

	</table>
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
</div>    