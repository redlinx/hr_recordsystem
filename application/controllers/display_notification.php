<?php if(!defined('BASEPATH')) exit('Hacking Attempt: Get out of the system ..!');

class Display_notification extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_display');
        $this->load->model('m_view');
        $this->load->model('hr');
    }

    public function index()
    {
        $empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->hr->display_notification());
        $this->load->view('includes/header');
        $this->load->view('includes/navi_hr');
        $this->load->view('view_notification', $content);
        $this->load->view('includes/footer');
         
    }

    public function verify_notification()
    {
        $uploadID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->hr->updateUpload($uploadID));
        $faculty['upload_id'] = $content['page_view_content']['upload_id'];
        $faculty['emp_id'] = $content['page_view_content']['emp_id'];

        $this->hr->verify_notification($faculty);
        redirect(base_url().'index.php/display_notification');
    }

    public function display_education()
    {
      $empID = $this->uri->segment(3, 0); 
      $content = array('page_view_content' => $this->hr->display_educNoti());
      // echo "<pre>";
      // print_r($content);
      // echo "</pre>";
      $this->load->view('includes/header');
      $this->load->view('includes/navi_hr');
      $this->load->view('display_educNoti', $content);
      $this->load->view('includes/footer');
      
    }

    public function view_education()
    {
      $educID = $this->uri->segment(3, 0);  
      $content = array('page_content' => $this->m_display->educType(),
               'page_view_content' => $this->m_view->faculty_educ($educID));
      // echo "<pre>";
      // print_r($content);
      // echo "</pre>";
      $this->load->view('includes/header');
      $this->load->view('includes/navi_hr');
      $this->load->view('view_faculty_educ_noti', $content);
      $this->load->view('includes/footer');
    }
 
    public function verify_education()
    {
        $educID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->hr->updateEduc($educID));
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        $faculty['educ_id'] = $content['page_view_content']['educ_id'];
        $faculty['emp_id'] = $content['page_view_content']['emp_id'];

        $this->hr->verify_education($faculty);
        // $this->db->insert('notifications', array('description' => 'user attack bla bla', 'date' => 'date karon'));
        redirect(base_url().'index.php/display_notification/display_education');
    }

    public function display_profUpdate()
    { 
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = base_url().'/index.php/display_notification/display_profUpdate/';
        $config['total_rows'] = 50;
        $config['per_page'] = 10;
        $config['num_links'] = 5;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['page_view_content'] = $this->hr->display_profUpdate($config['per_page'],$page);
        $this->load->view('includes/header');
        $this->load->view('includes/navi_hr');
        $this->load->view('display_profNoti', $data);
        $this->load->view('includes/footer');
    }

    public function view_profile()
    {
        $empID = $this->uri->segment(3, 0);
        $page_view_content['faculty_profile'] = $this->m_view->faculty($empID);
        // echo "<pre>";
        // print_r($page_view_content);
        // echo "</pre>";
        $this->load->view('includes/header');
        $this->load->view('includes/navi_hr');
        $this->load->view('view_faculty_prof_noti', $page_view_content);
        $this->load->view('includes/footer');
    }

    public function verify_profile()
    {
        $empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->hr->updateProf($empID));
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        $faculty['emp_id'] = $content['page_view_content']['emp_id'];
        $this->hr->verify_profile($faculty);
        //$this->db->insert('notifications', array('description' => 'user attack bla bla', 'date' => 'date karon'));
        redirect(base_url().'index.php/display_notification/display_profUpdate');
    }

    public function display_trainingNoti()
    {
        $empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->hr->display_trainingNoti());
        // echo "<pre>";
        // print_r($content);
        //echo "</pre>";
        $this->load->view('includes/header');
        $this->load->view('includes/navi_hr');
        $this->load->view('display_trainingNoti', $content);
        $this->load->view('includes/footer');
    }

    public function view_training()
    {
        $trainingID = $this->uri->segment(3, 0);
        $content = array('page_content' => $this->m_display->trainingType(),
                         'page_view_content' => $this->m_view->faculty_training($trainingID));
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        $this->load->view('includes/header');
        $this->load->view('includes/navi_faculty');
        $this->load->view('view_faculty_training_noti', $content);
        $this->load->view('includes/footer');
    }

    public function verify_training()
    {
        $empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->hr->updateTraining($empID));
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        $faculty['faculty_profile_emp_id'] = $content['page_view_content']['faculty_profile_emp_id'];
        $faculty['training_id'] = $content['page_view_content']['training_id'];
        $this->hr->verify_training($faculty);
        // $this->db->insert('notifications', array('description' => 'user attack bla bla', 'date' => 'date karon'));
        redirect(base_url().'index.php/display_notification/display_trainingNoti');
    }

    public function display_workExp()
    {
        $empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->hr->display_workExp());
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        $this->load->view('includes/header');
        $this->load->view('includes/navi_hr');
        $this->load->view('display_workExp', $content);
        $this->load->view('includes/footer');
    }

    public function view_work()
    {
        $workID = $this->uri->segment(3, 0);
        $content = array('page_view_content' => $this->m_view->faculty_work($workID));
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        $this->load->view('includes/header');
        $this->load->view('includes/navi_faculty');
        $this->load->view('view_faculty_work_noti', $content);
        $this->load->view('includes/footer');
    }

    public function verify_workExp()
    {
        $empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->hr->updateWorkExp($empID));
        //  echo "<pre>";
        //  print_r($content);
        // echo "</pre>";
        $faculty['work_exp_id'] = $content['page_view_content']['work_exp_id'];
        $faculty['emp_id'] = $content['page_view_content']['emp_id'];
        $this->hr->verify_workExp($faculty);
        // $this->db->insert('notifications', array('description' => 'user attack bla bla', 'date' => 'date karon'));
        redirect(base_url().'index.php/display_notification/display_workExp');
    }
}
?>