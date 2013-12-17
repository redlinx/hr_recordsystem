<?php
class Facu_cont extends CI_Controller {

	public function index()
	{
		$this->load->view('facu_home');
	}
	function firstpage()
        {
            $this->load->view('firstpage');
        }
        function secondpage()
        {
            $this->load->view('secondpage');
        }
           function thirdpage()
        {
            $this->load->view('thirdpage');
        }
           function fourthpage()
        {
            $this->load->view('fourthpage');
        }
           function fifthpage()
        {
            $this->load->view('fifthpage');
        }
           function sixthpage()
        {
            $this->load->view('sixthpage');
        }

}
?>
