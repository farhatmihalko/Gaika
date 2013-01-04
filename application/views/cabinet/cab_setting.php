<div>
	<div class="row">
		<!--form to help-->
			<div class="modal-window shadow six columns centered offset-by-three hide" id="js-modal-user-settings">
				<div class="close-button"></div>
				
				<div>
					<!--Main settings-->
					<h4 class="line-after font-color-l-blue font-size-13">
						<i class="icon-exchange pad-right"></i>Настройки профиля - Смена персональных данных
					</h4>
					<hr class="hr-dashed">
					<?php echo form_open('main/change_user_settings');?>
						<!--Settings form-->
						<div class="twelve columns line-after line-before pad-top pad-bottom color-g-254">
							<div class="line-after">
								<label for="user-settings-name" class="list-name"><strong>Ваше имя</strong> 
									(<?php
										if(strlen($info->name) == 0)
										 echo "Нужно заполнить";
										else
											echo $info->name;
									 ?>)
								</label>
								<input type="text" id="user-settings-name" name="name" required>
							</div>

							<div class="line-after">
								<label for="user-settings-phone" class="list-name"><strong>Ваш телефон</strong> 
									(<?php 
										if(strlen($info->phone) == 0)
											echo "Нужно заполнить";
										else
											echo $info->phone;
										?>)
								</label>
								<input type="text" id="user-settings-phone" name="phone" required>
							</div>
							<button class="btn btn-green button center">
								<i class="icon-edit pad-right"></i>Сохранить данные
							</button>
							<hr class="hr-dashed">
						</div>
						<!--End of form-->
					</form>
					<!--End of main settings-->
				</div>

				<div>
					<!--Change password-->
					<h4 class="line-after font-color-l-blue font-size-13">
						<i class="icon-lock pad-right"></i>Настройки профиля - Смена пароля
					</h4>
					<hr class="hr-dashed">
					<?php echo form_open('main/change_password');?>
						<!--Settings form password-->
						<div class="twelve columns line-after pad-bottom pad-top color-b-254 line-before">
							
							<div class="line-after">
								<label for="user-settings-password" class="list-name">
									<strong>Ваш старый пароль</strong>
								</label>
								<input type="text" name="old" id="user-settings-password" required>
							</div>
							<div class="line-after">
								<label for="user-settings-password2" class="list-name">
									<strong>Новый пароль</strong>
								</label>
								<input type="text" name="new1" id="user-settings-password2" required>
							</div>
							<div class="line-after">
								<label for="user-settings-password3" class="list-name">
									<strong>Повторите новый пароль</strong>
								</label>
								<input type="text" name="new2" id="user-settings-password3" required>
							</div>
							<button class="btn btn-green button center">
								<i class="icon-wrench pad-right"></i>
								Изменить пароль
							</button>
							<hr class="hr-dashed">
						</div>
						<!--End of view-->
					</form>
					<!--end of change password-->
				</div>

			</div>
		
		<!--end of form-->
	</div>
</div>

<div class="row">
	<button class="btn btn-green button" id="js-module-modal" data-target="js-modal-user-settings">
		Нажать чтобы
	</button>
</div>