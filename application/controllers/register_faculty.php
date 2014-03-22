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

		if($this->session->userdata('level') == 2)
        {
          $this->load->view('includes/header');
          $this->load->view('includes/navi_hr');
          $this->load->view('registration_form', $content);
          $this->load->view('includes/footer');
        }
        else if($this->session->userdata('level') == 5)
        {
          $this->load->view('includes/header');
          $this->load->view('includes/navi_hrSec');
          $this->load->view('registration_form', $content);
          $this->load->view('includes/footer');
        }

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
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean|md5');
		$this->form_validation->set_rules('level', 'Level', 'required|xss_clean');
		$this->form_validation->set_rules('program', 'Program', 'required|xss_clean');

		if($this->form_validation->run() != NULL)
		{
			$faculty['lastname'] 	= $this->input->post('lastname');
			$faculty['firstname'] 	= $this->input->post('firstname');
			$faculty['middlename'] 	= $this->input->post('middlename');
			$faculty['bday'] 		= $this->input->post('year')."-".$this->input->post('month')."-".$this->input->post('day');
			$faculty['gender'] 		= $this->input->post('gender');
			$faculty['civStat'] 	= $this->input->post('civStat');
			$faculty['cellNo'] 		= $this->input->post('cellNo');
			$faculty['tellNo'] 		= $this->input->post('tellNo');
			$faculty['email'] 		= $this->input->post('email');
			$faculty['username'] 	= $this->input->post('username');
			$faculty['password'] 	= $this->input->post('password');
			$faculty['progID'] 		= $this->input->post('program');
			$faculty['levelID'] 	= $this->input->post('level');

			// echo "<pre>";
			// print_r($faculty);
			// echo "</pre>";
			$this->load->model('hr');
			$this->hr->add_faculty($faculty);

			redirect(base_url().'index.php/verifylogin');
		}
		else
		{
			echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		}

	}
}