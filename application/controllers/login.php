<?php if(!defined('BASEPATH')) exit('Hacking Attempt: Get out of the system ..!');

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
    $this->load->helper('url');
  }

  public function index()
  {
    $session = $this->session->userdata('isLogin');
    if($session == FALSE)
    {
      redirect('login/form_login');
    }
    else
    {
      redirect('facu_home');
    }
  }

  public function form_login()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
    $this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
    $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
    
    if($this->form_validation->run()==FALSE)
    {
        $this->load->view('form_login');
    }
    else
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->session->set_userdata('username', $this->input->post('username'));
        $this->session->set_userdata('password', $this->input->post('password'));
        $level = $this->input->post('level');
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $cek = $this->m_login->takeUser($lname,$fname,$username, $password, 1, $level);
        if($cek <> 0)
        {
            $this->session->set_userdata('isLogin', TRUE);
            $this->session->set_userdata('username',$username);
            $this->session->set_userdata('level',$level);
            $this->session->set_userdata('lname',$lname);
            $this->session->set_userdata('fname',$fname);
            redirect('verifylogin');
        }
        else
        {
            echo "<script> alert('Failed Login: Incorrect Username/Password'); history.go(-1); </script>";        
        }
    }  
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('login/form_login');
  }
}
?>