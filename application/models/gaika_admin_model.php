<?php 

class Gaika_admin_model extends CI_Model {
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

	function add_money(){	
		$query = "UPDATE sellers SET money=money+".$_POST['amount']." WHERE id='".$_POST['seller']."'";
		$this->db->query($query);
		return;
	}
}

?>