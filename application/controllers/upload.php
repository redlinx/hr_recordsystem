<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		//$this->load->database('rms');
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_display');
		$this->load->library('form_validation');
	}

	function index()
	{
		$content = array('error' => '',
						 'page_content' => $this->m_display->uploadCategory());
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
		$this->load->view('upload_form', $content);
		$this->load->view('includes/footer');
	}

	function view()
	{
		foreach ($this->db->get('upload')->result() as $uploaded_file)
		{
			if (file_exists('./uploads/' . $uploaded_file->file_name))
			{
				echo $uploaded_file->emp_id, '<br/>';
				echo '<img src="' . base_url('uploads/' . $uploaded_file->file_name) . '" width="900" height="620">';
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
			$config['file_name']		= $this->input->post('name') .'_'. $this->input->post('type') .'_'.($this->db->count_all('upload') + 1);

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{
				$content = array('error' => $this->upload->display_errors(),
						 		 'page_content' => $this->m_display->uploadCategory());
				$this->load->view('includes/header_faculty');
 				//$this->load->view('includes/navi_faculty');
				$this->load->view('upload_form', $content);
				$this->load->view('includes/footer');
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";
				// echo $this->upload->data()['file_name'];
				// echo $this->input->post('user');
				$content = array('file_name'  => $this->upload->data()['file_name'],
								 'title'  	  => $this->input->post('title'),
								 'category_id'=> $this->input->post('type'),
								 'emp_id'	  => $this->input->post('user'),
								 'remarks'	  => $this->input->post('remarks')
								 );
				
				$this->db->insert('upload', $content);
				$this->load->view('includes/header_faculty');
 				//$this->load->view('includes/navi_faculty');
				$this->load->view('upload_success', $data);
				$this->load->view('includes/footer');

			}
		}
	}
}
?>