<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('HR');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	
	function create_faculty_profile()
	{
		$this->load->model('HR');

		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		$this->form_validation->set_rules('date_hired', 'Date Hired', 'required|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('fname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('mname', 'Middle Name', 'required|xss_clean');
		
		
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$lname 		= $this->input->post('lname');
		$fname 		= $this->input->post('fname');
		$mname 		= $this->input->post('mname');
		$date_hired = $this->input->post('date_hired');
		$gender 	= $this->input->post('gender');
		$bday 		= $this->input->post('bday');


		$this->load->model('HR');
    	$this->HR->insert_faculty_profile($lname,$fname,$mname,$username,$password,$date_hired,$gender,$bday);
    	$this->load->view('add',$lname,$fname,$mname,$username,$password,$date_hired,$gender,$bday);

	}

}