<div class="page">
	<div class="row pad-tb shadow line-after-big">
		<div class="twelve columns line-after">
			<ul class="about_list pad-left-big">
				<li class="active">
					<a href="<?php echo base_url('index.php/main/change_seller_settings');?>">Настройки профиля</a>
				</li>
			</ul>
			<hr class="hr-dashed">
		</div>
		<div class="twelve columns">
			<!--settings view-->
			<?php echo validation_errors();?>
			<?php echo form_open('main/change_user_settings'); ?>	
			<div class="eight columns">
					<label for="settings-address" class="list-name"><strong>Введите адрес вашей компаний </strong> (Обязательно)</label>
					<input type="text" value="<?php echo $seller->adress;?>" name="adress" id="settings-address">
					<label for="settings-definition" class="list-name line-before"><strong>Описания ваших услуг </strong> (для вашей страницы)</label>
					<textarea id="settings-definition" placeholder="<?php echo $seller->about;?>" name="about"></textarea>
					<div class="field color-g-255 line-before">
						<label class="list-name"><strong>Введите телефоны вашей компании </strong> (Максимум - 3)</label>
						<input type="text" name="phone1" class="line-after" placeholder='+7791123123123' value="<?php echo $seller->phone1;?>">
						<input type="text" name="phone2" class="line-after" placeholder='+7791123123123' value="<?php echo $seller->phone2;?>">
						<input type="text" name="phone3" class="line-after" placeholder='+7791123123123' value="<?php echo $seller->phone3;?>">
					</div>
					<button class="btn btn-green button line-before line-after">Сохранить данные</button>
				</div>
			</form>
			<!--end of settings-->
		</div>
	</div>
</div>
