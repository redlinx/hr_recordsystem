<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class view extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('HR');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	function display()
	{
		$this->load->model('HR');
		$this->data['users'] = $this->HR->display();
		$this->load->view('view', $this->data);
	}
}