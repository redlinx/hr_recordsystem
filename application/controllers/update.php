<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_update');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function profile()
	{
		$this->form_validation->set_rules('emp_lname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('emp_fname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('emp_mname', 'Middle Name', 'required|xss_clean');
		$this->form_validation->set_rules('emp_gender', 'Gender', 'required|xss_clean');
		$this->form_validation->set_rules('emp_email', 'Email Address', 'required|xss_clean');
		$this->form_validation->set_rules('emp_civStat', 'Civil Status', 'required|xss_clean');
		$this->form_validation->set_rules('emp_cellNo', 'Cell No.', 'required|xss_clean');
		$this->form_validation->set_rules('emp_tellNo', 'Tell No.', 'required|xss_clean');
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('userpass', 'Password', 'required|xss_clean|md5');
		$this->form_validation->set_rules('program', 'Program', 'required|xss_clean');

		$faculty['emp_id'] 		= $this->session->userdata('emp_id');
		$faculty['emp_lname'] 	= $this->input->post('lastname');
		$faculty['emp_fname'] 	= $this->input->post('firstname');
		$faculty['emp_mname'] 	= $this->input->post('middlename');
		$faculty['emp_bday'] 	= $this->input->post('year')."-".$this->input->post('month')."-".$this->input->post('day');
		$faculty['birthplace'] 	= $this->input->post('birthplace');
		$faculty['emp_gender'] 	= $this->input->post('gender');
		$faculty['emp_civStat'] = $this->input->post('civil_status');
		$faculty['religion'] 	= $this->input->post('religion');
		$faculty['emp_cellNo'] 	= $this->input->post('cell_no');
		$faculty['emp_tellNo'] 	= $this->input->post('tell_no');
		$faculty['emp_email'] 	= $this->input->post('email');
		$faculty['city_add'] 	= $this->input->post('city_add');
		$faculty['prov_add'] 	= $this->input->post('prov_add');
		$faculty['philhealth'] 	= $this->input->post('philhealth');
		$faculty['pag_ibig'] 	= $this->input->post('pag_ibig');
		$faculty['sss'] 		= $this->input->post('sss');
		$faculty['tin'] 		= $this->input->post('tin');
		// echo '<pre>';
		// print_r($faculty);
		// echo '</pre>';
		$this->m_update->profile($faculty);
		redirect(base_url().'index.php/view_faculty/profile/'.$this->session->userdata('emp_id'));
	}

	public function spouse()
	{
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('firstname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('middlename', 'Middle Name', 'required|xss_clean');
		$this->form_validation->set_rules('birth_place', 'Birthday Place', 'required|xss_clean');
		$this->form_validation->set_rules('contact', 'Contact No.', 'required|xss_clean');
		$this->form_validation->set_rules('educ_attain', 'Highest Education Attainment', 'required|xss_clean');
		$this->form_validation->set_rules('occupation', 'Occupation', 'required|xss_clean');
		$this->form_validation->set_rules('employer', 'Employer', 'required|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'required|xss_clean');
		$this->form_validation->set_rules('SSS', 'SSS', 'required|xss_clean');
		$this->form_validation->set_rules('pag_ibig', 'Pag-Ibig', 'required|xss_clean');
		$this->form_validation->set_rules('philhealth', 'PhilHealth', 'required|xss_clean');
		$this->form_validation->set_rules('TIN', 'TIN', 'required|xss_clean');

		$faculty['spouse_id'] 	= $this->input->post('spouse_id');
		$faculty['lastname'] 	= $this->input->post('lastname');
		$faculty['firstname'] 	= $this->input->post('firstname');
		$faculty['middlename'] 	= $this->input->post('middlename');
		$faculty['spouse_bday'] = $this->input->post('year')."-".$this->input->post('month')."-".$this->input->post('day');
		$faculty['birth_place'] = $this->input->post('birth_place');
		$faculty['contact'] 	= $this->input->post('contact');
		$faculty['educ_attain'] = $this->input->post('educ_attain');
		$faculty['emp_id'] 		= $this->session->userdata('emp_id');
		$faculty['occupation'] 	= $this->input->post('occupation');
		$faculty['employer'] 	= $this->input->post('employer');
		$faculty['address'] 	= $this->input->post('address');
		$faculty['SSS'] 		= $this->input->post('SSS');
		$faculty['pag_ibig'] 	= $this->input->post('pag_ibig');
		$faculty['philhealth'] 	= $this->input->post('philhealth');
		$faculty['TIN'] 		= $this->input->post('TIN');
		// echo "<pre>";
		// print_r($faculty);
		// echo "</pre>";
		$this->m_update->spouse($faculty);
		redirect(base_url().'index.php/view_faculty/spouse/'.$this->session->userdata('emp_id'));
	}

	public function education()
	{
		$this->form_validation->set_rules('school_name', 'School Name', 'required|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'required|xss_clean');
		$this->form_validation->set_rules('year', 'Year', 'required|xss_clean');
		$this->form_validation->set_rules('degree', 'Degree', 'required|xss_clean');
		$this->form_validation->set_rules('type', 'Type', 'required|xss_clean');

		$faculty['educ_id']		= $this->input->post('educID');
		$faculty['school_name']	= $this->input->post('school_name');
		$faculty['address'] 	= $this->input->post('address');
		$faculty['year'] 		= $this->input->post('year');
		$faculty['degree'] 		= $this->input->post('degree');
		$faculty['type'] 		= $this->input->post('type');
		$faculty['emp_id'] 		= $this->session->userdata('emp_id');
		// echo '<pre>';
		// print_r($faculty);
		// echo '</pre>';
		$this->m_update->education($faculty);
		redirect(base_url().'index.php/view_faculty/education/'.$this->session->userdata('emp_id'));
	}

	public function eligibility()
	{
		$this->form_validation->set_rules('examName', 'School Name', 'required|xss_clean');
		$this->form_validation->set_rules('examPlace', 'Address', 'required|xss_clean');
		$this->form_validation->set_rules('rating', 'Year', 'required|xss_clean');
		
		if($this->form_validation->run() != NULL)
		{
			$faculty['eligibility_id']	= $this->input->post('eligibilityID');
			$faculty['examName']	= $this->input->post('examName');
			$faculty['examDate']	= $this->input->post('year')."-".$this->input->post('month')."-".$this->input->post('day');
			$faculty['examPlace'] 	= $this->input->post('examPlace');
			$faculty['rating'] 		= $this->input->post('rating');
			$faculty['emp_id'] 		= $this->session->userdata('emp_id');

			$this->m_update->eligibility($faculty);
			redirect(base_url().'index.php/view_faculty/eligibility/'.$this->session->userdata('emp_id'));
		}
		else
		{
			echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		}
		// echo '<pre>';
		// print_r($faculty);
		// echo '</pre>';
	}

	public function training()
	{
		$this->form_validation->set_rules('trainingTitle', 'Training Title', 'required|xss_clean');
		$this->form_validation->set_rules('venue', 'Venue', 'required|xss_clean');
		$this->form_validation->set_rules('organizer', 'Organizer', 'required|xss_clean');
		$this->form_validation->set_rules('role', 'Role', 'required|xss_clean');
		$this->form_validation->set_rules('type', 'Type', 'required|xss_clean');

		$faculty['training_id']		= $this->input->post('trainingID');
		$faculty['training_title']	= $this->input->post('trainingTitle');
		$faculty['venue'] 			= $this->input->post('venue');
		$faculty['date'] 			= $this->input->post('year')."-".$this->input->post('month')."-".$this->input->post('day');
		$faculty['organizer'] 		= $this->input->post('organizer');
		$faculty['role'] 			= $this->input->post('role');
		$faculty['type'] 			= $this->input->post('type');
		$faculty['emp_id'] 			= $this->session->userdata('emp_id');
		// echo '<pre>';
		// print_r($faculty);
		// echo '</pre>';
		$this->m_update->training($faculty);
		redirect(base_url().'index.php/view_faculty/training/'.$this->session->userdata('emp_id'));
	}

	public function work()
	{
		$this->form_validation->set_rules('company', 'Company', 'required|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'required|xss_clean');
		$this->form_validation->set_rules('position', 'Position', 'required|xss_clean');

		$faculty['work_exp_id']	= $this->input->post('workID');
		$faculty['company']		= $this->input->post('company');
		$faculty['address'] 	= $this->input->post('address');
		$faculty['position'] 	= $this->input->post('position');
		$faculty['start_date'] 	= $this->input->post('syear')."-".$this->input->post('smonth')."-".$this->input->post('sday');
		$faculty['end_date'] 	= $this->input->post('eyear')."-".$this->input->post('emonth')."-".$this->input->post('eday');
		$faculty['emp_id'] 		= $this->session->userdata('emp_id');
		// echo '<pre>';
		// print_r($faculty);
		// echo '</pre>';
		$this->m_update->work($faculty);
		redirect(base_url().'index.php/view_faculty/work/'.$this->session->userdata('emp_id'));
	}
	public function skill()
	{
		$this->form_validation->set_rules('skill_name', 'Skill', 'required|xss_clean');

		$faculty['skill_id']	= $this->input->post('skillID');
		$faculty['skill_name']	= $this->input->post('skill_name');
		$faculty['emp_id'] 		= $this->session->userdata('emp_id');
		// echo '<pre>';
		// print_r($faculty);
		// echo '</pre>';
		$this->m_update->skill($faculty);
		redirect(base_url().'index.php/view_faculty/skill/'.$this->session->userdata('emp_id'));
	}

	public function children()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|xss_clean');

		$faculty['child_id']	= $this->input->post('childID');
		$faculty['name']		= $this->input->post('name');
		$faculty['child_bday']	= $this->input->post('year')."-".$this->input->post('month')."-".$this->input->post('day');
		$faculty['emp_id'] 		= $this->session->userdata('emp_id');
		// echo '<pre>';
		// print_r($faculty);
		// echo '</pre>';
		$this->m_update->children($faculty);
		redirect(base_url().'index.php/view_faculty/children/'.$this->session->userdata('emp_id'));
	}
}
