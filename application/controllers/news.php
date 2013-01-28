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
			if(isset($_POST["number"]))
				$_number = $_POST["number"];
			if(isset($_POST["city"]))
				$_city = $_POST["city"];
			$_QUERY_RESULT["news"] = $this->main_model->get_news($_number, $_city);
			//load the view with last news!
			$this->load->view("news/show_news", $_QUERY_RESULT);
		}
	}

?>