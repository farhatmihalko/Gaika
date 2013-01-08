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
				<span class="breadcum">	
					<?php echo validation_errors();?>
				</span>
				<?php echo form_open("main/change_password");?>
					<div class="line-after">
						<label for="query-pass-old" class="list-name">
							<strong>Ваш старый пароль</strong>
							 (Например : ********)
						</label>	
						<input type="password" name="old" id="query-pass-old" 
						placeholder="Старый" required> 
					</div>
					<div class="line-after">
						<label for="query-pass-new" class="list-name">
							<strong>Ваш новый пароль</strong>
							 (Рекомендуется ставить пароли сложнее)
						</label>
						<input type="password" name="new1" id="query-pass-new"
						placeholder="Новый" required> 
					</div>
					<div class="line-after">
						<label for="query-pass-repeat" class="list-name">
							<strong>Повторите ваш новый пароль</strong>
							 (Рекомендуется ставить пароли сложнее)
						</label>
						<input type="password" name="new2" id="query-pass-repeat" 
						placeholder="Повторите новый" required> 
					</div>
					<button class="btn btn-green button line-before">
						Сохранить
					</button>
				</form>
			</div>
		</div>
	</div>
</div>