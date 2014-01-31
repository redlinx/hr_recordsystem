<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
		foreach ($this->db->get('upload')->result() as $uploaded_file)
		{
			if (file_exists('./uploads/' . $uploaded_file->file_name))
			{
				echo $uploaded_file->emp_id, '<br/>';
				echo '<img src="' . base_url('uploads/' . $uploaded_file->file_name) . '">';
			}
		}
	}

	function do_upload()
	{
		if($this->input->post())
		{	
			$config['upload_path'] 		= './uploads/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '100000';
			$config['max_width']  		= '99999';
			$config['max_height']  		= '9999';
			$config['file_name']		= $this->input->post('user') . '_' . ($this->db->count_all('upload')+1);

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('upload_form', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";
				// echo $this->upload->data()['file_name'];
				// echo $this->input->post('user');
				$content = array('file_name' => $this->upload->data()['file_name'], 'emp_id' => $this->input->post('user'));
				$this->db->insert('upload', $content);
				$this->load->view('upload_success', $data);

			}
		}
	}
}
?>