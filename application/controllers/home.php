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
		$this->load->view('management', $this->data);
	}
	 public function login()
    {
      $this->load->view('login_view');
    }
 
    public function validate_credentials()
    {
    	$this->load->model('registration_model');
    	if($this->registration_model->can_log_in())
    	{
    		return true;
  		}
  		else
  		{
      	$this->form_validation->set_message('validate_credentials', 'Incorrect Username/Password');
      	return false;
    	}
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }
	function register()
	{

		//validate form input
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('firstname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('middlename', 'Middle Name', 'required|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'required|xss_clean');
		$this->form_validation->set_rules('religion', 'Religion', 'required|xss_clean');
		$this->form_validation->set_rules('bday', 'Date of Birth', 'required|xss_clean');
		$this->form_validation->set_rules('birthplace', 'Place of Birth', 'required|xss_clean');
		$this->form_validation->set_rules('city_add', 'City Address', 'required|xss_clean');
		$this->form_validation->set_rules('prov_add', 'Province Address', 'required|xss_clean');
		$this->form_validation->set_rules('tell_no', 'Telephone Number', 'required|xss_clean');
		$this->form_validation->set_rules('cell_no', 'Cellphone Number', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Email Address', 'required|xss_clean');
		$this->form_validation->set_rules('civil_stat', 'Civil Status', 'required|xss_clean');
		$this->form_validation->set_rules('program', 'Program', 'required|xss_clean');
		$this->form_validation->set_rules('user_type', 'User Type', 'required|xss_clean');
		$this->form_validation->set_rules('status', 'Status', 'required|xss_clean');
		$this->form_validation->set_rules('rank', 'rank', 'required|xss_clean');

		if ($this->form_validation->run() == true)
		{		
			$data = array(
				'id'			=> $this->input->post('id'),
				'username'		=> $this->input->post('username'),
				'password'		=> $this->input->post('password'),
				'lastname'		=> $this->input->post('lastname'),
				'firstname' 	=> $this->input->post('firstname'),
				'middlename'  	=> $this->input->post('middlename'),
				'gender'  		=> $this->input->post('gender'),
				'religion'  	=> $this->input->post('religion'),
				'bday'  		=> $this->input->post('bday'),
				'birthplace'  	=> $this->input->post('birthplace'),
				'city_add'  	=> $this->input->post('city_add'),
				'prov_add'  	=> $this->input->post('prov_add'),
				'tell_no'  		=> $this->input->post('tell_no'),
				'cell_no'  		=> $this->input->post('cell_no'),
				'email'  		=> $this->input->post('email'),
				'civil_stat'  	=> $this->input->post('civil_stat'),
				'program'  		=> $this->input->post('program'),
				'user_type'  	=> $this->input->post('user_type'),
				'status'  		=> $this->input->post('status'),
				'rank'  		=> $this->input->post('rank'),
			);
			
			$this->Registration_model->add($data);
			redirect(base_url().'index.php');
	
		}
		else{
			
			$this->data['username'] = array(
				'name'  	=> 'username',
				'id'    	=> 'username',
				'type'  	=> 'text',
				'style'		=> 'width:200px;',
				'value' 	=> $this->form_validation->set_value('username'),
			);
			$this->data['password'] = array(
				'name'  	=> 'password',
				'id'    	=> 'password',
				'type'  	=> 'text',
				'style'		=> 'width:200px;',
				'value' 	=> $this->form_validation->set_value('password'),
			);

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
			$this->data['religion'] = array(
				'name'  => 'religion',
				'id'    => 'religion',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('religion'),
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
			$this->data['program'] = array(
				''  					=> 'Program:',
				'LA' 					=> 'Liberal Arts',
				'ABA' 					=> 'Accountancy and Business Administration',
				'Engineering'			=> 'Engineering',
				'Education'				=> 'Education',
				'ND/HRM'				=> 'Nutrition and Dietetics/ Hotel and Restaurant Management',
				'Music'					=> 'Music',
				'ITE'					=> 'Information Technology Education',
				'MLS'					=> 'Medical Laboratory Science',
				'Pharma/Chem'			=> 'Pharmacy/Chemistry',
				'Nursing'				=> 'Nursing',
				'value' => $this->form_validation->set_value('program'),
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
				'Probi1' 	=> 'Probationary 1',
				'Probi2' 	=> 'Probationary 2',
				'Probi3' 	=> 'Probationary 3',
				'value' => $this->form_validation->set_value('status'),
			);
			$this->data['rank'] = array(
				''  		=> 'Rank:',
				'Instructor I' 	=> 'Instructor I',
				'Instructor II' => 'Instructor II',
				'Assis. Prof' 	=> 'Assistang Professor',
				'Agg. Prof' 	=> 'Aggregate Professor',
				'Assoc. Prof' 	=> 'Associate Professor',
				'Prof' 		=> 'Full Professor',
				'Prof I' 	=> 'Full Professor I',
				'Prof II' 	=> 'Full Professor II',
				'Prof III' 	=> 'Full Professor III',
				'Prof IV' 	=> 'Full Professor IV',
				'Prof V' 	=> 'Full Professor V',
				'Prof VI' 	=> 'Full Professor VI',
				'Prof Emeritus' => 'Professor Emeritus',
				'value' => $this->form_validation->set_value('rank'),
			);

			
			$this->load->view('register', $this->data);
		}
	}

	function view($user_id)
	{
  		$this->data['users'] = $this->Registration_model->view($user_id);
		$this->load->view('view', $this->data);

	}

	function update($user_id)
	{

		$this->data['users'] = $this->Registration_model->update($user_id);
		$this->load->view('update', $this->data);
		
	/*	$data = array(
               'username' => $username,
               'password' => $password,
               'lastname' => $lastname,
	       'firstname' => $firstname,
	       'middlename' => $middlename,
	       'gender' => $gender,
	       'religion' => $religion,
	       'bday' => $bday,
	       'birthplace' => $birthplace,
	       'city_add' => $city_add,
	       'prov_add' => $prov_add,
	       'tell_no' => $tell_no,
	       'cell_no' => $cell_no,
	       'email' => $email,
	       'civil_stat' => $civil_stat,
		'program' => $program,
	       'user_type' => $user_type,
	         'status' => $status,
	         'rank' => $rank
	        );

		
		$this->db->where('id', $user_id);
		$this->db->update('users', $data);
		
		*/
		$this->data['users'] = $this->Registration_model->update($user_id);
		$this->load->view('update', $this->data);
		//$this->Registration_model->update($user_id);
		//$this->load->view('update');
		
	}
	
	public function update_validation()
	{
$this->load->library('form_validation');
		//validate form input
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('firstname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('middlename', 'Middle Name', 'required|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'required|xss_clean');
		$this->form_validation->set_rules('religion', 'Religion', 'required|xss_clean');
		$this->form_validation->set_rules('bday', 'Date of Birth', 'required|xss_clean');
		$this->form_validation->set_rules('birthplace', 'Place of Birth', 'required|xss_clean');
		$this->form_validation->set_rules('city_add', 'City Address', 'required|xss_clean');
		$this->form_validation->set_rules('prov_add', 'Province Address', 'required|xss_clean');
		$this->form_validation->set_rules('tell_no', 'Telephone Number', 'required|xss_clean');
		$this->form_validation->set_rules('cell_no', 'Cellphone Number', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Email Address', 'required|xss_clean');
		$this->form_validation->set_rules('civil_stat', 'Civil Status', 'required|xss_clean');
		$this->form_validation->set_rules('program', 'Program', 'required|xss_clean');
		$this->form_validation->set_rules('user_type', 'User Type', 'required|xss_clean');
		$this->form_validation->set_rules('status', 'Status', 'required|xss_clean');
		$this->form_validation->set_rules('rank', 'rank', 'required|xss_clean');

		if ($this->form_validation->run())
		{		
			$data = array(
				'id'			=> $this->input->post('id'),
				'username'		=> $this->input->post('username'),
				'password'		=> $this->input->post('password'),
				'lastname'		=> $this->input->post('lastname'),
				'firstname' 	=> $this->input->post('firstname'),
				'middlename'  	=> $this->input->post('middlename'),
				'gender'  		=> $this->input->post('gender'),
				'religion'  	=> $this->input->post('religion'),
				'bday'  		=> $this->input->post('bday'),
				'birthplace'  	=> $this->input->post('birthplace'),
				'city_add'  	=> $this->input->post('city_add'),
				'prov_add'  	=> $this->input->post('prov_add'),
				'tell_no'  		=> $this->input->post('tell_no'),
				'cell_no'  		=> $this->input->post('cell_no'),
				'email'  		=> $this->input->post('email'),
				'civil_stat'  	=> $this->input->post('civil_stat'),
				'program'  		=> $this->input->post('program'),
				'user_type'  	=> $this->input->post('user_type'),
				'status'  		=> $this->input->post('status'),
				'rank'  		=> $this->input->post('rank'),
			);
			
			$this->Registration_model->update_account($data);
			redirect(base_url().'index.php');
	
		}
		else{

			/*
			$this->data['username'] = array(
				'name'  	=> 'username',
				'id'    	=> 'username',
				'type'  	=> 'text',
				'style'		=> 'width:200px;',
				'value' 	=> $this->form_validation->set_value('username'),
			);
			$this->data['password'] = array(
				'name'  	=> 'password',
				'id'    	=> 'password',
				'type'  	=> 'text',
				'style'		=> 'width:200px;',
				'value' 	=> $this->form_validation->set_value('password'),
			);

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
			$this->data['religion'] = array(
				'name'  => 'religion',
				'id'    => 'religion',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('religion'),
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
			$this->data['program'] = array(
				''  					=> 'Program:',
				'LA' 					=> 'Liberal Arts',
				'ABA' 					=> 'Accountancy and Business Administration',
				'Engineering'			=> 'Engineering',
				'Education'				=> 'Education',
				'ND/HRM'				=> 'Nutrition and Dietetics/ Hotel and Restaurant Management',
				'Music'					=> 'Music',
				'ITE'					=> 'Information Technology Education',
				'MLS'					=> 'Medical Laboratory Science',
				'Pharma/Chem'			=> 'Pharmacy/Chemistry',
				'Nursing'				=> 'Nursing',
				'value' => $this->form_validation->set_value('program'),
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
				'Probi1' 	=> 'Probationary 1',
				'Probi2' 	=> 'Probationary 2',
				'Probi3' 	=> 'Probationary 3',
				'value' => $this->form_validation->set_value('status'),
			);
			$this->data['rank'] = array(
				''  		=> 'Rank:',
				'Instructor I' 	=> 'Instructor I',
				'Instructor II' => 'Instructor II',
				'Assis. Prof' 	=> 'Assistang Professor',
				'Agg. Prof' 	=> 'Aggregate Professor',
				'Assoc. Prof' 	=> 'Associate Professor',
				'Prof' 		=> 'Full Professor',
				'Prof I' 	=> 'Full Professor I',
				'Prof II' 	=> 'Full Professor II',
				'Prof III' 	=> 'Full Professor III',
				'Prof IV' 	=> 'Full Professor IV',
				'Prof V' 	=> 'Full Professor V',
				'Prof VI' 	=> 'Full Professor VI',
				'Prof Emeritus' => 'Professor Emeritus',
				'value' => $this->form_validation->set_value('rank'),
			);

			*/
			
			
			//echo "Error";
			$this->data['users'] = $this->Registration_model->update($this->input->post('id'));
			$this->load->view('update', $this->data);
		}
	}

	function delete($user_id)
	{
		$this->Registration_model->delete($user_id);
	}

}


