<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_Music extends CI_Controller {

	public function index()
	{
		$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_Music();
		$this->load->view('display_Music', $page_view_content);
	}

}