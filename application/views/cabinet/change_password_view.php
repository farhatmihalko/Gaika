<div class="page">
	<div class="row pad-tb shadow page_settings">
		<!--Settings header-->
		<div class="twelve columns line-after">
			<ul class="about_list pad-left-big">
				<li>
					<a href="<?php echo base_url('index.php/main/change_user_settings');?>">Настройки профиля</a>
				</li>
				<li class="active">
					<a href="<?php echo base_url('index.php/main/change_password');?>">Смена пароля</a>
				</li>
				<li>
					<a>Прочие настройки</a>
				</li>
			</ul>
			<hr class="hr-dashed">
		</div>
		<!--End of header-->
		<div class="twelve columns line-before">
			<div class="ten columns end">
				<?php echo validation_errors();?>
				<?php echo form_open("main/change_password");?>	
					<input type="password" name="old" placeholder="Старый" required> 
					<input type="password" name="new1" placeholder="Новый" required> 
					<input type="password" name="new2" placeholder="подтверждение" required> 
					<button class="btn btn-green button">
						Сохранить
					</button>
				</form>
			</div>
		</div>
	</div>
</div>