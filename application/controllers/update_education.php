<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_education extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('HR');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function educ_form()
	{
		$empID = $this->uri->segment(3, 0);
		$this->load->model('faculty');
		$page_content['type'] = $this->faculty->display_educType();
		$this->load->view('update_education', $page_content);
	}

	public function add_educ()
	{
		// $this->form_validation->set_rules('emp_lname', 'Last Name', 'required|xss_clean');
		// $this->form_validation->set_rules('emp_fname', 'First Name', 'required|xss_clean');
		// $this->form_validation->set_rules('emp_mname', 'Middle Name', 'required|xss_clean');
		// $this->form_validation->set_rules('emp_gender', 'Gender', 'required|xss_clean');
		// $this->form_validation->set_rules('emp_bday', 'Birthday', 'required|xss_clean');
		// $this->form_validation->set_rules('emp_email', 'Email Address', 'required|xss_clean');
		// $this->form_validation->set_rules('emp_civStat', 'Civil Status', 'required|xss_clean');
		// $this->form_validation->set_rules('emp_cellNo', 'Cell No.', 'required|xss_clean');
		// $this->form_validation->set_rules('emp_tellNo', 'Tell No.', 'required|xss_clean');
		// $this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		// $this->form_validation->set_rules('userpass', 'Password', 'required|xss_clean|md5');
		// $this->form_validation->set_rules('program', 'Program', 'required|xss_clean');

		$faculty['school_name']	= $this->input->post('school_name');
		$faculty['address'] 	= $this->input->post('address');
		$faculty['year'] 		= $this->input->post('year');
		$faculty['degree'] 		= $this->input->post('degree');
		$faculty['typeID'] 		= $this->input->post('type');
		$faculty['emp_id'] 		= $this->session->userdata('emp_id');

		// echo '<pre>';
		// print_r($faculty);
		// echo '</pre>';
		$this->load->model('faculty');
		$this->faculty->add_education($faculty);
		
		redirect(base_url().'index.php/verifylogin');

	}
}