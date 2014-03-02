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
		$this->load->view('includes/header');
 		$this->load->view('includes/navi_hr');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
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