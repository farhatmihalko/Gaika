<?php echo validation_errors();?>
<?php echo form_open("main/invite_friend");?>	
	<input type="email" name="mail"  title="Введите e-mail вашего друга" placeholder="E-mail вашего друга" required> 
	<input type="submit" />
</form>
