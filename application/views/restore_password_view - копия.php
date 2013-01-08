<div class="page">
	<div class="row pad-tb no-bg-color">
	<!--page content-->
		<div class="eight columns white pad-tb centered end shadow ">
			<?php echo validation_errors();?>
			<?php echo form_open("main/restore_password");?>	
				<input type="email" name="mail" class="line-after" title="Введите ваш еmail" placeholder="Ваш еmail..." required> 
				<button class="btn btn-green button center"><i class="icon-unlock pad-right"></i>Отправить запрос</button>
			</form>
			<br>
			<hr class="hr-dashed">
			<div class="color-b-254 field">
				<h5 class="line-before line-after">Пожалуйста введите адрес вашей электронной почты, на нее мы отправим дальнейшие инструкции.</h5>
			</div>
			<hr class="hr-dashed">
		</div>
		<br>
	<!--end of page content-->
	</div>

</div>
