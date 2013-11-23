<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registration_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

	function get_all() {
		$this->db->select('id, username, lastname, firstname');
		$query = $this->db->get('users');

		return $query->result_array();
	}
	
	public function add($data)
	{
		$this->db->insert('users', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	
	}
	public function delete($user_id)
	{
		$this->db->where('id', $user_id);
		$this->db->delete('users');
	}
<<<<<<< HEAD
	public function edit($user_id)
=======
<<<<<<< HEAD
	public function view()
	{
		$this->load->database();
		$query = $this->db->getwhere('users', array('id=>1'));

		return $query->row_array();
	}
	public function can_log_in()
    {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', $this->input->post('password'));
        
        $query = $this->db->get('users');
        
        if($query->num_rows()==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
=======
	public function edit($data)
>>>>>>> 9597603ecce8e253b669931963715a9e19b491ce
	{
		//$query = $this->db->get('users');
		//$this->db->update('users');
		//$id = $this->db->update_id();
		//return (isset($id)) ? $id : FALSE;
		$query = $this->db->get('users', $user_id);

		foreach ($query->result() as $row)
		{
		echo $row->$user_id;
		
		}
	}
<<<<<<< HEAD

=======
>>>>>>> 2451fc724c3ae7336099dc9664a3452c3bb4511e
>>>>>>> 9597603ecce8e253b669931963715a9e19b491ce
}