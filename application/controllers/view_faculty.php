<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View_faculty extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_view');
		$this->load->model('m_display');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function profile()
	{
		$empID = $this->uri->segment(3, 0);
 		$page_view_content['faculty_profile'] = $this->m_view->profile($empID);
		// echo "<pre>";
 	// 	print_r($page_view_content);
 	// 	echo "</pre>";
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
 		$this->load->view('view_profile', $page_view_content);
 		$this->load->view('includes/footer');
	}

	public function education()
	{
		$empID = $this->uri->segment(3, 0);	
 		$content = array('page_view_content' => $this->m_view->education($empID));
 	    //echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('includes/header_faculty');
		//$this->load->view('includes/navi_faculty');
		$this->load->view('view_education', $content);
		$this->load->view('includes/footer');
	}

	public function training()
	{
		$empID = $this->uri->segment(3, 0);
 		$content = array('page_view_content' => $this->m_view->training($empID));
 		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('includes/header_faculty');
		//$this->load->view('includes/navi_faculty');
		$this->load->view('view_trainings', $content);
		$this->load->view('includes/footer');
	}

	public function skill()
	{
		$empID = $this->uri->segment(3, 0);
 		$content = array('page_view_content' => $this->m_view->skills($empID));
 	    //echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('includes/header_faculty');
		//$this->load->view('includes/navi_faculty');
		$this->load->view('view_skills', $content);
		$this->load->view('includes/footer');
	}

	public function work()
	{
		$empID = $this->uri->segment(3, 0);
 		$content = array('page_view_content' => $this->m_view->work($empID));
 		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('includes/header_faculty');
		//$this->load->view('includes/navi_faculty');
		$this->load->view('view_work', $content);
		$this->load->view('includes/footer');
	}

	public function spouse()
	{
		$empID = $this->uri->segment(3, 0);
 		$page_view_content['faculty_spouse'] = $this->m_view->spouse($empID);
		// echo "<pre>";
 	// 	print_r($page_view_content);
 	// 	echo "</pre>";
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
 		$this->load->view('view_spouse', $page_view_content);
 		$this->load->view('includes/footer');
	}
	public function children()
	{
		$empID = $this->uri->segment(3, 0);
 		$content = array('page_view_content' => $this->m_view->children($empID));
 	//     echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('includes/header_faculty');
		//$this->load->view('includes/navi_faculty');
		$this->load->view('view_children', $content);
		$this->load->view('includes/footer');
	}

	
}