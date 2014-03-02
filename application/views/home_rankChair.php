<div id="body">
	<b>
    	<font size="3">
    		Welcome  <?php echo $this->session->userdata('firstname'); ?> <?php echo $this->session->userdata('lastname'); ?>!
    	</font>
    </b><br/><br/>
    <a href="http://localhost/hr_recordsystem/index.php/upload_profPic">
<<<<<<< HEAD
    	<img src = "<?php echo base_url('uploads/'. $this->session->userdata('lastname') .'_'. $this->session->userdata('firstname') . '_profPic.jpg') ?>"></img>	
=======
<<<<<<< HEAD
    	<img src = "<?php echo base_url('uploads/'. $this->session->userdata('lastname') .'_'. $this->session->userdata('firstname') . '_profPic.jpg') ?>"></img>	
=======
    	<img id="ProfPic" src = "<?php echo base_url('uploads/'. $this->session->userdata('lastname') .'_'. $this->session->userdata('firstname') . '_profPic.jpg') ?>"></img>	
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
    </a>
</div>      