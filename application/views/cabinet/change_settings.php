<?php echo validation_errors();?>
<?php echo form_open('main/change_user_settings'); ?>
	<input type="text" name="name" maxlength="100" placeholder="<?php echo $this->session->userdata('name');?>"/>
	<input type="text" name="phone" maxlength="50" placeholder="<?php echo $this->session->userdata('phone');?>"/>
	<input type="submit" />
</form>

