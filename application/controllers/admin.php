<?php 

class Admin extends CI_Controller {
	

	public function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/admin_login_view');
	}
	
	public function get_random_salt(){
			return substr(sha1(mt_rand()),0,22);
	}

	private function compute_pass($pwd,$salt){
		$pwd = sha1(sha1($pwd).sha1($salt));
		return substr($pwd,0,25);
	}

	public function login(){
		$this->form_validation->set_rules('login','Логин','trim|xss_clean|required|callback_check_login');
		$this->form_validation->set_rules('pwd','Пароль','trim|xss_clean|required');
		if ($this->form_validation->run()){
			redirect('http://gaika.kz/index.php/admin/main');
		} else{
			$this->load->view('admin/header');
			$this->load->view('admin/admin_login_view');
		}
	}

	public function check_login(){
		$admins = $this->gaika_admin_model->get_admins($this->input->post('login'));
		foreach ($admins as $obj) {
			if ($this->compute_pass($this->input->post('pwd'),$obj->salt) == $obj->password){
				$arr = array(
								'id' => $obj->id,
								'login' => TRUE);
				$this->session->set_userdata($arr);
				return true;
			}
		}
		$this->form_validation->set_message('check_login','Неверный логин или пароль');
		return false;
	}

	public function add_admin($login,$pwd){
		$salt = $this->get_random_salt();
		$pwd = $this->compute_pass($pwd,$salt);
		$this->gaika_admin_model->add_admin($login,$pwd,$salt);
	}

	public function main(){
		$sellers=$this->main_model->get_sellers();
		$users=$this->main_model->get_users();
		$data['sellers'] = $sellers;
		$data['users'] = $users;

		$this->load->view('admin/header');
		$this->load->view('admin/main_view',$data);
	}

	public function add_money(){
		$this->gaika_admin_model->add_money();
	}
}
?>