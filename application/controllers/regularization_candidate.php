<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Regularization_candidate extends CI_Controller {

	public function __construct()
	 {
        parent::__construct();
        $this->load->helper('url');
      //  $this->load->model('m_login');
        $this->load->model('hr');
    }

	public function index()
	{
		$empID = $this->uri->segment(3, 0); 
    $content = array('page_view_content' => $this->hr->display_regularization_candidate());
    // echo "<pre>";
    // print_r($content);
    // echo "</pre>";
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
		//$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
		$this->load->view('includes/header_hr');
		//$this->load->view('includes/navi_hr');
=======
		$this->load->view('includes/header');
		$this->load->view('includes/navi_hr');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
		$this->load->view('view_candidate', $content);
		$this->load->view('includes/footer');
		
		
	}
    public function verify_regularization()
    {
        $empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->hr->updateRegularization($empID));
        
        $faculty['account_id']  = $content['page_view_content']['account_id'];
        $faculty['emp_id'] 		= $content['page_view_content']['faculty_profile_emp_id'];
      	
      	$this->hr->verify_regularization($faculty);
        
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        
      	// // $this->db->insert('notifications', array('description' => 'user attack bla bla', 'date' => 'date karon'));
       redirect(base_url().'index.php/regularization_candidate');


    }
}