<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('hr');
		$this->load->model('m_ranking');
		$this->load->model('m_display');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('form');
		
	}
	public function index()
	{
		$this->load->model('hr');
		$page_content['program'] = $this->hr->program();
		$this->load->view('includes/header');
		if($this->session->userdata('level') == 2)
		{
			$this->load->view('includes/navi_hr');
		}
		else if($this->session->userdata('level') == 5)
		{
			$this->load->view('includes/navi_hrSec');
		}
		$this->load->view('display_form',$page_content);

		if ($this->input->post())
		{
			$this->view($this->input->post('program'));
		}
		$this->load->view('includes/footer');
	}

	public function view($program_id)
	{	
		$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_byProgram($program_id);
		// echo "<pre>";
		// print_r($page_view_content);
		// echo "</pre>";
		$this->load->view('display', $page_view_content);
		// $this->load->view('hr_display', $page_view_content);
	}
    
    public function display_regular_faculty()
    {
    	$this->load->model('m_display');
        $empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->m_display->display_regular_faculty());
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        if($this->session->userdata('level') == 2)
        {
	        $this->load->view('includes/header');
	        $this->load->view('includes/navi_hr');
	        $this->load->view('display_regular_faculty', $content);
	        $this->load->view('includes/footer');
        }
        else if($this->session->userdata('level') == 5)
        {
        	$this->load->view('includes/header');
	        $this->load->view('includes/navi_hrSec');
	        $this->load->view('display_regular_faculty', $content);
	        $this->load->view('includes/footer');
        }
         
    }
     public function display_unRegular_faculty()
    {
    	$this->load->model('m_display');
        $empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->m_display->display_unRegular_faculty());
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        if($this->session->userdata('level') == 2)
        {
	        $this->load->view('includes/header');
	        $this->load->view('includes/navi_hr');
	        $this->load->view('display_unregular_faculty', $content);
	        $this->load->view('includes/footer');
        }
        else if($this->session->userdata('level') == 5)
        {
        	$this->load->view('includes/header');
	        $this->load->view('includes/navi_hrSec');
	        $this->load->view('display_unregular_faculty', $content);
	        $this->load->view('includes/footer');
        }
         
    }

    public function display_deactivatedFaculty()
    {
    	$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_deactivatedFaculty();
		// echo "<pre>";
		// print_r($page_view_content);
		// echo "</pre>";
		if($this->session->userdata('level') == 2)
        {
	        $this->load->view('includes/header');
	        $this->load->view('includes/navi_hr');
	        $this->load->view('display_deactivated', $page_view_content);
	        $this->load->view('includes/footer');
        }
        else if($this->session->userdata('level') == 5)
        {
        	$this->load->view('includes/header');
	        $this->load->view('includes/navi_hrSec');
	        $this->load->view('display_deactivated', $page_view_content);
	        $this->load->view('includes/footer');
        }
    }

}