<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

 public function can_login($username,$password)
	{	

	$checkuser = $this->db->where(['username'=>$username,'password'=>$password] );
	$checkuser=$this->db->get('users') ;
	if ($checkuser->num_rows() > 0)
	 {
		return $checkuser->row();

	}
			
	}
 public function selectusers()
 {
 	$result=$this->db->select('*');
 	$result=$this->db->from('users,privileges');
	$result=$this->db->where('users.privilege_id=privileges.privilege_id');
 	$result=$this->db->get();
 	return $result->result();

 }
 public function selectusername()
 {
 	$result=$this->db->select('*');
 	$result=$this->db->from('person');
 	$result=$this->db->get();
 	return $result->result();

 }

 public function delete_data($id)
 {
 	$this->db->where("user_id",$id);
 	$this->db->delete("users");

 }
 public function count_users()
 {
 	return $this->db->count_all('users');
 }
}

 ?>