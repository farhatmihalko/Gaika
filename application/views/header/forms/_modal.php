<!--TDD forms/_modal-->
<div>
	<?php
		if ($this->session->userdata("type") == "seller"){
	?>
		<!--help for seller-->
		<div class="row">
			<!--Helps-->
			<div class="modal-window shadow six columns centered offset-by-three hide" id="js-modal-seller-help">
				<div class="close-button"></div>
				<h4 class="line-after font-color-l-blue"><i class="icon-bookmark pad-right"></i>Помощь по нашему сервису</h4>
				<hr class="hr-dashed">
					<p>
						Привет продавец запчастей, здесь в личном кабинете вы сможете видеть все запросы,
					 	которые приходят от покупателей запчастей. 
					 	Вы можете искать используя фильтр (по модели, марки, году и остальным деталям)
						или искать в общем списке в нижней части личного кабинета.
					</p>
					<p>
						1. Добавьте дополнительные данные о своей компании пройдя по 
						<a href ="<?php echo base_url('index.php/main/change_seller_settings')?>">данной ссылке</a>
						или нажмите кнопку "настройки".
						<br>
						2. Вы можете оставлять свою цену и  комментарии к запчастям.
						<br>
						3. Просмотреть данные свои ответы на запросы можете пройдя по 
						<a href ="<?php echo base_url('index.php/main/my_answers')?>">данной ссылке</a>.
						<div class="color-b-254 border-color-g253 pad">
							<p>
								Если у вас появились предложения или замечания, свяжитесь с нами по почте <a href="mailto:info@gaika.kz" class="breadcum bold inline">info@gaika.kz</a> 
								<br>
								Также вы можете написать нам с помошью <a href="<?php echo base_url('index.php/main/contact_form');?>" class="breadcum bold inline">формы обращения</a>.
							</p>	
						</div>
					</p>	
			</div>
			<!--fix-->

			<!--form to help-->
			<div class="modal-window shadow six columns centered offset-by-three hide js-scroll-big" id="js-modal-seller-help-find">
					<div class="close-button"></div>
					<h4 class="line-after font-color-l-blue"><i class="icon-exchange pad-right"></i>Как искать запчасти?</h4>
					<hr class="hr-dashed">
					<div class="twelve columns line-after line-before pad-bottom">
						<div class="group-line pad">
							<p>
								Для того чтобы начать поиск вы должны нажать кнопку <a class="breadcum inline bold">Искать запчасти</a>
							</p>
							<img src="<?php echo base_url('images/seller/how-use-1.PNG');?>" alt="">
						</div>
						<div class="group-line pad">
							<p>
								После нажатия этой кнопки перед вами появится 
								<a class="breadcum inline bold">окно</a>
								с возможностью выбора параметров
							</p>
							<img src="<?php echo base_url('images/seller/how-use-2.PNG');?>" alt="">
						</div>
						<div class="group-line pad">
							<p>
								В случае подтверждения запроса вы получите 
								<a class="breadcum inline bold">результаты</a>
								в удобном виде
							</p>
							<img src="<?php echo base_url('images/seller/how-use-3.PNG');?>" alt="">
						</div>
					</div>
					<hr class="hr-dashed">
			</div>
			<!--end of form-->

		<!--end of help-->
		</div>
	<!--end of help for seller-->
	<?php
		}
		else if($this->session->userdata("type") == "user"){
	?>
		<!--help for user-->
		<div class="row">
		<!--Helps-->
			<div class="modal-window shadow six columns centered offset-by-three hide" id="js-modal-user-help">
				<div class="close-button"></div>
				<h4 class="line-after font-color-l-blue"><i class="icon-bookmark pad-right"></i>Помощь по нашему сервису</h4>
				<hr class="hr-dashed">
					<p>
						Привет пользователь, наш сервис поможет вам найти самые наилучшие предложения по вашим запросам!
					</p>
					<p>
						1. Для того чтобы сделать запрос по запчастям, нажмите кнопку 
						<a class="pointer breadcum inline bold">"дать заявки"</a>
						<br>
						2. В <a class="pointer bold breadcum inline">настройках</a> вы можете поменять свои личные данные
						<br>
						3. Пройдя по ссылке <a class="pointer bold breadcum inline">"мои заявки"</a> вы сможете просмотреть свои заявки
					</p>	
			</div>	

			<!--form to help-->
			<div class="modal-window shadow six columns centered offset-by-three hide js-scroll-big" id="js-modal-user-help-query">
				<div class="close-button"></div>
				<h4 class="line-after font-color-l-blue"><i class="icon-exchange pad-right"></i>Как подавать заявку?</h4>
				<hr class="hr-dashed">
				<div class="twelve columns line-after line-before pad-bottom">
					<div class="group-line pad">
						<p>
							Для того чтобы начать поиск вы должны нажать кнопку <a class="breadcum inline bold">Подать зявку</a>
						</p>
						<img src="<?php echo base_url('images/user/query-help.PNG');?>" alt="">
					</div>
					<div class="group-line pad">
						<p>
							После нажатия этой кнопки перед вами появится 
							<a class="breadcum inline bold">окно</a>
							с возможностью выбора параметров для подачи запроса
						</p>
						<img src="<?php echo base_url('images/user/query-help2.PNG');?>" alt="">
					</div>
					<div class="group-line pad">
						<p>
							Также вы можете добовлять дополнительные запчасти
						</p>
						<img src="<?php echo base_url('images/user/query-help3.PNG');?>" alt="">
					</div>
				</div>
				<hr class="hr-dashed">
			</div>
			<!--end of form-->

		<!--end of help-->
		</div>
		<!--end of help for user-->
	<?php
		}
	?>
</div>