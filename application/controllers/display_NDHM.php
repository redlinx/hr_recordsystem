<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_NDHM extends CI_Controller {

	public function index()
	{
		$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_NDHM();
		$this->load->view('display_NDHM', $page_view_content);
	}

}