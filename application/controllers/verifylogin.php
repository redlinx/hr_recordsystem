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
      $this->session->set_userdata('username', $faculty['username']);
      $this->session->set_userdata('firstname', $faculty['firstname']);
      $this->session->set_userdata('lastname', $faculty['lastname']);
      $this->session->set_userdata('level', $faculty['level']);
      $this->session->set_userdata('emp_id', $faculty['emp_id']);
      $this->session->set_userdata('account_id', $faculty['account_id']);

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