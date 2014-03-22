<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hr_update extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_update');
		$this->load->model('hr');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function faculty_profile()
	{
		$this->form_validation->set_rules('emp_lname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('emp_fname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('emp_mname', 'Middle Name', 'required|xss_clean');
		$this->form_validation->set_rules('emp_gender', 'Gender', 'required|xss_clean');
		$this->form_validation->set_rules('emp_email', 'Email Address', 'required|xss_clean');
		$this->form_validation->set_rules('emp_civStat', 'Civil Status', 'required|xss_clean');
		$this->form_validation->set_rules('emp_cellNo', 'Cell No.', 'required|xss_clean');
		$this->form_validation->set_rules('emp_tellNo', 'Tell No.', 'required|xss_clean');
		$this->form_validation->set_rules('program', 'Program', 'required|xss_clean');

		$faculty['emp_id'] 		= $this->input->post('emp_id');
		$faculty['emp_lname'] 	= $this->input->post('lastname');
		$faculty['emp_fname'] 	= $this->input->post('firstname');
		$faculty['emp_mname'] 	= $this->input->post('middlename');
		$faculty['emp_bday'] 	= $this->input->post('year')."-".$this->input->post('month')."-".$this->input->post('day');
		$faculty['birthplace'] 	= $this->input->post('birthplace');
		$faculty['emp_gender'] 	= $this->input->post('gender');
		$faculty['emp_civStat'] = $this->input->post('civil_status');
		$faculty['religion'] 	= $this->input->post('religion');
		$faculty['emp_cellNo'] 	= $this->input->post('cell_no');
		$faculty['emp_tellNo'] 	= $this->input->post('tell_no');
		$faculty['emp_email'] 	= $this->input->post('email');
		$faculty['progID'] 		= $this->input->post('program');
		$faculty['city_add'] 	= $this->input->post('city_add');
		$faculty['prov_add'] 	= $this->input->post('prov_add');
		$faculty['philhealth'] 	= $this->input->post('philhealth');
		$faculty['pag_ibig'] 	= $this->input->post('pag_ibig');
		$faculty['sss'] 		= $this->input->post('sss');
		$faculty['tin'] 		= $this->input->post('tin');
		$faculty['levelID'] 	= $this->input->post('level');

		// echo '<pre>';
		// print_r($faculty);
		// echo '</pre>';
		$this->hr->update_faculty_profile($faculty);

		// $faculty['empID'] 		= $this->input->post('emp_id');
		// $faculty['rankID'] 		= $this->input->post('rank');
		// $this->hr->rank_history($faculty);
		redirect(base_url().'index.php/view_hr/faculty/'.$this->input->post('emp_id'));
	}

	public function activate()
	{
		$empID = $this->uri->segment(3, 0); 
		// echo "<pre>";
		// print_r($empID);
		// echo "</pre>";
		$this->hr->activate($empID);
		redirect(base_url().'index.php/display');
	}

	public function deactivate()
	{
		$empID = $this->uri->segment(3, 0); 
		// echo "<pre>";
		// print_r($empID);
		// echo "</pre>";
		$this->hr->deactivate($empID);
		redirect(base_url().'index.php/display/display_deactivatedFaculty');
	}
}
