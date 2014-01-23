<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_ABA extends CI_Controller {

	public function index()
	{
		$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_ABA();
		$this->load->view('display_ABA', $page_view_content);
	}

}