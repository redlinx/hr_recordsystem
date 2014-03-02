<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ranking_committee extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_add');
		$this->load->model('m_display');
		$this->load->model('m_ranking');
		$this->load->model('m_view');
		$this->load->model('hr');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	public function index()
	{
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
		$this->load->view('ranking_committee');
		$this->load->view('includes/footer');
	}
	public function set()
	{
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
		$this->load->view('includes/header');
		$this->load->view('includes/navi_hr');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
		$this->load->view('display_form',$page_content);
		//$this->load->view('includes/footer');
		if ($this->input->post())
		{
			$this->view($this->input->post('program'));
		}
	}
	public function view($program_id)
	{	
		$content = array('page_content' => $this->m_display->programType(),
 						 'page_view_content' =>$this->hr->display_byProgram($program_id));
		//$this->load->view('includes/header');
		//$this->load->view('includes/navi_hr');
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('set_rankMembers', $content);
		// $this->load->view('includes/footer');
	}

	public function set_rankingMember()
	{	
		$empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->m_ranking->set_rankMember($empID));
		// echo "<pre>";
  //       print_r($content);
  //       echo "</pre>";
        $faculty['faculty_emp_id'] = $content['page_view_content']['emp_id'];
        $this->m_ranking->update_level($faculty);
        // echo "<pre>";
        // print_r($faculty);
        // echo "</pre>";
        $this->m_ranking->add_rankMember($faculty);
        redirect(base_url().'index.php/ranking_committee/view_rankMembers');
	}

	public function view_rankMembers()
	{
		$content = array('page_view_content' => $this->m_ranking->display_rankMember());
		// echo "<pre>";
  //       print_r($content);
  //       echo "</pre>";
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
        $this->load->view('view_rankMembers', $content);
        $this->load->view('includes/footer');
	}

	public function members()
	{	
		$content = array('page_content' => $this->m_display->programType(),
 						 'page_view_content' => $this->m_ranking->display_rankMember());
		// echo "<pre>";
  //       print_r($content);
  //       echo "</pre>";
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
=======
		$this->load->view('includes/header');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
		$this->load->view('includes/navi_rankChair');
		$this->load->view('display_committee', $content);
		$this->load->view('includes/footer');
	}

	public function set_program()
	{
		$empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->m_ranking->set_program($empID),
        				 'faculty_list' => $this->m_ranking->display_rankMember());
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        $faculty['faculty_emp_id'] = $this->input->post('empID');
        $faculty['rankProgram'] = $this->input->post('program');
       	// echo "<pre>";
        // print_r($faculty);
        // echo "</pre>";

       	$this->m_ranking->update_program($faculty);
       	redirect(base_url().'index.php/ranking_committee/view_rankMembers');
	}

	public function faculty_list()
	{
		
		$id = $this->session->userdata('emp_id');
		$content = array('faculty_profile' => $this->m_ranking->view_ranking_profile($id));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$progID = $content['faculty_profile']['rankProgram'];
		$page_view_content['faculty_list'] =  $this->hr->display_byProgram($progID);

		$this->load->view('includes/header');
		$this->load->view('includes/navi_rankMember');
		$this->load->view('ranking_faculty_list', $page_view_content);
		$this->load->view('includes/footer');
	}

	public function rank_form()
	{
		$empID = $this->uri->segment(3, 0);
 		$content = array('faculty_profile' =>  $this->m_view->faculty($empID));
 	// 	echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$empID = $content['faculty_profile']['emp_id'];
		// echo "<pre>";
		// print_r($empID);
		// echo "</pre>";
		$this->load->view('includes/header');
		$this->load->view('includes/navi_rankMember');
<<<<<<< HEAD
		$this->load->view('rank_form');
=======
<<<<<<< HEAD
		$this->load->view('rank_form');
=======
<<<<<<< HEAD
		$this->load->view('rank_form');
=======
<<<<<<< HEAD
		$this->load->view('rank_form');
=======
		$this->load->view('rank_form', $content);
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
		$this->load->view('includes/footer');
	}

	public function rank_faculty()
	{
		$empID = $this->uri->segment(3, 0);
		$content = array('faculty_profile' =>  $this->m_view->faculty($empID));
		// echo "<pre>";
		// 	print_r($faculty);
		// 	echo "</pre>";
		$empID = $content['faculty_profile']['emp_id'];
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
		echo "<pre>";
		print_r($empID);
		echo "</pre>";
		// $this->form_validation->set_rules('EQ', 'Educational Qualification', 'required|xss_clean');
		// $this->form_validation->set_rules('TeachP', 'Teaching Proficiency', 'required|xss_clean');
		// $this->form_validation->set_rules('Research', 'Research', 'required|xss_clean');
		// $this->form_validation->set_rules('CS', 'Community Services', 'required|xss_clean');
		// $this->form_validation->set_rules('TrainP', 'Training Programs', 'required|xss_clean');
		// $this->form_validation->set_rules('Involvement', 'Organizational Involvements', 'required|xss_clean');

		// if($this->form_validation->run() != NULL)
		// {
		// 	$faculty['empID'] 						= $empID;
		// 	$faculty['educational_qualification'] 	= $this->input->post('EQ');
		// 	$faculty['teaching_proficiency'] 		= $this->input->post('TeachP');
		// 	$faculty['research'] 					= $this->input->post('Research');
		// 	$faculty['community_services'] 			= $this->input->post('CS');
		// 	$faculty['training_programs'] 			= $this->input->post('TrainP');
		// 	$faculty['involvements'] 				= $this->input->post('Involvement');

		// 	echo "<pre>";
		// 	print_r($faculty);
		// 	echo "</pre>";
		// }
		// 	$this->load->model('hr');
		// 	$this->hr->add_faculty($faculty);

		// 	redirect(base_url().'index.php/register_faculty');
		
		// else
		// {
		// 	echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		// }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
		// echo "<pre>";
		// print_r($empID);
		// echo "</pre>";
		$this->form_validation->set_rules('EQ', 'Educational Qualification', 'required|xss_clean');
		$this->form_validation->set_rules('TeachP', 'Teaching Proficiency', 'required|xss_clean');
		$this->form_validation->set_rules('Research', 'Research', 'required|xss_clean');
		$this->form_validation->set_rules('CS', 'Community Services', 'required|xss_clean');
		$this->form_validation->set_rules('TrainP', 'Training Programs', 'required|xss_clean');
		$this->form_validation->set_rules('Involvement', 'Organizational Involvements', 'required|xss_clean');

		if($this->form_validation->run() != NULL)
		{
			$faculty['faculty_profile_emp_id'] 		= $empID;
			$faculty['educational_qualification'] 	= $this->input->post('EQ');
			$faculty['teaching_proficiency'] 		= $this->input->post('TeachP');
			$faculty['research'] 					= $this->input->post('Research');
			$faculty['community_services'] 			= $this->input->post('CS');
			$faculty['training_programs'] 			= $this->input->post('TrainP');
			$faculty['involvements'] 				= $this->input->post('Involvement');
			echo "<pre>";
			print_r($faculty);
			echo "</pre>";
			$this->m_ranking->rank_faculty($faculty);
			redirect(base_url().'index.php/ranking_committee/faculty_list');
		}	
		else
		{
			echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		}
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
	}
}