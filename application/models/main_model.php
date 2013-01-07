<?php 

class Main_model extends CI_Model {
	function get_user($mail){
		$this->db->where('mail',$mail);
		$data = $this->db->get('users');
		if ($data->num_rows()>0){
			return $data->row();
		}
		return;
	}

	function get_users(){
		return $this->db->get('users')->result();
	}

	function get_sellers(){
		return $this->db->get('sellers')->result();
	}

	function get_seller($login){
		$this->db->where('login',$login);
		$data = $this->db->get('sellers');
		if ($data->num_rows()>0){
			return $data->row();
		}
		return 0;
	} 

	function get_user_by_id($id){
		$this->db->where('id',$id);
		$data = $this->db->get('users');
		if ($data->num_rows()>0){
			return $data->row();
		}
		return;
	}

	function get_seller_by_id($id){
		$this->db->where('id',$id);
		$data = $this->db->get('sellers');
		if ($data->num_rows()>0){
			return $data->row();
		}
		return;
	} // getting users and sellers

	function get_parts(){
		$data = $this->db->get('parts');
		return $data->result();
	}

	function get_companies(){
		$data = $this->db->get('companies');
		return $data->result();
	}

	function get_cities(){
		$data = $this->db->get('cities');
		return $data->result();
	}

	function get_cars(){
		$data = $this->db->get('cars');
		return $data->result();
	} 

	function get_car_map(){
		$query = "SELECT * FROM cars";
		$data = $this->db->query($query)->result();
		$ans = array();
		foreach($data as $row){
			$ans[$row->id] = $this->get_car_by_id($row->id);
		}
		return $ans;
	} // info getters - parts,cars,companies,cities

	function add_user($mail,$pwd,$salt,$city){
		$data = array(	'mail'=> $mail,
						'password'=> $pwd,
						'salt'=> $salt,
						'active'=>1,
						'city' => $city);
		if ($this->db->insert('users',$data))
			return true;
		else
			return false;
	}

	function add_seller($login,$pwd,$salt,$company_name,$phone,$city){
		$data = array(	'login'=> $login,
						'password'=> $pwd,
						'salt'=> $salt,
						'company_name'=> $company_name,
						'phone1'=>$phone,
						'city' => $city);
		if ($this->db->insert('sellers',$data))
			return true;
		else
			return false;
	}  // adding users and sellers

	function get_categories(){
		$data = $this->db->get('categories');
		return $data->result();
	}

	/*function get_adverts(){
		$this->db->limit(30);
		$this->db->order_by('date');
		if (func_num_args()==1)
			$this->db->where('category',func_get_arg(0));
		$data = $this->db->get('adverts');
		return $data->result();
	}*/

	function get_adverts(){
		$this->db->limit(30);
		$this->db->order_by('date');
		$this->db->where('category',$_POST['category']);
		$data = $this->db->get('adverts');
		return $data->result();
	}

	function add_advert($title,$text,$img,$category){
		$data = array(	
				'owner_id' => $this->session->userdata('id'),
				'title' => $title,
				'text' => $title,
				'img' => $img,
				'category' => $category,
				'date' => date("Y:m:d:H:i"),
				'active' => FALSE
				);
		$this->db->insert('adverts',$data);
	}

	function insert_file($name,$fake){
		$data = array(
					'real'=>$name,
					'fake'=>$fake);
		$this->db->insert('images',$data);
	}

	function get_file_name($fake){
		$this->db->where('fake',$fake);
		$file = $this->db->get('images')->result();
		foreach ($file as $row) {
			return $row->real;
		}
	} // file work

	function add_new_query($car_id,$part,$year,$vin,$city,$category){
		$data = array( 	'car_id' =>$car_id,
						'user_id' =>$this->session->userdata('id'),
						'part' =>$part,
						'year' =>$year,
						'vin' =>$vin,
						'city' =>$city,
						'category' =>$category,
						'query_date' => date("Y:m:d:H:i"));
		return $this->db->insert('user_queries',$data);
	}

	function get_car_by_id($id){
		$str = '';
		$query = "SELECT * FROM cars WHERE id ='".$id."'";
		$data = $this->db->query($query)->result();
		foreach ($data as $row) {
			$str = $row->company.' '.$row->model;
		}
		return $str;
	}

	function get_car_id($company,$model){
		if (isset($company) && $company!="")
			$this->db->where('company',$company);
		if (isset($model) && $model!="")
			$this->db->where('model',$model);
		$data = $this->db->get('cars')->result();
		foreach ($data as $row) {
			return $row->id;
		}
		return;
	}

	function get_user_cars(){
		$query = "SELECT DISTINCT car_id FROM user_queries WHERE user_id='".$this->session->userdata('id')."'";
		$data = $this->db->query($query)->result();
		$ans = array();
		foreach($data as $row){
			$ans[$row->car_id] = $this->get_car_by_id($row->car_id);
		}
		return $ans;
	}

	function get_current_user_queries(){
		$query = "SELECT * FROM user_queries WHERE user_id='".$this->session->userdata('id')."'";
		$data = $this->db->query($query)->result();	
		return $data;
	}

	function get_user_queries($id){
		$query = "SELECT * FROM user_queries WHERE user_id='".$id."'";
		$data = $this->db->query($query)->result();	
		return $data;
	}


	function get_offers_by_vin($vin){
		$query = "SELECT DISTINCT seller_id FROM answers WHERE query_id IN ( SELECT id FROM user_queries WHERE vin = '".$vin."')";
		$data = $this->db->query($query)->result();
		return $data;
	}

