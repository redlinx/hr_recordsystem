<?php
class Facu_cont extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Facu_model');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		//$this->data['users'] = $this->Facu_model->get_all();
		// $this->db->get()
		$user = $this->db->get_where("user", array('username' => $this->session->userdata('username')));
		$this->load->view('facu_home', array('user' => $user->row_array()));
	}
	function firstpage()
        {

           $this->load->view('firstpage');
	
	}
	function secondpage()
	{
		$this->load->view('secondpage');
	    }
	function thirdpage()
	{
		$this->load->view('thirdpage');
	    }
	function fourthpage()
	{
		$this->load->view('fourthpage');
	}
	function fifthpage()
	{
		$this->load->view('fifthpage');
	}
	function sixthpage()
	{
		$this->load->view('sixthpage');
	}
	}	
      
     ?>
