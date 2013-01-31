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
	<textarea name="short_content" id="news-content-short"></textarea>
</div>
<div class="line-before">
	<label for="news-content-full" class="list-name">
		<strong>Полное содержание </strong> (обязательно)
	</label>
	<textarea name="content" id="news-content-full"></textarea>
</div>

<div class="line-before field color-b-254">

	<div class="pad-tb six columns">
		<label for="" class="list-name">
			Выберите категорию к которой будет относиться новость
		</label>
		<br>
		<?php
			$C_COUNTER = 0;
			foreach($categories as $obj){
				$C_COUNTER++;
		?>
			<input type="checkbox" id="checkbox-1-<?php echo $C_COUNTER;?>" class="regular-checkbox" name="categories[]">
			<label for="checkbox-1-<?php echo $C_COUNTER;?>" style="top:4px; right:-8px;"></label>
			<label for="checkbox-1-<?php echo $C_COUNTER;?>" class="margin-right">
				&nbsp; 
				<?php
					echo $obj->name;
				?>
			</label>
		<?php
			}
		?>
	</div>
	
	<div class="pad-tb six columns">
		<label for="" class="list-name">
			Выберите город
		</label>
		<select name="city" class="eight">
			<?php foreach ($cities as $obj) { 
		        echo '<option value="'.$obj->name.'">'.$obj->name.'</option>';
		    }?>
		</select>
	</div>
	<div class="clearfix"></div>
</div>


<input type="file" name="news_file" class="hide"/>

<div class="twelve columns line-before">
	<hr class="hr-dashed line-before">
	<br>
	<div>
		<div class="six columns align-left ">
			<label for="js-addnews-form-submit" class="button btn btn-green">
				<i class="icon-edit pad-right"></i>Добавить новость
			</label>
			<input type="submit" class="button btn btn-green hide" value="Добавить новость" id="js-addnews-form-submit">
		</div>
		<div class="six columns align-right">
			<a href="#" class="button btn">Отмена</a>
		</div>
	</div>
</div>

<!--
<?php foreach ($categories as $obj) {
	echo "<input type='checkbox' name='categories[]' value='".$obj->name."'>".$obj->name."</option>";
}?>

<select name="city">
	<?php foreach ($cities as $obj) { 
        echo '<option value="'.$obj->name.'">'.$obj->name.'</option>';
    }?>
</select>
-->