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
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
            //$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
            //$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
            //$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
            //$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
            //$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
            //$this->load->view('includes/navi_hr');
=======
<<<<<<< HEAD
            $this->load->view('includes/header_hr');
            //$this->load->view('includes/navi_hr');
=======
            $this->load->view('includes/header');
            $this->load->view('includes/navi_hr');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
            $this->load->view('search_results',$data);
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