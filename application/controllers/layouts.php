<?php
class Layouts extends CI_Controller {

	public function index()
	{
		$this->load->view('201file');
	}
	/*public function paascu()
	{
		$this->load->view('paascu_profile');
	}*/
	public function facu_home()
	{
		$this->load->view('facu_home');
	}
}
?>
