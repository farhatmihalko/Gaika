<body>
<?php echo validation_errors();?>
<?php echo form_open('admin/login');?>
	<p> <label>Логин</label><input type="text" name="login" /> 
	<p> <label>Пароль</label><input type="password" name="pwd" /> 
	<input type="submit" />
</form>
</body>
</html>