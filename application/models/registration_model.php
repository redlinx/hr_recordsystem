<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registration_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

	function get_all() {
		$this->db->select('id, username, lastname, firstname');
		$query = $this->db->get('user');

		return $query->result_array();
	}
	
	public function add($data)
	{
		$this->db->insert('user', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	
	}
	public function delete($user_id)
	{
		$this->db->where('id', $user_id);
		$this->db->delete('user');
	}


	public function view($user_id)
	{
		$this->db->where('id', $user_id);
		$this->db->select('*');	
        $query = $this->db->get('user');

        return $query->result_array();
	}
	public function can_log_in()
    {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', $this->input->post('password'));
        
        $query = $this->db->get('user');
        
        if($query->num_rows()==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
public function update($data)
		{

		
		$this->db->where('id', $data);
		$this->db->select('*');	
        $query = $this->db->get('user');

        return $query->result_array();

<<<<<<< HEAD
=======

		
>>>>>>> cbd265133764c8ddfd9359898cfa1d2fb9f1e33d
		$this->db->where('id', $data);
		$this->db->select('*');	
        $query = $this->db->get('user');

        return $query->result_array();
		
		//$this->db->update('users', $data, $user_id);
<<<<<<< HEAD
=======

>>>>>>> cbd265133764c8ddfd9359898cfa1d2fb9f1e33d
		
		}
		
public function update_account($data)
		{
			
			$this->db->where('id', $data['id']);
        $query = $this->db->update('user', $data);
        if($query){
            return true;
        }
        else {
            return false;
        }
		}
}
