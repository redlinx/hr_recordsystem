<?php
	class Change_pass extends CI_Controller
	{

		public function index()
		{	
			if ($this->session->userdata('level') == 1 && $this->session->userdata('rank_level') == 1)
			{
				$this->load->view('includes/header');
				$this->load->view('includes/navi_faculty');
				$this->load->view('vChangePassword');
				$this->load->view('includes/footer');
			}
			else if ($this->session->userdata('level') == 2)
			{
				$this->load->view('includes/header');
				$this->load->view('includes/navi_hr');
				$this->load->view('vChangePassword');
				$this->load->view('includes/footer');
			}
			else if ($this->session->userdata('level') == 5 && $this->session->userdata('rank_level') == 1)
			{
				$this->load->view('includes/header');
				$this->load->view('includes/navi_hrSec');
				$this->load->view('vChangePassword');
				$this->load->view('includes/footer');
			}
			else if ($this->session->userdata('level') == 6 && $this->session->userdata('rank_level') == 1)
			{
				$this->load->view('includes/header');
				$this->load->view('includes/navi_progSec');
				$this->load->view('vChangePassword');
				$this->load->view('includes/footer');
			}
			else if ($this->session->userdata('level') == 3 && $this->session->userdata('rank_level') == 1)
			{
				$this->load->view('includes/header');
				$this->load->view('includes/navi_dean');
				$this->load->view('vChangePassword');
				$this->load->view('includes/footer');
			}
			else if ($this->session->userdata('level') == 4 && $this->session->userdata('rank_level') == 1)
			{
				$this->load->view('includes/header');
				$this->load->view('includes/navi_admin');
				$this->load->view('vChangePassword');
				$this->load->view('includes/footer');
			}
			else if ($this->session->userdata('level') == 1  && $this->session->userdata('rank_level') == 2)
			{
				$this->load->view('includes/header');
				$this->load->view('includes/navi_faculty');
				$this->load->view('vChangePassword');
				$this->load->view('includes/footer');
			}
			else if ($this->session->userdata('level') == 3 && $this->session->userdata('rank_level') == 2)
			{
				$this->load->view('includes/header');
				$this->load->view('includes/navi_dean');
				$this->load->view('vChangePassword');
				$this->load->view('includes/footer');
			}
			else if ($this->session->userdata('level') == 4 && $this->session->userdata('rank_level') == 2)
			{
				$this->load->view('includes/header');
				$this->load->view('includes/navi_admin');
				$this->load->view('vChangePassword');
				$this->load->view('includes/footer');
			}
			else if ($this->session->userdata('level') == 1 && $this->session->userdata('rank_level') == 3) 
			{
				$this->load->view('includes/header');
				$this->load->view('includes/navi_faculty');
				$this->load->view('vChangePassword');
				$this->load->view('includes/footer');
			}

			else if ($this->session->userdata('level') == 3 && $this->session->userdata('rank_level') == 3) 
			{
				$this->load->view('includes/header');
				$this->load->view('includes/navi_dean');
				$this->load->view('vChangePassword');
				$this->load->view('includes/footer');
			}

			else if ($this->session->userdata('level') == 4 && $this->session->userdata('rank_level') == 3) 
			{
				$this->load->view('includes/header');
				$this->load->view('includes/navi_admin');
				$this->load->view('vChangePassword');
				$this->load->view('includes/footer');
			}
		}

		
		public function change_password()
		{
			$config['hostname'] = "localhost";
			$config['username'] = "root";
			$config['password'] = "";
			$config['database'] = "rms";
			$config['dbdriver'] = "mysql";
			$config['dbprefix'] = "";
			$config['pconnect'] = FALSE;
			$config['db_debug'] = TRUE;
			$config['cache_on'] = FALSE;
			$config['cachedir'] = "";
			$config['char_set'] = "utf8";
			$config['dbcollat'] = "utf8_general_ci";
			
			$this->load->database($config);
			$this->form_validation->set_rules('cur_pw', 'Current Password', 'required|md5');
			$this->form_validation->set_rules('new_pw', 'New Password', 'required|md5');
			$this->form_validation->set_rules('conf_pw', 'Confirm Password', 'required|matches[new_pw]');
			
			if($this->form_validation->run() != NULL)
			{
		 		$account = $this->db->get_where('faculty_account', array('account_id' => $this->session->userdata('account_id')))->row_array();
				
				if ($account['password'] != $this->input->post('cur_pw'))
				{
					echo "<script> alert('Incorrect Password'); history.go(-1); </script>";
				}
				else
				{
				$faculty_account['password'] = mysql_real_escape_string($this->input->post("new_pw"));
				$faculty_account['current_password'] = mysql_real_escape_string($this->input->post("conf_pw"));
				$faculty_account['current_password'] = mysql_real_escape_string($this->input->post("cur_pw"));
				$faculty_account['account_id'] = $this->session->userdata('account_id');
			
				$this->load->model('page_handler');
				$this->page_handler->changePass($faculty_account);
				
				echo "<script> alert('Password Successfully Changed'); history.go(-1); </script>";
				redirect(base_url('/index.php/verifylogin'), "refresh");
				}
				
			}
			else
			{
			 	echo "<script> alert('New Password is incorrect Please Try Again'); history.go(-1); </script>";
			 }
		}	

	}

?>