<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_Admin extends CI_Controller {

	public function index()
	{
		$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_Admin();
		$this->load->view('display_Admin', $page_view_content);
	}

}