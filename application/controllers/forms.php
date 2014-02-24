<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_display');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function education()
	{
 		$content = array('page_content' => $this->m_display->educType());
 	    //echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('includes/header');
		$this->load->view('includes/navi_faculty');
		$this->load->view('add_education', $content);
		$this->load->view('includes/footer');
	}

	public function training()
	{
 		$content = array('page_content' => $this->m_display->trainingType());
 		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
 		$this->load->view('includes/header');
 		$this->load->view('includes/navi_faculty');
		$this->load->view('add_training', $content);
		$this->load->view('includes/footer');
	}

	public function skill()
	{
 		$this->load->view('includes/header');
 		$this->load->view('includes/navi_faculty');
		$this->load->view('add_skill');
		$this->load->view('includes/footer');
	}

	public function spouse()
	{
		$this->load->view('includes/header');
 		$this->load->view('includes/navi_faculty');
		$this->load->view('add_spouse');
		$this->load->view('includes/footer');
	}

	public function work()
	{
 		$this->load->view('includes/header');
 		$this->load->view('includes/navi_faculty');
		$this->load->view('add_work');
		$this->load->view('includes/footer');
	}

	public function children()
	{
 		$this->load->view('includes/header');
 		$this->load->view('includes/navi_faculty');
		$this->load->view('add_children');
		$this->load->view('includes/footer');
	}
}