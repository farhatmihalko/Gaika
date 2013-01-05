<div class='row'>
	<form  id='query-content-ljpouzcx' method='post' action=''>
		<div class='query_area-c'>
			<div class='q_a-main pointer'>


				<div class='line'>
					<div class='title'>
						Марка автомашины
					</div>
					<div class='cont'>
						<select class="s_c-select" name='car-mark' id='js_sold-znbhywroipa'>
								<option value="" selected="selected">Выберите марку машины</option>
								<?php foreach ($companies as $row) { ?>
									<option value="<?php echo $row->name?>"><?php echo $row->name?></option>
								<?php }?>
						</select>
					</div>
				</div>

				<div class='clearfix'></div>
				<div class='line'>
					<div class='title'>
						Модель машины
					</div>
					<div class='cont'>
						<select class="s_c-select" style='width : 100%;' name='car-model' id='js_sold-uutpuanvhzx'>
								<option value="" selected="selected">Выберите модель машины</option>
						</select>
					</div>
				</div>
				<div class='clearfix'></div>
				<div class='line'>
					<div class='title'>
						Год машины
					</div>
					<div class='cont'>
						<select  name='car-year' id='generate_year'>
						</select>
					</div>
				</div>
				<div class='clearfix'></div>
				<div class='line'>
					<div class='title'>
						VIN-code машины
					</div>
					<div class='cont'>
						<input type='text' placeholder='Впишите первые 6 символов кузова машины' title='Так продавец не ошибется с предложением запчасти для вас ' name='car-vincode' required='true'>
						<b>Так продавец не ошибется с предложением запчасти для вас</b>
					</div>
				</div>
				

			</div>
		</div>
		<div class='query_area-p'>
			<div class='q_a-main pointer'>
				

				<div class='line'>
					<div class='title'>
						Наименование
					</div>
					<div class='cont'>
						<select style='display: none;' id='js_list-123jkasdf'>
						<?php foreach ($parts as $row) { ?>
							<option value="<?php echo $row->parts;?>"><?php echo $row->parts;?></option>
						<?php }?>
						</select>
						
						<input  name='part_name[1]' type="text" placeholder="Начните вводить! Например: Колодка" class="span3" style="margin: 0 auto; width : 300px;" data-provide="typeahead" data-items="7" data-source="[&quot;Аккумулятор &quot;,&quot;Амортизатор &quot;,&quot;Антенна &quot;,&quot;Бак топливный &quot;,&quot;Балка&quot;,&quot;Балка задней подвески &quot;,&quot;Барабан тормозной&quot;,&quot;Бачок омывателя &quot;,&quot;Бачок распределительный &quot;,&quot;Бачок расширительный &quot;,&quot;Бачок тормозной &quot;,&quot;Блок АБС &quot;,&quot;Блок управления кондиционера &quot;,&quot;Блок управления отопителем&quot;,&quot;Блок цилиндров&quot;,&quot;Блок шестерен &quot;,&quot;Болт&quot;,&quot;Болт колесный для литых дисков&quot;,&quot;Болт колесный для штампованных дисков&quot;,&quot;Болт крепления ступицы &quot;,&quot;Болт крепления торм. диска&quot;,&quot;Болт масляной магистрали &quot;,&quot;Болт маховика &quot;,&quot;Буфер&quot;,&quot;Буфер вала&quot;,&quot;Буфер возд фильтра&quot;,&quot;Буфер генератора&quot;,&quot;Вал вторичный КПП &quot;,&quot;Вентилятор &quot;,&quot;Вилка сцепления&quot;,&quot;Вкладыш коренной &quot;,&quot;Вкладыш упорный коренной&quot;,&quot;Вкладыш шатунный&quot;,&quot;Воздуховод &quot;,&quot;Воздухозаборник&quot;,&quot;Втулка вилки сцепления&quot;,&quot;Генератор &quot;,&quot;Гидрокомпенсатор &quot;,&quot;Гидроцилиндр рулевой рейки &quot;,&quot;Глушитель &quot;,&quot;Датчик &quot;,&quot;Датчик АБС &quot;,&quot;Датчик давления воздуха&quot;,&quot;Датчик давления масла &quot;,&quot;Датчик детонации &quot;,&quot;Датчик дождя &quot;,&quot;Датчик заднего хода&quot;,&quot;Датчик корректора фар&quot;,&quot;Датчик положения др заслонки &quot;,&quot;Датчик положения р/вала &quot;,&quot;Датчик положения фар &quot;,&quot;Датчик скорости &quot;,&quot;Датчик температуры &quot;,&quot;Датчик уровня масла&quot;,&quot;Датчик уровня топл. &quot;,&quot;Двигатель &quot;,&quot;Дефлектор&quot;,&quot;Джойстик &quot;,&quot;Диск колесный литой &quot;,&quot;Диск сцепления &quot;,&quot;Диск тормозной &quot;,&quot;Диффузор вентилятора &quot;,&quot;Дренаж коробки &quot;,&quot;Дроссельная заслонка&quot;,&quot;Жгут проводов&quot;,&quot;Заглушка&quot;,&quot;Иммобилайзер &quot;,&quot;Катализатор &quot;,&quot;Катушка зажигания&quot;,&quot;Клапан  выпускной &quot;,&quot;Клапан вакуумного усилителля&quot;,&quot;Клапан кондиционера &quot;,&quot;Клапан с прокладками &quot;,&quot;Клапан электромагнитный&quot;,&quot;Коллектор впускной &quot;,&quot;Колодки тормозные &quot;,&quot;Колпак клапана колеса&quot;,&quot;Колпак на литой диск&quot;,&quot;Кольца поршневые &quot;,&quot;Кольцо стопорное&quot;,&quot;Кольцо уплотн форсунки &quot;,&quot;Кольцо уплотнительное&quot;,&quot;Кольцо форсунки&quot;,&quot;Комплект прокладок двигателя &quot;,&quot;Комплект сцепления &quot;,&quot;Компрессор кондиционера &quot;,&quot;Компьютер АКПП &quot;,&quot;Компьютер двигателя &quot;,&quot;Корзина сцепления &quot;,&quot;Коробка передач  автомат&quot;,&quot;Кронштейн &quot;,&quot;Крышка бензобака&quot;,&quot;Кулиса КПП &quot;,&quot;Лампа&quot;,&quot;Лямбда-зонд &quot;,&quot;Маховик &quot;,&quot;Модуль управления&quot;,&quot;Мотор заслонки &quot;,&quot;Наконечник рулевой &quot;,&quot;Наконечник рулевой тяги &quot;,&quot;Наконечники свечей&quot;,&quot;Направляющая втулка&quot;,&quot;Насос бачка омывателя &quot;,&quot;Насос ГУР &quot;,&quot;Насос системы охлаждения &quot;,&quot;Насос топливный &quot;,&quot;Натяжитель цепи &quot;,&quot;Опора&quot;,&quot;Опора амортизатора&quot;,&quot;Опора шаровая &quot;,&quot;Ось&quot;,&quot;Отбойник&quot;,&quot;Поворотник &quot;,&quot;Повторитель поворота &quot;,&quot;Подвеска глушителя &quot;,&quot;Поддон картера &quot;,&quot;Подрулевой переключатель &quot;,&quot;Подушка безопасности &quot;,&quot;Подушка двигателя&quot;,&quot;Подшипник&quot;,&quot;Подшипник выжимной&quot;,&quot;Подшипник колесный&quot;,&quot;Подшипник опоры&quot;,&quot;Подшипник ступицы &quot;,&quot;Полукольцо&quot;,&quot;Полукольцо упорное &quot;,&quot;Поршень &quot;,&quot;Привод колеса &quot;,&quot;Пробка&quot;,&quot;Прокладка&quot;,&quot;Пружина&quot;,&quot;Пыльник&quot;,&quot;Пыльник привода&quot;,&quot;Пыльник рулевой рейки &quot;,&quot;Пыльник рулевой тяги &quot;,&quot;Пыльник стойки&quot;,&quot;Пыльник шаровой опоры&quot;,&quot;Пыльник шруса&quot;,&quot;Радиатор &quot;,&quot;Радиатор ГУР &quot;,&quot;Радиатор кондиционера &quot;,&quot;Распредвал &quot;,&quot;Распылитель форсунки &quot;,&quot;Резистор&quot;,&quot;Резонатор &quot;,&quot;Рейка рулевая &quot;,&quot;Реле&quot;,&quot;Реле вентилятора СОД&quot;,&quot;Ремень &quot;,&quot;Ремкомплект КПП&quot;,&quot;Ремкомплект печки &quot;,&quot;Ремкомплект суппорта &quot;,&quot;Реостат печки&quot;,&quot;Ресивер &quot;,&quot;Рессора &quot;,&quot;Ролик ГРМ  натяжной&quot;,&quot;Ротор генератора&quot;,&quot;Руль &quot;,&quot;Рычаг &quot;,&quot;Рычаг дворника &quot;,&quot;Рычаг задний 206 левый&quot;,&quot;Сайлент-блок&quot;,&quot;Сальник&quot;,&quot;Сальник клапана (к-т)&quot;,&quot;Сальник коленвала &quot;,&quot;Сальник оси&quot;,&quot;Свеча&quot;,&quot;Свеча накала &quot;,&quot;Сигнал звуковой &quot;,&quot;Скоба&quot;,&quot;Соленоид &quot;,&quot;Стабилизатор &quot;,&quot;Стекло &quot;,&quot;Стекло лобовое&quot;,&quot;Стекло фары &quot;,&quot;Стекло фонаря &quot;,&quot;Стопор&quot;,&quot;Стопорное кольцо&quot;,&quot;Ступица &quot;,&quot;Суппорт &quot;,&quot;Сухарь&quot;,&quot;Сухарь клапана&quot;,&quot;Термостат &quot;,&quot;Топливопровод &quot;,&quot;Торсион &quot;,&quot;Трос газа &quot;,&quot;Трос КПП&quot;,&quot;Трос ручного тормоза&quot;,&quot;Трос спидометра &quot;,&quot;Трос сцепления &quot;,&quot;Трубка&quot;,&quot;Турбина &quot;,&quot;Тяга КПП&quot;,&quot;Тяга рулевая &quot;,&quot;Тяга стабилизатора &quot;,&quot;Уплотнитель&quot;,&quot;Упор пружины&quot;,&quot;Фара &quot;,&quot;Фиксатор&quot;,&quot;Фильтр &quot;,&quot;Фильтр воздушный &quot;,&quot;Фильтр ГУР &quot;,&quot;Фильтр кондиционера &quot;,&quot;Фильтр масляный&quot;,&quot;Фильтр топливный &quot;,&quot;Фонарь &quot;,&quot;Форсунка омывателя&quot;,&quot;Фрикцион&quot;,&quot;Хомут&quot;,&quot;Цапфа &quot;,&quot;Цепь ГРМ &quot;,&quot;Цилиндр сцепления &quot;,&quot;Цилиндр тормозной&quot;,&quot;Чашка &quot;,&quot;Чашка пружины &quot;,&quot;Чашка упорная &quot;,&quot;Шайба &quot;,&quot;Шайба регулировочная&quot;,&quot;Шайба толкателя клапана &quot;,&quot;Шайба упорная&quot;,&quot;Шатун комплект &quot;,&quot;Шестерня&quot;,&quot;Шкив&quot;,&quot;Шкив ГУРа&quot;,&quot;Шкив коленвала &quot;,&quot;Шкив распредвала &quot;,&quot;Шланг омывателя &quot;,&quot;Шланг топливный&quot;,&quot;Шланг тормозной&quot;,&quot;Шпилька&quot;,&quot;Шплинт&quot;,&quot;Штифт&quot;,&quot;Шуруп&quot;,&quot;Щетка стеклоочистителя &quot;,&quot;Щиток приборов &quot;,&quot;Щуп масляный &quot;,&quot;Электороклапан&quot;,&quot;Электромагнитный клапан&quot;]">
					</div>
				</div>

				<div class='clearfix'></div>
				<div class='line'>
					<div class='title'>
						Категория запчасти
					</div>
					<div class='cont'>
						<select name='part_cat[1]'>
								<option>Двигатель / Трансмиссия</option>
								<option>Ходовая / Шины / Диски</option>
								<option>Кузов / Салон  / Оптика / Стекла</option>
								<option>Масла и жидкости / Фильтры / Свечи / Ремни / Колодки </option>
								<option>Автохимия / Аксессуары / Автозвук</option>
						</select>
					</div>
				</div>

				<div class='clearfix'></div>
				<div class='line'>
					<div class='title'>
						Оригинал/Дубликат
					</div>
					<div class='cont' style='padding-top:10px;'>
								<input type='checkbox' name='part_type1[1]' value='1'><label> Оригинал</label>&nbsp;
								<input type='checkbox' name='part_type2[1]' value='1'><label > Дубликат</label>&nbsp;
								<input type='checkbox' name='part_type3[1]' value='1'><label> Б/У</label>
						<select name='part_type[1]' class='hidden'>
								<option value='1'>Оригинал</option>
								<option value='2'>Дубликат</option>
								<option value='3'>Б/У</option>
						</select>
					</div>
				</div>

				<div class='clearfix'></div>
				<div class='line'>
					<div class='title'>
						Местоположение
					</div>
					<div class='cont'>
						<select name='part_type-place-forward[1]' style='width : 30%; margin-right : 10px;'>
								<option value=''>------------</option>
								<option value='3'>Правый</option>
								<option value='1'>Левый</option>
								<option value='2'>Центральный</option>							
						</select>
						<select name='part_type-place-back[1]' style='width : 30%; margin-right : 10px;'>
								<option value='' >--------</option>
								<option value='2'>Передний</option>
								<option value='1'>Задний</option>
								<option value='3'>Средний</option>
								
						</select>
						<select name='part_type-place-middle[1]' style='width : 30%; margin-right : 10px;'>
								<option value='' >----------</option>
								<option value='1'>Верхний</option>
								<option value='3'>Нижний</option>
								<option value='2'>Центральный</option>				
						</select>
					</div>
				</div>		

			</div>
		</div>
		<!--Place for additional parts of car-->
		<div id='query_area-p-pre'></div>
		<div class='query_control'>
			<input type='submit' class='right button-control b-c-blue' id='setQuery-ajax-asdfasdf' value='Подать запрос'>
			<div style="background: url(http://gaika.kz/css/ajax.gif) no-repeat center; width : 155px; height : 20px; display:none;" id="js_sold-zasdfjklaa-ajax" class='right'></div>
			<a href='#' class='right button-control b-c-blue' id='add_part1'>Добавить запчасть</a>
		</div>
		<input type='text' style='display:none;' name='city' id='js_asasdf-city' value=''>
	</form>
