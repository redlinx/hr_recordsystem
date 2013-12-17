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
		$this->load->view('facu_home');
	}
	function firstpage()
        {
<<<<<<< HEAD
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
		
        public function upload_facu_cred()
=======
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
>>>>>>> aa66e310187b22d139dfd3bcbb82dde11624fbb9
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
