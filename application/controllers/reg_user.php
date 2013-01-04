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
	<!--<div class='text_reg' id='js_reg-step1-body'>
		<p class='header'>Ищете неоходимую запчасть?</p>
		Если Вы ищете необходимые Запчасти, то наш оналайн сервис Поиска Запчастей и комплектующих к разным типам, маркам, моделям легковых, грузовых авто, микроавтобусов, автобусов, спецтехники, мототехники дает возможность за считаные минуту найти и подобрать по выгодной для Вас цене нужную деталь.
		Принцип работы gaika.kz максимально прост и удобен: все, что Вам необходимо - это оставить запрос на нужную запчасть и взамен получить сотни предложений от разных поставщиков запчастей. Каждую минуту продавцы автозапчастей предлагают клиентам разные детали, комплектующие к разнообразным видам техники, поэтому Ваш оставленый запрос обязательно не останеться без внимания и Вы получите то что искали.
		<img src="<?php echo base_url();?>/images/reg-2.gif" class='img'>
		Сервис поиска gaika.kz - экономит Ваше время и деньги!
		Желаем Вам успешных поисков, оставайтесь с нами!
		<div class='row_btn'>
			<button class='btn-big' id='js_reg-step1'>
				Продолжить
			</button>
		</div>
	</div>-->
	<div class="block" style='display:none;' id='js_reg-step2-body'>
			<div class="block_head">
				<div class="bheadl"></div>
				<div class="bheadr"></div>
				<h2 style="margin-top:0px;">Регистрация</h2>
				<ul>
					<li><a href="#"><i class="icon-user"></i>Пригласить человека </a></li>
				</ul>
			</div>
			<form id='main_reg-user' method='post'>
				<div class="block_content">
					<div class='r_cab-set-line' style='display:none; font-size : 13px;' id='reg_user-error'>
					</div>
					<div class="r_cab-set-line">
						<div class="r_c-s-l-l">
							Ваш email
						</div>
						<div class="r_c-s-l-r">
							<input type="email" name="mail" required placeholder="Например : farhatmihalko@gmail.com"> 
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
	
	<div  style='width: 80%;
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
						<input type="submit" value="Поехали!" class="submit long" id='login_user-1777213'>
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
    controlCap._init('js_button-generate','js_cap-text','login_user-1777213','js_cap-enter')
/*
Recaptcha.create("6Ld2MtYSAAAAAFW_qu0IXGjHdjC_w-NuuAEafMFc", 'recaptcha_div-891237', {
             theme: "white",
             callback: Recaptcha.focus_response_field});
             */
</script>

<script type='text/javascript'>
	$('#js_reg-step1').live('click', function(){
		$('#js_reg-step1-body').hide()
		$('#js_reg-step2-body').show()
	})
</script>