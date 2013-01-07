<div>
	<!--modal windows here-->
	<div class="row">
		<div class="modal-window shadow eight columns centered offset-by-two hide js-scroll" id="js-modal-user-query">
			<div class="close-button"></div>
			<div>
				<form action="<?php echo base_url('index.php/main/add_query');?>" method="POST">
					<h4 class="line-after font-color-l-blue"><i class="icon-exchange pad-right"></i>Подача запроса</h4>
					<hr class="hr-dashed">
					<div class="twelve columns pad-bottom line-before">
					
						<div>
							<label for="query-automark" class="list-name">
								<strong>Марка автомашины </strong>
								 (обязательно)</label>
							<select id="query-automark" name="car-mark" class="js-select-autocomplete" data-target="query-automodel">
								<option value="">Выберите из списка</option>
								<?php foreach ($companies as $row) { ?>
									<option value="<?php echo $row->name?>"><?php echo $row->name?></option>
								<?php }?>
							</select>
						</div>
						<div class="line-before">
							<label for="query-automodel" class="list-name">
								<strong>Модель машины </strong>
								 (нужно выбрать марку)
							</label>
							<select id="query-automodel" name="car-model" data-target-url="<?php echo base_url('index.php/main/get_models');?>">
								<option value="">Выберите из списка</option>
							</select>
						</div>

						<div class="line-before">
							<label for="query-year" class="list-name"><strong>Год машины </strong> (между 1989 и 2013)</label>
							<input type="number" min="1989" max="2013" value="1989" id="query-year" name="car-year">
						</div>

						<div class="line-before">
							<label for="query-vin" class="list-name">
								<strong>Vin-code </strong> 
								(так продавец не ошибется с предложением запчасти для вас)
							</label>
							<input type="text" id="query-vin" name="car-vincode">
						</div>

						<div class="field color-b-254 line-before">
							
							<div id="js-user-query-content">
									
								<div>
									<div>
										<label for="query-part-type[1]" class="list-name">
										<strong>Наименование </strong> 
											(Например: Колодка)
										</label>
										<input type="text" name="part_name[1]" id="query-part-type[1]">
									</div>
								
									<div class="line-before">
										<label for="query-part-cat[1]" class="list-name">
											<strong>Категория</strong>
										</label>
										<select name='part_cat[1]' id="query-part-cat[0]">
											<option>Двигатель / Трансмиссия</option>
											<option>Ходовая / Шины / Диски</option>
											<option>Кузов / Салон  / Оптика / Стекла</option>
											<option>Масла и жидкости / Фильтры / Свечи / Ремни / Колодки </option>
											<option>Автохимия / Аксессуары / Автозвук</option>
										</select>
									</div>
								</div>

							</div>
							<div class="line-before pad-top">
								<a class="pointer bold font-size-12 margin-right" id="js-user-add-part">
									Добавить еще запчасть
								</a>
								<a class="pointer bold font-size-12 hide font-color-r" id="js-user-remove-part">
									Удалить добавленную запчасть
								</a>
							</div>
						</div>

					</div>
					<hr class="hr-dashed">
					<button class="btn btn-green button center">
						<i class="icon-pencil pad-right"></i>
						Подать запрос
					</button>
				</form>
			</div>

		</div>

		<!--pattern for add new parts-->
		<div class="hide">
			<div id="js-user-query-template">
				
				<div id="js-user-query-n[{-NUMBER-}]" class="border-b-252 line-before line-after field margin-out-20">
					<!--<h4 class="breadcum">Дополнительная запчасть</h4>-->
					<div>
						<label for="query-part-type[{-NUMBER-}]" class="list-name">
						<strong>Наименование </strong>
						</label>
						<input type="text" name="part_name[{-NUMBER-}]" id="query-part-type[{-NUMBER-}]" >
					</div>
				
					<div class="line-before">
						<label for="query-part-cat[{-NUMBER-}]" class="list-name">
							<strong>Категория</strong>
						</label>
						<select name='part_cat[{-NUMBER-}]' id="query-part-cat[{-NUMBER-}]">
							<option>Двигатель / Трансмиссия</option>
							<option>Ходовая / Шины / Диски</option>
							<option>Кузов / Салон  / Оптика / Стекла</option>
							<option>Масла и жидкости / Фильтры / Свечи / Ремни / Колодки </option>
							<option>Автохимия / Аксессуары / Автозвук</option>
						</select>
					</div>
				</div>

			</div>
		</div>
		<!--end of pattern-->
	</div>

	<div class="row">
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
					<img src="<?php echo base_url('images/user/query-help.png');?>" alt="">
				</div>
				<div class="group-line pad">
					<p>
						После нажатия этой кнопки перед вами появится 
						<a class="breadcum inline bold">окно</a>
						с возможностью выбора параметров для подачи запроса
					</p>
					<img src="<?php echo base_url('images/user/query-help2.png');?>" alt="">
				</div>
				<div class="group-line pad">
					<p>
						Также вы можете добовлять дополнительные запчасти
					</p>
					<img src="<?php echo base_url('images/user/query-help3.png');?>" alt="">
				</div>
			</div>
			<hr class="hr-dashed">
		</div>
		<!--end of form-->
	</div>
	<!--end of modals-->
</div>

