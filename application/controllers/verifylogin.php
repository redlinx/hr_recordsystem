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
    
    $faculty = $this->m_login->user_login();
      // echo "<pre>";
      // print_r($faculty);
      // echo "</pre>";
      // $faculty= $this->session->userdata('username');
      // $data['level'] = $this->session->userdata('level');
      // $faculty = $this->m_login->userData($faculty); 
      $this->session->set_userdata('username', $faculty['username']);
      $this->session->set_userdata('firstname', $faculty['firstname']);
      $this->session->set_userdata('lastname', $faculty['lastname']);
      $this->session->set_userdata('level', $faculty['level']);
      $this->session->set_userdata('emp_id', $faculty['emp_id']);
      //$this->load->view('facu_home');
      //echo "<pre>";
      //print_r($this->session->all_userdata());
      //echo "</pre>";
      if ($this->session->userdata('level') == 1)
      {
        $this->load->view('home_faculty');
      }
      else if ($this->session->userdata('level') == 2)
      {
        $this->load->view('home_hr');
      }
      else if ($this->session->userdata('level') == 3)
        echo "ranking committe siya";
      }
}
?>