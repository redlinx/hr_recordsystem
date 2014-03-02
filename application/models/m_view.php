<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_view extends CI_Model
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

	public function faculty($empID)
	{
		$sql = "CALL view_faculty(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->row_array(1);
	}

	public function profile($empID)
	{
		$sql = "CALL view_faculty_profile(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->row_array(1);
	}

	public function education($empID)
	{
		$sql = "CALL view_faculty_education(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function faculty_educ($educID)
	{
		$sql = "CALL update_form_education(".$educID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->row_array(1);
	}

	public function training($empID)
	{
		$sql = "CALL view_faculty_training(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function faculty_training($trainingID)
	{
		$sql = "CALL update_form_training(".$trainingID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->row_array(1);
	}

	public function work($empID)
	{
		$sql = "CALL view_faculty_work(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function faculty_work($workID)
	{
		$sql = "CALL update_form_work(".$workID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->row_array(1);
	}

	public function skills($empID)
	{
		$sql = "CALL view_faculty_skills(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function faculty_skill($skillID)
	{
		$sql = "CALL update_form_skill(".$skillID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->row_array(1);
	}

	public function spouse($empID)
	{
		$sql = "CALL view_faculty_spouse(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->row_array(1);
	}

	public function children($empID)
	{
		$sql = "CALL view_faculty_children(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function faculty_children($childID)
	{
		$sql = "CALL update_form_children(".$childID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->row_array(1);
	}
}
