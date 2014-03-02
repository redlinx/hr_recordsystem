<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_display_faculty extends CI_Model
{
	public function ITEFaculty()
	{
		$sql = "CALL display_ITEFaculty()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}
}
