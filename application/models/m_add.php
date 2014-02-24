<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_add extends CI_Model
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
	
	public function education($faculty)
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

	public function training($faculty)
	{
		$sql = "CALL add_training(
								 '".$faculty['trainingTitle']."',
								 '".$faculty['venue']."',
								 '".$faculty['date']."',
								 '".$faculty['organizer']."',
								 '".$faculty['role']."',
								 '".$faculty['type']."',
								 '".$faculty['emp_id']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function work($faculty)
	{
		$sql = "CALL add_work(
								 '".$faculty['company']."',
								 '".$faculty['address']."',
								 '".$faculty['position']."',
								 '".$faculty['start_date']."',
								 '".$faculty['end_date']."',
								 '".$faculty['emp_id']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function skill($faculty)
	{
		$sql = "CALL add_skills(
								 '".$faculty['skill_name']."',
								 '".$faculty['emp_id']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function spouse($faculty)
	{
		$sql = "CALL add_spouse(
								 '".$faculty['lastname']."',
								 '".$faculty['firstname']."',
								 '".$faculty['middlename']."',
								 '".$faculty['bday']."',
								 '".$faculty['birth_place']."',
								 '".$faculty['emp_id']."',
								 '".$faculty['spousecol']."',
								 '".$faculty['contact']."',
								 '".$faculty['educ_attain']."',
								 '".$faculty['occupation']."',
								 '".$faculty['employer']."',
								 '".$faculty['address']."',
								 '".$faculty['SSS']."',
								 '".$faculty['pag_ibig']."',
								 '".$faculty['philhealth']."',
								 '".$faculty['TIN']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function children($faculty)
	{
		$sql = "CALL add_children(
								 '".$faculty['name']."',
								 '".$faculty['bday']."',
								 '".$faculty['emp_id']."')";
		$this->db->query($sql);
		$this->db->close();
	}
}