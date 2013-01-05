<?php 

class Functions extends CI_Controller {

	public function upload(){
	    $path = './imgs/';

	    $valid_types =  array("gif","jpg", "png", "jpeg" , "bmp");
	    if(isset($_POST['upload'])){
	    	$data=array();
	    	$error = false;
	    	$ext = substr($_FILES['userfile']['name'], 
				1 + strrpos($_FILES['userfile']['name'], "."));
	    	if (!in_array($ext, $valid_types)){
	    		$data['errors'] = 'Вы загружаете запрещенный тип файла';
	    		$error = TRUE;
	    	}
	    		
		if(!$error) {
		    $name = basename($_FILES['userfile']['tmp_name']);
		    $this->main_model->insert_file($_FILES['userfile']['name'],$name);
		    $uploadedFile =  $path.$name;
		    if(is_uploaded_file($_FILES['userfile']['tmp_name'])){
		        if(move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadedFile)){         
		            $data = $_FILES['userfile'];
		            $ins = array('image-path'=>$name);
					$this->session->set_userdata($ins);
		        }
		        else {   
		            $data['errors'] = "Во время загрузки файла произошла ошибка";
		        }
		    }
		    else {   
		        $data['errors'] = "Файл не  загружен";
		    }
		} else{
			$data['errors'] = 'Вы загружаете запрещенный тип файла';
		}
		
		//Формируем js-файл   
		$res = '<script type="text/javascript">';
		$res .= "var data = new Object;";
		foreach($data as $key => $value){
		    $res .= 'data.'.$key.' = "'.$value.'";';
		}
		$res .= 'window.parent.handleResponse(data);';
		$res .= "</script>";
		echo $res;
		}
		else{
		    die("ERROR");
		}
		echo '1';
		}

	public function add_new_query(){
		$car_id = mysql_real_escape_string($_POST['car_id']);
		$part = mysql_real_escape_string($_POST['part']);
		$year = mysql_real_escape_string($_POST['year']);
		$vin = mysql_real_escape_string($_POST['vin']);
		$type = mysql_real_escape_string($_POST['type']);
		$city = mysql_real_escape_string($_POST['city']);
		$place1 = mysql_real_escape_string($_POST['place1']);
		$place2 = mysql_real_escape_string($_POST['place2']);
		$place3 = mysql_real_escape_string($_POST['place3']);
		echo $this->main_model->add_new_query($car_id,$part,$year,$vin,$type,$city,$place1,$place2,$place3);
	}

	public function mailer(){
		mail('kumar.akhmadiyev@gmail.com','cron-','func');
		$users = $this->main_model->get_users();
		foreach ($users as $obj) {
			$message = 'У вас есть новые ответы на gaika.kz:
';
			$counter=0;
			$queries = $this->main_model->get_user_queries($obj->id);
			if (!is_null($queries)){
				foreach ($queries as $query) {
					$answers=$this->main_model->find_new_answers($query->id);
					if (!is_null($answers)&&count($answers)>0){
						$counter++;
						$message .= 'По запросу '.$this->main_model->get_car_by_id($query->id).'('.$query->part.')'.' '.count($answers).' новых ответов.
';
					}
				}
			}
			if ($counter>0)
				mail($obj->mail,'Новые ответы',$message);
		}
	}
}
