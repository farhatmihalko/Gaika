<div class="page">
	<!--content here-->
	<div class="row shadow pad-bottom">

		<div class="twelve columns field">
			<button class="btn button btn-orange " id="js-module-modal" data-target="js-modal-user-query">
				<i class="icon-edit pad-right"></i>Подать заявку
			</button>
			<div class="right margin-top-5">
					<a class="breadcum pointer inline pad-right-big" id="js-user-table">
						<i class="icon-th-large"></i> Таблицей
					</a>
					<a class="breadcum pointer inline" id="js-user-list">
						<i class="icon-align-justify"></i> Списком
					</a>
			</div>
		</div>
		
		<div data-description="content-in" class="line-before-big user-queries-page" id="js-user-type-table">
			<div class="twelve columns adv-line font-gray-bold  align-center adv-list-bordered">
				<div class="two columns">
					Дата
				</div>
				<div class="two columns">
					Запрос
				</div>
				<div class="six columns">
					Ответов
				</div>
				<div class="two columns">
					Действия
				</div>
			</div>

			<?php
				foreach($info as $key=>$value){
			?>
			<div class="twelve columns adv-line hr-dashed">
				<div class="two columns align-center">
					<span class="breadcum adv-time">
						<?php
							echo $value["query_date"]->query_date;
						?>
					</span>
				</div>
				<div class="four columns">
					<a class="line-after block pointer">
						Запчасти на : 
						<?php
							echo $value["car"].", ".$value["year"]." года";
						?>
					</a>
					<span class="breadcum">
						Vin-Code : 
						<?php 
							echo $key;
						?>
					</span>
					<span class="breadcum">
						Город : 
						<?php
							echo $value["query_date"]->city;
						?>
					</span>
				</div>
				<div class="two columns align-center">
					<a class="pointer">
						<?php 
							echo count($value['sellers']);
						?>
						<span class="breadcum"> ответило</span>
					</a>
				</div>
				<div class="three columns">
					<div class="breadcum adv-add-btn">
						<button class="btn btn-red button font-size-11">
							<i class="icon-trash pad-right"></i> Удалить
						</button>
						<button class="btn btn-green button font-size-11">
							<i class="icon-star pad-right"></i> Посмотреть
						</button>
					</div>
				</div>
			</div>
			<?php
				}
			?>
		</div>

		<div data-description="content-in" class="line-before-big user-queries-page hide" id="js-user-type-list">
			<hr class="hr-dashed">
			<?php
				foreach($info as $key=>$value){
			?>
				<div class="six columns adv-line hr-dashed pointer color-b-l hover-white">
					<div class="seven columns">
						<a class="line-after block">
							<?php
								echo $value["car"].", ".$value["year"]." года";
							?>
						</a>
						<span class="breadcum">
							Vin-Code : 
							<?php 
								echo $key;
							?>
						</span>
						<span class="breadcum">
							Дата : 
							<?php
								echo $value["query_date"]->query_date;
							?>
						</span>
						<span class="breadcum">
							Город : 
							<?php
								echo $value["query_date"]->city;
							?>
						</span>
					</div>
					<div class="two columns align-center font-size-14">
						<a>
							<?php 
								echo count($value['sellers']);
							?>
							<span class="breadcum"> ответило</span>
						</a>
					</div>
					<div class="three columns adv-add-btn">
						<button class="btn btn-red button center" id="js-action-button" data-id="<?php echo $key;?>" 
							data-url="<?php echo base_url('index.php/main/accept_answer');?>">
							<i class="icon-trash"></i>
						</button>
					</div>
				</div>
			<?php
				}
			?>
		</div>

		<div class="twelve columns line-before-big">
			<div class="seven columns">
				<button class="submenu-a" id="js-module-modal" data-target="js-modal-user-help-query">
					<i class="icon-star pad-right"></i>Как подавать заявку
				</button>
			</div>
			<div class="five columns">
				<div class="right">
					<span class="breadcum inline">
						В случае нажатия 
						<img src="<?php echo base_url('images/user/help-remove-button.PNG');?>" alt="" class="vertical-align-m">
						вы удалите ваш запрос
					</span>
				</div>
			</div>
		</div>
	</div>
	<!--end content here-->
</div>