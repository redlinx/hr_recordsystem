<?php
   if(!defined('BASEPATH'))exit('No direct script access allowed');
   
   class Main_controller extends CI_Controller{
    
    public function index()
    {
        $this->main_view();
    }
    
    public function main_view()
    {
        $this->load->view('main_view');
    }
    
    public function members(){
        if($this->session->userdata('is_logged_in')){
             $this->load->view('members');
        }else{
            redirect('main_controller/restricted');
        }
    }
         public function restricted()
    {
        $this->load->view('restricted');
    }
    public function main_view_validation(){
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean|callback_validate_credentials');
          $this->form_validation->set_rules('password', 'Password', 'required|trim');
          
          if ($this->form_validation->run()){
            
            $data = array(
                'username' => $this->input->post('username'), 'is_logged_in' => 1 );
            
            $this->session->set_userdata($data);
            redirect('main_controller/members');
          }else{
            $this->load->view('main_view');
          }
          
    }
    public function validate_credentials(){
     $this->load->model('model_users');
     
     if($this->model_users->can_log_in()){
        return true;
     }else {
        $this->form_validation->set_message('validate_credentials', 'Incorrect username/password');
        return false;
     }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('main_controller/main_view');
    }
   }
   
   
   ?>