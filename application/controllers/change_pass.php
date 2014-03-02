<?php
	class Change_pass extends CI_Controller
	{
		
		public function index()
		{	
			$this->load->view('includes/header_faculty');
 			//$this->load->view('includes/navi_faculty');
			$this->load->view('vChangePassword');
			$this->load->view('includes/footer');
		}

		
		public function change_password()
		{
			$this->form_validation->set_rules('cur_pw', 'Current Password', 'required');
			$this->form_validation->set_rules('new_pw', 'New Password', 'required');
			$this->form_validation->set_rules('conf_pw', 'Confirm Password', 'required|matches[new_pw]');
			
			if($this->form_validation->run() != NULL)
			{
				$faculty_account['password'] = mysql_real_escape_string($this->input->post("new_pw"));
				$faculty_account['current_password'] = mysql_real_escape_string($this->input->post("cur_pw"));
				$faculty_account['account_id'] = $this->session->userdata('account_id');
			
				$this->load->model('page_handler');
				$this->page_handler->changePass($faculty_account);
				
				echo "Password Succesfully Changed!";
				redirect(base_url('/index.php/verifylogin'), "refresh");
			}
			else
			{
				echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
			}
		}	

	}

?>