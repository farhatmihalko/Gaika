<?php echo validation_errors();?>
<?php echo form_open('main/add_news');?>
	<input type="text" name="title" maxlength="250" placeholder="title"/><br/>
	<textarea name="content" type="text" cols="50" rows="10">
		content
	</textarea><br/>
	<input type="submit" value="Add news"/>
</form>