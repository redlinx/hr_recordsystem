<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_ranking extends CI_Model {

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
	public function add_rankMember($rankMember)
	{
		$sql = "CALL add_rankMember('".$rankMember['faculty_emp_id']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function update_level($rankMember)
	{
		$sql = "CALL update_level('".$rankMember['faculty_emp_id']."')";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->row_array(1);
	}

	public function set_rankMember($empID)
	{
		$sql = "CALL set_rankMember(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->row_array(1);
	}

	public function display_rankMember()
	{
		$sql =  "CALL display_rankMember()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function set_program($empID)
	{
		$sql = "CALL set_RankProgram(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->row_array(1);
	}

	public function update_program($faculty_emp_id)
	{
		$sql = "CALL update_program('".$faculty_emp_id['faculty_emp_id']."', '".$faculty_emp_id['rankProgram']."')";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->row_array(1);
	}

	public function view_ranking_profile($empID)
	{
		$sql = "CALL ranking_profile(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->row_array(1);
	}

	public function rank_faculty($faculty)
	{
		$sql = "CALL rank_faculty(
								 '".$faculty['empID']."',
								 '".$faculty['EQ']."',
								 '".$faculty['TeachP']."',
								 '".$faculty['Research']."',
								 '".$faculty['CS']."',
								 '".$faculty['TrainP']."',
								 '".$faculty['Involvement']."')";
		$this->db->query($sql);
		$this->db->close();
	}

}