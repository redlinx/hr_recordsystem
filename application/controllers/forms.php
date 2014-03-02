<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_display');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function education()
	{
 		$content = array('page_content' => $this->m_display->educType());
 	    //echo "<pre>";
		// print_r($content);
		// echo "</pre>";
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
		//$this->load->view('includes/navi_faculty');
=======
		$this->load->view('includes/header');
		$this->load->view('includes/navi_faculty');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
		$this->load->view('add_education', $content);
		$this->load->view('includes/footer');
	}

	public function training()
	{
 		$content = array('page_content' => $this->m_display->trainingType());
 		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
 		$this->load->view('includes/header');
 		$this->load->view('includes/navi_faculty');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
		$this->load->view('add_training', $content);
		$this->load->view('includes/footer');
	}

	public function skill()
	{
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
 		$this->load->view('includes/header');
 		$this->load->view('includes/navi_faculty');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
		$this->load->view('add_skill');
		$this->load->view('includes/footer');
	}

	public function spouse()
	{
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
		$this->load->view('includes/header');
 		$this->load->view('includes/navi_faculty');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
		$this->load->view('add_spouse');
		$this->load->view('includes/footer');
	}

	public function work()
	{
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
 		$this->load->view('includes/header');
 		$this->load->view('includes/navi_faculty');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
		$this->load->view('add_work');
		$this->load->view('includes/footer');
	}

	public function children()
	{
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
 		$this->load->view('includes/header_faculty');
 		//$this->load->view('includes/navi_faculty');
=======
 		$this->load->view('includes/header');
 		$this->load->view('includes/navi_faculty');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
		$this->load->view('add_children');
		$this->load->view('includes/footer');
	}
}