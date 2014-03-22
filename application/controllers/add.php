<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_add');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function education()
	{
		$this->form_validation->set_rules('school_name', 'School Name', 'required|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'required|xss_clean');
		$this->form_validation->set_rules('year', 'Year', 'required|xss_clean');
		$this->form_validation->set_rules('degree', 'Degree', 'required|xss_clean');
		$this->form_validation->set_rules('type', 'Type', 'required|xss_clean');
		
		if($this->form_validation->run() != NULL)
		{
			$faculty['school_name']	= $this->input->post('school_name');
			$faculty['address'] 	= $this->input->post('address');
			$faculty['year'] 		= $this->input->post('year');
			$faculty['degree'] 		= $this->input->post('degree');
			$faculty['typeID'] 		= $this->input->post('type');
			$faculty['emp_id'] 		= $this->session->userdata('emp_id');

			$this->m_add->education($faculty);
			redirect(base_url().'index.php/view_faculty/education/'.$this->session->userdata('emp_id'));
		}
		else
		{
			echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		}
	}

	public function eligibility()
	{
		$this->form_validation->set_rules('examName', 'School Name', 'required|xss_clean');
		$this->form_validation->set_rules('examPlace', 'Address', 'required|xss_clean');
		$this->form_validation->set_rules('rating', 'Year', 'required|xss_clean');
		
		if($this->form_validation->run() != NULL)
		{
			$faculty['examName']	= $this->input->post('examName');
			$faculty['examDate']	= $this->input->post('year')."-".$this->input->post('month')."-".$this->input->post('day');
			$faculty['examPlace'] 	= $this->input->post('examPlace');
			$faculty['rating'] 		= $this->input->post('rating');
			$faculty['emp_id'] 		= $this->session->userdata('emp_id');

			$this->m_add->eligibility($faculty);
			redirect(base_url().'index.php/view_faculty/eligibility/'.$this->session->userdata('emp_id'));
		}
		else
		{
			echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		}
	}

	public function training()
	{
		$this->form_validation->set_rules('trainingTitle', 'Training Title', 'required|xss_clean');
		$this->form_validation->set_rules('venue', 'Venue', 'required|xss_clean');
		$this->form_validation->set_rules('organizer', 'Organizer', 'required|xss_clean');
		$this->form_validation->set_rules('role', 'Role', 'required|xss_clean');
		$this->form_validation->set_rules('type', 'Type', 'required|xss_clean');

		if($this->form_validation->run() != NULL)
		{
			$faculty['trainingTitle']	= $this->input->post('trainingTitle');
			$faculty['venue'] 			= $this->input->post('venue');
			$faculty['date'] 			= $this->input->post('year')."-".$this->input->post('month')."-".$this->input->post('day');
			$faculty['organizer'] 		= $this->input->post('organizer');
			$faculty['role'] 			= $this->input->post('role');
			$faculty['type'] 			= $this->input->post('type');
			$faculty['emp_id'] 			= $this->session->userdata('emp_id');
			// echo '<pre>';
			// print_r($faculty);
			// echo '</pre>';
			$this->m_add->training($faculty);
			redirect(base_url().'index.php/view_faculty/training/'.$this->session->userdata('emp_id'));
		}
		else
		{
			echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		}
	}

	public function skill()
	{
		$this->form_validation->set_rules('skill_name', 'Skill', 'required|xss_clean');

		if($this->form_validation->run() != NULL)
		{
			$faculty['skill_name']	= $this->input->post('skill_name');
			$faculty['emp_id'] 		= $this->session->userdata('emp_id');
			// echo '<pre>';
			// print_r($faculty);
			// echo '</pre>';
			$this->m_add->skill($faculty);
			redirect(base_url().'index.php/view_faculty/skill/'.$this->session->userdata('emp_id'));
		}
		else
		{
			echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		}
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

		if($this->form_validation->run() != NULL)
		{
			$faculty['lastname'] 	= $this->input->post('lastname');
			$faculty['firstname'] 	= $this->input->post('firstname');
			$faculty['middlename'] 	= $this->input->post('middlename');
			$faculty['bday'] 		= $this->input->post('year')."-".$this->input->post('month')."-".$this->input->post('day');;
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
			$this->m_add->spouse($faculty);
			redirect(base_url().'index.php/view_faculty/spouse/'.$this->session->userdata('emp_id'));
		}
		else
		{
			echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		}
	}

	public function work()
	{
		$this->form_validation->set_rules('company', 'Company', 'required|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'required|xss_clean');
		$this->form_validation->set_rules('position', 'Position', 'required|xss_clean');

		if($this->form_validation->run() != NULL)
		{
			$faculty['company']		= $this->input->post('company');
			$faculty['address'] 	= $this->input->post('address');
			$faculty['position'] 	= $this->input->post('position');
			$faculty['start_date'] 	= $this->input->post('Syear')."-".$this->input->post('Smonth')."-".$this->input->post('Sday');
			$faculty['end_date'] 	= $this->input->post('Eyear')."-".$this->input->post('Eday')."-".$this->input->post('Eday');
			$faculty['emp_id'] 		= $this->session->userdata('emp_id');
			// echo '<pre>';
			// print_r($faculty);
			// echo '</pre>';
			$this->m_add->work($faculty);
			redirect(base_url().'index.php/view_faculty/work/'.$this->session->userdata('emp_id'));
		}
		else
		{
			echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		}
	}

	public function children()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|xss_clean');

		if($this->form_validation->run() != NULL)
		{
			$faculty['name']	= $this->input->post('name');
			$faculty['bday'] 	= $this->input->post('year')."-".$this->input->post('month')."-".$this->input->post('day');
			$faculty['emp_id'] 	= $this->session->userdata('emp_id');
			// echo '<pre>';
			// print_r($faculty);
			// echo '</pre>';
			$this->m_add->children($faculty);
			redirect(base_url().'index.php/view_faculty/children/'.$this->session->userdata('emp_id'));
		}
		else
		{
			echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		}
	}
}