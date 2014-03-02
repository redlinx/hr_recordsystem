<div class="body" align="center">
    <b>
    	<font size="3">
    		Welcome  <?php echo $this->session->userdata('firstname'); ?>!	
    	</font>
    </b><br/><br/>
    <a href="http://localhost/hr_recordsystem/index.php/upload_profPic">
    	<img src="<?php echo base_url('uploads/'. $this->session->userdata('lastname') .'_'. $this->session->userdata('firstname') . '_profPic.jpg') ?>" alt="Responsive image" class="img-thumbnail">
    	</a>
</div>      