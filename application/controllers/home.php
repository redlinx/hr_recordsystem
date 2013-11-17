<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Registration_model');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->data['users'] = $this->Registration_model->get_all();
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view('management', $this->data);
	}
	
	function register() {

		//validate form input
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('firstname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('middlename', 'Middle Name', 'required|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'required|xss_clean');
		$this->form_validation->set_rules('religon', 'Religon', 'required|xss_clean');
		$this->form_validation->set_rules('bday', 'Date of Birth', 'required|xss_clean');
		$this->form_validation->set_rules('birthplace', 'Place of Birth', 'required|xss_clean');
		$this->form_validation->set_rules('city_add', 'City Address', 'required|xss_clean');
		$this->form_validation->set_rules('prov_add', 'Province Address', 'required|xss_clean');
		$this->form_validation->set_rules('tell_no', 'Telephone Number', 'required|xss_clean');
		$this->form_validation->set_rules('cell_no', 'Cellphone Number', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Email Address', 'required|xss_clean');
		$this->form_validation->set_rules('civil_stat', 'Civil Status', 'required|xss_clean');
		$this->form_validation->set_rules('user_type', 'User Type', 'required|xss_clean');
		$this->form_validation->set_rules('status', 'Status', 'required|xss_clean');
		$this->form_validation->set_rules('rank', 'rank', 'required|xss_clean');

		if ($this->form_validation->run() == true)
		{		
			$data = array(
				'id'			=> $this->input->post('id'),
				'lastname'		=> $this->input->post('lastname'),
				'firstname' 	=> $this->input->post('firstname'),
				'middlename'  	=> $this->input->post('middlename'),
				'gender'  		=> $this->input->post('gender'),
				'religon'  		=> $this->input->post('religon'),
				'bday'  		=> $this->input->post('bday'),
				'birthplace'  	=> $this->input->post('birthplace'),
				'city_add'  	=> $this->input->post('city_add'),
				'prov_add'  	=> $this->input->post('prov_add'),
				'tell_no'  		=> $this->input->post('tell_no'),
				'cell_no'  		=> $this->input->post('cell_no'),
				'email'  		=> $this->input->post('email'),
				'civil_stat'  	=> $this->input->post('civil_stat'),
				'user_type'  	=> $this->input->post('user_type'),
				'status'  		=> $this->input->post('status'),
				'rank'  		=> $this->input->post('rank'),
			);
			
			$this->Registration_model->add($data);
			$this->session->set_flashdata('message', "<p>Added successfully.</p>");
			redirect(base_url().'index.php');
	
		}
		else{
			
			$this->data['lastname'] = array(
				'name'  	=> 'lastname',
				'id'    	=> 'lastname',
				'type'  	=> 'text',
				'style'		=> 'width:200px;',
				'value' 	=> $this->form_validation->set_value('lastname'),
			);
			$this->data['firstname'] = array(
				'name'  	=> 'firstname',
				'id'    	=> 'firstname',
				'type'  	=> 'text',
				'style'		=> 'width:200px;',
				'value' 	=> $this->form_validation->set_value('firstname'),
			);
			$this->data['middlename'] = array(
				'name'  => 'middlename',
				'id'    => 'middlename',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('middlename'),
			);
			$this->data['gender'] = array(
				''  	=> 'Gender:',
				'M'    	=> 'Male',
				'F' 	=> 'Female',
				'value' => $this->form_validation->set_value('gender'),
			);
			$this->data['religon'] = array(
				'name'  => 'religon',
				'id'    => 'religon',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('religon'),
			);
			$this->data['bday'] = array(
				'name'  => 'bday',
				'id'    => 'bday',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('bday'),
			);
			$this->data['birthplace'] = array(
				'name'  => 'birthplace',
				'id'    => 'birthplace',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('birthplace'),
			);
			$this->data['city_add'] = array(
				'name'  => 'city_add',
				'id'    => 'city_add',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('city_add'),
			);
			$this->data['prov_add'] = array(
				'name'  => 'prov_add',
				'id'    => 'prov_add',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('prov_add'),
			);
			$this->data['tell_no'] = array(
				'name'  => 'tell_no',
				'id'    => 'tell_no',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('tell_no'),
			);
			$this->data['cell_no'] = array(
				'name'  => 'cell_no',
				'id'    => 'cell_no',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('cell_no'),
			);
			$this->data['email'] = array(
				'name'  => 'email',
				'id'    => 'email',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('email'),
			);
			$this->data['civil_stat'] = array(
				''  							=> 'Civil Status:',
				'Single' 						=> 'Single',
				'Married' 						=> 'Married',
				'Head of the Family' 			=> 'Head of the Family',
				'Legally Separated' 			=> 'Legally Separated',
				'Working Spouse' 				=> 'Working Spouse',
				'Non-Working Spouse' 			=> 'Non-Working Spouse',
				'Entitled Exemption Units' 		=> 'Entitled Exemption Units',
				'Not Entitled Exemption Units' 	=> 'Not Entitled Exemption Units',
				'value' => $this->form_validation->set_value('civil_stat'),
			);
			$this->data['user_type'] = array(
				''  		=> 'User Type:',
				'Admin' 	=> 'Administrator',
				'Dean' 		=> 'Dean',
				'Faculty' 	=> 'Faculty',
				'value' => $this->form_validation->set_value('user_type'),
			);
			$this->data['status'] = array(
				''  		=> 'Status:',
				'Regular' 	=> 'Regular',
				'Probi 1' 	=> 'Probationary 1',
				'Probi 2' 	=> 'Probationary 2',
				'Probi 3' 	=> 'Probationary 3',
				'value' => $this->form_validation->set_value('status'),
			);
			$this->data['rank'] = array(
				''  		=> 'Rank:',
				'Regular' 	=> 'Regular',
				'Probi 1' 	=> 'Probationary 1',
				'Probi 2' 	=> 'Probationary 2',
				'Probi 3' 	=> 'Probationary 3',
				'value' => $this->form_validation->set_value('rank'),
			);

			
			$this->load->view('register', $this->data);
		}
	}
	function delete($user_id) {
		$this->Registration_model->delete($user_id);
				
		redirect('index.php');
	}

}