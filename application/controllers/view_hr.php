<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View_hr extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_view');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function faculty()
	{
		$empID = $this->uri->segment(3, 0);
 		$page_view_content['faculty_profile'] = $this->m_view->faculty($empID);
		// echo "<pre>";
	 // 	print_r($page_view_content);
	 // 	echo "</pre>";
 		$this->load->view('includes/header_hr');
 		//$this->load->view('includes/navi_hr');
 		$this->load->view('hr_view_faculty_profile', $page_view_content);
 		$this->load->view('includes/footer');
	}

	public function education()
	{
		$empID = $this->uri->segment(3, 0);	
 		$content = array('page_view_content' => $this->m_view->education($empID));
 	//     echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('includes/header_hr');
		//$this->load->view('includes/navi_hr');
		$this->load->view('hr_view_faculty_education', $content);
		$this->load->view('includes/footer');
	}

	public function training()
	{
		$empID = $this->uri->segment(3, 0);
 		$content = array('page_view_content' => $this->m_view->training($empID));
 	    //echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('includes/header_hr');
		//$this->load->view('includes/navi_hr');
		$this->load->view('hr_view_faculty_training', $content);
		$this->load->view('includes/footer');
	}

	public function skill()
	{
		$empID = $this->uri->segment(3, 0);
 		$content = array('page_view_content' => $this->m_view->skills($empID));
 	    //echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('includes/header_hr');
		//$this->load->view('includes/navi_hr');
		$this->load->view('hr_view_faculty_skill', $content);
		$this->load->view('includes/footer');
	}

	public function spouse()
	{
		$empID = $this->uri->segment(3, 0);
 		$page_view_content['faculty_spouse'] = $this->m_view->spouse($empID);
		// echo "<pre>";
 		// print_r($page_view_content);
 		// echo "</pre>";
 		$this->load->view('includes/header_hr');
 		//$this->load->view('includes/navi_hr');
 		$this->load->view('hr_view_faculty_spouse', $page_view_content);
 		$this->load->view('includes/footer');
	}

	public function work()
	{
		$empID = $this->uri->segment(3, 0);
 		$content = array('page_view_content' => $this->m_view->work($empID));
 		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('includes/header_hr');
		//$this->load->view('includes/navi_hr');
		$this->load->view('hr_view_faculty_work', $content);
		$this->load->view('includes/footer');
	}

	public function children()
	{
		$empID = $this->uri->segment(3, 0);
 		$content = array('page_view_content' => $this->m_view->children($empID));
 	//     echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('includes/header_hr');
		//$this->load->view('includes/navi_hr');
		$this->load->view('hr_view_faculty_children', $content);
		$this->load->view('includes/footer');
	}
}