<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!'); 
class M_login extends CI_Model 
{ 
public function __construct() 
{ 
parent::__construct(); 
} 
<<<<<<< HEAD

public function takeUser($firstname, $lastname,$username, $password, $type, $level) 


=======
<<<<<<< HEAD
public function takeUser($firstname, $lastname,$username, $password, $type, $level) 
=======
public function takeUser($username, $password, $type, $level) 
>>>>>>> daf9c6566799318851ebd25004f1ae9e4460d84a
>>>>>>> 4150845dfd5919a39081843690f6565a950188ef
{ 
$this->db->select('*');
$this->db->from('user');
$this->db->where('username', $username);
$this->db->where('password', $password);
$this->db->where('type', $type);
$this->db->where('level', $level);
$query = $this->db->get();
return $query->num_rows(); 
} 
public function userData($username) 
{ 
$this->db->select('username'); 
$this->db->select('firstname'); 
$this->db->select('lastname'); 
$this->db->where('username', $username); 
$query = $this->db->get('user'); 
return $query->row(); 
} 
}
