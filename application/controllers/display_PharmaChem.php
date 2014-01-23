<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_PharmaChem extends CI_Controller {

	public function index()
	{
		$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_PharmaChem();
		$this->load->view('display_PharmaChem', $page_view_content);
	}

}