<p>Main_view
<select>
	<?php foreach($parts as $row) 
		echo '<option value="'.$row->name.'">'.$row->name.'</option>'?>
</select>

<select>
	<?php foreach($companies as $row) 
		echo '<option value="'.$row->name.'">'.$row->name.'</option>'?>
</select>

<select>
	<?php foreach($cars as $row) 
		echo '<option value="'.$row->id.'">'.$row->company.' '.$row->model.'</option>'?>
</select>

<select>
	<?php foreach($cities as $row) 
		echo '<option value="'.$row->name.'">'.$row->name.'</option>'?>
</select>