<?php

	/*
	**DESCRIOPT OF NEWS CLASS
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
	}

?>