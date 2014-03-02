<div id="content">
	<script>
		function goBack()
		{
			window.history.go(-1)
		}
	</script>
	<br/>
	<button onclick="goBack()"> Back </button>
	<br/>
	<?php echo form_open(); ?>
		File Name: <b><?php echo $page_view_content['file_name'] ?></b><br>
		Title: <b><?php echo $page_view_content['title'] ?></b><br>
		Category: <b><?php echo $page_view_content['category_name'] ?></b><br>
		Remarks: <b><?php echo $page_view_content['remarks'] ?></b><br>
		<img src="<?php echo base_url('uploads/'.$page_view_content['file_name']); ?>" width="785px" height="550px"><br>
	<?php echo form_close() ?>
	
</div>