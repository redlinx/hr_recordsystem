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

	
	
	public function view()
=======
	public function view($user_id)
>>>>>>> 64e05423d2451d95e0eb9ccd3d960088aa06dac4
	{
		$this->db->where('id', $user_id);
		$this->db->select('*');	
        $query = $this->db->get('users');

        return $query->result_array();
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
<<<<<<< HEAD

	public function edit($id, $users){
		$this->db->where('id', $user_id);
		$this->db->update($this->users, $users);
	
	} 
	//public function edit($data)

	//{
=======
	public function edit($data)
	{
>>>>>>> 64e05423d2451d95e0eb9ccd3d960088aa06dac4
		//$query = $this->db->get('users');
		//$this->db->update('users');
		//$id = $this->db->update_id();
		//return (isset($id)) ? $id : FALSE;
	//$query = $this->db->get('users', $user_id);

	//	foreach ($query->result() as $row)
	//	{
	//	echo $row->$user_id;
		
<<<<<<< HEAD
	//	}
	//}

=======
		}
	}
>>>>>>> 64e05423d2451d95e0eb9ccd3d960088aa06dac4
}