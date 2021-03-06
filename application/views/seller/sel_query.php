<div class="page">
	<!--content-->
	<div class="row shadow">

		<!--Table information-->
		<div class="twelve columns field">
			<button class="btn button btn-blue <?php if(!count($res)) echo 'hide';?>" id="js-module-modal" data-target="js-modal-find-query">
				<i class="icon-pushpin pad-right"></i>Искать запчасти
			</button>
			<div class="right">
				<a class="breadcum pointer inline a_type margin-right a_type_cat">
					Ваш баланс : 
					<?php
						echo $this->session->userdata('money');
					?>
					<i class="icon-money pad-left"></i>
				</a>
			</div>
		</div>
		<div class="twelve columns adv-line font-gray-bold  align-center adv-list-bordered">
			<div class="two columns">
				Дата
			</div>
			<div class="two columns">
				Изображение
			</div>
			<div class="six columns">
				Обьявление
			</div>
			<div class="two columns">
				Всего запчастей
			</div>
		</div>
		<!--end of table information-->

		<div class="result-list-content min-height-400">
		<!--starting adv-->
			<?php 
				$counter_big = 1;
				$bool = false;
				foreach($res as $key => $value){
					$bool = true;
			?>
			<div class="twelve columns adv-line hr-dashed">
				<div class="two columns align-center">
					<span class="breadcum adv-time"><?php echo $dates[$key];?></span>
					<div class="breadcum pad-top adv-add-btn">
						<button class="btn btn-green button line-before js-seller-answer" 
						id="js-module-modal" data-target="js-modal-seller-give-answer">
							<i class="icon-star"></i>
							&nbsp;Ответить
							<div id="answer-content">
								<?php
									$counter = 0;
									foreach ($value as $obj) {
								?>
									<div class="hide">
										<div class="twelve columns line-after field <?php
											if($counter%2 == 0)
												echo "color-b-l";
										?>">
											<div class="two columns">
												<a class="pointer custom_href"><?php echo $obj->part;?></a>
											</div>
											<input class="hide"	name="query_id[<?php echo $counter;?>]" 
											value="<?php echo $obj->id;?>"/>
											<div class="three columns">
												<input type="text" name="price[<?php echo $counter;?>]"/>
											</div>
											<div class="seven columns">
												<input type="text" class="min-height-none" name="comment[<?php echo $counter;?>]">
											</div>
										</div>
									</div>
								<?php
										$counter++;
									}
								?>
							</div>
						</button>
					</div>
				</div>
				<div class="two columns color-b-254 height-full">
				</div>
				<div class="six columns">
					<a href="#" class="line-after block">
						<?php 
						if(count($value) == 1)
							echo "Нужна запчасть на ";
						else
							echo "Нужны запчасти на ";
						?>
						<?php echo $cars[$info[$key]->car_id].', '.$info[$key]->year.' года';?>
					</a>
					<span class="breadcum">
						Vin code : <?php echo $key;?>
					</span> 
					<span class="breadcum">
						Город : <?php echo $info[$key]->city;?>
					</span>
				</div>
				<div class="two columns align-center">
					<span class="breadcum font-size-15">
						<?php echo count($value);?>
					</span>
				</div>
			</div>
			<?php
			 }
			?>
			<div class="twelve columns adv-line-empty-s align-center line-before <?php if(count($res)) echo 'hide';?>">
				<span class="breadcum font-size-18 line-after">На ваш запрос не найдено результатов!</span>
				<button class="btn button center btn-green" id="js-module-modal" data-target="js-modal-find-query">
					<i class="icon-repeat pad-right"></i>
					Искать снова
				</button>
			</div>
		<!--end adv-->
		</div>
		<!--information about searching-->
		<div class="five columns end pad-tb <?php if(count($res) == 0) echo 'hide';?>">
			<span class="breadcum">
			 Поиск нашел вам 
			 <h4 class="inline">
			  <span id="js-seller-answer-counter">
			  	<?php echo count($res);?>
			  </span>
			  обьявлений
			</h4>
			<br>
			Текущая страница <h4 class="inline">1</h4>
			</span>
		</div>
		<!--end of information-->
	</div>
	<!--end content-->
</div>

<div>
	<div class="row">
		<!--form to help-->
		<div class="modal-window shadow eight columns centered offset-by-two hide js-scroll-big" id="js-modal-seller-give-answer">
			<div class="close-button"></div>
			<h4 class="line-after font-color-l-blue">
				<i class="icon-exchange pad-right"></i>Ваше предложение с ценой и комментариями
			</h4>
			<div class="twelve columns adv-line font-gray-bold  align-center hr-dashed">
				<div class="two columns">
					Название запчасти
				</div>
				<div class="three columns">
					Цена
				</div>
				<div class="seven columns">
					Комментарий
				</div>
			</div>
			<form method="POST" id="js-seller-give-answer" data-url="<?php
				echo base_url("index.php/main/add_answer");
			?>">
				<div class="twelve columns line-before min-height-300">
					<div id="js-seller-place">
					</div>
				</div>
				<hr class="hr-dashed">
				<div class="twelve columns">
					<button class="btn btn-green button block center">
						<i class="icon-download-alt pad-right"></i>
						Ответить
					</button>
				</div>
			</form>
		</div>
		<!--end of form-->
	</div>
</div>