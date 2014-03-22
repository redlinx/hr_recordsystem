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
        $this->session->set_userdata('level_name', $faculty['level_name']);
        $this->session->set_userdata('rank_level', $faculty['rank_level']);
        $this->session->set_userdata('emp_id', $faculty['emp_id']);
        $this->session->set_userdata('account_id', $faculty['account_id']);

        if ($this->session->userdata('level') == 1 && $this->session->userdata('rank_level') == 1)
        {
            $this->load->view('includes/header');
            $this->load->view('includes/navi_faculty');
            $this->load->view('home_faculty');
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 2)
        {
            $this->load->view('includes/header');
            $this->load->view('includes/navi_hr');
            $this->load->view('home_hr');
            $this->load->view('includes/footer');
        }

        else if ($this->session->userdata('level') == 5)
        {
            $this->load->view('includes/header');
            $this->load->view('includes/navi_hrSec');
            $this->load->view('home_hr');
            $this->load->view('includes/footer');
        }

        else if ($this->session->userdata('level') == 6)
        {
            $this->load->view('includes/header');
            $this->load->view('includes/navi_progSec');
            $this->load->view('home_secretary');
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 3 && $this->session->userdata('rank_level') == 1)
        {
            $this->load->view('includes/header');
            $this->load->view('includes/navi_dean');
            $this->load->view('home_dean');
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 4 && $this->session->userdata('rank_level') == 1)
        {
            $this->load->view('includes/header');
            $this->load->view('includes/navi_admin');
            $this->load->view('home_admin');
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 1  && $this->session->userdata('rank_level') == 2)
        {
            $this->load->view('includes/header');
            $this->load->view('includes/navi_faculty');
            $this->load->view('home_faculty');
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 3 && $this->session->userdata('rank_level') == 2)
        {
            $this->load->view('includes/header');
            $this->load->view('includes/navi_dean');
            $this->load->view('home_dean');
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 4 && $this->session->userdata('rank_level') == 2)
        {
            $this->load->view('includes/header');
            $this->load->view('includes/navi_admin');
            $this->load->view('home_admin');
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 1 && $this->session->userdata('rank_level') == 3) 
        {
            $this->load->view('includes/header');
            $this->load->view('includes/navi_faculty');
            $this->load->view('home_rankMember');
            $this->load->view('includes/footer');
        }

        else if ($this->session->userdata('level') == 3 && $this->session->userdata('rank_level') == 3) 
        {
            $this->load->view('includes/header');
            $this->load->view('includes/navi_dean');
            $this->load->view('home_rankMember');
            $this->load->view('includes/footer');
        }

        else if ($this->session->userdata('level') == 4 && $this->session->userdata('rank_level') == 3) 
        {
            $this->load->view('includes/header');
            $this->load->view('includes/navi_admin');
            $this->load->view('home_admin');
            $this->load->view('includes/footer');
        }
    }
}
?>