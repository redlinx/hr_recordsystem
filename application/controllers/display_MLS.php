<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_MLS extends CI_Controller {

	public function index()
	{
		$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_MLS();
		$this->load->view('display_MLS', $page_view_content);
	}

}