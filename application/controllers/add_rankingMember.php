<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_rankingMember extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_rankingCommittee');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->model('m_display');
		$content = array('page_content' => $this->m_display->programType());
		$this->load->view('includes/header_faculty');
 		$this->load->view('includes/navi_rankChair');
		$this->load->view('register_committee',$content);
		$this->load->view('includes/footer');

	}

	public function add_new_member()
	{
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('firstname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Email Address', 'required|xss_clean');
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		$this->form_validation->set_rules('program', 'Program', 'required|xss_clean');

		if($this->form_validation->run() != NULL)
		{
			$faculty['lastname'] 	= $this->input->post('lastname');
			$faculty['firstname'] 	= $this->input->post('firstname');
			$faculty['email'] 		= $this->input->post('email');
			$faculty['username'] 	= $this->input->post('username');
			$faculty['password'] 	= $this->input->post('password');
			$faculty['progID'] 		= $this->input->post('program');

			// echo "<pre>";
			// print_r($faculty);
			// echo "</pre>";
			$this->load->model('m_rankingCommittee');
			$this->m_rankingCommittee->add_member($faculty);

			redirect(base_url().'index.php/add_rankingMember');
		}
		else
		{
			echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		}

	}
}