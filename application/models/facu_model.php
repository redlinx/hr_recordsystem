<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Facu_model extends CI_Model {

function get_all() {
		$this->db->select('id, username, lastname, firstname');
		$query = $this->db->get('users');

		return $query->result_array();
	}
	
public function view($user_id)
	{
		$this->db->where('id', $user_id);
		$this->db->select('*');	
        $query = $this->db->get('users');

        return $query->result_array();
	}
}