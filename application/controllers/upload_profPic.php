<?php

class Upload_profPic extends CI_Controller {

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
		$content = array('error' => '',);
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		if ($this->session->userdata('level') == 1)
        {
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
            //$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
            //$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
            //$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
            //$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
            //$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
            //$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
            //$this->load->view('includes/navi_faculty');
=======
            $this->load->view('includes/header');
            $this->load->view('includes/navi_faculty');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
            $this->load->view('upload_profPic', $content);
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 2)
        {
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
           // $this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
           // $this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
           // $this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
           // $this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
           // $this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
           // $this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
           // $this->load->view('includes/navi_hr');
=======
            $this->load->view('includes/header');
            $this->load->view('includes/navi_hr');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
            $this->load->view('upload_profPic', $content);
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 5)
        {
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
            $this->load->view('includes/header');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
            $this->load->view('includes/navi_rankChair');
            $this->load->view('upload_profPic', $content);
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 6)
        {
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
            $this->load->view('includes/header');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
            $this->load->view('includes/navi_rankMember');
            $this->load->view('upload_profPic', $content);
            $this->load->view('includes/footer');
        }

		foreach ($this->db->get('upload')->result() as $uploaded_file)
		{
			// if (file_exists('./uploads/' . $uploaded_file->file_name))
			// {
			// 	echo $uploaded_file->emp_id, '<br/>';
			// 	echo '<img src="' . base_url('uploads/' . $uploaded_file->file_name) . '">';
			// }
		}
	}

	function do_upload()
	{
		if($this->input->post())
		{	
			$config['upload_path'] 		= './uploads/';
			$config['allowed_types'] 	= 'jpg';
			$config['overwrite'] 		= 'TRUE';
			$config['max_size']			= '100000';
			$config['max_width']  		= '99999';
			$config['max_height']  		= '9999';
			$config['file_name']		= $this->input->post('name') .'_profPic';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{
				$content = array('error' => $this->upload->display_errors());
				
				if ($this->session->userdata('level') == 1)
		        {
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
		            //$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
		            //$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
		            //$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
		            //$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
		            //$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
		            //$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
		            //$this->load->view('includes/navi_faculty');
=======
		            $this->load->view('includes/header');
		            $this->load->view('includes/navi_faculty');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
		            $this->load->view('upload_profPic', $content);
		            $this->load->view('includes/footer');
		        }
		        else if ($this->session->userdata('level') == 2)
		        {
<<<<<<< HEAD
		            $this->load->view('includes/header_hr');
		           // $this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_hr');
		           // $this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_hr');
		           // $this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_hr');
		           // $this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_hr');
		           // $this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_hr');
		           // $this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_hr');
		           // $this->load->view('includes/navi_hr');
=======
		            $this->load->view('includes/header');
		            $this->load->view('includes/navi_hr');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
		            $this->load->view('upload_profPic', $content);
		            $this->load->view('includes/footer');
		        }
		        else if ($this->session->userdata('level') == 5)
		        {
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
=======
		            $this->load->view('includes/header');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
		            $this->load->view('includes/navi_rankChair');
		            $this->load->view('upload_profPic', $content);
		            $this->load->view('includes/footer');
		        }
		        else if ($this->session->userdata('level') == 6)
		        {
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
		            $this->load->view('includes/header_faculty');
=======
		            $this->load->view('includes/header');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
		            $this->load->view('includes/navi_rankMember');
		            $this->load->view('upload_profPic', $content);
		            $this->load->view('includes/footer');
		        }
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
								 'title'  	  => 'Profile Picture',
								 'category_id'=> NULL,
								 'emp_id'	  => $this->session->userdata('emp_id'),
								 'remarks'	  => 'Profile Picture',
								 'status'	  => 1
								 );
				
				$this->db->insert('upload', $content);

				if ($this->session->userdata('level') == 1)
		        {
		            redirect(base_url().'index.php/verifylogin');
		        }
		        else if ($this->session->userdata('level') == 2)
		        {
		        	redirect(base_url().'index.php/verifylogin');
		        }
		        else if ($this->session->userdata('level') == 5)
		        {
		            redirect(base_url().'index.php/verifylogin');;
		        }
		        else if ($this->session->userdata('level') == 6)
		        {
		            redirect(base_url().'index.php/verifylogin');
		        }

			}
		}
	}
}
?>