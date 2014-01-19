<?php
class Rank_cont extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//$this->load->model('rank_model');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		//$this->data['users'] = $this->Facu_model->get_all();
		$this->load->view('Ranking_chair');
	}
	function Ranking_com()
        {
           $this->load->view('Ranking_com');
	
	}
	
        public function view_facu_cred()
        {
            $this->load->view('upload_facu_cred');
        }
}
?>
