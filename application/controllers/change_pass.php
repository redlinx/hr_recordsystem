<?php
	class Change_pass extends CI_Controller
	{
		
		public function index()
		{	
<<<<<<< HEAD
			$this->load->view('includes/header_faculty');
 			//$this->load->view('includes/navi_faculty');
=======
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
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
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