</div>




<!--Script place-->
<script type='text/javascript'>
var getConstanta = function()
{
	return ++constanta;
}
var getPPPPP = function()
{
		var $queryPart = undefined;
		$queryPart = "<div class='query_area-p'><div class='q_a-main pointer'><div class='line'><div class='title'>Наименование " +
					"</div>	<div class='cont'>" + 
					"<input  name='part_name[" + constanta + "]' type='text' placeholder='Начните вводить! Например: Колодка' class='span3' style='margin: 0 auto; width : 300px;' data-provide='typeahead'  data-items='7' data-source='[&quot;Аккумулятор &quot;,&quot;Амортизатор &quot;,&quot;Антенна &quot;,&quot;Бак топливный &quot;,&quot;Балка&quot;,&quot;Балка задней подвески &quot;,&quot;Барабан тормозной&quot;,&quot;Бачок омывателя &quot;,&quot;Бачок распределительный &quot;,&quot;Бачок расширительный &quot;,&quot;Бачок тормозной &quot;,&quot;Блок АБС &quot;,&quot;Блок управления кондиционера &quot;,&quot;Блок управления отопителем&quot;,&quot;Блок цилиндров&quot;,&quot;Блок шестерен &quot;,&quot;Болт&quot;,&quot;Болт колесный для литых дисков&quot;,&quot;Болт колесный для штампованных дисков&quot;,&quot;Болт крепления ступицы &quot;,&quot;Болт крепления торм. диска&quot;,&quot;Болт масляной магистрали &quot;,&quot;Болт маховика &quot;,&quot;Буфер&quot;,&quot;Буфер вала&quot;,&quot;Буфер возд фильтра&quot;,&quot;Буфер генератора&quot;,&quot;Вал вторичный КПП &quot;,&quot;Вентилятор &quot;,&quot;Вилка сцепления&quot;,&quot;Вкладыш коренной &quot;,&quot;Вкладыш упорный коренной&quot;,&quot;Вкладыш шатунный&quot;,&quot;Воздуховод &quot;,&quot;Воздухозаборник&quot;,&quot;Втулка вилки сцепления&quot;,&quot;Генератор &quot;,&quot;Гидрокомпенсатор &quot;,&quot;Гидроцилиндр рулевой рейки &quot;,&quot;Глушитель &quot;,&quot;Датчик &quot;,&quot;Датчик АБС &quot;,&quot;Датчик давления воздуха&quot;,&quot;Датчик давления масла &quot;,&quot;Датчик детонации &quot;,&quot;Датчик дождя &quot;,&quot;Датчик заднего хода&quot;,&quot;Датчик корректора фар&quot;,&quot;Датчик положения др заслонки &quot;,&quot;Датчик положения р/вала &quot;,&quot;Датчик положения фар &quot;,&quot;Датчик скорости &quot;,&quot;Датчик температуры &quot;,&quot;Датчик уровня масла&quot;,&quot;Датчик уровня топл. &quot;,&quot;Двигатель &quot;,&quot;Дефлектор&quot;,&quot;Джойстик &quot;,&quot;Диск колесный литой &quot;,&quot;Диск сцепления &quot;,&quot;Диск тормозной &quot;,&quot;Диффузор вентилятора &quot;,&quot;Дренаж коробки &quot;,&quot;Дроссельная заслонка&quot;,&quot;Жгут проводов&quot;,&quot;Заглушка&quot;,&quot;Иммобилайзер &quot;,&quot;Катализатор &quot;,&quot;Катушка зажигания&quot;,&quot;Клапан  выпускной &quot;,&quot;Клапан вакуумного усилителля&quot;,&quot;Клапан кондиционера &quot;,&quot;Клапан с прокладками &quot;,&quot;Клапан электромагнитный&quot;,&quot;Коллектор впускной &quot;,&quot;Колодки тормозные &quot;,&quot;Колпак клапана колеса&quot;,&quot;Колпак на литой диск&quot;,&quot;Кольца поршневые &quot;,&quot;Кольцо стопорное&quot;,&quot;Кольцо уплотн форсунки &quot;,&quot;Кольцо уплотнительное&quot;,&quot;Кольцо форсунки&quot;,&quot;Комплект прокладок двигателя &quot;,&quot;Комплект сцепления &quot;,&quot;Компрессор кондиционера &quot;,&quot;Компьютер АКПП &quot;,&quot;Компьютер двигателя &quot;,&quot;Корзина сцепления &quot;,&quot;Коробка передач  автомат&quot;,&quot;Кронштейн &quot;,&quot;Крышка бензобака&quot;,&quot;Кулиса КПП &quot;,&quot;Лампа&quot;,&quot;Лямбда-зонд &quot;,&quot;Маховик &quot;,&quot;Модуль управления&quot;,&quot;Мотор заслонки &quot;,&quot;Наконечник рулевой &quot;,&quot;Наконечник рулевой тяги &quot;,&quot;Наконечники свечей&quot;,&quot;Направляющая втулка&quot;,&quot;Насос бачка омывателя &quot;,&quot;Насос ГУР &quot;,&quot;Насос системы охлаждения &quot;,&quot;Насос топливный &quot;,&quot;Натяжитель цепи &quot;,&quot;Опора&quot;,&quot;Опора амортизатора&quot;,&quot;Опора шаровая &quot;,&quot;Ось&quot;,&quot;Отбойник&quot;,&quot;Поворотник &quot;,&quot;Повторитель поворота &quot;,&quot;Подвеска глушителя &quot;,&quot;Поддон картера &quot;,&quot;Подрулевой переключатель &quot;,&quot;Подушка безопасности &quot;,&quot;Подушка двигателя&quot;,&quot;Подшипник&quot;,&quot;Подшипник выжимной&quot;,&quot;Подшипник колесный&quot;,&quot;Подшипник опоры&quot;,&quot;Подшипник ступицы &quot;,&quot;Полукольцо&quot;,&quot;Полукольцо упорное &quot;,&quot;Поршень &quot;,&quot;Привод колеса &quot;,&quot;Пробка&quot;,&quot;Прокладка&quot;,&quot;Пружина&quot;,&quot;Пыльник&quot;,&quot;Пыльник привода&quot;,&quot;Пыльник рулевой рейки &quot;,&quot;Пыльник рулевой тяги &quot;,&quot;Пыльник стойки&quot;,&quot;Пыльник шаровой опоры&quot;,&quot;Пыльник шруса&quot;,&quot;Радиатор &quot;,&quot;Радиатор ГУР &quot;,&quot;Радиатор кондиционера &quot;,&quot;Распредвал &quot;,&quot;Распылитель форсунки &quot;,&quot;Резистор&quot;,&quot;Резонатор &quot;,&quot;Рейка рулевая &quot;,&quot;Реле&quot;,&quot;Реле вентилятора СОД&quot;,&quot;Ремень &quot;,&quot;Ремкомплект КПП&quot;,&quot;Ремкомплект печки &quot;,&quot;Ремкомплект суппорта &quot;,&quot;Реостат печки&quot;,&quot;Ресивер &quot;,&quot;Рессора &quot;,&quot;Ролик ГРМ  натяжной&quot;,&quot;Ротор генератора&quot;,&quot;Руль &quot;,&quot;Рычаг &quot;,&quot;Рычаг дворника &quot;,&quot;Рычаг задний 206 левый&quot;,&quot;Сайлент-блок&quot;,&quot;Сальник&quot;,&quot;Сальник клапана (к-т)&quot;,&quot;Сальник коленвала &quot;,&quot;Сальник оси&quot;,&quot;Свеча&quot;,&quot;Свеча накала &quot;,&quot;Сигнал звуковой &quot;,&quot;Скоба&quot;,&quot;Соленоид &quot;,&quot;Стабилизатор &quot;,&quot;Стекло &quot;,&quot;Стекло лобовое&quot;,&quot;Стекло фары &quot;,&quot;Стекло фонаря &quot;,&quot;Стопор&quot;,&quot;Стопорное кольцо&quot;,&quot;Ступица &quot;,&quot;Суппорт &quot;,&quot;Сухарь&quot;,&quot;Сухарь клапана&quot;,&quot;Термостат &quot;,&quot;Топливопровод &quot;,&quot;Торсион &quot;,&quot;Трос газа &quot;,&quot;Трос КПП&quot;,&quot;Трос ручного тормоза&quot;,&quot;Трос спидометра &quot;,&quot;Трос сцепления &quot;,&quot;Трубка&quot;,&quot;Турбина &quot;,&quot;Тяга КПП&quot;,&quot;Тяга рулевая &quot;,&quot;Тяга стабилизатора &quot;,&quot;Уплотнитель&quot;,&quot;Упор пружины&quot;,&quot;Фара &quot;,&quot;Фиксатор&quot;,&quot;Фильтр &quot;,&quot;Фильтр воздушный &quot;,&quot;Фильтр ГУР &quot;,&quot;Фильтр кондиционера &quot;,&quot;Фильтр масляный&quot;,&quot;Фильтр топливный &quot;,&quot;Фонарь &quot;,&quot;Форсунка омывателя&quot;,&quot;Фрикцион&quot;,&quot;Хомут&quot;,&quot;Цапфа &quot;,&quot;Цепь ГРМ &quot;,&quot;Цилиндр сцепления &quot;,&quot;Цилиндр тормозной&quot;,&quot;Чашка &quot;,&quot;Чашка пружины &quot;,&quot;Чашка упорная &quot;,&quot;Шайба &quot;,&quot;Шайба регулировочная&quot;,&quot;Шайба толкателя клапана &quot;,&quot;Шайба упорная&quot;,&quot;Шатун комплект &quot;,&quot;Шестерня&quot;,&quot;Шкив&quot;,&quot;Шкив ГУРа&quot;,&quot;Шкив коленвала &quot;,&quot;Шкив распредвала &quot;,&quot;Шланг омывателя &quot;,&quot;Шланг топливный&quot;,&quot;Шланг тормозной&quot;,&quot;Шпилька&quot;,&quot;Шплинт&quot;,&quot;Штифт&quot;,&quot;Шуруп&quot;,&quot;Щетка стеклоочистителя &quot;,&quot;Щиток приборов &quot;,&quot;Щуп масляный &quot;,&quot;Электороклапан&quot;,&quot;Электромагнитный клапан&quot;]'>" +
				    "</div></div><div class='clearfix'></div>" +
					"<div class='line'><div class='title'>	Категория запчасти</div><div class='cont'><select name='part_cat[" + constanta + "]'>"+
								"<option>Двигатель / Трансмиссия</option>	<option>Ходовая / Шины / Диски</option>" + 
								"<option>Кузов / Салон  / Оптика / Стекла</option>" +				
								"<option>Масла и жидкости / Фильтры / Свечи / Ремни / Колодки </option><option>Автохимия / Аксессуары / Автозвук</option></select>"+
								"</div></div><div class='clearfix'></div><div class='line'><div class='title'>Оригинал/Дубликат</div>"+
					"<div class='cont' style='padding-top:10px;'><input type='checkbox' name='part_type1[" + constanta + "]' value='1'><label> Оригинал</label>&nbsp;"+
"	<input type='checkbox' name='part_type2[" + constanta + "]' value='1'><label> Дубликат</label>&nbsp;<input type='checkbox' name='part_type3[" + constanta + "]' value='1'><label> Б/У</label>"+
"<select name='part_type[1]' class='hidden'><option value='1'>Оригинал</option><option value='2'>Дубликат</option><option value='3'>Б/У</option></select></div>"+
									"</div><div class='clearfix'></div>" +
"<div class='line'>	<div class='title'>	Местоположение</div><div class='cont'><select name='part_type-place-forward["+ constanta +"]' style='width : 30%; margin-right : 10px;'>" + 
"<option value=''>------------</option><option value='3'>Правый</option><option value='1'>Левый</option><option value='2'>Центральный</option></select>"+
"<select name='part_type-place-back["+ constanta +"]' style='width : 30%; margin-right : 10px;'>"+ 
"<option value='' >--------</option><option value='2'>Передний</option><option value='1'>Задний</option><option value='3'>Средний</option></select>"+
"<select name='part_type-place-middle["+ constanta +"]' style='width : 30%; margin-right : 10px;'>" + 
"<option value='' >----------</option><option value='1'>Верхний</option><option value='3'>Нижний</option><option value='2'>Центральный</option>" + 
						+ "</select></div></div></div></div>";
		return $queryPart;
}

							
								

