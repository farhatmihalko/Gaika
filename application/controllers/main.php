<?php 

class Main extends CI_Controller {
	

	public function index(){
		$style = $this->getStyle(); $style['bool']=true;

		$this->load->view('header/header',$style);
		$this->load->view('registration/index');
		$this->load->view('footer');
	}

	public function adverts(){
		$style = $this->getStyle();
		$this->form_validation->set_rules('category','Категория','trim|xss_clean|required');
		if ($this->form_validation->run())
			$data['adverts'] = $this->main_model->get_adverts($_POST['category']);
		else
			$data['adverts'] = $this->main_model->get_adverts();
		$data['categories'] = $this->main_model->get_categories();
		
		$this->load->view('header/header',$style);
		$this->load->view('adverts_view',$data);
		$this->load->view('footer');
	} 

	public function get_random_salt(){
			return substr(sha1(mt_rand()),0,22);
	}

	private function compute_pass($pwd,$salt){
		$pwd = sha1(sha1($pwd.$salt));
		return substr($pwd,0,25);
	}

	public function user_login(){ // вход для юзеров обычных
		$ans = ""; $mail = $_POST['name']; $pwd = $_POST['password'];
		$this->load->helper('email');
		if (!valid_email($mail)){
			$ans = 'Неверный логин и/или пароль';
			return $ans;
		}
		$user = $this->main_model->get_user($mail);
		if (is_object($user)){
			if ($user->password == $this->compute_pass($pwd,$user->salt)){
			$sessiondata = array(
						'login' => TRUE,
						'id' => $user->id,
						'name' => $user->name,
						'type'=> 'user',
						'phone' => $user->phone,
						'city' => $user->city,
						'delete_approve' => $user->delete_approve,
						);
			$this->session->set_userdata($sessiondata);
			$ans = 'u0';
			}
			else{
			$ans = 'Неверный логин и/или пароль';
			}
		}
		else 
			$ans = 'Неверный логин и/или пароль';
		return $ans;
	}

