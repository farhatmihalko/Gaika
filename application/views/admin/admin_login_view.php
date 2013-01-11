<body>	
	<div class="page">
		<div class="row shadow pad-tb">
			<?php echo validation_errors();?>
			<?php echo form_open('admin/login');?>
				<div class="eight columns centered">
					<div class="line-after">
						<label for="query-name" class="list-name">
							<strong>Имя пользователя</strong>
							(обязательно)
						</label>
						<input type="text" name="login" id="query-name">
					</div>
					<div class="line-after">
						<label for="query-password" class="list-name">
							<strong>Пароль пользователя</strong>
							(обязательно)
						</label>
						<input type="password" name="pwd" id="query-password">
					</div>
					<div>
						<button class="btn btn-green button center">
							Отправить
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>