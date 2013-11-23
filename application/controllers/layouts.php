<?php
class Layouts extends CI_Controller {

	public function index()
	{
		$this->load->view('201file');
	}
	public function paascu()
	{
		$this->load->view('paascu_profile');
	}
	public function sample()
	{
		$this->load->view('sample_view');
	}
}
?>
