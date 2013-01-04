<div class="page">
	<div class="row pad-tb no-bg-color">
	<!--page content-->
		<div class="seven columns centered login shadow">
			<h4><a href="<?php echo base_url();?>" class="font-gray-bold"><i class="icon-hand-right pad-right"></i>Перейти на главную</a></h4>
			<hr class="hr-dashed">
			<h5 class="font-gray-bold">
				<?php if (isset($message) && $message != "1")
					echo $message;
				?>
			</h5>
			<form action="" method="POST">
				<input type="text" placeholder="Введите ваше имя сюда" class="line-after-big line-before-big" name="name">
				<input type="password" placeholder="Тут надо написать пароль" class="line-after-big" name="password">
				<input type="radio" id="label_remember" name="remember"><label for="label_remember">&nbsp;Я продавец</label>
				<a href="<?php echo base_url();?>index.php/main/restore_password" class="right font-gray-bold"><i class="icon-refresh pad-right"></i>Забыл пароль</a>
				<div class="line-before pad"></div>
				<div class="center pad">
					<button type="submit" class="btn btn-green"><i class="icon-key pad-right"></i>Войти в кабинет</button>	
					<a href="<?php echo base_url();?>index.php/main/reg_user" class="btn inline btn-green "><i class="icon-user pad-right"></i>Создать новый аккаунт</a>	
				</div>
			</form>
		</div>
	<!--end of page content-->
	</div>
</div>
