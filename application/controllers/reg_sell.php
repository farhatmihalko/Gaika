<style type='text/css'>
	.text_reg{
		font-size : 15px;
	}
	.img{
		margin-top: 10px;
		margin-bottom : 10px;
	}
	.row_btn{
		width : 70%;
		margin : 0 auto;
		padding-top : 30px;
	}
	.text_reg .btn-big{
		padding : 6px;
		font-size : 14px;
		width :100%;
		cursor : pointer;
	}
	.header{
		font-size : 17px;
		font-weight: bold;
		margin-bottom : 15px;
	}
</style>

<div class='row'>
	<div class='text_reg' id='js_reg-step1-body'>
		<!--<p class='header'>Хотите быстро продать запчасти?</p>
		Если Вы не знаете где продать Запчасти, то оналайн Сервис Поиска Запчастей поможет Вам решить даную проблему.
		Вам достаточно зарегистрироваться на нашем сервисе и получать сотни заявок от клиентов на разные типы, марки, модели техники с разных регионов Казахстана. Удобная система фильтров отбра поступивших заказов поможет Вам точно настроить критерии по которым будут поступать заявки на покупку необходимых запчастей.
		<img src="<?php echo base_url();?>/images/reg-1.gif" class='img'>
		Теперь Вам достаточно ответить или связаться с клиентом относительно сделанной им заявки и продать заказанные запчасти.
		Наш сервис  gaika.kz - сделает Ваш бизнес еще прибыльным!
		Не теряйте время. Желаем Вам успешных продаж, оставайтесь с нами!
		<div class='row_btn'>
			<button class='btn-big' id='js_reg-step1'>
				Продолжить
			</button>
		</div>-->
	</div>
	<div class="block" id='js_reg-step2-body'>
			<div class="block_head">
				<div class="bheadl"></div>
				<div class="bheadr"></div>
				<h2 style="margin-top:0px;">Регистрация</h2>
				<ul>
					<li><a href="#"><i class="icon-user"></i>Пригласить человека </a></li>
				</ul>
			</div>
			<form action="<?php echo base_url('index.php/main/reg_seller');?>" method='post'>
				<div class="block_content">		
					<div class="r_cab-set-line" id='reg_sell-error' style='display:none; font-size : 13px;'>
						<?php if (isset($message))
							echo $message;
						?>
					</div>
					<div class="r_cab-set-line">
						<div class="r_c-s-l-l">
							Ваш логин
						</div>
						<div class="r_c-s-l-r">
							<input type="text" name="login" required placeholder="Например : gaika"> 
						</div>
					</div>

					<div class="r_cab-set-line">
						<div class="r_c-s-l-l">
							Ваш пароль
						</div>
						<div class="r_c-s-l-r">
							<input type="password" name="pwd" required placeholder="Ваш пароль"> 
						</div>
					</div>		

					<div class="r_cab-set-line">
						<div class="r_c-s-l-l">
							Повторите пароль
						</div>
						<div class="r_c-s-l-r">
							<input type="password" name="pwd2" required placeholder="Повторите пароль"> 
						</div>
					</div>	

					<div class="r_cab-set-line">
						<div class="r_c-s-l-l">
							Название вашей компании
						</div>
						<div class="r_c-s-l-r">
							<input type="text" name="company_name" required placeholder="Например : Gaika.kz"> 
						</div>
					</div>						

					<div class="r_cab-set-line">
						<div class="r_c-s-l-l">
							Ваш телефон
						</div>
						<div class="r_c-s-l-r">
							<input type="text" name="phone" required placeholder="Например : +77720130**"> 
						</div>
					</div>
					
					<div class="r_cab-set-line">
						<div class="r_c-s-l-l">
							Ваш город
						</div>
						<div class="r_c-s-l-r">
							<select name="city" required>
								<?php foreach($cities as $obj){
								echo '<option value="'.$obj->name.'">'.$obj->name.'</option>';
								}?>
							</select>
						</div>
					</div>		

	
					<div style='width: 80%;
margin: 0 auto;'>
	    <div class="captcha">
           <div class="zone visible">
               <div id="js_cap-text" class="cap_text">
                   Тут будет код!
               </div>
               <input type="text" id="js_cap-enter" class="cap_enter" placeholder="Вводите ответ сюда">
                   
               </input>
           </div>
             <div class="clearfix"></div>
            <div class="control">
                <input type="button" value="Генерация" id="js_button-generate"/>
            </div>
        </div>

</div>


					<div class="r_cab-set-buttons">
						<input type="submit" value="Поехали!" class="submit long" id='login_seller-1777213'>
						<input type="reset" value="Обнулить" class="submit long">
					</div>
				</div>		
			</form>
			<div class="bendl"></div>
			<div class="bendr"></div>
		</div>
</div>

<script type='text/javascript'>

    var controlCap = new capObject();
    controlCap._init('js_button-generate','js_cap-text','login_seller-1777213','js_cap-enter')
/*
Recaptcha.create("6Ld2MtYSAAAAAFW_qu0IXGjHdjC_w-NuuAEafMFc", 'recaptcha_div-891237', {
             theme: "red",
             callback: Recaptcha.focus_response_field});
             */
</script>

<script type='text/javascript'>
	$('#js_reg-step1').live('click', function(){
		$('#js_reg-step1-body').hide('middle')
		$('#js_reg-step2-body').show('middle')
	})
</script>