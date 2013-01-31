<div>
	<label for="news-title" class="list-name">
		<strong>Названия новости </strong> (обязательно)
	</label>
	<input type="text" name="title" id="news-title">
</div>
<div class="line-before">
	<label for="news-content-short" class="list-name">
		<strong>Краткое содержание </strong> (обязательно)
	</label>
	<textarea name="short_content" id="news-content-short" cols="30" rows="10">
		
	</textarea>
</div>
<div class="line-before">
	<label for="news-content-full" class="list-name">
		<strong>Полное содержание </strong> (обязательно)
	</label>
	<textarea name="content" id="news-content-full" cols="30" rows="10">
		
	</textarea>
</div>

<div class="line-before field color-b-254">
	<?php
		$C_COUNTER = 0;
		foreach($categories as $obj){
	?>
		<input type="checkbox" id="checkbox-1-<?php echo $C_COUNTER;?>" class="regular-checkbox" name="categories[]">
		<label for="checkbox-1-<?php echo $C_COUNTER;?>" style="top:4px;"></label>
		<label for="checkbox-1-<?php echo $C_COUNTER;?>">
			&nbsp; 
			<?php
				echo $obj->name;
			?>
		</label>
	<?php
		}
	?>
</div>

<input type="checkbox" id="checkbox-1-1" class="regular-checkbox" name="remember">
<label for="checkbox-1-1" style="top:4px;"></label>
<label for="checkbox-1-1">
	&nbsp;Я продавец
</label>

<input type="file" name="news_file"/>


<?php foreach ($categories as $obj) {
	echo "<input type='checkbox' name='categories[]' value='".$obj->name."'>".$obj->name."</option>";
}?>
<select name="city">
	<?php foreach ($cities as $obj) { 
        echo '<option value="'.$obj->name.'">'.$obj->name.'</option>';
    }?>
</select>
<input type="submit" value="Добавить новость!"/>