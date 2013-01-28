<!--TDD forms/_right_menu-->
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