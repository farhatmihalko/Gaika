<ul>Продавец - 
<?php echo $seller->company_name;
	foreach ($answers as $row) {
		echo '<li>'.$queries[$row->query_id]->part.' '.$row->price.' '.$row->comment.'</li>';	
	}

?> 
</ul>
