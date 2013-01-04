
	<div class='row' style='display : none;' id='js_cabinet-block-settings1432'>
		<div class="block">
			<div class="block_head">
				<div class="bheadl"></div>
				<div class="bheadr"></div>
				<h2 style='margin-top:0px;'>Настройки профайла - <span style='text-transform:lowercase;'>Cмена пароля</span></h2>
				
			</div>
			<?php echo validation_errors(); ?>
			<?php echo form_open('main/change_password');?>
			<div class="block_content">		
				<div class='r_cab-set-line'>
					<div class='r_c-s-l-l'>
						Ваше старый пароль
					</div>
					<div class='r_c-s-l-r'>
						<input type='text' name="old"  value=""> 
					</div>
				</div>			

				<div class='r_cab-set-line'>
					<div class='r_c-s-l-l'>
						Ваш новый пароль
					</div>
					<div class='r_c-s-l-r'>
						<input type='text' name="new1" value=""> 
					</div>
				</div>		

				<div class='r_cab-set-line'>
					<div class='r_c-s-l-l'>
						Подтвердите новый пароль
					</div>
					<div class='r_c-s-l-r'>
						<input type='text' name="new2" value=""> 
					</div>
				</div>

				<div class='r_cab-set-buttons'>
					<input type="submit" value="Изменить" class="submit long">
					<input type="reset" value="Обнулить" class="submit long">
				</div>
				
				
			</div>		
			</form>
			<div class="bendl"></div>
			<div class="bendr"></div>
		</div>
	</div>