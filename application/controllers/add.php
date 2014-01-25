<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('HR');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	
	function create()
	{
		$this->load->model('HR');

		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
<<<<<<< HEAD
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
=======
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean|md5');
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
		$this->form_validation->set_rules('date_hired', 'Date Hired', 'required|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('fname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('mname', 'Middle Name', 'required|xss_clean');
		$this->form_validation->set_rules('date_hired', 'Date Hired', 'required|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'required|xss_clean');
		$this->form_validation->set_rules('bday', 'Birthday', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Email Address', 'required|xss_clean');
<<<<<<< HEAD
		
=======
		$this->form_validation->set_rules('program', 'Program', 'required|xss_clean');
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
		
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$lname 		= $this->input->post('lname');
		$fname 		= $this->input->post('fname');
		$mname 		= $this->input->post('mname');
		$date_hired = $this->input->post('date_hired');
		$gender 	= $this->input->post('gender');
		$bday 		= $this->input->post('bday');
		$email 		= $this->input->post('email');
<<<<<<< HEAD

=======
		$program	= $this->input->post('program');	
		
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
		$this->load->model('HR');
<<<<<<< HEAD
=======
		
>>>>>>> 4150845dfd5919a39081843690f6565a950188ef
		if($this->input->post())
		{
	    	$this->HR->insert(  $lname,
	    						$fname,
	    						$mname,
	    						$username,
	    						$password,
	    						$date_hired,
	    						$gender,
	    						$bday,
<<<<<<< HEAD
	    						$email
=======
	    						$email,
	    						$program
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
	    						);	
		}			
			
    	$this->load->view('add',    $lname,
    								$fname,
    								$mname,
    								$username,
    								$password,
    								$date_hired,
    								$gender,
    								$bday,
<<<<<<< HEAD
    								$email);

		//redirect(base_url().'index.php');
	}
	

=======
    								$email,
    								$program);

		//redirect(base_url().'index.php');
	}
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
}