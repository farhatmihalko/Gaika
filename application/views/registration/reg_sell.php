<div class="page">
	<div class="row pad-tb shadow">
	<!--page content-->
	<div class="ten columns end centered end">
		<div class="line-after">
			<a href="<?php echo base_url();?>index.php/main/reg_user" class="reg-type-field border-n-right left font-gray-bold">Регистрация покупателя</a>
			<a href="<?php echo base_url();?>index.php/main/reg_seller" class="reg-type-field border-n-left right reg-type-active font-gray-bold">Регистрация продавца</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<form action="" method="POST" action="<?php echo base_url('index.php/main/reg_seller');?>">
		<!--registration content-->
		<div class="nine columns end centered clearfix field">
			<div class="row field color-b-254 border-b-252">
				<h5 class="font-gray-bold line-height-2">
					<?php if (isset($message))
						echo $message;
					?>
				</h5>
				<hr class="hr-dashed">
				<label for="seller_name" class="list-name"><strong>Введите ваш логин </strong> (нужен для входа)</label>
				<input type="text" id="seller_name" name="login" required>
				<label for="seller_pwd" class="list-name line-before"><strong>Введите ваш пароль </strong> (безопасность)</label>
				<input type="password" id="seller_pwd" name="pwd" required>
				<label for="seller_pwd2" class="list-name line-before"><strong>Введите повторно пароль </strong> (безопасность)</label>
				<input type="password" id="seller_pwd2" name="pwd2" required>
				<label for="seller_company" class="list-name line-before"><strong>Название компании </strong> (для профиля)</label>
				<input type="text" id="seller_company" name="company_name" required>
				<label for="seller_tel" class="list-name line-before"><strong>Ваш телефон </strong></label>
				<input type="text" id="seller_tel" name="phone" required>
				<label for="seller_city" class="list-name line-before"><strong>Ваш город </strong></label>
				<select id="seller_city" name="city" required>
					<?php foreach($cities as $obj){
					echo '<option value="'.$obj->name.'">'.$obj->name.'</option>';
					}?>
				</select>
				<hr class="hr-dashed line-before">
				<div class="line-before">
					<button class="btn btn-green center">
						<i class="icon-star pad-right"></i>Зарегистрировать меня
					</button>
				</div>
			</div>			
		</div>
		<!--end of registration content-->
	</form>
	<!--end of page content-->
	</div>
</div>
