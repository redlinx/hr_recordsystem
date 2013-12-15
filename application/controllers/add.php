<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('HR');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	/*
	function create()
	{
		$this->load->model('HR');

		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		$this->form_validation->set_rules('date_hired', 'Date Hired', 'required|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('fname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('mname', 'Middle Name', 'required|xss_clean');
		$this->form_validation->set_rules('date_hired', 'Date Hired', 'required|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'required|xss_clean');
		$this->form_validation->set_rules('bday', 'Birthday', 'required|xss_clean');
		$this->form_validation->set_rules('civ_stat', 'Civil Status', 'required|xss_clean');
		$this->form_validation->set_rules('tell_no', 'Telephone No', 'required|xss_clean');
		
		
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$lname 		= $this->input->post('lname');
		$fname 		= $this->input->post('fname');
		$mname 		= $this->input->post('mname');
		$date_hired = $this->input->post('date_hired');
		$gender 	= $this->input->post('gender');
		$bday 		= $this->input->post('bday');
		$civ_stat 	= $this->input->post('civ_stat');
		$tell_no 		= $this->input->post('email');

		$this->load->model('HR');
    	$this->HR->insert(  $lname,
    						$fname,
    						$mname,
    						$username,
    						$password,
    						$date_hired,
    						$gender,
    						$bday,
    						$email
    						);
    	$this->load->view('add',    $lname,
    								$fname,
    								$mname,
    								$username,
    								$password,
    								$date_hired,
    								$gender,
    								$bday,
    								$tell_no);

		//redirect(base_url().'index.php');
	}
	*/

	public function insert()
	{
		$this->load->model('HR');

		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		$this->form_validation->set_rules('date_hired', 'Date Hired', 'required|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('fname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('mname', 'Middle Name', 'required|xss_clean');
		$this->form_validation->set_rules('date_hired', 'Date Hired', 'required|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'required|xss_clean');
		$this->form_validation->set_rules('bday', 'Birthday', 'required|xss_clean');
		$this->form_validation->set_rules('civ_stat', 'Civil Status', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Telephone No', 'required|xss_clean');	

		if ($this->form_validation->run() == true)
		{		
			$data = array(
				'username'		=> $this->input->post('username'),
				'password'		=> $this->input->post('password'),
				'date_hired'  	=> $this->input->post('date_hired'),
				'lname'			=> $this->input->post('lname'),
				'fname' 		=> $this->input->post('fname'),
				'mname'  		=> $this->input->post('mname'),
				'gender'  		=> $this->input->post('gender'),
				'bday'  		=> $this->input->post('bday'),
				'civ_stat' 		=> $this->input->post('civ_stat'),
				'email'  		=> $this->input->post('email'),

			);
			
			$this->HR->add($data);
			redirect(base_url().'index.php');
	
		}
		else
		{
			
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

			$this->data['lname'] = array(
				'name'  	=> 'lname',
				'id'    	=> 'lname',
				'type'  	=> 'text',
				'style'		=> 'width:200px;',
				'value' 	=> $this->form_validation->set_value('lname	'),
				)	;
			$this->data['fname'] = array(
				'name'  	=> 'fname',
				'id'    	=> 'fname',
				'type'  	=> 'text',
				'style'		=> 'width:200px;',
				'value' 	=> $this->form_validation->set_value('fname'),
			);
			$this->data['mname'] = array(
				'name'  => 'mname',
				'id'    => 'mname',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('mname'),
			);
			$this->data['gender'] = array(
				'name'  => 'gender',
				'id'    => 'gender',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('gender'),
			);
			$this->data['civ_stat'] = array(
				'name'  => 'civ_stat',
				'id'    => 'civ_stat',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('civ_stat'),
				)	;
			$this->data['bday'] = array(
				'name'  => 'bday',
				'id'    => 'bday',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('bday'),
			);
			$this->data['email'] = array(
				'name'  => 'email',
				'id'    => 'email',
				'type'  => 'text',
				'style'	=> 'width:200px;',
				'value' => $this->form_validation->set_value('email'),
			);

			$this->load->view('add', $this->data);
		}
	}

}