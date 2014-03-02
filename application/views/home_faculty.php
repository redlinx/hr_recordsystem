<<<<<<< HEAD
<div class="body" align="center">
=======
<div id="body">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
    <b>
    	<font size="3">
    		Welcome  <?php echo $this->session->userdata('firstname'); ?>!	
    	</font>
    </b><br/><br/>
    <a href="http://localhost/hr_recordsystem/index.php/upload_profPic">
<<<<<<< HEAD
    	<img src="<?php echo base_url('uploads/'. $this->session->userdata('lastname') .'_'. $this->session->userdata('firstname') . '_profPic.jpg') ?>" alt="Responsive image" class="img-thumbnail">
    	</a>
=======
    	<img id="ProfPic" src = "<?php echo base_url('uploads/'. $this->session->userdata('lastname') .'_'. $this->session->userdata('firstname') . '_profPic.jpg') ?>"></img>	
    </a>
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
</div>      