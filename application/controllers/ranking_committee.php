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
		$this->load->view('includes/header');
		$this->load->view('includes/navi_hr');
		$this->load->view('ranking_committee');
		$this->load->view('includes/footer');
	}

	public function add_Commitee()
	{
		$page_content['program'] = $this->hr->program();
		$this->load->view('includes/header');
		$this->load->view('includes/navi_hr');
		$this->load->view('display_form',$page_content);
		if ($this->input->post())
		{
			$this->view_member($this->input->post('program'));
		}
		$this->load->view('includes/footer');
	}

	public function view_member($program_id)
	{	
		$content = array('page_content' => $this->m_display->programType(),
 						 'page_view_content' =>$this->m_ranking->display_facultyMembers($program_id));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('set_rankMembers', $content);
		// $this->load->view('includes/footer');
	}

	public function add_rankingCommittee()
	{	
		$empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->m_ranking->set_rankMember($empID));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
        $faculty['faculty_emp_id'] = $content['page_view_content']['emp_id'];
        // $this->m_ranking->update_level($faculty);
        // echo "<pre>";
        // print_r($faculty);
        // echo "</pre>";
        $this->m_ranking->add_rankMember($faculty);
        redirect(base_url().'index.php/ranking_committee/hr_view_rankMembers');
	}

	public function set_rankingMember()
	{
		$faculty['faculty_emp_id'] = $content['page_view_content']['emp_id'];
        $this->m_ranking->update_level($faculty);
        redirect(base_url().'index.php/ranking_committee/hr_view_rankMembers');
	}

	public function set_rankChairman()
	{
		$page_content['program'] = $this->hr->program();
		$this->load->view('includes/header');
		$this->load->view('includes/navi_hr');
		$this->load->view('display_form',$page_content);
		//$this->load->view('includes/footer');
		if ($this->input->post())
		{
			$this->view_chairman($this->input->post('program'));
		}
		$this->load->view('includes/footer');
	}

	public function view_chairman($program_id)
	{	
		$content = array('page_content' => $this->m_display->programType(),
 						 'page_view_content' =>$this->m_ranking->display_facultyMembers($program_id));
		//$this->load->view('includes/header');
		//$this->load->view('includes/navi_hr');
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('set_rankChairman', $content);
		// $this->load->view('includes/footer');
	}

	public function set_rankingChairman()
	{
		$empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->m_ranking->set_rankMember($empID));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
        $faculty['faculty_emp_id'] = $content['page_view_content']['emp_id'];
        // echo "<pre>";
        // print_r($faculty);
        // echo "</pre>";
        $this->m_ranking->set_rankChair($faculty);
        redirect(base_url().'index.php/ranking_committee/hr_view_rankChairman');
	}

	public function unset_chairman()
	{
		$empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->m_ranking->set_rankMember($empID));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
        $faculty['faculty_emp_id'] = $content['page_view_content']['emp_id'];
        // echo "<pre>";
        // print_r($faculty);
        // echo "</pre>";
        $this->m_ranking->unset_chairman($faculty);
        redirect(base_url().'index.php/ranking_committee/hr_view_rankChairman');
	}

	public function unset_member()
	{
		$empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->m_ranking->set_rankMember($empID));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
        $faculty['faculty_emp_id'] = $content['page_view_content']['emp_id'];
        // echo "<pre>";
        // print_r($faculty);
        // echo "</pre>";
        $this->m_ranking->unset_member($faculty);
        redirect(base_url().'index.php/ranking_committee/hr_view_rankMembers');
	}

	public function hr_view_rankMembers()
	{
		$content = array('page_view_content'	=> $this->m_ranking->display_rankMember(),
						 'page_content'			=> $this->m_display->rankLevel());
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
        $this->load->view('includes/header');
		$this->load->view('includes/navi_hr');
        $this->load->view('hr_view_rankMembers', $content);
        $this->load->view('includes/footer');
	}

	public function set_level()
	{
		$empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->m_ranking->set_program($empID),
        				 'faculty_list' => $this->m_ranking->display_rankMember());
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        $faculty['faculty_emp_id'] 	= $this->input->post('empID');
        $faculty['rank_id'] 	= $this->input->post('level');
       	// echo "<pre>";
        // print_r($faculty);
        // echo "</pre>";
       	$this->m_ranking->set_level($faculty);
       	redirect(base_url().'index.php/ranking_committee/hr_view_rankMembers');
	}

	public function view_rankMembers()
	{
		$content = array('page_content' => $this->m_display->rankProgram(),
						 'page_view_content' => $this->m_ranking->display_rankMember());
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		if ($this->session->userdata('level') == 1)
        {
            $this->load->view('includes/header');
			$this->load->view('includes/navi_faculty');
        	$this->load->view('view_rankMembers', $content);
        	$this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 3)
        {
        	$this->load->view('includes/header');
			$this->load->view('includes/navi_dean');
        	$this->load->view('view_rankMembers', $content);
        	$this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 4)
        {
        	$this->load->view('includes/header');
			$this->load->view('includes/navi_admin');
        	$this->load->view('view_rankMembers', $content);
        	$this->load->view('includes/footer');
        }
    
	}

	public function members()
	{	
		$content = array('page_content' => $this->m_display->rankProgram(),
 						 'page_view_content' => $this->m_ranking->display_rankMember());
		// echo '<pre>';
		// print_r($content);
		// echo '</pre>';
		if ($this->session->userdata('level') == 1)
        {
            $this->load->view('includes/header');
			$this->load->view('includes/navi_faculty');
        	$this->load->view('display_committee', $content);
        	$this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 3)
        {
        	$this->load->view('includes/header');
			$this->load->view('includes/navi_dean');
        	$this->load->view('display_committee', $content);
        	$this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 4)
        {
        	$this->load->view('includes/header');
			$this->load->view('includes/navi_admin');
        	$this->load->view('display_committee', $content);
        	$this->load->view('includes/footer');
        }
	}

	public function chairman()
	{	
		$content = array('page_content' => $this->m_display->rankProgram(),
 						 'page_view_content' => $this->m_ranking->display_rankChairman());
		// echo '<pre>';
		// print_r($content);
		// echo '</pre>';
		if ($this->session->userdata('level') == 1)
        {
            $this->load->view('includes/header');
			$this->load->view('includes/navi_faculty');
        	$this->load->view('display_chairman', $content);
        	$this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 3)
        {
        	$this->load->view('includes/header');
			$this->load->view('includes/navi_dean');
        	$this->load->view('display_chairman', $content);
        	$this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 4)
        {
        	$this->load->view('includes/header');
			$this->load->view('includes/navi_admin');
        	$this->load->view('display_chairman', $content);
        	$this->load->view('includes/footer');
        }
	}

	public function set_program()
	{
		$empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->m_ranking->set_program($empID),
        				 'faculty_list' => $this->m_ranking->display_rankMember());
        echo "<pre>";
        print_r($content);
        echo "</pre>";
        $faculty['faculty_emp_id'] = $this->input->post('empID');
        $faculty['rankProgram'] = $this->input->post('program');
       	echo "<pre>";
        print_r($faculty);
        echo "</pre>";

       	$this->m_ranking->update_program($faculty);
       	redirect(base_url().'index.php/ranking_committee/view_rankMembers');
	}

	public function set_chairProgram()
	{
		$empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->m_ranking->set_program($empID),
        				 'faculty_list' => $this->m_ranking->display_rankChairman());
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        $faculty['faculty_emp_id'] = $this->input->post('empID');
        $faculty['rankProgram'] = $this->input->post('program');
       	// echo "<pre>";
        // print_r($faculty);
        // echo "</pre>";
       	$this->m_ranking->update_chairProgram($faculty);
       	redirect(base_url().'index.php/ranking_committee/view_rankMembers');
	}

	public function member_faculty_list()
	{
		$id = $this->session->userdata('emp_id');
		// echo "<pre>";
		// print_r($id);
		// echo "</pre>";
		$content = array('faculty_profile' => $this->m_ranking->view_ranking_profile($id));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$progID = $content['faculty_profile']['prog_id'];
		$page_view_content['faculty_list'] =  $this->hr->display_byProgram($progID);
		// echo "<pre>";
		// print_r($page_view_content);
		// echo "</pre>";
		if($page_view_content['faculty_list'] != NULL)
		{
			if ($this->session->userdata('level') == 1)
	        {
	            $this->load->view('includes/header');
				$this->load->view('includes/navi_faculty');
	        	$this->load->view('ranking_faculty_list', $page_view_content);
	        	$this->load->view('includes/footer');
	        }
	        else if ($this->session->userdata('level') == 3)
	        {
	        	$this->load->view('includes/header');
				$this->load->view('includes/navi_dean');
	        	$this->load->view('ranking_faculty_list', $page_view_content);
	        	$this->load->view('includes/footer');
	        }
	        else if ($this->session->userdata('level') == 4)
	        {
	        	$this->load->view('includes/header');
				$this->load->view('includes/navi_admin');
	        	$this->load->view('ranking_faculty_list', $page_view_content);
	        	$this->load->view('includes/footer');
	        }	
		}
		else
		{
			echo "<script> alert('Not Yet Set!'); history.go(-1); </script>";
		}
	}

	public function chairman_faculty_list()
	{
		$id = $this->session->userdata('emp_id');
		// echo "<pre>";
		// print_r($id);
		// echo "</pre>";
		$content = array('faculty_profile' => $this->m_ranking->view_ranking_profile($id));
		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$progID = $content['faculty_profile']['prog_id'];
		$page_view_content['faculty_list'] =  $this->hr->display_byProgram($progID);
		// echo "<pre>";
		// print_r($page_view_content);
		// echo "</pre>";
		if($page_view_content['faculty_list'] != NULL)
		{
			if ($this->session->userdata('level') == 1)
	        {
	            $this->load->view('includes/header');
				$this->load->view('includes/navi_faculty');
	        	$this->load->view('rankingChair_faculty_list', $page_view_content);
	        	$this->load->view('includes/footer');
	        }
	        else if ($this->session->userdata('level') == 3)
	        {
	        	$this->load->view('includes/header');
				$this->load->view('includes/navi_dean');
	        	$this->load->view('rankingChair_faculty_list', $page_view_content);
	        	$this->load->view('includes/footer');
	        }
	        else if ($this->session->userdata('level') == 4)
	        {
	        	$this->load->view('includes/header');
				$this->load->view('includes/navi_admin');
	        	$this->load->view('rankingChair_faculty_list', $page_view_content);
	        	$this->load->view('includes/footer');
	        }
		}
		else
		{
			echo "<script> alert('Not Yet Set!'); history.go(-1); </script>";
		}
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
		if ($this->session->userdata('level') == 1)
        {
            $this->load->view('includes/header');
			$this->load->view('includes/navi_faculty');
        	$this->load->view('rank_form', $content);
        	$this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 3)
        {
        	$this->load->view('includes/header');
			$this->load->view('includes/navi_dean');
        	$this->load->view('rank_form', $content);
        	$this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 4)
        {
        	$this->load->view('includes/header');
			$this->load->view('includes/navi_admin');
        	$this->load->view('rank_form', $content);
        	$this->load->view('includes/footer');
        }
	}

	public function rank_faculty()
	{
		$empID = $this->uri->segment(3, 0);
		$content = array('faculty_profile' =>  $this->m_view->faculty($empID));
		// echo "<pre>";
		// print_r($faculty);
		// echo "</pre>";
		$empID = $content['faculty_profile']['emp_id'];
		// echo "<pre>";
		// print_r($empID);
		// echo "</pre>";
		$this->form_validation->set_rules('EQ', 'Educational Qualification', 'required|greater_than[0]|less_than[3]|xss_clean');
		$this->form_validation->set_rules('TeachP', 'Teaching Proficiency', 'required|greater_than[0]|less_than[8]|xss_clean');
		$this->form_validation->set_rules('Research', 'Research', 'required|greater_than[0]|less_than[6]|xss_clean');
		$this->form_validation->set_rules('CS', 'Community Services', 'required|greater_than[0]|less_than[5]|xss_clean');
		$this->form_validation->set_rules('TrainP', 'Training Programs', 'required|greater_than[-1]|less_than[2]|xss_clean');
		$this->form_validation->set_rules('Involvement', 'Organizational Involvements', 'required|greater_than[-1]|less_than[2]|xss_clean');

		if($this->form_validation->run() != NULL)
		{
			$faculty['faculty_profile_emp_id'] 		= $empID;
			$faculty['educational_qualification'] 	= $this->input->post('EQ');
			$faculty['teaching_proficiency'] 		= $this->input->post('TeachP');
			$faculty['research'] 					= $this->input->post('Research');
			$faculty['community_services'] 			= $this->input->post('CS');
			$faculty['training_programs'] 			= $this->input->post('TrainP');
			$faculty['involvements'] 				= $this->input->post('Involvement');
			$faculty['total_points']				= $this->input->post('EQ') + $this->input->post('TeachP') + $this->input->post('Research') + $this->input->post('CS') + $this->input->post('TrainP') + $this->input->post('Involvement');
			// echo "<pre>";
			// print_r($faculty);
			// echo "</pre>";
			$this->m_ranking->rank_faculty($faculty);
			redirect(base_url().'index.php/ranking_committee/chairman_faculty_list');
		}	
		else
		{
			echo "<script> alert('Please Correct Data'); history.go(-1); </script>";
		}
	}
}