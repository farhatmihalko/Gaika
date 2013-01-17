<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<!--Place of stylesheets-->
		<link rel="stylesheet" href="<?php echo $basePathCss;?>grid.css">
		<link rel="stylesheet" href="<?php echo $basePathCss;?>main.css">
		<link rel="stylesheet" href="<?php echo $basePathCss;?>fonts.css">
		<link rel="stylesheet" href="<?php echo $basePathCss;?>kit.css">
		<link rel="stylesheet" href="<?php echo $basePathCss;?>header.css">
		<link rel="stylesheet" href="<?php echo $basePathCss;?>footer.css">
		<link rel="stylesheet" href="<?php echo $basePathCss;?>colors.css">
		<link rel="stylesheet" href="<?php echo $basePathCss;?>additional.css">
		<link rel="stylesheet" href="<?php echo $basePathCss;?>inputs.css">
		<script>
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-36082754-1']);
		  _gaq.push(['_trackPageview']);
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		<script type="text/javascript" src="<?php echo $basePathJs;?>jquery.js"></script>
		<script type="text/javascript" src="<?php echo $basePathJs;?>typehead.js"></script>
		<script type="text/javascript" src="<?php echo $basePathJs;?>core.js"></script>
		<script type="text/javascript" src="<?php echo $basePathJs;?>modules.js"></script>
		<script type="text/javascript" src="<?php echo $basePathJs;?>ui.js"></script>
	</head>

	<body>
		<!--header place-->
		<header class="header shadow pad">
			<div class="row">
				<div class="four columns">
					<div>
						<?php
							if (!($this->session->userdata("login"))){
						?>	
							<a href="<?php echo base_url('index.php/main/about');?>" class="font-gray-bold">
								<i class="icon-bullhorn pad-right"></i>Узнайте больше о нашем сервисе
							</a>
						<?php
							}
							else {
						?>
							<?php
								if($this->session->userdata("type") == "seller" && !(isset($bool))){
							?>	
							<!--seller place-->
							<div class="inline">
								<a class="dropdown-open pointer"><i class="icon-h-sign pad-right"></i>Как пользоваться?</a>
								<ul class="dropdown-menu dropdown-menu-help" style="display: none;">
									<li class="dropdown-caret">
					               		 <span class="caret-outer"></span>
					               	 	 <span class="caret-inner"></span>
					            	</li>
					            	<li>
				            			<a class="bold pointer" id="js-module-modal" data-target="js-modal-seller-help">
				            				<i class="icon-group pad-right"></i>Общая справка
					            		</a>
					            	</li>
					            	<li>
				            			<a class="pointer" id="js-module-modal" data-target="js-modal-seller-help-find">
				            				<i class="icon-edit pad-right"></i>Как искать
					            		</a>
					            	</li>
					            	<li class="dropdown-divider"></li>
								</ul>
							</div>
							<!--end of seller place-->
							<?php	
								}
								else if($this->session->userdata("type") == "user" && !(isset($bool))){
							?>
							<!--user place-->
							<div class="inline">
								<a class="dropdown-open pointer"><i class="icon-h-sign pad-right"></i>Как пользоваться?</a>
								<ul class="dropdown-menu dropdown-menu-help" style="display: none;">
									<li class="dropdown-caret">
					               		 <span class="caret-outer"></span>
					               	 	 <span class="caret-inner"></span>
					            	</li>
					            	<li>
				            			<a class="bold pointer" id="js-module-modal" data-target="js-modal-user-help">
				            				<i class="icon-group pad-right"></i>Общая справка
					            		</a>
					            	</li>
				            		<li>
				            			<a class="pointer" id="js-module-modal" data-target="js-modal-user-help-query">
				            				<i class="icon-edit pad-right"></i>Как подавать заявку
					            		</a>
					            	</li>
					            	<li class="dropdown-divider"></li>
								</ul>
							</div>
							<!--end of user place-->
							<?php
								}
							?>
						<?php
							}
							//end
						?>
					</div>
				</div>
				<div class="two columns">&nbsp;
				</div>
				<div class="six columns">
					<div class="right">
						<!-- site menu-->
							<?php 
							if ($this->session->userdata('login')){
								if (isset($bool)){
									if ($this->session->userdata('type')=='user'){?>
										<a href="<?php echo base_url();?>index.php/main/view_my_queries"><i class="icon-cloud pad-right"></i>Мой кабинет</a>
									<?php } 
									else {?> 
										<!--this is ?-->
										<a href="<?php echo base_url();?>index.php/main/find_queries"><i class="icon-cloud pad-right"></i>Мой кабинет</a>
										<!--end of seller-->
									<?php }
								}	 
								else { 
									if ($this->session->userdata('type')=='user'){?>

								  <!--Вот отсюда начинается юзер-->
								  
									<a href="<?php echo base_url();?>"><i class="icon-home pad-right"></i>Главная</a>
									<div class="inline">
										<a class="dropdown-open pointer"><i class="icon-user pad-right"></i>Мой кабинет</a>
										<ul class="dropdown-menu dropdown-profile">
											<li class="dropdown-caret profile">
							               		 <span class="caret-outer"></span>
							               	 	 <span class="caret-inner"></span>
							            	</li>
						            		<li>
				            		<a href="<?php echo base_url('index.php/main/view_my_queries');?>" class="bold">
				            			<i class="icon-table pad-right"></i>Мои запросы
				            		</a>
				            	</li>
				            	<li class="dropdown-divider"></li>
											<li>
												<a href="<?php echo base_url('index.php/main/change_user_settings');?>">
													<i class="icon-certificate pad-right"></i>Настройки профиля
												</a>
												<a href="<?php echo base_url('index.php/main/change_password');?>">
													<i class="icon-lock pad-right"></i>Смена пароля
												</a>
											</li>
											<li class="dropdown-divider"></li>
											<li>
												<a href="<?php echo base_url('index.php/main/contact_form');?>">
													<i class="icon-pencil pad-right"></i>Написать нам
												</a>
											</li>
											<li class="dropdown-divider"></li>
											<li>
												<a href="<?php echo base_url('index.php/main/logout');?>">
													<i class="icon-signout pad-right"></i>Выход из кабинета
												</a>
											</li>
										</ul>
									</div>

									<!--Тут юзер заканчивается-->

								<?php } elseif($this->session->userdata('type')=='seller'){?>

									<!--Тут продавец начинается-->

									<a href="<?php echo base_url();?>"><i class="icon-home pad-right"></i>Главная</a>
									<div class="inline">
										<a class="dropdown-open pointer"><i class="icon-user pad-right"></i>Мой кабинет</a>
										<ul class="dropdown-menu dropdown-profile">
											<li class="dropdown-caret profile">
				               	 <span class="caret-outer"></span>
				               	 <span class="caret-inner"></span>
				            	</li>
				            	<li>
				            		<a href="<?php echo base_url('index.php/main/find_queries');?>" class="bold">
				            			Поиск запчастей
				            		</a>
				            		<a class="pointer">
				            			Новости
				            		</a>
				            	</li>
				            	<li class="dropdown-divider"></li>
				            				<li>
				            					<a href="<?php echo base_url("index.php/main/my_answers");?>">
				            						<i class="icon-tag"></i>
				            						Мой ответы
				            					</a>
				            				</li>
											<li>
												<a href="<?php echo base_url('index.php/main/change_seller_settings')?>">
													<i class="icon-certificate pad-right"></i>Настройки профиля
												</a>
											</li>
											<li class="dropdown-divider"></li>
											<li>
												<a href="<?php echo base_url('index.php/main/contact_form');?>">
													<i class="icon-pencil pad-right"></i>Написать нам
												</a>
											</li>
											<li class="dropdown-divider"></li>
											<li>
												<a href="<?php echo base_url('index.php/main/logout');?>">
													<i class="icon-signout pad-right"></i>Выход из кабинета
												</a>
											</li>
										</ul>
									</div>

									<!--Тут продавец заканчивается-->

								<?php }}
							} else {?>
									<a href="<?php echo base_url();?>">
										<i class="icon-home pad-right"></i>Главная
									</a>
									<a href="<?php echo base_url();?>index.php/main/login">
										<i class="icon-signin pad-right"></i>Войти в кабинет
									</a>
						<?php }?>
						<!--site menu-->
					</div>
				</div>
			</div>
		</header>
		<!--end header-->

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


		