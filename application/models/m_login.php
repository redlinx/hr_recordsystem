<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!'); 
class M_login extends CI_Model 
{ 
	public function __construct() 
	{ 
		parent::__construct(); 
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

	public function takeUser($firstname, $lastname,$username, $password, $level) 
	{ 
		$this->db->select('*');
		$this->db->from('faculty_account');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		// $this->db->where('level', $level);
		$query = $this->db->get();
		return $query->num_rows(); 
	}

	public function userData($username) 
	{ 
		// $this->db->select('username'); 
		// $this->db->select('fname'); 
		// $this->db->select('lname'); 
		$this->db->where('username', $username);
		$query = $this->db->get('faculty_account'); 
		return $query->row(); 
	}

	public function user_login()
	{
		$sql = 'CALL user_login("' . $this->session->userdata('username') . '", "' . $this->session->userdata('password') . '")';
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->row_array();
	}
}