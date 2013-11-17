<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Registration_model');
		$this->load->helper('url');
	}

	public function index()
	{	
		$this->data['users'] = $this->Registration_model->get_all();
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view('management', $this->data);
	}
}