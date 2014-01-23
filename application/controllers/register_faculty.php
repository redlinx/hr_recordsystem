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
		$this->load->model('hr');
		$page_content['program'] = $this->hr->display_program();
		$this->load->view('registration_form',$page_content);
		
	}

	public function add_new_record()
	{

		$this->form_validation->set_rules('emp_lname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('emp_fname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('emp_mname', 'Middle Name', 'required|xss_clean');
		$this->form_validation->set_rules('emp_gender', 'Gender', 'required|xss_clean');
		$this->form_validation->set_rules('emp_bday', 'Birthday', 'required|xss_clean');
		$this->form_validation->set_rules('emp_email', 'Email Address', 'required|xss_clean');
		$this->form_validation->set_rules('emp_civStat', 'Civil Status', 'required|xss_clean');
		$this->form_validation->set_rules('emp_cellNo', 'Cell No.', 'required|xss_clean');
		$this->form_validation->set_rules('emp_tellNo', 'Tell No.', 'required|xss_clean');
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('userpass', 'Password', 'required|xss_clean|md5');
		$this->form_validation->set_rules('program', 'Program', 'required|xss_clean');

		$faculty['emp_lname'] 	= $this->input->post('lname');
		$faculty['emp_fname'] 	= $this->input->post('fname');
		$faculty['emp_mname'] 	= $this->input->post('mname');
		$faculty['emp_bday'] 	= $this->input->post('bday');
		$faculty['emp_gender'] 	= $this->input->post('gender');
		$faculty['emp_civStat'] = $this->input->post('civStat');
		$faculty['emp_cellNo'] 	= $this->input->post('cellNo');
		$faculty['emp_tellNo'] 	= $this->input->post('tellNo');
		$faculty['emp_email'] 	= $this->input->post('email');
		$faculty['username'] 	= $this->input->post('username');
		$faculty['userpass'] 	= $this->input->post('userpass');
		$faculty['progID'] 		= $this->input->post('program');

		$this->load->model('hr');
		$this->hr->add_faculty($faculty);

		echo "Record Successfully Added";

		redirect(base_url().'index.php/register_faculty');
	}
}