<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Faculty extends CI_Model
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

		//$this->load->database();
	}

	public function display_educType()
	{
		$sql = "CALL display_educType()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function add_education($faculty)
	{
		$sql = "CALL add_education(
								 '".$faculty['school_name']."',
								 '".$faculty['address']."',
								 '".$faculty['year']."',
								 '".$faculty['degree']."',
								 '".$faculty['typeID']."',
								 '".$faculty['emp_id']."')";
		$this->db->query($sql);
		$this->db->close();
	}
}
?>