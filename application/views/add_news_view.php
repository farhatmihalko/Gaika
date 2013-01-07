<?php echo validation_errors();
 echo $this->main_model->get_news(12,'Алматы');?>
<?php echo form_open('main/add_news');?>
	<input type="text" name="title" maxlength="250" placeholder="title"/><br/>
	<textarea name="content" type="text" cols="50" rows="10">
		content
	</textarea><br/>
	<select name="city">
		<?php foreach ($cities as $obj) { 
            echo '<option value="'.$obj->name.'">'.$obj->name.'</option>';
        }?>
	</select>
	<input type="submit" value="Add news"/>
</form>