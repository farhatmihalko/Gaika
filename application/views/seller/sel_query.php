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