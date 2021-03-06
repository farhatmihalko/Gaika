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
				<div class="four columns">
					Запрос
				</div>
				<div class="two columns">
					Ответов
				</div>
				<div class="three columns align-initial">
					Действия
				</div>
			</div>
			<!--need to identify the height of first line-->
			<div class="clearfix"></div>
			<!--end-->
			<?php
				foreach($info as $key=>$value){
			?>
				<div id="js-answers-parent">
					<div class="twelve columns adv-line end">
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
								<a class="btn_metro font-size-13" id="js-action-button" data-id="<?php echo $key;?>"
								data-url="<?php echo base_url('index.php/main/accept_answer');?>" data-type="js-list">
									<i class="icon-trash pad-right"></i> Удалить запрос
								</a>
								<?php
									if(count($value["sellers"])){
								?>
									<a class="btn_metro font-size-13 metro_mr-4" id="js-seller-answer-more">
										<i class="icon-star pad-right"></i> Посмотреть ответы
									</a>
								<?php
									}
								?>
							</div>
						</div>
					</div>
					<div class="ten columns hide color-o-l right font-size-13 border-right-6px" id="js-s-more-view">
						<?php
							$list_numeration = 0;
							foreach($value['sellers'] as $row){
								$list_numeration++;
								$path = base_url("index.php/main/view_seller_answers/".$key."/"."".$row->seller_id);
						?>
							<div class="twelve columns right field">
								<?php
									echo $list_numeration.") ";
								?>
								<span>
									Компания 
									<a href="<?php echo $path?>" class="bold font-color-b-l">
										<?php echo $row->seller_name;?>
									</a>
									предлагает вам
									<?php
									 echo $row->parts_val.' запчастей за '.$row->overall;
									?>
									тенге 
									<span class="breadcum inline bold">  
										, <a href="<?php echo $path;?>" class="font-color-b-l">посмотреть подробнее.</a>
									</span>
								</span>
							</div>
						<?php
							}
						?>
					</div>
					<hr class="hr-dashed">
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
						data-url="<?php echo base_url('index.php/main/accept_answer');?>" data-type="js-table">
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