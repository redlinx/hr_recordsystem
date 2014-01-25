<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_LA extends CI_Controller {

	public function index()
	{
		$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_LA();
		$this->load->view('display_LA', $page_view_content);
	}

}