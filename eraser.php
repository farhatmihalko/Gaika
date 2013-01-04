<?php
	 $link = mysql_connect('localhost','csnkz_kumar','!Akhmadiyevam');
	 $db = mysql_select_db('csnkz_gaika',$link);
	 mysql_query('SET NAMES utf8');
	 $queries = array();
	 $queries = mysql_query("SELECT * FROM user_queries WHERE current_time()>date_add(query_date,interval 1 months)");
	 $str = "";
	 while($obj = mysql_fetch_object($queries)){
	 	$str .= $obj->id."
";
		//mysql_query("DELETE * FROM answers WHERE query_id='".$obj->id."'");
		//mysql_query("DELETE * FROM user_queries WHERE id='".$obj->id."'");
	 }	 
	 mail("kumar.akhmadiyev@gmail.com","",$str);
	 //mysql_query($query);
?>