var js_addPart = (function(){
	$('.query_control').find('#add_part1').live('click',function(){
		constanta += 1;
		var $queryContent = $('#query-content-ljpouzcx')
		var $queryPart = getPPPPP()
		console.log($queryPart)
		var $prependArea = $('#query_area-p-pre')
			$prependArea.append($queryPart)
		$('#js_123kasfmzx' + constanta).html($('#js_list-123jkasdf').html())
		console.log(constanta)
		return false
	})
}());
//Такася код нужен для отправки на сервер данных
var js_setQuery_asdfnmzxcv = (function(){
	//Ставим город который у нас где-то там хранится
	$('#js_asasdf-city').attr('val',$('.c_h-c-city').html())
	//Таксь.... Продолжаем!
	$('#query-content-ljpouzcx').live('submit',function(){
		//Получаем данные серилизуем их!
		var queryData = $('#query-content-ljpouzcx').serialize()
		var pathXXD = 'http://gaika.kz/index.php/main/add_query'
		console.log(queryData)
		//Всякие плюшки в виде картинок
		$('#js_sold-zasdfjklaa-ajax').toggle()
		$('#setQuery-ajax-asdfasdf').toggle()
		//End of images add
		$.ajax({
			url : pathXXD,
			data : queryData,
			type : 'POST',
			success : function(res)
			{
				if(res == 0)
				{
					alert('Все прошло окей, ваш запрос принят!')
					window.location.reload()
				}
				else if(res == 1)
				{
					alert("Ошибочка")
					document.location.reload();
				}
			},
			error : function(res)
			{
				alert('Some connection error!')
				$('#js_sold-zasdfjklaa-ajax').toggle()
				$('#setQuery-ajax-asdfasdf').toggle()
			}
		})
		//after ajax standart actions
		return false
	});
}());
var js_query_js_sold_znbhywroipa = (function(){
	$('.typeahead').typeahead()
	$('#js_sold-znbhywroipa').on('change',function(){
		var $queryData = $(this).val()
		console.log($queryData)
		var $resSelect = $('#js_sold-uutpuanvhzx')
		$.ajax({
			type : 'POST',
			url : 'http://gaika.kz/index.php/main/get_models',
			data : 'company=' + $queryData,
			success : function(res)
			{
				$resSelect.html(res)
			},
			error : function()
			{
				alert('Some error!')
			}
		})
	})

}());
</script>

<script type='text/javascript'>
	for(var i = 0; i < 24; i++)
		$('#generate_year').append("<option value=" + (i+1989) + ">" + (i+1989)+"</option>")	
</script>
<!--End of script place-->