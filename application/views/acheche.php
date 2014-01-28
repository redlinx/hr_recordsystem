<?php
echo '<pre>';
print_r($page_content);
print_r($page_view_content);
echo '</pre>';
foreach($page_content as $page)
{
	if ($page['prog_name'] == $page_view_content['prog_name'])
	{
		$current_program = $page['prog_id'];
	}
	$page_array[$page['prog_id']] = $page['prog_name'];
}
echo form_dropdown('acheche', $page_array, $current_program);
?>