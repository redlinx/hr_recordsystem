<div id="body">
	<b>
    	<font size="3">
    		Welcome  <?php echo $this->session->userdata('firstname'); ?> <?php echo $this->session->userdata('lastname'); ?>!
    	</font>
    </b><br/><br/>
    <a href="http://localhost/hr_recordsystem/index.php/upload_profPic">
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
</div>    