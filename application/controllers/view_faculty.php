<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View_faculty extends CI_Controller {

	public function index()
	{
		$this->load->model('hr');
	}
	function view()
	{
		$empID = $this->uri->segment(3, 0);
  		$this->load->model('hr');
 		$page_view_content['faculty_profile'] = $this->hr->view_faculty_profile($empID);
  		$this->load->view('view_faculty', $page_view_content);
	}
}