<div class="page">
	<?php if (!$this->session->userdata('login')){?>
	<div class="row shadow pad-tb">
	<!--page content-->
		<div class="twelve columns pad-bottom">
			<h3 class="font-gray-bold margin-left">Наш сервис поможет вам удобно и быстро купить или продать запчасти!</h3>
			<p class="field">
				Оформить заказ через онлайн сервис поиска автозапчастей - это эффективный метод подыскать нужную деталь как для иномарок, отечественных авто так и для других видов техники за считанные минуты Создать заявку на поиск запчастей теперь стало намного проще. Вам нужно лишь заполнить небольшую форму, указав при этом название автозапчасти, тип, марку, модель Вашего автомобиля и, в личном кабинете вы увидите предложения от продавцов и вам останется лишь выбрать самое выгодное из них. Система поиска быстро проверит Ваш заказ и уведомит компании занимающиеся продажей автозапчастей, которые зарегистрированы на нашем сервисе. 
				<br>
				Таким образом, у вас больше нет необходимости тратить время на походы по авторынкам или магазинам запчастей, авторазборкам или же на телефонные звонки, с целью найти нужные комплектующие. После отправки запроса в ваш личный кабинет и на почту будут приходить предложения от продавцов запчастей. На основании всех предложений Вам остается только выбрать самый подходящий вариант покупки. 
				<br>
				Таким образом решение проблемы касательно быстрого поиска авто запчастей станет для Вас всего лишь минутным делом. С нами Вы экономите время и деньги. Убедитесь сами!
			</p>
			<hr class="hr-dashed line-after">
			<div class="eight columns centered pad-top end registration-buttons">
				<a href="<?php echo base_url();?>index.php/main/reg_user" class="btn btn-green inline"><i class="icon-truck pad-right"></i>Я ищу запчасти!</a>
				<a href="<?php echo base_url();?>index.php/main/reg_seller" class="btn btn-blue inline"><i class="icon-cogs pad-right"></i>Я продавец запчастей!</a>
			</div>
		</div>
	<!--end of page content-->
	</div>
	<?php }?>
	<div class="line-after">
		<!--here empty place-->
	</div>
	<div class="row pad-tb shadow">
		<!--content of news-->
		<div class="twelve columns" id="js-news-load-place">
			
		</div>
		<!--end of content-->
	</div>
</div>