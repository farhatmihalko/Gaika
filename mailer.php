<?php
	 $link = mysql_connect('localhost','csnkz_kumar','!Akhmadiyevam');
	 $db = mysql_select_db('csnkz_gaika',$link);
	 mysql_query('SET NAMES utf8');
	 $users = mysql_query("SELECT * FROM users");
	 while($obj = mysql_fetch_object($users)){
	 	$message = 'У вас есть новые предложения на www.gaika.kz:
';
		$counter =0;
		$queries = mysql_query("SELECT * FROM user_queries WHERE user_id='".$obj->id."'");
		while($query = mysql_fetch_object($queries)){
			$count = 0;
			$answers=mysql_query("SELECT * FROM answers WHERE query_id='".$query->id."' AND is_checked != 1");
			while($answer = mysql_fetch_object($answers)){
				$count++;
			}
			$cv=mysql_query("SELECT * FROM cars WHERE id='".$query->car_id."'");
			$car;
			while($c = mysql_fetch_object($cv)){
				$car = $c->company.' '.$c->model;
			}
			if ($count>0)
			$message .= 'По запросу '.$car.'('.$query->part.')
';			
			$counter .= $count;		
		}
		$header_ ='MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n"; 	
		if ($counter>0)
			mail($obj->mail,'=?UTF-8?B?'.base64_encode('Новые ответы на gaika.kz').'?=',$message,$header_);
		
	 }
	 $query = "UPDATE answers SET is_checked = 1";
	 mysql_query($query);
	
function mail_utf8($to, $subject = '(No subject)', $message = '', $header = '') {
  $header_ = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
  mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $header_ . $header);
}	 
	 //mysql_query($query);
?>