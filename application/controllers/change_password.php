<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Change_password extends CI_Controller {

	public function index()
	{

		$this->load->model('hr');
		$this->load->view('change_password_form',$page_content);
	}

	public function change_password_account()
	{
		$faculty['username'] = $this->input->post('username');
		$faculty['userpass'] = $this->input->post('userpass');
		
		
		$this->load->model('hr');
		$this->hr->change_password($faculty);

		echo "record updated.";

		
	}
	public function change_password_form()
	{
		$empID = $this->uri->segment(3, 0);
		$this->load->model('hr');
		//$page_content['program'] = $this->hr->display_program();
		//$page_view_content['change_password'] = $this->hr->view_faculty_profile($empID);
		$this->load->view('change_password_form', $page_view_content);

	}

}