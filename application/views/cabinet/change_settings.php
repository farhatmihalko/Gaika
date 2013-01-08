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
				<?php echo form_open("main/change_user_settings"); ?>
					<div class="line-after">
						<label for="query-name" class="list-name">
							<strong>Ваше имя</strong>
							 (Например : Кумар)
						</label>
						<input type="text" name="name" maxlength="100" id="query-name"
						placeholder="<?php echo $this->session->userdata('name');?>"/>
					</div>
					<div class="line-afer">
						<label for="query-phone" class="list-name">
							<strong>Ваш телефон</strong>
							 (Например : +77771033041)
						</label>
						<input type="text" name="phone" maxlength="50" id="query-phone"
						placeholder="<?php echo $this->session->userdata('phone');?>"/>
					</div>
					<button class="btn btn-green button line-before">
						Сохранить
					</button>
				</form>
			</div>
		</div>
	</div>
</div>