	function get_seller_answers_by_vin($id,$vin){
		$query = "SELECT * FROM answers WHERE seller_id ='".$id."' AND query_id IN ( SELECT id FROM user_queries WHERE vin = '".$vin."')";
		$data = $this->db->query($query)->result();
		return $data;
	}

	function get_query_by_id($id){
		$this->db->where('id',$id);
		$data = $this->db->get('user_queries');
		if ($data->num_rows()>0){
			return $data->row();
		}
		return;
	}

	function get_queries($company,$model,$city,$year_from,$year_until,$type1,$type2,$type3,$category){
		if (isset($company) && $company!=""){
			$where = "car_id IN (SELECT id FROM cars WHERE company='".$company."')";
			$this->db->where($where);
		}
		if (isset($model) && $model!=""){
			$where = "car_id IN (SELECT id FROM cars WHERE model='".$model."')";
			$this->db->where($where);
		}
		if (isset($city) && $city!=""){
			$where = "city = '".$city."'";
			$this->db->where($where);
		} 
		
		if (isset($year_from) && $year_from!=""){
			$where = "year >= '".$year_from."'";
			$this->db->where($where);
		}

		if (isset($year_until) && $year_until!=""){
			$where = "year <= '".$year_until."'";
			$this->db->where($where);
		}

		if (isset($type1) && $type1!=""){
			$where = "type1 = '".$type1."'";
			$this->db->where($where);
		}

		if (isset($type2) && $type2!=""){
			$where = "type2 = '".$type2."'";
			$this->db->where($where);
		}

		if (isset($type3) && $type3!=""){
			$where = "type3 = '".$type3."'";
			$this->db->where($where);
		}

		if (isset($category)&& $category!=""){
			$where = "category = '".$category."'";
			$this->db->where($where);
		}

		$this->db->order_by('query_date','desc');
		$data = $this->db->get('user_queries');
		return $data->result();
	}

	function add_new_answer($seller_id,$query_id,$price,$comment){
		$data = array(
						'seller_id' => $seller_id,
						'query_id' => $query_id,
						'price' => $price,  
						'comment' =>  $comment,
						'answer_date' => date("Y:m:d:H:i")
				);
		return $this->db->insert('answers',$data);
	}

	function get_car_year($vin){
		$this->db->where('vin',$vin);
		$data = $this->db->get('user_queries');
		$data = $data->row();
		return $data->year;
	}

	function update_user_info($name,$phone){
		$data = array(	'name'=>$name,
						'phone'=>$phone);
		$this->db->where('id',$this->session->userdata('id'));
		return $this->db->update('users',$data);
	}

	function update_seller_info($adress,$phone1,$phone2,$phone3,$about,$img){
		$data = array(	'adress' => $adress,
						'phone1' => $phone1,
						'phone2' => $phone2,
						'phone3' => $phone3,
						'about' => $about
					);
		if ($img!=''){
			$data['img'] = $img;
		}
		$this->db->where('id',$this->session->userdata('id'));
		$this->db->update('sellers',$data);
	}

	function get_models($company){
		$this->db->where('company',$company);
		return $this->db->get('cars')->result();
	}

	function delete_query($id){
		$this->db->where('id',$id);
		return $this->db->delete('user_queries');
	}

	function delete_related_answers($id){
		$this->db->where('query_id',$id);
		return $this->db->delete('answers');
	}

	function get_answered_queries(){
		$this->db->where('seller_id',$this->session->userdata('id'));
		$data = $this->db->get('answers')->result();
		$ans = array();
		foreach ($data as $row) {
			array_push($ans, $row->query_id);
		}
		return $ans;
	}

	function answer_pay(){
		$money = $this->session->userdata('money');
		$money = $money-1;
		$ins = array('money'=>$money);
		$this->session->unset_userdata('money');
		$this->session->set_userdata($ins);
		$this->db->where('id',$this->session->userdata('id'));
		$this->db->update('sellers',$ins);
	}

	function restore_link($mail,$hash){
		$data = array(	'mail'=>$mail,
						'hash'=>$hash);
		$this->db->insert('restore_links',$data);
	}

	function delete_restore($hash){
		$this->db->where('hash',$hash);
		$this->db->delete('restore_links');
	}

	function restore($hash){
		$this->db->where('hash',$hash);
		$ans = $this->db->get('restore_links')->row();
		redirect('http://gaika.kz/index.php/main/reset_user_password/'.$ans->mail);
		$this->db->where('hash',$hash);
		$this->db->delete('restore_links');	
	}

	function change_user_pass($id,$pass,$salt){
		$this->db->where('id',$id);
		$data = array('password'=>$pass,
						'salt'=>$salt);
		$this->db->update('users',$data);
	}

	function change_seller_pass($id,$pass,$salt){
		$this->db->where('id',$id);
		$data = array('password'=>$pass,
						'salt'=>$salt);
		$this->db->update('sellers',$data);
	}

	function get_seller_answers($id){
		$this->db->where('seller_id',$id);
		return $this->db->get('answers')->result();
	}

	function delete_answer($id){
		$this->db->where('id',$id);
		$this->db->delete('answers');
	}

	function find_new_answers($id){
		$query = "SELECT * FROM answers WHERE current_time()<date_add(answer_date,interval 1 day) AND query_id='".$id."'";
		return $this->db->query($query)->result();
	}

	function get_queries_by_vin($vin){
		$this->db->where('vin',$vin);
		return $this->db->get('user_queries')->result();
	}

	function delete_approve(){
		$this->db->where('id',$this->session->userdata('id'));
		$data = array('delete_approve'=>1);
		$this->db->update('users',$data);
	}

	function add_news(){
		$arr = array(
					'title' => $_POST['title'],
					'content' => $_POST['content'],
					);
		$this->db->insert('news',$arr);
	}
}