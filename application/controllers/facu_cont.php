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
<<<<<<< HEAD
		$this->load->view('facu_home');
=======
		// $this->db->get()
		$user = $this->db->get_where("user", array('username' => $this->session->userdata('username')));
		$this->load->view('facu_home', array('user' => $user->row_array()));
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
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
<<<<<<< HEAD
		
        public function upload_facu_cred()
	{
            $this->load->view('upload_facu_cred');
        }
       

}
?>
=======
	}	
      
     ?>
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
