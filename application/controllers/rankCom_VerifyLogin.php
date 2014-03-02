<?php if(!defined('BASEPATH')) exit('Hacking Attempt: Get out of the system ..!');

class RankCom_VerifyLogin extends CI_Controller
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
            redirect('ranking_login/form_login');
        }

        $faculty = $this->m_login->rankCom_login();
        
        $this->session->set_userdata('username', $faculty['username']);
        $this->session->set_userdata('name', $faculty['name']);
        $this->session->set_userdata('level', $faculty['level']);
        $this->session->set_userdata('rc_id', $faculty['rc_id']);

        if ($this->session->userdata('level') == 1)
        {
            $this->load->view('includes/header_faculty');
            $this->load->view('includes/navi_rankMember');
            $this->load->view('home_rankMember');
            $this->load->view('includes/footer');
        }
        else if ($this->session->userdata('level') == 2)
        {
            $this->load->view('includes/header_faculty');
            $this->load->view('includes/navi_rankChair');
            $this->load->view('home_rankChair');
            $this->load->view('includes/footer');
        }
    }
}
?>