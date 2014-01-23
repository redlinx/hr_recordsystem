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
<<<<<<< HEAD
		
		$this->db->where('id', $data);
		$this->db->select('*');	
        $query = $this->db->get('users');
=======

		
		$this->db->where('id', $data);
		$this->db->select('*');	
        $query = $this->db->get('user');

        return $query->result_array();

		$this->db->where('id', $data);
		$this->db->select('*');	
        $query = $this->db->get('user');
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a

        return $query->result_array();
		
		//$this->db->update('users', $data, $user_id);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> cbd265133764c8ddfd9359898cfa1d2fb9f1e33d
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
>>>>>>> a779f36a824c1b57de5f9b20cb437690429f3b81
		
		}
		
public function update_account($data)
		{
			
			$this->db->where('id', $data['id']);
<<<<<<< HEAD
        $query = $this->db->update('users', $data);
=======
        $query = $this->db->update('user', $data);
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
        if($query){
            return true;
        }
        else {
            return false;
        }
		}
}
<<<<<<< HEAD

=======
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
