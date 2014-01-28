<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Regularization_candidate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('hr');
		$faculty = $this->hr->display_regularization_candidate();
		
		echo "<pre>";
		print_r($faculty);
		echo "</pre>"; 
	}
}