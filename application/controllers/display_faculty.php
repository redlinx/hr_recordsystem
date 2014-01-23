<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_faculty extends CI_Controller {

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
		$page_content['faculty_list'] = $this->hr->display_faculty();
		$this->load->view('display_faculty',$page_content);
		
	}
}