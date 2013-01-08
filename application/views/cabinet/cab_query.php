<div class="page">
	<!--content here-->
	<div class="row shadow pad-bottom">

		<div class="twelve columns field">
			<button class="btn button btn-orange " id="js-module-modal" data-target="js-modal-user-query">
				<i class="icon-edit pad-right"></i>Подать заявку
			</button>
			<div class="right">
					<a class="breadcum pointer inline a_type margin-right a_type_cat" id="js-user-table">
						<i class="icon-th-large"></i> Таблицей
					</a>
					<a class="breadcum pointer inline a_type" id="js-user-list">
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
					<div class="adv-add-btn">
						<a class="btn_metro font-size-13">
							<i class="icon-trash pad-right"></i> Удалить
						</a>
						<a class="btn_metro font-size-13 metro_mr-4">
							<i class="icon-star pad-right"></i> Посмотреть
						</a>
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
						<a class="btn_metro font-size-50" id="js-action-button" data-id="<?php echo $key;?>"
						data-url="<?php echo base_url('index.php/main/accept_answer');?>">
							<i class="icon-trash"></i>
						</a>
					</div>
				</div>
			<?php
				}
			?>
		</div>

		<div class="twelve columns line-before-big">
			<div class="seven columns">
			</div>
			<div class="five columns">
				<div class="right">
					<span class="breadcum inline">
						В случае нажатия 
						<i class="icon-trash font-size-18"></i>
						вы удалите ваш запрос
					</span>
				</div>
			</div>
		</div>
	</div>
	<!--end content here-->
</div>