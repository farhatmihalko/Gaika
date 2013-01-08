<?php echo validation_errors();?>
<?php echo form_open("main/change_password");?>	
	<input type="password" name="old" placeholder="Старый" required> 
	<input type="password" name="new1" placeholder="Новый" required> 
	<input type="password" name="new2" placeholder="подтверждение" required> 
	<input type="submit" />
</form>