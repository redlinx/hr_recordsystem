<?php

class Upload_cred extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}

	function index()
	{
		$this->load->view('upload_facu_cred');
		
	}

}

?>