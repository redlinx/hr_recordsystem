<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('HR');
<<<<<<< HEAD
		$this->load->model('m_rankingCommittee');
=======
<<<<<<< HEAD
		$this->load->model('m_rankingCommittee');
=======
<<<<<<< HEAD
		$this->load->model('m_rankingCommittee');
=======
<<<<<<< HEAD
		$this->load->model('m_rankingCommittee');
=======
<<<<<<< HEAD
		$this->load->model('m_rankingCommittee');
=======
		$this->load->model('m_ranking');
		$this->load->model('m_display');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('form');
		
	}
	public function index()
	{
		$this->load->model('hr');
		$page_content['program'] = $this->hr->program();
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
		//$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
		//$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
		//$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
		//$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
		//$this->load->view('includes/navi_hr');
=======
		$this->load->view('includes/header');
		$this->load->view('includes/navi_hr');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
		$this->load->view('display_form',$page_content);
		//$this->load->view('includes/footer');
		if ($this->input->post())
		{
			$this->view($this->input->post('program'));
		}
	}

	public function view($program_id)
	{	
		$this->load->model('hr');
		$page_view_content['faculty_list'] =  $this->hr->display_byProgram($program_id);
		//$this->load->view('includes/header');
		//$this->load->view('includes/navi_hr');
		$this->load->view('display', $page_view_content);
		// $this->load->view('includes/footer');
	}
<<<<<<< HEAD
	 public function display_regular_faculty()
=======
<<<<<<< HEAD
	 public function display_regular_faculty()
=======
<<<<<<< HEAD
	 public function display_regular_faculty()
=======
<<<<<<< HEAD
	 public function display_regular_faculty()
=======
<<<<<<< HEAD
	 public function display_regular_faculty()
=======
       public function display_regular_faculty()
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
      {
    	$this->load->model('m_display');
        $empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->m_display->display_regular_faculty());
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
<<<<<<< HEAD
        $this->load->view('includes/header_hr');
        //$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
        $this->load->view('includes/header_hr');
        //$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
        $this->load->view('includes/header_hr');
        //$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
        $this->load->view('includes/header_hr');
        //$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
        $this->load->view('includes/header_hr');
        //$this->load->view('includes/navi_hr');
=======
        $this->load->view('includes/header');
        $this->load->view('includes/navi_hr');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
        $this->load->view('display_regular_faculty', $content);
        $this->load->view('includes/footer');
         
    }
     public function display_unRegular_faculty()
    {
    	$this->load->model('m_display');
        $empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->m_display->display_unRegular_faculty());
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
<<<<<<< HEAD
        $this->load->view('includes/header_hr');
        //$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
        $this->load->view('includes/header_hr');
        //$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
        $this->load->view('includes/header_hr');
        //$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
        $this->load->view('includes/header_hr');
        //$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
        $this->load->view('includes/header_hr');
        //$this->load->view('includes/navi_hr');
=======
        $this->load->view('includes/header');
        $this->load->view('includes/navi_hr');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
        $this->load->view('display_unregular_faculty', $content);
        $this->load->view('includes/footer');
         
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
	public function committee()
	{	
		$this->load->model('m_rankingCommittee');
		$page_view_content['faculty_list'] =  $this->m_rankingCommittee->display_members();
		$this->load->view('includes/header_faculty');
		$this->load->view('includes/navi_rankChair');
		$this->load->view('display_committee', $page_view_content);
		$this->load->view('includes/footer');
	}
=======
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
}