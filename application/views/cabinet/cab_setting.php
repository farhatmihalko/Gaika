	<div class='row' id='js_cabinet-block-settings1433' style='display:none;'>
		<div class="block">
			<div class="block_head">
				<div class="bheadl"></div>
				<div class="bheadr"></div>
				<h2 style='margin-top:0px;'>Настройки профайла - <span style='text-transform:lowercase;'>Cмена персональных данных</span></h2>
				<ul>
					<li class="nobg"><a href="#"><i class="icon-trash"></i>Удалить кабинет</a></li>
					<li><a href="#"><i class='icon-user'></i>Пригласить человека &nsbp;</a></li>
				</ul>
			</div>
			<?php echo form_open('main/change_user_settings');?>
			<div class="block_content">		
				<div class='r_cab-set-line'>
					<div class='r_c-s-l-l'>
						Ваше имя
					</div>
					<div class='r_c-s-l-r'>
						<input type='text' name="name" placeholder='Например : Козорезова Елена' value="<?php echo $info->name;?>"> 
					</div>
				</div>			

				<!--<div class='r_cab-set-line'>
					<div class='r_c-s-l-l'>
						Ваш email
					</div>
					<div class='r_c-s-l-r'>
						<input type='email' placeholder='Например : farhatmihalko@gmail.com'> 
					</div>
				</div>-->		

				<div class='r_cab-set-line'>
					<div class='r_c-s-l-l'>
						Ваш телефон
					</div>
					<div class='r_c-s-l-r'>
						<input type='text' name="phone" placeholder='Например : +77720130**' value="<?php echo $info->phone;?>"> 
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