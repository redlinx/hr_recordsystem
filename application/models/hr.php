<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class HR extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

	public function insert_faculty_profile($lname,$fname,$mname,$username,$password,$date_hired,$gender,$bday)
	{
		$this->load->database();

		$sql_insert_profile = "INSERT INTO faculty_profile(lname, fname, mname, gender, bday)
								VALUES('$lname', '$fname', '$mname', '$gender', '$bday')";

		$query = $this->db->query($sql_insert_profile);

		$faculty_id = mysql_insert_id();

		$sql_insert_account = "INSERT INTO faculty_account (username,password,date_hired,faculty_profile_emp_id)
															VALUES('$username', '$password', '$date_hired' , '$faculty_id' )";

		$query = $this->db->query($sql_insert_account);
	}
	
}