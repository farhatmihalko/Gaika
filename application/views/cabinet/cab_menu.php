<div>
	<!--modal windows here-->
	<div class="row">
		<div class="modal-window shadow eight columns centered offset-by-two hide js-scroll" id="js-modal-user-query">
			<div class="close-button"></div>
			<div>
				<form action="<?php echo base_url('index.php/main/add_query');?>" method="POST" id="js-user-query-form">
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
										<input type="text" name="part_name[1]" id="query-part-type[1]" data-provide="typeahead"
										autocomplete="off"
									    data-items="7" data-source="[&quot;Аккумулятор &quot;,&quot;Амортизатор &quot;,&quot;Антенна &quot;,&quot;Бак топливный &quot;,&quot;Балка&quot;,&quot;Балка задней подвески &quot;,&quot;Барабан тормозной&quot;,&quot;Бачок омывателя &quot;,&quot;Бачок распределительный &quot;,&quot;Бачок расширительный &quot;,&quot;Бачок тормозной &quot;,&quot;Блок АБС &quot;,&quot;Блок управления кондиционера &quot;,&quot;Блок управления отопителем&quot;,&quot;Блок цилиндров&quot;,&quot;Блок шестерен &quot;,&quot;Болт&quot;,&quot;Болт колесный для литых дисков&quot;,&quot;Болт колесный для штампованных дисков&quot;,&quot;Болт крепления ступицы &quot;,&quot;Болт крепления торм. диска&quot;,&quot;Болт масляной магистрали &quot;,&quot;Болт маховика &quot;,&quot;Буфер&quot;,&quot;Буфер вала&quot;,&quot;Буфер возд фильтра&quot;,&quot;Буфер генератора&quot;,&quot;Вал вторичный КПП &quot;,&quot;Вентилятор &quot;,&quot;Вилка сцепления&quot;,&quot;Вкладыш коренной &quot;,&quot;Вкладыш упорный коренной&quot;,&quot;Вкладыш шатунный&quot;,&quot;Воздуховод &quot;,&quot;Воздухозаборник&quot;,&quot;Втулка вилки сцепления&quot;,&quot;Генератор &quot;,&quot;Гидрокомпенсатор &quot;,&quot;Гидроцилиндр рулевой рейки &quot;,&quot;Глушитель &quot;,&quot;Датчик &quot;,&quot;Датчик АБС &quot;,&quot;Датчик давления воздуха&quot;,&quot;Датчик давления масла &quot;,&quot;Датчик детонации &quot;,&quot;Датчик дождя &quot;,&quot;Датчик заднего хода&quot;,&quot;Датчик корректора фар&quot;,&quot;Датчик положения др заслонки &quot;,&quot;Датчик положения р/вала &quot;,&quot;Датчик положения фар &quot;,&quot;Датчик скорости &quot;,&quot;Датчик температуры &quot;,&quot;Датчик уровня масла&quot;,&quot;Датчик уровня топл. &quot;,&quot;Двигатель &quot;,&quot;Дефлектор&quot;,&quot;Джойстик &quot;,&quot;Диск колесный литой &quot;,&quot;Диск сцепления &quot;,&quot;Диск тормозной &quot;,&quot;Диффузор вентилятора &quot;,&quot;Дренаж коробки &quot;,&quot;Дроссельная заслонка&quot;,&quot;Жгут проводов&quot;,&quot;Заглушка&quot;,&quot;Иммобилайзер &quot;,&quot;Катализатор &quot;,&quot;Катушка зажигания&quot;,&quot;Клапан  выпускной &quot;,&quot;Клапан вакуумного усилителля&quot;,&quot;Клапан кондиционера &quot;,&quot;Клапан с прокладками &quot;,&quot;Клапан электромагнитный&quot;,&quot;Коллектор впускной &quot;,&quot;Колодки тормозные &quot;,&quot;Колпак клапана колеса&quot;,&quot;Колпак на литой диск&quot;,&quot;Кольца поршневые &quot;,&quot;Кольцо стопорное&quot;,&quot;Кольцо уплотн форсунки &quot;,&quot;Кольцо уплотнительное&quot;,&quot;Кольцо форсунки&quot;,&quot;Комплект прокладок двигателя &quot;,&quot;Комплект сцепления &quot;,&quot;Компрессор кондиционера &quot;,&quot;Компьютер АКПП &quot;,&quot;Компьютер двигателя &quot;,&quot;Корзина сцепления &quot;,&quot;Коробка передач  автомат&quot;,&quot;Кронштейн &quot;,&quot;Крышка бензобака&quot;,&quot;Кулиса КПП &quot;,&quot;Лампа&quot;,&quot;Лямбда-зонд &quot;,&quot;Маховик &quot;,&quot;Модуль управления&quot;,&quot;Мотор заслонки &quot;,&quot;Наконечник рулевой &quot;,&quot;Наконечник рулевой тяги &quot;,&quot;Наконечники свечей&quot;,&quot;Направляющая втулка&quot;,&quot;Насос бачка омывателя &quot;,&quot;Насос ГУР &quot;,&quot;Насос системы охлаждения &quot;,&quot;Насос топливный &quot;,&quot;Натяжитель цепи &quot;,&quot;Опора&quot;,&quot;Опора амортизатора&quot;,&quot;Опора шаровая &quot;,&quot;Ось&quot;,&quot;Отбойник&quot;,&quot;Поворотник &quot;,&quot;Повторитель поворота &quot;,&quot;Подвеска глушителя &quot;,&quot;Поддон картера &quot;,&quot;Подрулевой переключатель &quot;,&quot;Подушка безопасности &quot;,&quot;Подушка двигателя&quot;,&quot;Подшипник&quot;,&quot;Подшипник выжимной&quot;,&quot;Подшипник колесный&quot;,&quot;Подшипник опоры&quot;,&quot;Подшипник ступицы &quot;,&quot;Полукольцо&quot;,&quot;Полукольцо упорное &quot;,&quot;Поршень &quot;,&quot;Привод колеса &quot;,&quot;Пробка&quot;,&quot;Прокладка&quot;,&quot;Пружина&quot;,&quot;Пыльник&quot;,&quot;Пыльник привода&quot;,&quot;Пыльник рулевой рейки &quot;,&quot;Пыльник рулевой тяги &quot;,&quot;Пыльник стойки&quot;,&quot;Пыльник шаровой опоры&quot;,&quot;Пыльник шруса&quot;,&quot;Радиатор &quot;,&quot;Радиатор ГУР &quot;,&quot;Радиатор кондиционера &quot;,&quot;Распредвал &quot;,&quot;Распылитель форсунки &quot;,&quot;Резистор&quot;,&quot;Резонатор &quot;,&quot;Рейка рулевая &quot;,&quot;Реле&quot;,&quot;Реле вентилятора СОД&quot;,&quot;Ремень &quot;,&quot;Ремкомплект КПП&quot;,&quot;Ремкомплект печки &quot;,&quot;Ремкомплект суппорта &quot;,&quot;Реостат печки&quot;,&quot;Ресивер &quot;,&quot;Рессора &quot;,&quot;Ролик ГРМ  натяжной&quot;,&quot;Ротор генератора&quot;,&quot;Руль &quot;,&quot;Рычаг &quot;,&quot;Рычаг дворника &quot;,&quot;Рычаг задний 206 левый&quot;,&quot;Сайлент-блок&quot;,&quot;Сальник&quot;,&quot;Сальник клапана (к-т)&quot;,&quot;Сальник коленвала &quot;,&quot;Сальник оси&quot;,&quot;Свеча&quot;,&quot;Свеча накала &quot;,&quot;Сигнал звуковой &quot;,&quot;Скоба&quot;,&quot;Соленоид &quot;,&quot;Стабилизатор &quot;,&quot;Стекло &quot;,&quot;Стекло лобовое&quot;,&quot;Стекло фары &quot;,&quot;Стекло фонаря &quot;,&quot;Стопор&quot;,&quot;Стопорное кольцо&quot;,&quot;Ступица &quot;,&quot;Суппорт &quot;,&quot;Сухарь&quot;,&quot;Сухарь клапана&quot;,&quot;Термостат &quot;,&quot;Топливопровод &quot;,&quot;Торсион &quot;,&quot;Трос газа &quot;,&quot;Трос КПП&quot;,&quot;Трос ручного тормоза&quot;,&quot;Трос спидометра &quot;,&quot;Трос сцепления &quot;,&quot;Трубка&quot;,&quot;Турбина &quot;,&quot;Тяга КПП&quot;,&quot;Тяга рулевая &quot;,&quot;Тяга стабилизатора &quot;,&quot;Уплотнитель&quot;,&quot;Упор пружины&quot;,&quot;Фара &quot;,&quot;Фиксатор&quot;,&quot;Фильтр &quot;,&quot;Фильтр воздушный &quot;,&quot;Фильтр ГУР &quot;,&quot;Фильтр кондиционера &quot;,&quot;Фильтр масляный&quot;,&quot;Фильтр топливный &quot;,&quot;Фонарь &quot;,&quot;Форсунка омывателя&quot;,&quot;Фрикцион&quot;,&quot;Хомут&quot;,&quot;Цапфа &quot;,&quot;Цепь ГРМ &quot;,&quot;Цилиндр сцепления &quot;,&quot;Цилиндр тормозной&quot;,&quot;Чашка &quot;,&quot;Чашка пружины &quot;,&quot;Чашка упорная &quot;,&quot;Шайба &quot;,&quot;Шайба регулировочная&quot;,&quot;Шайба толкателя клапана &quot;,&quot;Шайба упорная&quot;,&quot;Шатун комплект &quot;,&quot;Шестерня&quot;,&quot;Шкив&quot;,&quot;Шкив ГУРа&quot;,&quot;Шкив коленвала &quot;,&quot;Шкив распредвала &quot;,&quot;Шланг омывателя &quot;,&quot;Шланг топливный&quot;,&quot;Шланг тормозной&quot;,&quot;Шпилька&quot;,&quot;Шплинт&quot;,&quot;Штифт&quot;,&quot;Шуруп&quot;,&quot;Щетка стеклоочистителя &quot;,&quot;Щиток приборов &quot;,&quot;Щуп масляный &quot;,&quot;Электороклапан&quot;,&quot;Электромагнитный клапан&quot;]">
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
						<input type="text" name="part_name[{-NUMBER-}]" id="query-part-type[{-NUMBER-}]" 
						data-provide="typeahead" autocomplete="off"
					    data-items="7" data-source="[&quot;Аккумулятор &quot;,&quot;Амортизатор &quot;,&quot;Антенна &quot;,&quot;Бак топливный &quot;,&quot;Балка&quot;,&quot;Балка задней подвески &quot;,&quot;Барабан тормозной&quot;,&quot;Бачок омывателя &quot;,&quot;Бачок распределительный &quot;,&quot;Бачок расширительный &quot;,&quot;Бачок тормозной &quot;,&quot;Блок АБС &quot;,&quot;Блок управления кондиционера &quot;,&quot;Блок управления отопителем&quot;,&quot;Блок цилиндров&quot;,&quot;Блок шестерен &quot;,&quot;Болт&quot;,&quot;Болт колесный для литых дисков&quot;,&quot;Болт колесный для штампованных дисков&quot;,&quot;Болт крепления ступицы &quot;,&quot;Болт крепления торм. диска&quot;,&quot;Болт масляной магистрали &quot;,&quot;Болт маховика &quot;,&quot;Буфер&quot;,&quot;Буфер вала&quot;,&quot;Буфер возд фильтра&quot;,&quot;Буфер генератора&quot;,&quot;Вал вторичный КПП &quot;,&quot;Вентилятор &quot;,&quot;Вилка сцепления&quot;,&quot;Вкладыш коренной &quot;,&quot;Вкладыш упорный коренной&quot;,&quot;Вкладыш шатунный&quot;,&quot;Воздуховод &quot;,&quot;Воздухозаборник&quot;,&quot;Втулка вилки сцепления&quot;,&quot;Генератор &quot;,&quot;Гидрокомпенсатор &quot;,&quot;Гидроцилиндр рулевой рейки &quot;,&quot;Глушитель &quot;,&quot;Датчик &quot;,&quot;Датчик АБС &quot;,&quot;Датчик давления воздуха&quot;,&quot;Датчик давления масла &quot;,&quot;Датчик детонации &quot;,&quot;Датчик дождя &quot;,&quot;Датчик заднего хода&quot;,&quot;Датчик корректора фар&quot;,&quot;Датчик положения др заслонки &quot;,&quot;Датчик положения р/вала &quot;,&quot;Датчик положения фар &quot;,&quot;Датчик скорости &quot;,&quot;Датчик температуры &quot;,&quot;Датчик уровня масла&quot;,&quot;Датчик уровня топл. &quot;,&quot;Двигатель &quot;,&quot;Дефлектор&quot;,&quot;Джойстик &quot;,&quot;Диск колесный литой &quot;,&quot;Диск сцепления &quot;,&quot;Диск тормозной &quot;,&quot;Диффузор вентилятора &quot;,&quot;Дренаж коробки &quot;,&quot;Дроссельная заслонка&quot;,&quot;Жгут проводов&quot;,&quot;Заглушка&quot;,&quot;Иммобилайзер &quot;,&quot;Катализатор &quot;,&quot;Катушка зажигания&quot;,&quot;Клапан  выпускной &quot;,&quot;Клапан вакуумного усилителля&quot;,&quot;Клапан кондиционера &quot;,&quot;Клапан с прокладками &quot;,&quot;Клапан электромагнитный&quot;,&quot;Коллектор впускной &quot;,&quot;Колодки тормозные &quot;,&quot;Колпак клапана колеса&quot;,&quot;Колпак на литой диск&quot;,&quot;Кольца поршневые &quot;,&quot;Кольцо стопорное&quot;,&quot;Кольцо уплотн форсунки &quot;,&quot;Кольцо уплотнительное&quot;,&quot;Кольцо форсунки&quot;,&quot;Комплект прокладок двигателя &quot;,&quot;Комплект сцепления &quot;,&quot;Компрессор кондиционера &quot;,&quot;Компьютер АКПП &quot;,&quot;Компьютер двигателя &quot;,&quot;Корзина сцепления &quot;,&quot;Коробка передач  автомат&quot;,&quot;Кронштейн &quot;,&quot;Крышка бензобака&quot;,&quot;Кулиса КПП &quot;,&quot;Лампа&quot;,&quot;Лямбда-зонд &quot;,&quot;Маховик &quot;,&quot;Модуль управления&quot;,&quot;Мотор заслонки &quot;,&quot;Наконечник рулевой &quot;,&quot;Наконечник рулевой тяги &quot;,&quot;Наконечники свечей&quot;,&quot;Направляющая втулка&quot;,&quot;Насос бачка омывателя &quot;,&quot;Насос ГУР &quot;,&quot;Насос системы охлаждения &quot;,&quot;Насос топливный &quot;,&quot;Натяжитель цепи &quot;,&quot;Опора&quot;,&quot;Опора амортизатора&quot;,&quot;Опора шаровая &quot;,&quot;Ось&quot;,&quot;Отбойник&quot;,&quot;Поворотник &quot;,&quot;Повторитель поворота &quot;,&quot;Подвеска глушителя &quot;,&quot;Поддон картера &quot;,&quot;Подрулевой переключатель &quot;,&quot;Подушка безопасности &quot;,&quot;Подушка двигателя&quot;,&quot;Подшипник&quot;,&quot;Подшипник выжимной&quot;,&quot;Подшипник колесный&quot;,&quot;Подшипник опоры&quot;,&quot;Подшипник ступицы &quot;,&quot;Полукольцо&quot;,&quot;Полукольцо упорное &quot;,&quot;Поршень &quot;,&quot;Привод колеса &quot;,&quot;Пробка&quot;,&quot;Прокладка&quot;,&quot;Пружина&quot;,&quot;Пыльник&quot;,&quot;Пыльник привода&quot;,&quot;Пыльник рулевой рейки &quot;,&quot;Пыльник рулевой тяги &quot;,&quot;Пыльник стойки&quot;,&quot;Пыльник шаровой опоры&quot;,&quot;Пыльник шруса&quot;,&quot;Радиатор &quot;,&quot;Радиатор ГУР &quot;,&quot;Радиатор кондиционера &quot;,&quot;Распредвал &quot;,&quot;Распылитель форсунки &quot;,&quot;Резистор&quot;,&quot;Резонатор &quot;,&quot;Рейка рулевая &quot;,&quot;Реле&quot;,&quot;Реле вентилятора СОД&quot;,&quot;Ремень &quot;,&quot;Ремкомплект КПП&quot;,&quot;Ремкомплект печки &quot;,&quot;Ремкомплект суппорта &quot;,&quot;Реостат печки&quot;,&quot;Ресивер &quot;,&quot;Рессора &quot;,&quot;Ролик ГРМ  натяжной&quot;,&quot;Ротор генератора&quot;,&quot;Руль &quot;,&quot;Рычаг &quot;,&quot;Рычаг дворника &quot;,&quot;Рычаг задний 206 левый&quot;,&quot;Сайлент-блок&quot;,&quot;Сальник&quot;,&quot;Сальник клапана (к-т)&quot;,&quot;Сальник коленвала &quot;,&quot;Сальник оси&quot;,&quot;Свеча&quot;,&quot;Свеча накала &quot;,&quot;Сигнал звуковой &quot;,&quot;Скоба&quot;,&quot;Соленоид &quot;,&quot;Стабилизатор &quot;,&quot;Стекло &quot;,&quot;Стекло лобовое&quot;,&quot;Стекло фары &quot;,&quot;Стекло фонаря &quot;,&quot;Стопор&quot;,&quot;Стопорное кольцо&quot;,&quot;Ступица &quot;,&quot;Суппорт &quot;,&quot;Сухарь&quot;,&quot;Сухарь клапана&quot;,&quot;Термостат &quot;,&quot;Топливопровод &quot;,&quot;Торсион &quot;,&quot;Трос газа &quot;,&quot;Трос КПП&quot;,&quot;Трос ручного тормоза&quot;,&quot;Трос спидометра &quot;,&quot;Трос сцепления &quot;,&quot;Трубка&quot;,&quot;Турбина &quot;,&quot;Тяга КПП&quot;,&quot;Тяга рулевая &quot;,&quot;Тяга стабилизатора &quot;,&quot;Уплотнитель&quot;,&quot;Упор пружины&quot;,&quot;Фара &quot;,&quot;Фиксатор&quot;,&quot;Фильтр &quot;,&quot;Фильтр воздушный &quot;,&quot;Фильтр ГУР &quot;,&quot;Фильтр кондиционера &quot;,&quot;Фильтр масляный&quot;,&quot;Фильтр топливный &quot;,&quot;Фонарь &quot;,&quot;Форсунка омывателя&quot;,&quot;Фрикцион&quot;,&quot;Хомут&quot;,&quot;Цапфа &quot;,&quot;Цепь ГРМ &quot;,&quot;Цилиндр сцепления &quot;,&quot;Цилиндр тормозной&quot;,&quot;Чашка &quot;,&quot;Чашка пружины &quot;,&quot;Чашка упорная &quot;,&quot;Шайба &quot;,&quot;Шайба регулировочная&quot;,&quot;Шайба толкателя клапана &quot;,&quot;Шайба упорная&quot;,&quot;Шатун комплект &quot;,&quot;Шестерня&quot;,&quot;Шкив&quot;,&quot;Шкив ГУРа&quot;,&quot;Шкив коленвала &quot;,&quot;Шкив распредвала &quot;,&quot;Шланг омывателя &quot;,&quot;Шланг топливный&quot;,&quot;Шланг тормозной&quot;,&quot;Шпилька&quot;,&quot;Шплинт&quot;,&quot;Штифт&quot;,&quot;Шуруп&quot;,&quot;Щетка стеклоочистителя &quot;,&quot;Щиток приборов &quot;,&quot;Щуп масляный &quot;,&quot;Электороклапан&quot;,&quot;Электромагнитный клапан&quot;]">				
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
	<!--end of modals-->
</div>

