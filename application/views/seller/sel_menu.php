<div>
	<!--modal windows-->
	<div class="row">
		<!--form to find some parts-->
		<form action="" method="POST">
			<div class="modal-window shadow six columns centered offset-by-three hide js-scroll-big" id="js-modal-find-query">
				<div class="close-button"></div>
				<h4 class="line-after font-color-l-blue"><i class="icon-lightbulb pad-right"></i>Поиск запчастей по параметрам</h4>
				<hr class="hr-dashed">
				<div class="twelve columns line-after line-before pad-bottom">
				
					<div>
						<label for="query-automark" class="list-name"><strong>Марка автомашины </strong> (обязательно)</label>
						<select id="query-automark" name="car-mark" class="js-select-autocomplete" data-target="query-automodel">
							<option value="">Выберите из списка</option>
							<?php foreach ($companies as $row) { ?>
								<option value="<?php echo $row->name?>"><?php echo $row->name?></option>
							<?php }?>
						</select>
					</div>

					<div class="line-before">
						<label for="query-automodel" class="list-name"><strong>Модель машины </strong> (нужно выбрать марку)</label>
						<select id="query-automodel" name="car-model" data-target-url="<?php echo base_url('index.php/main/get_models');?>">
							<option value="">Выберите из списка</option>
						</select>
					</div>

					<div class="line-before">
						<div class="row">
							<div class="six columns">
								<label for="query-year-start" class="list-name"><strong>Год поиска</strong> (начало)</label>
								<input type="number" min="1989" max="2013" value="1989" id="query-year-start" name="car-year-from">
							</div>
							<div class="six columns">
								<label for="query-year-end" class="list-name"><strong>Год поиска</strong> (конец)</label>
								<input type="number" min="1989" max="2013" value="2013" id="query-year-end" name="car-year-until">
							</div>
						</div>
					</div>

					<div class="line-before">
						<label for="query-city" class="list-name"><strong>Город поиск</strong> (обязательно)</label>
						<select id="query-city" name="city">
							<option value="">Выберите из списка</option>
							<?php foreach ($cities as $row) { ?>
								<option value="<?php echo $row->name?>"><?php echo $row->name?></option>
							<?php }?>
						</select>
					</div>
					
					<div class="line-before">
						<label for="query-category" class="list-name"><strong>Категория запчасти</strong> (обязательно)</label>
						<select name="part_cat" id="query-category">
							<option value="">Любая</option>
							<option>Двигатель / Трансмиссия</option>
							<option>Ходовая / Шины / Диски</option>
							<option>Кузов / Салон / Оптика / Cтекла</option>
							<option>Масла и жидкости / Фильтры / Свечи / Ремни / Колодки </option>
							<option>Автохимия / Аксессуары / Автозвук</option>
						</select>
					</div>
				</div>	
				<hr class="hr-dashed">
				<button class="btn btn-green button center"><i class="icon-search pad-right"></i>Начать поиск</button>
			</div>
		</form>
		<!--end of form-->
	</div>
	<!--end of modals-->	
</div>