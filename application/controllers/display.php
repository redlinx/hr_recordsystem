<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display extends CI_Controller {

		public function __construct()
	{
		parent::__construct();

		$this->load->model('HR');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	public function index()
	{
		$this->load->model('hr');
		$page_content['program'] = $this->hr->display_program();
		$this->load->view('display_form',$page_content);
	}
	public function view()
	{	
		$progID = $this->uri->segment(3, 0);
		$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_byProgram($progID);
		$this->load->view('display', $page_view_content);
	}
	public function temp()
	{
		$this->load->model('hr');
		$page_content['program'] = $this->hr->display_program();
		echo "<pre>";
		print_r($page_content);
		echo "</pre>";
	}
}