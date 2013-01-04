

<?php
	//print_r($info);

	foreach ($info as $key => $value) {
		echo '<ul>'.$key.' '.$value['car'].' ';
		foreach ($value['parts'] as $row) {
			echo $row.' ';
		}
		foreach ($value['sellers'] as $obj){
			echo '<li><a href="'.base_url().'index.php/main/view_seller_answers/'.$key.'/'.$obj->seller_id.'">Posmotret polnostu</a> '.$obj->seller_name.' '.$obj->parts_val.' '.$obj->overall.'</li>';
		}
		echo '</ul>';
	}

?>
