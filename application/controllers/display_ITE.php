<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_ITE extends CI_Controller {

	public function index()
	{
		$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_ITE();
		$this->load->view('display_ITE', $page_view_content);
	}

}