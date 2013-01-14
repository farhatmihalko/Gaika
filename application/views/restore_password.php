<div class="page">
	<div class="row shadow pad-tb">
		<div class="ten columns centered">
			<div class="line-after">
				<span class="breadcum">
					<h4>Пожалуйста введите адрес вашей электронной почты, на нее мы отправим дальнейшие инструкции.</h4>
				</span>
			</div>
			<?php echo form_open('main/restore_password');?>	
				<span class="breadcum color-r-removed field">
					<?php echo validation_errors();?>
				</span>
				<input type="email" name="mail" required title='Введите ваш еmail' placeholder='Ваш еmail...'> 
				<button class="btn btn-green button line-before">
					Восстановить пароль
				</button> 
				
			</form>
			
		</div>
	</div>
</div>
