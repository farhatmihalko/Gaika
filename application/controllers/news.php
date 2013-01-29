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
	}

?>