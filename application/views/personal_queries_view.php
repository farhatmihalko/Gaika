
<?php 
	foreach ($queries as $row) {
		echo '<p>'.$row->id.' '.$row->part.' '.$row->year.' '.$cars[$row->car_id];
	}
?>
