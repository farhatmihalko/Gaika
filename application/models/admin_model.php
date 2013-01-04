<?php 

class Admin_model extends CI_Model {
	function get_admins($login){
		$this->db->where('login',$login);
		return $this->db->get('admins')->result();
	}

	/*function add_admin($login,$pwd,$salt){
		$arr = array(
						'login' => $login,
						'password' => $pwd,
						'salt' => $salt);
		$this->db->insert('admins',$arr);
	}*/

	function add_model($seller,$money){
		$query = "UPDATE sellers SET money=money+".$money." WHERE id='".$seller."'";
		$this->db->query($query);
	}
}