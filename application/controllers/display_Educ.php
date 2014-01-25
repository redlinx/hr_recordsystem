<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_Educ extends CI_Controller {

	public function index()
	{
		$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_Educ();
		$this->load->view('display_Educ', $page_view_content);
	}

}