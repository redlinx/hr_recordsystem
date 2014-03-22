<?php
class Gfp extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('email');
	}

	public function index()
	{
		$connected = @fsockopen('www.google.com', 80);
		if ($connected)
		{
			fclose($connected);
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('email_check');
			}
			else
			{
				//please see Codeigniter : Get your forgotten Password . Part-2
				$email = $this->input->post('email');
				$this->load->helper('string', 6);
				$this->db->where('email', $email);
				$rs = random_string('alnum', 12);
				$this->db->update('faculty_account', array('rs' => $rs));
				//now we will send an email
				$config['protocol'] = 'smtp';
				$config['smtp_host'] = 'ssl://smtp.googlemail.com';
				$config['smtp_port'] = 465;
				$config['smtp_user'] = 'jazzintes06@gmail.com';
				$config['smtp_pass'] = 'saiquo0906';
				$config['charset'] = 'utf-8';
				$config['mailtype'] = 'html';
				$config['newline'] = "\r\n";	   
				$this->email->initialize($config);
				$this->email->from('jazzintes06@gmail.com', 'jazzintes06');
				$this->email->to($email);
				$this->email->subject('Get your forgotten Password');
				$this->email->message('Please go to this link to get your password. http://localhost/hr_recordsystem/index.php/get_password/index/'.$rs );
			 
				if($this->email->send())
				{
					echo "<script> alert('Please Check Your Email Address'); history.go(-2); </script>";
				}
				else
				{
					show_error($this->email->print_debugger());
				}
			}
		}
		else
		{
			 echo "<script> alert('Unable to connect to the Internet'); history.go(-1); </script>";
		}
	}

	public function email_check($str)
	{
		$query = $this->db->get_where('faculty_account', array('email' => $str), 1);
		if ($query->num_rows() == 1)
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('email_check', 'This Email does not exist.');
			return false;
		}
	}
}