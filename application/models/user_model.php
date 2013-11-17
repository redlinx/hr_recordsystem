<?php
 
 class User_Model extends CI_Model{
  
  function __construct()
  {
   
  }
  public function verify_user($username, $password)
  {
   $q = $this
   ->db
   ->where('username', $username)
   ->where('password', $password)
   ->limit(1)
   ->get('users');
   
   if($q->num_rows > 0){
    
    return $q->row();
   }
    
   return false;
  }
 
  }
  
  
 
 ?>