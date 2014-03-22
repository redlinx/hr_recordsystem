<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_update extends CI_Model
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

	public function profile($faculty)
	{
		$sql = "CALL update_faculty('".$faculty['emp_id']."',
									'".$faculty['emp_lname']."',
								 	'".$faculty['emp_fname']."',
								 	'".$faculty['emp_mname']."',
								 	'".$faculty['emp_bday']."',
								 	'".$faculty['birthplace']."',
								 	'".$faculty['emp_gender']."',
								 	'".$faculty['emp_civStat']."',
								 	'".$faculty['religion']."',
								 	'".$faculty['emp_cellNo']."',
								 	'".$faculty['emp_tellNo']."',
								 	'".$faculty['emp_email']."',
								 	'".$faculty['city_add']."',
								 	'".$faculty['prov_add']."',
								 	'".$faculty['philhealth']."',
								 	'".$faculty['pag_ibig']."',
								 	'".$faculty['sss']."',
								 	'".$faculty['tin']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function spouse($faculty)
	{
		$sql = "CALL update_spouse(
								 '".$faculty['spouse_id']."',
								 '".$faculty['lastname']."',
								 '".$faculty['firstname']."',
								 '".$faculty['middlename']."',
								 '".$faculty['spouse_bday']."',
								 '".$faculty['birth_place']."',
								 '".$faculty['emp_id']."',
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

	public function education($faculty)
	{
		$sql = "CALL update_education(
									'".$faculty['educ_id']."',
									'".$faculty['school_name']."',
									'".$faculty['address']."',
									'".$faculty['year']."',
									'".$faculty['degree']."',
									'".$faculty['type']."',
									'".$faculty['emp_id']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function eligibility($faculty)
	{
		$sql = "CALL update_eligibility(
									'".$faculty['eligibility_id']."',
									'".$faculty['examName']."',
									'".$faculty['examDate']."',
									'".$faculty['examPlace']."',
									'".$faculty['rating']."',
									'".$faculty['emp_id']."')";
		$this->db->query($sql);
		$this->db->close();
	}


	public function training($faculty)
	{
		$sql = "CALL update_training(
									'".$faculty['training_id']."',
									'".$faculty['training_title']."',
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
		$sql = "CALL update_work(
									'".$faculty['work_exp_id']."',
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
		$sql = "CALL update_skill(
									'".$faculty['skill_id']."',
									'".$faculty['skill_name']."',
									'".$faculty['emp_id']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function children($faculty)
	{
		$sql = "CALL update_children(
									'".$faculty['child_id']."',
									'".$faculty['name']."',
									'".$faculty['child_bday']."',
									'".$faculty['emp_id']."')";
		$this->db->query($sql);
		$this->db->close();
	}
}