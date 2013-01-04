<div class="page">
	<!--content-->
	<div class="row shadow">

		<!--Table information-->
		<div class="twelve columns field">
			<button class="btn button btn-blue <?php if(!count($res)) echo 'hide';?>" id="js-module-modal" data-target="js-modal-find-query">
				<i class="icon-pushpin pad-right"></i>Искать запчасти
			</button>
			<div class="right">
				<button class="submenu-a" id="js-module-modal" data-target="js-modal-seller-help-find">
					<i class="icon-cog pad-right"></i>Как искать?
				</button>
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

		<div class="result-list-content">
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
						<button class="btn btn-green button line-before">
							<i class="icon-star"></i>
							&nbsp;Ответить
							<?php
								foreach ($value as $obj) {
							?>
							<div class="hide" data-attr="<?php echo $obj->id;?>" part="<?php echo $obj->part;?>"></div>
							<?php
								}
							?>
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
			  <?php echo count($res);?> обьявлений
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
	<!--modal windows-->
	<div class="row">
		<!--form to find some parts-->
		<form action="" method="POST">
			<div class="modal-window shadow six columns centered offset-by-three hide" id="js-modal-find-query">
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
	<div class="row">
		<!--form to find some parts-->
		<form action="" method="POST">
			<div class="modal-window shadow six columns centered offset-by-three hide" id="js-modal-seller-help-find">
				<div class="close-button"></div>
				<h4 class="line-after font-color-l-blue"><i class="icon-exchange pad-right"></i>Как искать запчасти?</h4>
				<hr class="hr-dashed">
				<div class="twelve columns line-after line-before pad-bottom">
					<div class="group-line pad">
						<p>
							Для того чтобы начать поиск вы должны нажать кнопку <a class="breadcum inline bold">Искать запчасти</a>
						</p>
						<img src="<?php echo base_url('images/seller/how-use-1.png');?>" alt="">
					</div>
					<div class="group-line pad">
						<p>
							После нажатия этой кнопки перед вами появится 
							<a class="breadcum inline bold">окно</a>
							с возможностью выбора параметров
						</p>
						<img src="<?php echo base_url('images/seller/how-use-2.png');?>" alt="">
					</div>
					<div class="group-line pad">
						<p>
							В случае подтверждения запроса вы получите 
							<a class="breadcum inline bold">результаты</a>
							в удобном виде
						</p>
						<img src="<?php echo base_url('images/seller/how-use-3.png');?>" alt="">
					</div>
				</div>
				<hr class="hr-dashed">
			</div>
		</form>
		<!--end of form-->
	</div>
	<!--end of modals-->	
</div>