	public function delete_approve(){
		$this->main_model->delete_approve();
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function login(){
		$ans = "1";
		if (isset($_POST['name'])){
			if (isset($_POST['remember'])){
				$ans = $this->seller_login();
			} else{
				$ans = $this->user_login();
			}
		}
		if ($ans == 's0'){
			redirect(base_url('index.php/main/find_queries'));
		} elseif ($ans == 'u0'){
			redirect(base_url('index.php/main/view_my_queries'));
		}
		else{
			$data['message'] = $ans;
			$style = $this->getStyle();

			$this->load->view('header/header',$style);
			$this->load->view('main-login',$data);
			$this->load->view('footer');
		}
	}

	public function seller_login(){
		$ans=""; $login = $_POST['name'];  $pwd = $_POST['password'];
		$seller = $this->main_model->get_seller($login);
		if (is_object($seller)){
			if ($seller->password == $this->compute_pass($pwd,$seller->salt)){
				$sessiondata = array(
							'login' => TRUE,
							'id' => $seller->id,
							'money' => $seller->money,
							'city' => $seller->city,
							'type'=> 'seller',
							);
				$this->session->set_userdata($sessiondata);
				$ans = 's0';
			}
			else{
				$ans = 'Неверный логин и/или пароль';
			}
		}
		else{ 
			$ans = 'Неверный логин и/или пароль';
		}
		return $ans;
	}  // logins

	public function reset_user_password($mail){
		$salt = $this->get_random_salt();
		$pwd = $this->compute_pass('111',$salt);
		$query = "UPDATE users SET password='".$pwd."', salt='".$salt."' WHERE mail='".$mail."'";
		$this->db->query($query);
		redirect('main');
	}

	/*public function reset_seller_password($id){
		$salt = $this->get_random_salt();
		$pwd = $this->compute_pass('111',$salt);
		$query = "UPDATE sellers SET password='".$pwd."', salt='".$salt."' WHERE id='".$id."'";
		$this->db->query($query);
	}*/

	public function change_password(){
		
		$style = $this->getStyle();

		$this->form_validation->set_rules('old','Старый пароль','trim|xss_clean|callback_check_pass');
		$this->form_validation->set_rules('new1','Новый пароль','trim|xss_clean');
		$this->form_validation->set_rules('new2','Подтверждение пароля','trim|xss_clean|matches[new1]');

		if ($this->form_validation->run() == TRUE){
			$salt = $this->get_random_salt();
			$pwd = $this->compute_pass($_POST['new1'],$salt);
			if ($this->session->userdata('type')=='seller')
				$this->main_model->change_seller_pass($this->session->userdata('id'),$pwd,$salt);
			if ($this->session->userdata('type')=='user')
				$this->main_model->change_user_pass($this->session->userdata('id'),$pwd,$salt);
		}
			
		$this->load->view('header/header',$style);
		$this->load->view('cabinet/change_password_view');
		$this->load->view('footer');
	}

	public function check_pass(){
		$pass = $_POST['old'];
		if ($this->session->userdata('type')=='seller'){
			$seller = $this->main_model->get_seller_by_id($this->session->userdata('id'));
			if (is_object($seller))
			if ($seller->password == $this->compute_pass($pass,$seller->salt)){
				return true;
			}
		}
		if ($this->session->userdata('type')=='user'){
			$user = $this->main_model->get_user_by_id($this->session->userdata('id'));
			if (is_object($user))
			if ($user->password == $this->compute_pass($pass,$user->salt)){
				return true;
			}
		}
		return false;
	}

	public function check_user_login($mail){
		$user = $this->main_model->get_user($mail);
		if (is_object($user)){
			return true;
		}
		else{
			return false;
		}
	}

	public function check_seller_login($login){
		$seller = $this->main_model->get_seller($login);
		if (is_object($seller)){
			return true;
		}
		else{
			return false;
		}
	}  // checkers

	public function reg_user(){
		$this->load->helper('email');
		$ans = '1';
		if (isset($_POST['mail'])){
			$mail = $_POST['mail'];
			if (!valid_email($mail))
				$ans .= 'Вы ввели неправильный e-mail!<br/>';
		} else{
			$ans='0';
		}
		if (isset($_POST['city'])){
			$city = $_POST['city'];
			if ($city=='')
				$ans.= 'Вы не указали ваш город!<br/>';
		} else{
			$ans='0';
		}
		if (isset($_POST['mail'])){
			$mail = $_POST['mail'];
			if ($this->check_user_login($mail))
				$ans .= 'Данный e-mail уже зарегестрирован!<br/>';
		} else{
			$ans='0';
		}
		if (isset($_POST['pwd'])){
			$pwd = $_POST['pwd'];
			if ($pwd=='')
				$ans .= 'Вы не ввели пароль!<br/>';
		} else{
			$ans='0';
		}
		if (isset($_POST['pwd'])&&isset($_POST['pwd2'])){
			$pwd2 = $_POST['pwd2'];
			if (strcmp($pwd, $pwd2)!=0)
				$ans .= 'Пароль и подтверждение пароля должны совпадать!<br/>';
		} else{
			$ans = '0';
		}
		if ($ans=='1'){
			$salt = $this->get_random_salt();
			$pwd = $this->compute_pass($pwd,$salt);
			$this->main_model->add_user($mail,$pwd,$salt,$city);
			$user = $this->main_model->get_user($mail);
			$sessiondata = array(
						'login' => TRUE,
						'id' => $user->id,
						'type'=> 'user',
						'city' => $user->city
						);
			$this->session->set_userdata($sessiondata);
			redirect(base_url('index.php/main/view_my_queries'));
		} elseif($ans=='0'){
				$style = $this->getStyle();
				$data['cities'] = $this->main_model->get_cities();

				$this->load->view('header/header',$style);
				$this->load->view('registration/reg_user',$data);
				$this->load->view('footer');
			}else{
			$data['message'] = $ans;
			$data['cities'] = $this->main_model->get_cities();
			$style = $this->getStyle();

			$this->load->view('header/header',$style);
			$this->load->view('registration/reg_user',$data);
			$this->load->view('footer');
		}
	}

	public function reg_seller(){
		$ans = '1';
		if (isset($_POST['login'])){
			$login = $_POST['login'];
			if ($login == "")
				$ans .= 'Вы не ввели логин!<br/>';
			if ($this->check_seller_login($login))
				$ans .= 'Данный логин уже зарегестрирован<br/>';
		} else{
			$ans='0';
		}
		if (isset($_POST['city'])){
			$city = $_POST['city'];
			if ($city=='')
				$ans.= 'Вы не указали ваш город!<br/>';
		} else{
			$ans='0';
		}
		if (isset($_POST['pwd'])){
			$pwd = $_POST['pwd'];
			if ($pwd=='')
				$ans .= 'Вы не ввели пароль!<br/>';
		} else{
			$ans='0';
		}
		if (isset($_POST['pwd'])&&isset($_POST['pwd2'])){
			$pwd2 = $_POST['pwd2'];
			if (strcmp($pwd, $pwd2)!=0)
				$ans .= 'Пароль и подтверждение пароля должны совпадать!<br/>';
		} else{
			$ans = '0';
		}
		if (isset($_POST['company_name'])){
			$company_name = $_POST['company_name'];
			if ($company_name=='')
				$ans .= 'Вы не ввели название компании!<br/>';
		} else{
			$ans = '0';
		}
		if ($ans=='1'){
			$phone = '';
			if (isset($_POST['phone'])){
				$phone = $_POST['phone'];
			}
			$salt = $this->get_random_salt();
			$pwd = $this->compute_pass($pwd,$salt);
			$this->main_model->add_seller($login,$pwd,$salt,$company_name,$phone,$city);
			$seller = $this->main_model->get_seller($login);
			$sessiondata = array(
						'login' => TRUE,
						'id' => $seller->id,
						'money' => $seller->money,
						'city'=>$city,
						'type'=> 'seller',
						);
			$this->session->set_userdata($sessiondata);
			redirect(base_url('index.php/main/find_queries'));
		} elseif($ans=='0'){
				$style = $this->getStyle();

				$data['cities'] = $this->main_model->get_cities();
				$this->load->view('header',$style);
				$this->load->view('registration/reg_sell',$data);
				$this->load->view('footer');
			}else{
			$data['message'] = $ans;
			$style = $this->getStyle();
			$data['cities'] = $this->main_model->get_cities();

			$this->load->view('header/header',$style);
			$this->load->view('registration/reg_sell',$data);
			$this->load->view('footer');
		}
		
	}  // registrations

	public function get_parts(){
		$data = $this->main_model->get_parts();
		echo $data;
	}

	public function get_cars(){
		$data = $this->main_model->get_cars();
		echo $data;
	}

	public function get_companies(){
		$data = $this->main_model->get_companies();
		echo $data;
	}

	public function get_cities(){
		$data = $this->main_model->get_cities();
		echo $data;
	}  // info getters - parts,cars,companies,cities

	public function view_my_queries(){
		
		$style = $this->getStyle();

		if ($this->session->userdata('type')!='user')
			redirect('main');
		$cars = $this->main_model->get_user_cars();
		$user_queries = $this->main_model->get_current_user_queries();
		$my_cars = array();
		foreach ($user_queries as $row){
			$my_cars[$row->vin]['parts'] = array();
		}
		foreach ($user_queries as $row) {

			$my_cars[$row->vin]['car'] = $cars[$row->car_id];
			$my_cars[$row->vin]['query_date'] = $this->main_model->get_car_date($row->vin);
			$my_cars[$row->vin]['year'] = $this->main_model->get_car_year($row->vin);
			$my_cars[$row->vin]['sellers'] = array();
			array_push($my_cars[$row->vin]['parts'],$row->part);
			$offers = $this->main_model->get_offers_by_vin($row->vin);
			foreach ($offers as $bow) {
					$seller = new $this->seller();
					$seller->individual($bow->seller_id,$row->vin);
					array_push($my_cars[$row->vin]['sellers'],$seller);
			}
			
		}
		$data['info'] = $my_cars;
		$person['info'] = $this->main_model->get_user_by_id($this->session->userdata('id'));
		//need to refactoring
		$query['companies'] = $this->main_model->get_companies();
		$query['parts'] = $this->main_model->get_parts();
		$query['categories'] = $this->main_model->get_categories();
		$query['cities'] = $this->main_model->get_cities();

		$this->load->view('header/header',$style);
		$this->load->view('cabinet/cab_menu' , $query);
		$this->load->view('cabinet/cab_query', $data);
		$this->load->view('cabinet/cab_setting', $person);
		$this->load->view('footer');
	}

	public function view_seller_answers($vin,$seller){
		if ($this->session->userdata('type')!='user')
			redirect('main');
		
		$style = $this->getStyle();
		$menu['id'] = $seller;
		$answers = $this->main_model->get_seller_answers_by_vin($seller,$vin);
		$seller = $this->main_model->get_seller_by_id($seller);
		$queries = array();
		foreach ($answers as $row) {
			$queries[$row->query_id] = $this->main_model->get_query_by_id($row->query_id);
		}
		$data['answers'] = $answers;
		if (is_object($seller))
			$menu['seller'] = $seller->company_name;
		else
			$menu['seller'] = "";
		$info['seller'] = $seller;
		$data['queries'] = $queries;
		
		$this->load->view('header/header',$style);
		$this->load->view('company/com_menu', $menu);
		$this->load->view('company/com_info', $info);
		$this->load->view('company/com_parts',$data);
		$this->load->view('footer');
	}

	public function find_queries(){
		if ($this->session->userdata('type')!='seller')
			redirect('main');
		$style = $this->getStyle();
		
		$company = '';
		$model = '';
		$city = '';
		$year_from = '';
		$year_until = '';
		$category = '';

		if (isset($_POST['car-mark']))
			$company = $_POST['car-mark'];
		if (isset($_POST['car-model']))
			$model = $_POST['car-model'];
		if (isset($_POST['city']))
			$city = $_POST['city'];
		if (isset($_POST['car-year-from']))
			$year_from = $_POST['car-year-from'];
		if (isset($_POST['car-year-until']))
			$year_until = $_POST['car-year-until'];
		if (isset($_POST['part_cat']))
			$category = $_POST['part_cat'];
		//print_r($_POST);
		$queries = array();
		$queries = $this->main_model->get_queries($company,$model,$city,$year_from,$year_until,$category);
		//print_r($queries);
		$res = array();
		$info = array();
		$dates = array();
		$done = $this->main_model->get_answered_queries();
		foreach ($queries as $row) {
			if (!in_array($row->id,$done)){
				if (!isset($res[$row->vin]))
				{
					$res[$row->vin]= array();
					$temp = $this->main_model->get_queries_by_vin($row->vin); 
					foreach ($temp as $key) {
						array_push($res[$row->vin],$key);
						$info[$row->vin] = $key;
						$dates[$row->vin] = $key->query_date;
					}
				}
			}
		}

		$true_res=array();
		$counter=1;
		/*foreach ($res as $key => $value) {
			if ($counter>($page-1)*25 && $counter<=$page*25){
				$true_res[$key] = $value;
			}
		}*/
		$cars = $this->main_model->get_car_map();
		$result['queries'] = $queries;
		$result['res'] = $res;
		$result['info'] = $info;
		$result['cars'] = $cars;
		$result['dates'] = $dates;
		//$result['pagination'] = $pagi;

		$data['companies'] = $this->main_model->get_companies();
		$data['parts'] = $this->main_model->get_parts();
		$data['categories'] = $this->main_model->get_categories();
		$data['cities'] = $this->main_model->get_cities();

		$this->load->view('header/header',$style);
		$this->load->view('seller/sel_menu', $data);
		$this->load->view('seller/sel_query', $result);
		$this->load->view('footer');
	}
	
	public function vincode_check(){
		$vin = $_POST['car-vincode'];
		$str = '0123456789ABCDEFGHJKLMNPRSTUVWXYZ';
		if (strlen($vin)!=13)
			return false;
		$vin_arr = str_split($vin);
		foreach ($vin_arr as $key => $value) {
			if (!strripos($str, $value))
				return false;
		}
		return true;
	}

	public function add_query(){
		if ($this->session->userdata('type')!='user')
			redirect('main');
		if (isset($_POST['car-mark']))
			$car_mark = $_POST['car-mark'];
		if (isset($_POST['car-model']))
			$car_model = $_POST['car-model'];
		if (isset($_POST['car-year']))
			$car_year = $_POST['car-year'];
		$city = $this->session->userdata('city');
		if (isset($_POST['car-vincode']))
			$car_vincode = $_POST['car-vincode'];
		if (isset($_POST['part_name']))
			$part_names = $_POST['part_name'];
		if (isset($_POST['part_cat']))
			$part_cats = $_POST['part_cat'];
		/*if (!$this->vincode_check()){
			echo '2';
			return;
		}*/
		$ans = '';
		$num = count($part_names);
		$bo = true;
		if ($car_mark=="" || $car_vincode==""){
			for ($i=0;$i<$num;$i++)
				$ans.='1';
		} else
		for ($i=1; $i <= $num; $i++) {
			$car_id = $this->main_model->get_car_id($car_mark,$car_model);
			if (is_null($car_id)){
				$ans .= '1';
			} elseif (!is_null($part_names[$i]) && !is_null($part_cats[$i])){
					$bo = $this->main_model->add_new_query($car_id,$part_names[$i],$car_year,$car_vincode,$city,$part_cats[$i]);
			}	
			if ($bo == false){
				$ans.='1';
			} else {
				$ans.='0';
			}
		}
		echo $ans;
	}

	public function change_user_settings(){
		if ($this->session->userdata('type')!='user')
			redirect('main');
		$this->form_validation->set_rules('name','Имя','trim|xss_clean');
		$this->form_validation->set_rules('phone','Номер телефона','trim|xss_clean');
		if ($this->form_validation->run() == TRUE){
			$this->main_model->update_user_info();
		}
		$style = $this->getStyle();

		$this->load->view('header/header',$style);
		$this->load->view('cabinet/change_settings');
		$this->load->view('footer');
	}

	public function change_seller_settings(){
		if ($this->session->userdata('type')!='seller')
			redirect('main');

		$this->form_validation->set_rules('adress','Адрес','trim|xss_clean');
		$this->form_validation->set_rules('phone1','Номер телефона №1','trim|xss_clean');
		$this->form_validation->set_rules('phone2','Номер телефона №2','trim|xss_clean');
		$this->form_validation->set_rules('phone3','Номер телефона №3','trim|xss_clean');
		$this->form_validation->set_rules('about','О компании','trim|xss_clean');

		if ($this->form_validation->run()){
			$this->main_model->update_seller_info();
		}

		$data['seller'] = $this->main_model->get_seller_by_id($this->session->userdata('id'));

		$style = $this->getStyle();
		$this->load->view('header/header',$style);
		$this->load->view('seller/change_settings',$data);
		$this->load->view('footer');
	}

	/*public function show_reg_user(){
		
		$data['cities']=array();
		$data['cities']=$this->main_model->get_cities();
		$this->load->view('registration/reg_user.php',$data);
	}

	public function show_reg_seller(){
		
		$data['cities']=array();
		$data['cities']=$this->main_model->get_cities();
		$this->load->view('registration/reg_sell.php',$data);
	}

	//Fara dobavil
	public function show_login_form(){
		
	}*/

	public function get_models(){
		$company = $_POST['company'];
		$data = $this->main_model->get_models($company);
		$ans ="";
		foreach ($data as $row) {
			$ans .= '<option value="'.$row->model.'">'.$row->model.'</option>';
		}
		echo $ans;
	}

	public function add_answer(){
		if ($this->session->userdata('type')!='seller')
			redirect('main');
		if (isset($_POST['price']))
			$price = $_POST['price'];
		if (isset($_POST['comment']))
			$comment = $_POST['comment'];
		if (isset($_POST['query_id']))
			$query_id = $_POST['query_id'];
		$seller = $this->session->userdata('id');
		$ans = '';
		foreach ($query_id as $key => $value) {
			if ($this->session->userdata('money')<1){
				$ans .= '1';
			} else
			if ($this->main_model->add_new_answer($seller,$query_id[$key],$price[$key],$comment[$key])) {
				$this->main_model->answer_pay();
				$ans .= '0';
			}
			else
				$ans .= '2';
		}
		echo $ans;
	}

	public function accept_answer(){
		if ($this->session->userdata('type')!='user')
			redirect('main');
		$vin = $_POST['id'];
		$car = $this->main_model->get_queries_by_vin($vin);
		$bool = 0;
		foreach ($car as $obj) {
			if (!$this->delete_query($obj->id))
				$bool = 1;
		}
		echo $bool;
	}

	public function delete_query($id){
		if ($this->session->userdata('type')!='user')
			redirect('main');
		$b1 = $this->main_model->delete_query($id);
		$b2 = $this->main_model->delete_related_answers($id);
		return $b1&$b2;
	}

	public function delete_answer(){
		$id = $_POST['id'];
		if ($this->main_model->delete_answer($id))
			echo '1';
		else
			echo '2';
	}



	public function restore_password(){
		$header_ ='MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n"; 	
		$this->form_validation->set_rules('mail','E-mail','trim|xss_clean|required|valid_email');
		if ($this->form_validation->run()==TRUE){
			$mail = $_POST['mail'];
			$hash = sha1($mail);
			$this->main_model->restore_link($mail,$hash);
			$dehash = 'http://gaika.kz/index.php/main/deactivate_restore/'.$hash;
			$hash = 'http://gaika.kz/index.php/main/activate_restore/'.$hash;
			$text = 'Для сброса пароля перейдите по ссылке(пароль по умолчанию будет "111"):
'.$hash.'
Если вы не хотите сбрасывать пароль, пройдите по ссылке
'.$dehash;
			mail($mail,'=?UTF-8?B?'.base64_encode('Восстановление пароля на gaika.kz').'?=',$text,$header_);
			redirect('main/');
		}
		else{
			$style = $this->getStyle();

			$this->load->view('header/header',$style);
			$this->load->view('restore_password');
			$this->load->view('footer');
		}
	}

	public function deactivate_restore($hash){
		$this->main_model->delete_restore($hash);
		redirect('main/');
	}

	public function activate_restore($hash){
		$this->main_model->restore($hash);	
		redirect('main/');
	}

	public function my_answers(){
		if ($this->session->userdata('type')!='seller')
			redirect('main');
		else{
			$queries = array();
			$cars = array();
			$res = $this->main_model->get_seller_answers($this->session->userdata('id'));
			foreach ($res as $row) {
				$queries[$row->id] = $this->main_model->get_query_by_id($row->query_id);
				$cars[$row->id] = $this->main_model->get_car_by_id($queries[$row->id]->car_id); 
			}
			$result['queries'] = $queries;
			$result['answers'] = $res;
			$result['cars'] = $cars;
			$style = $this->getStyle();

			$this->load->view('header/header',$style);
			$this->load->view('seller/sel_menu');
			$this->load->view('seller/my_answers',$result);
			$this->load->view('footer');
		}
	}

	public function about(){
		$style = $this->getStyle();

		$this->load->view('header/header',$style);
		$this->load->view('about_site');
		$this->load->view('footer');
	}

	public function restore_seller_password(){
		$login = $_POST['login'];
		$salt = $this->get_random_salt();
		$pwd = $this->compute_pass('111',$salt);
		$query = "UPDATE sellers SET password='".$pwd."', salt='".$salt."' WHERE login='".$login."'";
		$this->db->query($query);
		redirect('main');
	}

	public function contact_form(){
		$style = $this->getStyle();

		$this->form_validation->set_rules('mail','Ваш E-mail вашего друга','valid_email|required');
		$this->form_validation->set_rules('title','Заголовок','required');
		$this->form_validation->set_rules('content','Текст сообщения','required');

		if ($this->form_validation->run()){
			$this->main_model->send_message();
			$arr = array('contact_sended' => true);
			$this->session->set_userdata($arr);
		}

		$this->load->view('header/header', $style);
		$this->load->view('contact_form');
		$this->load->view('footer');
	}

	private function send_invite(){
		$header_ ='MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n"; 	
		$user = $this->main_model->get_user_by_id($this->session->userdata('id'));
		$mail = $_POST['mail'];
		$text = 'Здравствуйте, наш пользователь с е-мэйлом '.$user->mail.' приглашает Вас воспользоваться нашим сервисом.
Для регистрации, пройдите по ссылке http://gaika.kz/index.php/main/reg_user
Для получения информации о нашем сервисе, пройдите по ссылке http://gaika.kz/index.php/main/about';
		mail($mail,'=?UTF-8?B?'.base64_encode('Приглашение на gaika.kz от '.$user->mail).'?=',$text,$header_);
		}
	

	public function invite_friend(){
		$style = $this->getStyle();

		$this->form_validation->set_rules('mail','E-mail вашего друга','valid_email|required');

		if ($this->form_validation->run()){
			$this->send_invite();
			redirect('main/invite_success');
		}

		$this->load->view('header/header',$style);
		$this->load->view('invite_friend_view');
		$this->load->view('footer');
	}

	public function invite_success(){
		$style = $this->getStyle();

		$this->load->view('header/header',$style);
		$this->load->view('invite_success_view');
		$this->load->view('footer');
	}

	private function getStyle(){
		$style['basePathCss'] = basePathCss;
		$style['basePathJs']  = basePathJs;
		return $style;	
	}

}
?>