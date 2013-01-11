<body>
	<div class="page">
		<div class="row shadow pad-tb">
			<div class="twelve columns line-after">
				<span class="breadcum">
					Всего пользователей - 
					<?php 
						echo count($users) + count($sellers);
					?>
				</span>
				<span class="breadcum">
					Пользователей - 
					<?php
						echo count($users);
					?>
				</span>
				<span class="breadcum">
					Продавцов - 
					<?php
						echo count($sellers);
					?>
				</span>
				<hr class="hr-dashed">
			</div>
			
			<div class="twelve columns">
				<ul class="about_list pad-left-big" id="js-admin-menu">
					<li class="active">
						<a data-id="js-admin-view-users" id="js-admin-users">Пользователи</a>
					</li>
					<li>
						<a data-id="js-admin-view-sellers" id="js-admin-sellers">Продавцы</a>
					</li>
				</ul>
			</div>

			<div class="line-before twelve columns" id="js-admin-view-users">
				<div class="twelve columns adv-line font-gray-bold">
					<div class="three columns">
						Email
					</div>
					<div class="three columns">
						Имя пользователя
					</div>
					<div class="three columns">
						Телефон
					</div>
					<div class="three columns">
						Город
					</div>
				</div>

				<?php 
					foreach ($users as $obj){
				?>
				<div class="twelve columns adv-line hr-dashed">
					<div class="three columns">
						<?php echo $obj->mail; ?>
					</div>
					<div class="three columns">
						<?php echo $obj->name; ?>
					</div>
					<div class="three columns">
						<?php echo $obj->phone; ?>
					</div>
					<div class="three columns">
						<?php echo $obj->city; ?>
					</div>
				</div>
				<?php
					}
				?>
			</div>

			<div class="line-before twelve columns hide" id="js-admin-view-sellers">
				
				<div class="twelve columns adv-line font-gray-bold">
					<div class="three columns">
						Логин
					</div>
					<div class="three columns">
						Имя компании
					</div>
					<div class="three columns">
						Информация
					</div>
					<div class="three columns">
						Баланс
					</div>
				</div>
				<?php 
					foreach ($sellers as $obj){
				?>
				<div class="twelve columns adv-line hr-dashed">
					<div class="three columns">
						<?php echo $obj->login; ?>
					</div>
					<div class="three columns">
						<?php echo $obj->company_name; ?>
					</div>
					<div class="three columns">
						<span class="breadcum font-size-11 bold">
							Телефон : 
							<?php
								echo $obj->phone1;
							?>
						</span>
						<span class="breadcum font-size-11 bold">
							Адресс : 
							<?php
								echo $obj->adress;
							?>
						</span>
						<span class="breadcum font-size-11 bold">
							Город : 
							<?php
								echo $obj->city;
							?>
						</span>
					</div>
					<div class="three columns">
						<span class="breadcum bold font-size-11">
							Баланс : 
							<?php
								echo $obj->money;
							?>
						</span>
						<a class="pointer" id="js-add-money-open">
							Пополнить
						</a>
						<div class="hide" id="js-add-money-form">
							<?php echo  form_open("admin/add_money"); ?>
								<input name="seller" type="hidden" value="<?php echo $obj->id; ?>">
								<input name="amount" type="text" class="line-after">
								<button class="btn btn-green button">
									Пополнить
								</button>
							</form>
						</div>
					</div>
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
</body>

<script type="javascript">
	
</script>