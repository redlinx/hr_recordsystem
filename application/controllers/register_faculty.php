<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_faculty extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('HR');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->model('m_display');
		$content = array('page_content' => $this->m_display->programType(),
 						 'page_view_content' => $this->m_display->facultyLevel());
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
 		//$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
 		//$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
 		//$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
 		//$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
 		//$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
 		//$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
 		//$this->load->view('includes/navi_hr');
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
		$this->load->view('registration_form',$content);
		$this->load->view('includes/footer');

	}

	public function add_new_record()
	{
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('firstname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('middlename', 'Middle Name', 'required|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Email Address', 'required|xss_clean');
		$this->form_validation->set_rules('civStat', 'Civil Status', 'required|xss_clean');
		$this->form_validation->set_rules('cellNo', 'Cell No.', 'required|xss_clean');
		$this->form_validation->set_rules('tellNo', 'Tell No.', 'required|xss_clean');
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		$this->form_validation->set_rules('program', 'Program', 'required|xss_clean');

		if($this->form_validation->run() != NULL)
		{
			$faculty['lastname'] 	= $this->input->post('lastname');
			$faculty['firstname'] 	= $this->input->post('firstname');
			$faculty['middlename'] 	= $this->input->post('middlename');
			$faculty['bday'] 		= $this->input->post('year')."-".$this->input->post('day')."-".$this->input->post('month');
			$faculty['gender'] 		= $this->input->post('gender');
			$faculty['civStat'] 	= $this->input->post('civStat');
			$faculty['cellNo'] 		= $this->input->post('cellNo');
			$faculty['tellNo'] 		= $this->input->post('tellNo');
			$faculty['email'] 		= $this->input->post('email');
			$faculty['username'] 	= $this->input->post('username');
			$faculty['password'] 	= $this->input->post('password');
			$faculty['progID'] 		= $this->input->post('program');

			// echo "<pre>";
			// print_r($faculty);
			// echo "</pre>";
			$this->load->model('hr');
			$this->hr->add_faculty($faculty);

			redirect(base_url().'index.php/register_faculty');
		}
		else
		{
			echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		}

	}
}