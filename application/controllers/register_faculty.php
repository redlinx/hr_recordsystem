<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_faculty extends CI_Controller {

	public function index()
	{
		$this->load->model('hr');
		$page_content['program'] = $this->hr->display_program();
		$this->load->view('registration_form',$page_content);
	}

	public function add_new_record()
	{
		$faculty['emp_lname'] = $this->input->post('lname');
		$faculty['emp_fname'] = $this->input->post('fname');
		$faculty['emp_mname'] = $this->input->post('mname');
		$faculty['emp_bday'] = $this->input->post('bday');
		$faculty['emp_gender'] = $this->input->post('gender');
		$faculty['emp_civStat'] = $this->input->post('civStat');
		$faculty['emp_cellNo'] = $this->input->post('cellNo');
		$faculty['emp_tellNo'] = $this->input->post('tellNo');
		$faculty['emp_email'] = $this->input->post('email');
		$faculty['username'] = $this->input->post('username');
		$faculty['userpass'] = $this->input->post('userpass');
		$faculty['progID'] = $this->input->post('program');

		$this->load->model('hr');
		$this->hr->add_faculty($faculty);

		echo "record created.";
	}
}