<?php if(!defined('BASEPATH')) exit('Hacking Attempt: Get out of the system ..!');

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

           $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
           $this->output->set_header("Pragma: no-cache");
       
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
      redirect('login/form_login');
    }
  }

  public function form_login()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
    $this->form_validation->set_rules('password', 'Password', 'required|md5|xss_clean');
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
        $cek = $this->m_login->takeUser($lastname,$firstname,$username, $password, $level);
        if($cek <> 0)
        {
            $this->session->set_userdata('isLogin', TRUE);
            $this->session->set_userdata('username',$username);
            $this->session->set_userdata('level',$level);
            $this->session->set_userdata('lastname',$lastname);
            $this->session->set_userdata('firstname',$firstname);
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
