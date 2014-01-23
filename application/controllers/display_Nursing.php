<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_Nursing extends CI_Controller {

	public function index()
	{
		$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_Nursing();
		$this->load->view('display_Nursing', $page_view_content);
	}

}