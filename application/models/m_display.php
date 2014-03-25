<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_display extends CI_Model
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

	public function facultyLevel()
	{
		$sql = "CALL display_level()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}
	
	public function educType()
	{
		$sql = "CALL display_educType()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function trainingType()
	{
		$sql = "CALL display_trainingType()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}
	
	public function programType()
	{
		$sql = "CALL display_program()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function rankProgram()
	{
		$sql = "CALL display_rankProgram()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function rank()
	{
		$sql = "CALL display_rank()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function rankLevel()
	{
		$sql = "CALL display_rankLevel()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function uploadCategory()
	{
		$sql = "CALL display_category()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function uploads($empID)
	{
		$sql = "CALL view_upload(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}
	
	public function picture($uploadID)
	{
		$sql = "CALL view_picture(".$uploadID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->row_array(1);
	}

        public function display_regular_faculty()
	{
		$sql = "CALL display_regular_faculty()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}
	public function display_unRegular_faculty()
	{
		$sql = "CALL display_unRegular_faculty()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}
}