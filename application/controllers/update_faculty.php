<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_faculty extends CI_Controller {

	public function index()
	{
<<<<<<< HEAD
		$this->load->model('hr');
		$this->load->view('registration_form',$page_content);
	}

	public function update_new_record()
	{
		$faculty['emp_lname'] = $this->input->post('lname');
		$faculty['emp_civStat'] = $this->input->post('civStat');
		$faculty['emp_cellNo'] = $this->input->post('cellNo');
		$faculty['emp_tellNo'] = $this->input->post('tellNo');
		$faculty['emp_email'] = $this->input->post('email');
		
		$this->load->model('hr');
		$this->hr->update_faculty($faculty);

		echo "record updated.";
=======
		
	}
	public function update_form()
	{
		$empID = $this->uri->segment(3, 0);
		$this->load->model('hr');
		//$page_content['program'] = $this->hr->display_program();
		$page_view_content['faculty_profile'] = $this->hr->view_faculty_profile($empID);
		$this->load->view('update_form', $page_view_content);

	}

	public function update_record()
	{
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

		echo "Record Successfully Updated";
>>>>>>> 4150845dfd5919a39081843690f6565a950188ef
	}
}