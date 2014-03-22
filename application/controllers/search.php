<?php if(!defined('BASEPATH')) exit('Hacking Attempt: Get out of the system ..!');
class Search extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');

        $this->load->model('smodel');
    }

    public function index()
    {
       // $this->load->view('includes/header');
       // $this->load->view('includes/navi_hr');
        $this->load->view('search_form');
        $this->load->view('includes/footer');
        
    }

    public function execute_search()
    {
        $empID = $this->uri->segment(3, 0); 
        // Retrieve the posted search term.
        $search_term = $this->input->post('search');
        
        // Use a model to retrieve the results.
        $data['results'] = $this->smodel->get_results($search_term);
        // Pass the results to the view.
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        if($search_term != FALSE)
        {
            if($this->session->userdata('level') == 2)
            {
              $this->load->view('includes/header');
              $this->load->view('includes/navi_hr');
              $this->load->view('search_results', $data);
              $this->load->view('includes/footer');
            }
            else if($this->session->userdata('level') == 5)
            {
              $this->load->view('includes/header');
              $this->load->view('includes/navi_hrSec');
              $this->load->view('search_results', $data);
              $this->load->view('includes/footer');
            }
            else if($this->session->userdata('level') == 4)
            {
              $this->load->view('includes/header');
              $this->load->view('includes/navi_admin');
              $this->load->view('search_results', $data);
              $this->load->view('includes/footer');
            }

        }
        else
        {
             echo "<script> alert('No Data Found'); history.go(-1); </script>";
        }
        //$this->load->view('includes/footer');
         // echo "<pre>";
        //print_r($search_term);
        //echo "</pre>";
    }
    
}
?>