<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registration_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

	function get_all() {
		$this->db->select('id, lastname, firstname');
		$query = $this->db->get('users');

		return $query->result_array();
	}
	
	public function add($data)
	{
		$this->db->insert('users', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	
	}
	public function view($user_id)
	{
		$this->db->where('id', $user_id);
		$this->db->select('id, lastname, firstname');
		$query = $this->db->get('users');
		return $query->result_array();
	}
	public function delete($user_id)
	{
		$this->db->where('id', $user_id);
		$this->db->delete('users');
	}
}