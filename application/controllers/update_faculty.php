<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_faculty extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('HR');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function update_form()
	{
		$empID = $this->uri->segment(3, 0);
		$this->load->model('hr');
		$this->load->view('update_form', array('page_content' => $this->hr->display_program(), 'page_view_content' => $this->hr->view_faculty_profile($empID)));
	}

	public function update_record()
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
		$this->hr->update_faculty($faculty);

		redirect(base_url().'index.php/verifylogin');

	}
}