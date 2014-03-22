<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dean extends CI_Model {

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

	public function update_profile($faculty)
	{
		$sql = "CALL dean_update_faculty_profile( '".$faculty['emp_id']."',
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
}