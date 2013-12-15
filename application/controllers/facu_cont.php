<?php
class Facu_cont extends CI_Controller {

	public function index()
	{
		$this->load->view('facu_home');
	}
	/*function view_facu_prof()
        {
            $this->load->view('view_facu_prof');
        }*/
        public function upload_facu_cred()
        {
            $this->load->view('upload_facu_cred');
        }
}
?>
