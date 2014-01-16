<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class HR extends CI_Model {

	public function __construct()
	{
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
		$sql = "CALL add_faculty('".$faculty['emp_lname']."',
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


	public function insert( $lname, $fname, $mname, $username, $password, $date_hired, $gender, $bday, $email, $program )
	{
		$this->load->database();

		$sql_insert_profile = "INSERT INTO faculty_profile(lname, fname, mname, gender, bday, email, program)
								VALUES( '$lname',
										'$fname',
										'$mname',
										'$gender',
										'$bday',
										'$email',
										'$program'
										)";

		$query = $this->db->query($sql_insert_profile);

		$faculty_id = mysql_insert_id();

		$sql_insert_account = "INSERT INTO faculty_account (username, password, date_hired, faculty_profile_emp_id)
								VALUES( '$username',
										'$password',
										'$date_hired',
										'$faculty_id' 
										)";

		$query = $this->db->query($sql_insert_account);
	}
	
}