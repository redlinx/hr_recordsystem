<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_rankingCommittee extends CI_Model {

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
	public function add_member($faculty)
	{
		$sql = "CALL add_rankMember(
								 '".$faculty['lastname']."',
								 '".$faculty['firstname']."',
								 '".$faculty['email']."',
								 '".$faculty['username']."',
								 '".$faculty['password']."',
								 '".$faculty['progID']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function display_members()
	{
		$sql =  "CALL `rms`.`display_committee`()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}
}