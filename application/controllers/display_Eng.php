<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_Eng extends CI_Controller {

	public function index()
	{
		$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_Eng();
		$this->load->view('display_Eng', $page_view_content);
	}

}