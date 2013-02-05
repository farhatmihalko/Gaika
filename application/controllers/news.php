<?php

	/*
	**DESCRIPTION OF NEWS CLASS
	*/
	class News extends CI_Controller{
		public function index(){
			echo "this is index page";
		}

		public function get_news(){
			//default params
			$_number = 10;
			$_city = "";
			$_sort = 1;
			if(isset($_POST["number"]))
				$_number = $_POST["number"];
			if(isset($_POST["city"]))
				$_city = $_POST["city"];
			if(isset($_POSt['sort']))
				$_sort = $_POST['sort'];
			$_QUERY_RESULT["news"] = $this->main_model->get_news($_number, $_city, $_sort);
			//load the view with last news!
			$this->load->view("news/show_news", $_QUERY_RESULT);
		}

		public function find_news(){
			$style = $this->getStyle(); $style['bool']=true;
			$this->form_validation->set_rules('token','Запрос',"required");
			if ($this->form_validation->run()){
				$data['res'] = $this->main_model->find_news($_POST['token']);
				$this->load->view('header');
				$this->load->view('find_news_view',$data);
				$this->load->view('footer');
			}
			$this->load->view('header');
			$this->load->view('registration/index');
			$this->load->view('footer');
		}
		public function view_new($id){
			
		}

		private function getStyle(){
			$style['basePathCss'] = basePathCss;
			$style['basePathJs']  = basePathJs;
			return $style;	
		}

		public function add_news(){
			if ($this->session->userdata('type')!='admin')
				redirect('main');
			
			$style = $this->getStyle();

			$this->form_validation->set_rules('title','Заголовок','required');
			$this->form_validation->set_rules('content','Содержание','required');
			$this->form_validation->set_rules('short_content','Краткое содержание','required');
			$this->form_validation->set_rules('city','Город','required');
			//$this->form_validation->set_rules('news_file','Изображение','callback_check_file');
			$this->form_validation->set_rules('categories','Категории','required');

			if ($this->form_validation->run()){
				$this->main_model->add_news();
			}

			$data['cities'] = $this->main_model->get_cities();
			$data['categories'] = $this->main_model->get_categories();

			$this->load->view('header/header', $style);
			$this->load->view('news/add_news_form', $data);
			$this->load->view('footer');
		}

		public function upload_image(){
			if ($this->session->userdata('type')!='admin')
				redirect('main');
			
			$style = $this->getStyle();

			$this->form_validation->set_rules('news_file','Изображение','required|callback_check_file');

			if ($this->form_validation->run()){
				/*$image = $this->session->userdata('img_name');
				$data['image'] = $image;
				$this->session->unset_userdata('img_name');
				$this->load->view('header/header', $style);
				$this->load->view('news/upload_successful_view',$data);
				$this->load->view('footer');*/
				redirect(base_url());
			} else{
				$this->load->view('header/header', $style);
				$this->load->view('news/upload_image_view');
				$this->load->view('footer');
			}
		}

		public function check_file(){
			return true;
			if (isset($_FILES['news_file']))
				return true;
			else
				echo "NET";
			$path = "./imgs/";
			$valid_types = array("jpg","png","gif","jpeg","JPG","PNG","GIF","JPEG");
			if (isset($_FILES['news_file'])){
				if (is_uploaded_file($_FILES['news_file']['tmp_name'])){
					$filename = basename($_FILES['news_file']['tmp_name']);
					$ext = substr($_FILES['news_file']['name'], 
						1 + strrpos($_FILES['news_file']['name'], "."));
					if (!in_array($ext, $valid_types)) {
						return false;
					} else {
						if (move_uploaded_file($_FILES['news_file']['tmp_name'], $path.$filename)) {
							$arr = array('img_name'=>$filename);
							$this->session->set_userdata($arr);
							return true;
						} else {
							return false;
						}
					}
				}else{
					return false;
				}
			} else{
				return false;
			}
		}

}

?>