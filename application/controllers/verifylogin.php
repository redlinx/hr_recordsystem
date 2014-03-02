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
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
            //$this->load->view('includes/navi_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
            //$this->load->view('includes/navi_faculty');
=======
            $this->load->view('includes/header');
            $this->load->view('includes/navi_faculty');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
            $this->load->view('home_faculty');
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 2)
        {
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
           // $this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
           // $this->load->view('includes/navi_hr');
=======
            $this->load->view('includes/header');
            $this->load->view('includes/navi_hr');
            $this->load->view('home_hr');
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 3)
        {
            $this->load->view('includes/header');
            $this->load->view('includes/navi_dean');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
            $this->load->view('home_hr');
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 5)
        {
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
            $this->load->view('includes/header');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
            $this->load->view('includes/navi_rankChair');
            $this->load->view('home_rankChair');
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 6)
        {
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_faculty');
=======
            $this->load->view('includes/header');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
            $this->load->view('includes/navi_rankMember');
            $this->load->view('home_rankMember');
            $this->load->view('includes/footer');
        }
    }
}
?>