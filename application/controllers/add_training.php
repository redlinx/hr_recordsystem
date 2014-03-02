<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_training extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('faculty');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function training_form()
	{
		$empID = $this->uri->segment(3, 0);
		$this->load->model('faculty');
		$page_content['type'] = $this->faculty->display_trainingType();
		$this->load->view('form_training', $page_content);
	}

	public function add_train()
	{
		$this->form_validation->set_rules('trainingTitle', 'Training Title', 'required|xss_clean');
		$this->form_validation->set_rules('venue', 'Venue', 'required|xss_clean');
		$this->form_validation->set_rules('date', 'Date', 'required|xss_clean');
		$this->form_validation->set_rules('organizer', 'Organizer', 'required|xss_clean');
		$this->form_validation->set_rules('role', 'Role', 'required|xss_clean');
		$this->form_validation->set_rules('type', 'Type', 'required|xss_clean');

		$faculty['trainingTitle']	= $this->input->post('trainingTitle');
		$faculty['venue'] 			= $this->input->post('venue');
		$faculty['date'] 			= $this->input->post('date');
		$faculty['organizer'] 		= $this->input->post('organizer');
		$faculty['role'] 			= $this->input->post('role');
		$faculty['type'] 			= $this->input->post('type');
		$faculty['emp_id'] 			= $this->session->userdata('emp_id');
		// echo '<pre>';
		// print_r($faculty);
		// echo '</pre>';
		$this->load->model('faculty');
		$this->faculty->add_training($faculty);
		
		echo "<script> alert('Training Added'); history.go(-1); </script>";
		//redirect(base_url().'index.php/verifylogin');

	}
}