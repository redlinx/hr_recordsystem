<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home_controller extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $this->load->view('facu_home', $data);
    }
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
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
        
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('home_controller', 'refresh');
  }


}

?>