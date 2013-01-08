<?php echo validation_errors();?>
<?php echo form_open('main/change_user_settings'); ?>
	<input type="text" name="adress" maxlength="100" placeholder="<?php echo $seller->adress;?>"/>
	<input type="text" name="phone1" maxlength="50" placeholder="<?php echo $seller->phone1;?>"/>
	<input type="text" name="phone2" maxlength="50" placeholder="<?php echo $seller->phone2;?>"/>
	<input type="text" name="phone3" maxlength="50" placeholder="<?php echo $seller->phone3;?>"/>
	<textarea placeholder="<?php echo $seller->about;?>" name="about"></textarea>
	<input type="submit" />
</form>