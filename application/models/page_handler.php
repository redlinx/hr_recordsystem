<?php

class Page_handler extends CI_Model
{
	public function __construct()
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
	}
	public function isLogin()
	{
		return $this->session->userdata('isLogin');
	}
	
	public function verifylogin()
	{
		if($this->isLogin())
		{
			return true;
		}
		else
		{
			redirect('login/form_login');
		}
	}
	public function changePass($faculty)
	{
		$sql = "CALL changePass('".$faculty['account_id']."',
								'".$faculty['password']."',
								'".$faculty['current_password']."')";
		$this->db->query($sql);
		$this->db->close();
	}
}
?>