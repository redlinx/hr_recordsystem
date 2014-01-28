<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class HR extends CI_Model {

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

	public function display_regularization_candidate()
	{
		$sql = 'CALL display_regularization_candidate()';
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}
	public function display_program()
	{
		$sql = "CALL display_program()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function add_faculty($faculty)
	{
		$sql = "CALL add_faculty(
								 '".$faculty['emp_lname']."',
								 '".$faculty['emp_fname']."',
								 '".$faculty['emp_mname']."',
								 '".$faculty['emp_bday']."',
								 '".$faculty['emp_gender']."',
								 '".$faculty['emp_civStat']."',
								 '".$faculty['emp_cellNo']."',
								 '".$faculty['emp_tellNo']."',
								 '".$faculty['emp_email']."',
								 '".$faculty['username']."',
								 '".$faculty['userpass']."',
								 '".$faculty['progID']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function update_faculty($faculty)
	{
		$sql = "CALL update_faculty('".$faculty['emp_id']."',
									'".$faculty['emp_lname']."',
								 	'".$faculty['emp_fname']."',
								 	'".$faculty['emp_mname']."',
								 	'".$faculty['emp_bday']."',
								 	'".$faculty['emp_gender']."',
								 	'".$faculty['emp_civStat']."',
								 	'".$faculty['emp_cellNo']."',
								 	'".$faculty['emp_tellNo']."',
								 	'".$faculty['emp_email']."',
								 	'".$faculty['username']."',
								 	'".$faculty['userpass']."',
								 	'".$faculty['progID']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function display_faculty()
	{
		$sql =  "CALL `rms`.`display_faculty`()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function view_faculty_profile($empID)
	{
		$sql = "CALL view_faculty_profile(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->row_array(1);
	}

	public function display_ITE()
	{
		$sql =  "CALL `rms`.`display_ITE`()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function display_MLS()
	{
		$sql =  "CALL `rms`.`display_MLS`()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function display_ABA()
	{
		$sql =  "CALL `rms`.`display_ABA`()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function display_PharmaChem()
	{
		$sql =  "CALL `rms`.`display_PharmaChem`()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function display_NDHM()
	{
		$sql =  "CALL `rms`.`display_NDHM`()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function display_Music()
	{
		$sql =  "CALL `rms`.`display_Music`()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function display_Nursing()
	{
		$sql =  "CALL `rms`.`display_Nursing`()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function display_LA()
	{
		$sql =  "CALL `rms`.`display_LA`()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function display_Educ()
	{
		$sql =  "CALL `rms`.`display_Educ`()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function display_Eng()
	{
		$sql =  "CALL `rms`.`display_Eng`()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function display_Admin()
	{
		$sql =  "CALL `rms`.`display_Admin`()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function display_byProgram($progID)
	{
		$sql = "CALL `rms`.`display_byProgram`(".$progID.");";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function change_password($empID)
	{
		$sql = "CALL change_password('".$faculty['empID']."',
					'".$faculty['username']."',
					'".$faculty['userpass']."')";
				
		$this->db->query($sql);
		$this->db->close();
	}

	public function change_password_account( $username, $userpass )
	{
		$this->load->database();

		$sql_change_password = "UPDATE `rms`.`faculty_account`
					SET `username` = username,
					`password` = userpass
					WHERE `faculty_profile_emp_id` = empID";

		$query = $this->db->query($sql_change_password);

		$faculty_id = mysql_update_id();
	}

}