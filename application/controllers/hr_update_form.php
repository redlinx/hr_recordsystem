<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hr_update_form extends CI_Controller
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
		$content = array('page_content' => $this->m_display->programType(),
						 'page_view_content' => $this->m_view->faculty($empID));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
 		//$this->load->view('includes/navi_hr');
=======
		$this->load->view('includes/header');
 		$this->load->view('includes/navi_hr');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
		$this->load->view('hr_update_faculty_profile', $content);
		$this->load->view('includes/footer');
	}

	public function spouse()
	{
		$empID = $this->uri->segment(3, 0);
		$content = array('page_view_content' => $this->m_view->spouse($empID));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
 		//$this->load->view('includes/navi_hr');
=======
		$this->load->view('includes/header');
 		$this->load->view('includes/navi_hr');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
		$this->load->view('update_spouse', $content);
		$this->load->view('includes/footer');
	}

	public function education()
	{
		$educID = $this->uri->segment(3, 0);	
 		$content = array('page_content' => $this->m_display->educType(),
 						 'page_view_content' => $this->m_view->faculty_educ($educID));
 		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
		//$this->load->view('includes/navi_hr');
=======
		$this->load->view('includes/header');
		$this->load->view('includes/navi_hr');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
		$this->load->view('update_education', $content);
		$this->load->view('includes/footer');
	}

	public function training()
	{
		$trainingID = $this->uri->segment(3, 0);
		$content = array('page_content' => $this->m_display->trainingType(),
						 'page_view_content' => $this->m_view->faculty_training($trainingID));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
 		//$this->load->view('includes/navi_hr');
=======
		$this->load->view('includes/header');
 		$this->load->view('includes/navi_hr');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
		$this->load->view('update_training', $content);
		$this->load->view('includes/footer');
	}

	public function work()
	{
		$workID = $this->uri->segment(3, 0);
		$content = array('page_view_content' => $this->m_view->faculty_work($workID));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
		$this->load->view('includes/header');
 		$this->load->view('includes/navi_faculty');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
		$this->load->view('update_work', $content);
		$this->load->view('includes/footer');
	}

	public function skill()
	{
		$skillID = $this->uri->segment(3, 0);
		$content = array('page_view_content' => $this->m_view->faculty_skill($skillID));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
		$this->load->view('includes/header');
 		$this->load->view('includes/navi_faculty');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
		$this->load->view('update_skill', $content);
		$this->load->view('includes/footer');
	}

	public function children()
	{
		$childID = $this->uri->segment(3, 0);
		$content = array('page_view_content' => $this->m_view->faculty_children($childID));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
		$this->load->view('includes/header');
 		$this->load->view('includes/navi_faculty');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
		$this->load->view('update_children', $content);
		$this->load->view('includes/footer');
	}
}