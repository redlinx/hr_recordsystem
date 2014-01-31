<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Education extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('faculty');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function educ_form()
	{
		$empID = $this->uri->segment(3, 0);
		$this->load->model('faculty');
		$page_content['type'] = $this->faculty->display_educType();
 		$page_view_content['faculty_education'] = $this->faculty->view_faculty_education($empID);
 		
 		$content = array(
 						'page_content'		=> $this->faculty->display_educType(),
 						'page_view_content' => $this->faculty->view_faculty_education($empID)
 						);
		$this->load->view('education', $content);
	}

	public function view()
	{
		$empID = $this->uri->segment(3, 0);
  		$this->load->model('faculty');
  		$this->load->view('view_faculty_education', $page_view_content);
	}

	public function add_educ()
	{
		$this->form_validation->set_rules('school_name', 'School Name', 'required|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'required|xss_clean');
		$this->form_validation->set_rules('year', 'Year', 'required|xss_clean');
		$this->form_validation->set_rules('degree', 'Degree', 'required|xss_clean');
		$this->form_validation->set_rules('type', 'Type', 'required|xss_clean');

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
		redirect(base_url().'index.php/education/educ_form/'.$this->session->userdata('emp_id'));

	}
}