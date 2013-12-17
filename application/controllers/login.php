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
      }else
      {
        redirect('facu_home');
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
      }else
      {
       $username = $this->input->post('username');
       $password = $this->input->post('password');
       $level = $this->input->post('level');
       $fname = $this->input->post('firstname');
       $lname = $this->input->post('lastname');
$cek = $this->m_login->takeUser($firstname,$lastname,$username, $password, 1, $level);
   if($cek <> 0)
        {
          $this->session->set_userdata('isLogin', TRUE);
          $this->session->set_userdata('username',$username);
          $this->session->set_userdata('level',$level);
           $this->session->set_userdata('lastname',$lastname);
            $this->session->set_userdata('firstname',$firstname);
         
         redirect('verifylogin');
        }else
        {
         echo " <script>
alert('Failed Login: Check your username and password!');
 history.go(-1);
		          </script>";        
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