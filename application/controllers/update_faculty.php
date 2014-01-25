<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_faculty extends CI_Controller {

	public function index()
	{
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
	}
}