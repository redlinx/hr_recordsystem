<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dean_update_form extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_view');
		$this->load->model('m_display');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function faculty()
	{
		$empID = $this->uri->segment(3, 0);
		$content = array('page_content1' => $this->m_display->programType(),
						 'page_content2' => $this->m_display->rank(),
						 'page_view_content' => $this->m_view->faculty($empID));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('includes/header');
 		$this->load->view('includes/navi_dean');
		$this->load->view('dean_update_faculty_profile', $content);
		$this->load->view('includes/footer');
	}
}