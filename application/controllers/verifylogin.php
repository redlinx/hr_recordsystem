<?php if(!defined('BASEPATH')) exit('Hacking Attempt: Get out of the system ..!');

class Verifylogin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
     $this->load->helper('url');
     $this->load->model('m_login');
  }
  
  
  public function index()
  {
    if($this->session->userdata('isLogin') == FALSE)
    {
      redirect('login/form_login');
    }
    else
    {
      $this->load->model('m_login');
      $user = $this->session->userdata('username');
      $data['level'] = $this->session->userdata('level');
      $user = $this->m_login->userData($user);
      $this->session->set_userdata('username', $user->username);
      $this->session->set_userdata('firstname', $user->firstname);
      $this->session->set_userdata('lastname', $user->lastname);
      $this->load->view('facu_home');
    }
  } 
  
}
?>