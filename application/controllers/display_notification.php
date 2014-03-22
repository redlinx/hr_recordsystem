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
        $this->load->view('includes/navi_hr');
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
        $this->load->view('includes/navi_hr');
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
    public function display_rankPoints()
    {
        $empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->hr->display_rankPoints());
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        if($this->session->userdata('level') == 2)
        {
          $this->load->view('includes/header');
          $this->load->view('includes/navi_hr');
          $this->load->view('display_rankPoints', $content);
          $this->load->view('includes/footer');
        }
        else if($this->session->userdata('level') == 5)
        {
          $this->load->view('includes/header');
          $this->load->view('includes/navi_hrSec');
          $this->load->view('display_rankPoints', $content);
          $this->load->view('includes/footer');
        }
    }
     public function display_eligibilityNoti()
    {
      $empID = $this->uri->segment(3, 0); 
      $content = array('page_view_content' => $this->hr->display_eligibilityNoti());
      // echo "<pre>";
      // print_r($content);
      // echo "</pre>";
      $this->load->view('includes/header');
      $this->load->view('includes/navi_hr');
      $this->load->view('display_eligibilityNoti', $content);
      $this->load->view('includes/footer');
        
    }

     public function verify_eligibility()
    {
        $empID = $this->uri->segment(3, 0); 
        $content = array('page_view_content' => $this->hr->updateEligibility($empID));
        //  echo "<pre>";
        //  print_r($content);
        // echo "</pre>";
        $faculty['eligibility_id'] = $content['page_view_content']['eligibility_id'];
        $faculty['emp_id'] = $content['page_view_content']['emp_id'];
        $this->hr->verify_eligibility($faculty);
        // $this->db->insert('notifications', array('description' => 'user attack bla bla', 'date' => 'date karon'));
        redirect(base_url().'index.php/display_notification/display_eligibilityNoti');
    }
    public function view_eligibility()
    {
        $eligibilityID = $this->uri->segment(3, 0);
        $content = array('page_view_content' => $this->m_view->faculty_eligibility($eligibilityID));
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
         $this->load->view('includes/header');
        $this->load->view('includes/navi_hr');
        $this->load->view('view_faculty_eligibility_noti', $content);
        $this->load->view('includes/footer');
    }
      public function display_rankNoti()
      {
                $content = array('page_view_content' => $this->hr->display_rankNoti());
                // echo "<pre>";
                // print_r($content);
                // echo "</pre>";
                $this->load->view('includes/header');
                $this->load->view('includes/navi_hr');
                $this->load->view('display_rankNoti', $content);
                $this->load->view('includes/footer');
    }

    public function promote()
    {
        $empID = $this->uri->segment(3, 0);
        $content = array('page_content1'    => $this->m_display->programType(),
                         'page_content2'    => $this->m_display->rank(),
                         'page_view_content'=> $this->m_view->faculty($empID),
                         'total_points'     => $this->hr->totalPoints($empID));
        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        $this->load->view('includes/header');
        $this->load->view('includes/navi_hr');
        $this->load->view('display_promote', $content);
        $this->load->view('includes/footer');
    }
    
     public function promote_faculty()
    {
        
        $faculty['empID']   = $this->input->post('emp_id');
        $faculty['rankID']  = $this->input->post('rank');
        // echo '<pre>';
        // print_r($faculty);
        // echo '</pre>';
        $this->hr->promote_faculty($faculty);

        $faculty['empID']   = $this->input->post('emp_id');
        $faculty['rankID']  = $this->input->post('rank');
        // echo '<pre>';
        // print_r($faculty);
        // echo '</pre>';
        $this->hr->rank_history($faculty);

        $faculty['rankID']       = $this->input->post('rank');
        $faculty['totalPoints'] = $this->input->post('TotalPoints');
        // echo '<pre>';
        // print_r($faculty);
        // echo '</pre>';
        $this->hr->update_totalPoints($faculty);
        redirect(base_url().'index.php/display_notification/display_rankNoti/'.$this->input->post('emp_id'));
    }
}
?>