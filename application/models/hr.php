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

	public function update_faculty_profile($faculty)
	{
		$sql = "CALL hr_update_faculty_profile( '".$faculty['emp_id']."',
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
											 	'".$faculty['progID']."',
											 	'".$faculty['city_add']."',
											 	'".$faculty['prov_add']."',
											 	'".$faculty['philhealth']."',
											 	'".$faculty['pag_ibig']."',
											 	'".$faculty['sss']."',
											 	'".$faculty['tin']."',
											 	'".$faculty['levelID']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function totalPoints($empID)
	{
		$sql = "CALL total_points(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->row_array(1);
	}

	public function update_totalPoints($faculty)
	{
		$sql = "CALL update_totalPoints( '".$faculty['rankID']."',
										 '".$faculty['totalPoints']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function promote_faculty($faculty)
	{
		$sql = "CALL promote_faculty( '".$faculty['empID']."',
									  '".$faculty['rankID']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function rank_history($faculty)
	{
		$sql = "CALL rank_history( '".$faculty['empID']."',
									'".$faculty['rankID']."')";
		$this->db->query($sql);
		$this->db->close();
	}

	public function program()
	{
		$sql = "CALL display_program()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}
	
	public function display_regularization_candidate()
	{
		$sql = 'CALL display_regularization_candidate()';
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}
	
	public function add_faculty($faculty)
	{
		$sql = "CALL add_faculty(
								 '".$faculty['lastname']."',
								 '".$faculty['firstname']."',
								 '".$faculty['middlename']."',
								 '".$faculty['bday']."',
								 '".$faculty['gender']."',
								 '".$faculty['civStat']."',
								 '".$faculty['cellNo']."',
								 '".$faculty['tellNo']."',
								 '".$faculty['email']."',
								 '".$faculty['username']."',
								 '".$faculty['password']."',
								 '".$faculty['progID']."',
								 '".$faculty['levelID']."')";
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

	public function display_deactivatedFaculty()
	{
		$sql =  "CALL `rms`.`display_deactivatedFaculty`()";
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

	public function display_byProgram($progID)
	{
		$sql = "CALL `rms`.`display_byProgram`(".$progID.");";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function display_rankProgram($progID)
	{
		$sql = "CALL `rms`.`display_rankProgram`(".$progID.");";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

 	public function display_notification()
	{

		$sql = "CALL display_notification()";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->result_array();
	}

	public function verify_notification($faculty)

	{
		$sql = "CALL verify_upload('".$faculty['emp_id']."',
					                      '".$faculty['upload_id']."')";
				
		$sQuery = $this->db->query($sql);
		$this->db->close();
	}
	public function updateUpload($uploadID)
	{
	 	$sql = "CALL updateUpload(".$uploadID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->row_array(1);
	}

	public function display_educNoti()
	{
		
		$sql = "CALL display_educNoti()";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->result_array();
	}

	public function verify_education($faculty)
	{
		$sql = "CALL verify_education( '".$faculty['emp_id']."',
					                   '".$faculty['educ_id']."')";
				
		$sQuery = $this->db->query($sql);
		$this->db->close();
	}

	public function updateEduc($educID)
	{
	 	$sql = "CALL updateEduc(".$educID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->row_array(1);
	}

	public function display_profUpdate($limit, $start)
	{
		$this->db->limit($limit, $start);
		$sql = "CALL display_profUpdate()";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->result_array();

		// $this->db->select('*')->where('prof_status', 0);
		// $query=$this->db->get('faculty_profile', $limit, $start);

		// if ($query->num_rows() > 0)
		// {
		// 	return $query->result_array();
		// }
		// else
		// {
		// 	return false;
		// }

	}

	public function verify_profile($faculty)
	{
		$sql = "CALL verify_profile( '".$faculty['emp_id']."')";
				
		$sQuery = $this->db->query($sql);
		$this->db->close();
	}

	public function updateProf($empID)
	{
	 	$sql = "CALL updateProf(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->row_array(1);
	}

	public function display_trainingNoti()
	{
		
		$sql = "CALL display_trainingNoti()";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->result_array();
	}

	public function verify_training($faculty)
	{
		$sql = "CALL verify_training( '".$faculty['faculty_profile_emp_id']."',
					                   '".$faculty['training_id']."')";
				
		$sQuery = $this->db->query($sql);
		$this->db->close();
	}

	public function updateTraining($typeID)
	{
	 	$sql = "CALL updateTraining(".$typeID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->row_array(1);
	}

	public function display_workExp()
	{	
		$sql = "CALL display_workExp()";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->result_array();
	}

	public function verify_workExp($faculty)
	{
		$sql = "CALL verify_workExp( '".$faculty['emp_id']."',
					                   '".$faculty['work_exp_id']."')";
				
		$sQuery = $this->db->query($sql);
		$this->db->close();
	}

	public function updateWorkExp($workID)
	{
	 	$sql = "CALL updateWorkExp(".$workID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->row_array(1);
	}

	public function verify_regularization($faculty)
	{
		$sql = "CALL verify_regularization( '".$faculty['emp_id']."',
					                   		'".$faculty['account_id']."')";
				
		$sQuery = $this->db->query($sql);
		$this->db->close();
	}

	public function updateRegularization($accountID)
	{
	 	$sql = "CALL updateRegularization(".$accountID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->row_array(1);
	}

     public function display_rankPoints()
	{
		
		$sql = "CALL display_rankPoints()";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->result_array();
	}

	public function display_eligibilityNoti()
	{
		
		$sql = "CALL display_eligibilityNoti()";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->result_array();
	}

	public function verify_eligibility($faculty)
	{
		$sql = "CALL verify_eligibility( '".$faculty['emp_id']."',
					                   		'".$faculty['eligibility_id']."')";
				
		$sQuery = $this->db->query($sql);
		$this->db->close();
	}

	public function updateEligibility($eligibilityID)
	{
	 	$sql = "CALL updateEligibility(".$eligibilityID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->row_array(1);
	}

	public function display_rankNoti()
	{
		
		$sql = "CALL display_rankNoti()";
		$sQuery = $this->db->query($sql);
		$this->db->close();
       
		return $sQuery->result_array();
	}
	
	public function activate($empID)
	{
		$sql = "CALL activate_account(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->row_array(1);
	}

	public function deactivate($empID)
	{
		$sql = "CALL deactivate_account(".$empID.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->row_array(1);
	}
}