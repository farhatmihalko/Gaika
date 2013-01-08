<div class="page">
	<div class="row pad-tb shadow page_settings">
		<!--Settings header-->
		<div class="twelve columns line-after">
			<ul class="about_list pad-left-big">
				<li class="active">
					<a href="<?php echo base_url('index.php/main/change_user_settings');?>">Настройки профиля</a>
				</li>
				<li>
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
				<?php echo form_open('main/change_user_settings'); ?>
					<input type="text" name="name" maxlength="100" 
					placeholder="<?php echo $this->session->userdata('name');?>"/>
					<input type="text" name="phone" maxlength="50"
					placeholder="<?php echo $this->session->userdata('phone');?>"/>
					<button class="btn btn-green button">
						Сохранить
					</button>
				</form>
			</div>
		</div>
	</div>
</div>