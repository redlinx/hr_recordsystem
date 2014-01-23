<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class HR extends CI_Model {

	public function __construct()
	{
<<<<<<< HEAD
		//$this->load->database();
	}

	public function insert( $lname, $fname, $mname, $username, $password, $date_hired, $gender, $bday, $email )
	{
		$this->load->database();

		$sql_insert_profile = "INSERT INTO faculty_profile(lname, fname, mname, gender, bday, email)
=======
		$this->load->model('mysql_database');
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
	public function update_faculty($empID)
	{
		$sql = "CALL update_faculty('".$faculty['empID']."',
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

<<<<<<< HEAD
		return $sQuery->result_array();
	}
	public function display_MLS()
	{
		$sql =  "CALL `rms`.`display_MLS`()";
		$sQuery = $this->db->query($sql);
		$this->db->close();
=======
		$sql_insert_profile = "INSERT INTO faculty_profile(lname, fname, mname, gender, bday, email, program)
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
								VALUES( '$lname',
										'$fname',
										'$mname',
										'$gender',
										'$bday',
<<<<<<< HEAD
										'$email'
=======
										'$email',
										'$program'
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
										)";
>>>>>>> a779f36a824c1b57de5f9b20cb437690429f3b81

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

}