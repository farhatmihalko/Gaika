
<div class='row' style='border:1px dotted #ddd;'>
	<form  method="post">
		<div class='query_area-c'>
			<div class='q_a-main pointer'>
				<div class='line'>
					<div class='title'>
						Марка автомашины
					</div>
					<div class='cont'>
						<select class="s_c-select" name='car-mark' id='js_asfdasdfjl'>
								<option value="" selected="selected">Выберите марку машины</option>
								<?php foreach ($companies as $row) { ?>
									<option value="<?php echo $row->name?>"><?php echo $row->name?></option>
								<?php }?>
						</select>&nbsp;
						C: <select name='car-year-from' style='width:125px;' id='js_hgjki234s'>
							<option value>Любой</option>
						 </select>&nbsp;
						До: <select name='car-year-until' style='width:125px;' id='js_hgjki234g'>
							<option value>Любой</option>
						</select>
						
						
					
					</div>
				</div>

				<div class='clearfix'></div>
				<div class='line'>
					<div class='title'>
						Модель машины
					</div>
					<div class='cont'>
						<select class="s_c-select" style='width : 100%;' name='car-model' id='js_ujoqwermasfyq'>
								<option value="" selected="selected">Выберите модель машины</option>
						</select>
					</div>
				</div>
				<div class='clearfix'></div>
				<div class='line'>
					<div class='title'>
						Город
					</div>
					<div class='cont'>
								<select name="city" style='width : 100%;' class="s_c-select">
<option value ="">Любой город</option><option value ="Алматы">Алматы</option><option value="Астана">Астана</option><option value="Актау">Актау</option><option value="Актобе">Актобе</option><option value="Атырау">Атырау</option><option value="Жезказган">Жезказган</option><option value="Уральск">Уральск</option><option value="Караганда">Караганда</option><option value="Костанай">Костанай</option><option value="Павлодар">Павлодар</option><option value="Петропавловск">Петропавловск</option><option value="Рудный">Рудный</option><option value="Семипалатинск">Семипалатинск</option><option value="Тараз">Тараз</option><option value="Темиртау">Темиртау</option><option value="Талдыкорган">Талдыкорган</option><option value="Экибастуз">Экибастуз</option><option value="Шымкент">Шымкент</option><option value="Усть-Каменогорск">Усть-Каменогорск</option><option value="Кызылорда">Кызылорда</option>							
</select>
						
					</div>
				</div>
			</div>
		</div>
		<div class='query_area-p'>
			<div class='q_a-main pointer' style='height : 200px;'>
				

				<div class='line'>
					<div class='title'>
						Наименование
					</div>
					<div class='cont'>
						
			<input type="text" style='width:100%;' onclick="$('.typeahead').typeahead();" placeholder="Начните вводить! Например: Колодка" class="span3" style="margin: 0 auto; width : 300px;" data-provide="typeahead" data-items="7" data-source="[&quot;Аккумулятор &quot;,&quot;Амортизатор &quot;,&quot;Антенна &quot;,&quot;Бак топливный &quot;,&quot;Балка&quot;,&quot;Балка задней подвески &quot;,&quot;Барабан тормозной&quot;,&quot;Бачок омывателя &quot;,&quot;Бачок распределительный &quot;,&quot;Бачок расширительный &quot;,&quot;Бачок тормозной &quot;,&quot;Блок АБС &quot;,&quot;Блок управления кондиционера &quot;,&quot;Блок управления отопителем&quot;,&quot;Блок цилиндров&quot;,&quot;Блок шестерен &quot;,&quot;Болт&quot;,&quot;Болт колесный для литых дисков&quot;,&quot;Болт колесный для штампованных дисков&quot;,&quot;Болт крепления ступицы &quot;,&quot;Болт крепления торм. диска&quot;,&quot;Болт масляной магистрали &quot;,&quot;Болт маховика &quot;,&quot;Буфер&quot;,&quot;Буфер вала&quot;,&quot;Буфер возд фильтра&quot;,&quot;Буфер генератора&quot;,&quot;Вал вторичный КПП &quot;,&quot;Вентилятор &quot;,&quot;Вилка сцепления&quot;,&quot;Вкладыш коренной &quot;,&quot;Вкладыш упорный коренной&quot;,&quot;Вкладыш шатунный&quot;,&quot;Воздуховод &quot;,&quot;Воздухозаборник&quot;,&quot;Втулка вилки сцепления&quot;,&quot;Генератор &quot;,&quot;Гидрокомпенсатор &quot;,&quot;Гидроцилиндр рулевой рейки &quot;,&quot;Глушитель &quot;,&quot;Датчик &quot;,&quot;Датчик АБС &quot;,&quot;Датчик давления воздуха&quot;,&quot;Датчик давления масла &quot;,&quot;Датчик детонации &quot;,&quot;Датчик дождя &quot;,&quot;Датчик заднего хода&quot;,&quot;Датчик корректора фар&quot;,&quot;Датчик положения др заслонки &quot;,&quot;Датчик положения р/вала &quot;,&quot;Датчик положения фар &quot;,&quot;Датчик скорости &quot;,&quot;Датчик температуры &quot;,&quot;Датчик уровня масла&quot;,&quot;Датчик уровня топл. &quot;,&quot;Двигатель &quot;,&quot;Дефлектор&quot;,&quot;Джойстик &quot;,&quot;Диск колесный литой &quot;,&quot;Диск сцепления &quot;,&quot;Диск тормозной &quot;,&quot;Диффузор вентилятора &quot;,&quot;Дренаж коробки &quot;,&quot;Дроссельная заслонка&quot;,&quot;Жгут проводов&quot;,&quot;Заглушка&quot;,&quot;Иммобилайзер &quot;,&quot;Катализатор &quot;,&quot;Катушка зажигания&quot;,&quot;Клапан  выпускной &quot;,&quot;Клапан вакуумного усилителля&quot;,&quot;Клапан кондиционера &quot;,&quot;Клапан с прокладками &quot;,&quot;Клапан электромагнитный&quot;,&quot;Коллектор впускной &quot;,&quot;Колодки тормозные &quot;,&quot;Колпак клапана колеса&quot;,&quot;Колпак на литой диск&quot;,&quot;Кольца поршневые &quot;,&quot;Кольцо стопорное&quot;,&quot;Кольцо уплотн форсунки &quot;,&quot;Кольцо уплотнительное&quot;,&quot;Кольцо форсунки&quot;,&quot;Комплект прокладок двигателя &quot;,&quot;Комплект сцепления &quot;,&quot;Компрессор кондиционера &quot;,&quot;Компьютер АКПП &quot;,&quot;Компьютер двигателя &quot;,&quot;Корзина сцепления &quot;,&quot;Коробка передач  автомат&quot;,&quot;Кронштейн &quot;,&quot;Крышка бензобака&quot;,&quot;Кулиса КПП &quot;,&quot;Лампа&quot;,&quot;Лямбда-зонд &quot;,&quot;Маховик &quot;,&quot;Модуль управления&quot;,&quot;Мотор заслонки &quot;,&quot;Наконечник рулевой &quot;,&quot;Наконечник рулевой тяги &quot;,&quot;Наконечники свечей&quot;,&quot;Направляющая втулка&quot;,&quot;Насос бачка омывателя &quot;,&quot;Насос ГУР &quot;,&quot;Насос системы охлаждения &quot;,&quot;Насос топливный &quot;,&quot;Натяжитель цепи &quot;,&quot;Опора&quot;,&quot;Опора амортизатора&quot;,&quot;Опора шаровая &quot;,&quot;Ось&quot;,&quot;Отбойник&quot;,&quot;Поворотник &quot;,&quot;Повторитель поворота &quot;,&quot;Подвеска глушителя &quot;,&quot;Поддон картера &quot;,&quot;Подрулевой переключатель &quot;,&quot;Подушка безопасности &quot;,&quot;Подушка двигателя&quot;,&quot;Подшипник&quot;,&quot;Подшипник выжимной&quot;,&quot;Подшипник колесный&quot;,&quot;Подшипник опоры&quot;,&quot;Подшипник ступицы &quot;,&quot;Полукольцо&quot;,&quot;Полукольцо упорное &quot;,&quot;Поршень &quot;,&quot;Привод колеса &quot;,&quot;Пробка&quot;,&quot;Прокладка&quot;,&quot;Пружина&quot;,&quot;Пыльник&quot;,&quot;Пыльник привода&quot;,&quot;Пыльник рулевой рейки &quot;,&quot;Пыльник рулевой тяги &quot;,&quot;Пыльник стойки&quot;,&quot;Пыльник шаровой опоры&quot;,&quot;Пыльник шруса&quot;,&quot;Радиатор &quot;,&quot;Радиатор ГУР &quot;,&quot;Радиатор кондиционера &quot;,&quot;Распредвал &quot;,&quot;Распылитель форсунки &quot;,&quot;Резистор&quot;,&quot;Резонатор &quot;,&quot;Рейка рулевая &quot;,&quot;Реле&quot;,&quot;Реле вентилятора СОД&quot;,&quot;Ремень &quot;,&quot;Ремкомплект КПП&quot;,&quot;Ремкомплект печки &quot;,&quot;Ремкомплект суппорта &quot;,&quot;Реостат печки&quot;,&quot;Ресивер &quot;,&quot;Рессора &quot;,&quot;Ролик ГРМ  натяжной&quot;,&quot;Ротор генератора&quot;,&quot;Руль &quot;,&quot;Рычаг &quot;,&quot;Рычаг дворника &quot;,&quot;Рычаг задний 206 левый&quot;,&quot;Сайлент-блок&quot;,&quot;Сальник&quot;,&quot;Сальник клапана (к-т)&quot;,&quot;Сальник коленвала &quot;,&quot;Сальник оси&quot;,&quot;Свеча&quot;,&quot;Свеча накала &quot;,&quot;Сигнал звуковой &quot;,&quot;Скоба&quot;,&quot;Соленоид &quot;,&quot;Стабилизатор &quot;,&quot;Стекло &quot;,&quot;Стекло лобовое&quot;,&quot;Стекло фары &quot;,&quot;Стекло фонаря &quot;,&quot;Стопор&quot;,&quot;Стопорное кольцо&quot;,&quot;Ступица &quot;,&quot;Суппорт &quot;,&quot;Сухарь&quot;,&quot;Сухарь клапана&quot;,&quot;Термостат &quot;,&quot;Топливопровод &quot;,&quot;Торсион &quot;,&quot;Трос газа &quot;,&quot;Трос КПП&quot;,&quot;Трос ручного тормоза&quot;,&quot;Трос спидометра &quot;,&quot;Трос сцепления &quot;,&quot;Трубка&quot;,&quot;Турбина &quot;,&quot;Тяга КПП&quot;,&quot;Тяга рулевая &quot;,&quot;Тяга стабилизатора &quot;,&quot;Уплотнитель&quot;,&quot;Упор пружины&quot;,&quot;Фара &quot;,&quot;Фиксатор&quot;,&quot;Фильтр &quot;,&quot;Фильтр воздушный &quot;,&quot;Фильтр ГУР &quot;,&quot;Фильтр кондиционера &quot;,&quot;Фильтр масляный&quot;,&quot;Фильтр топливный &quot;,&quot;Фонарь &quot;,&quot;Форсунка омывателя&quot;,&quot;Фрикцион&quot;,&quot;Хомут&quot;,&quot;Цапфа &quot;,&quot;Цепь ГРМ &quot;,&quot;Цилиндр сцепления &quot;,&quot;Цилиндр тормозной&quot;,&quot;Чашка &quot;,&quot;Чашка пружины &quot;,&quot;Чашка упорная &quot;,&quot;Шайба &quot;,&quot;Шайба регулировочная&quot;,&quot;Шайба толкателя клапана &quot;,&quot;Шайба упорная&quot;,&quot;Шатун комплект &quot;,&quot;Шестерня&quot;,&quot;Шкив&quot;,&quot;Шкив ГУРа&quot;,&quot;Шкив коленвала &quot;,&quot;Шкив распредвала &quot;,&quot;Шланг омывателя &quot;,&quot;Шланг топливный&quot;,&quot;Шланг тормозной&quot;,&quot;Шпилька&quot;,&quot;Шплинт&quot;,&quot;Штифт&quot;,&quot;Шуруп&quot;,&quot;Щетка стеклоочистителя &quot;,&quot;Щиток приборов &quot;,&quot;Щуп масляный &quot;,&quot;Электороклапан&quot;,&quot;Электромагнитный клапан&quot;]">
						
						
					</div>
				</div>
				<div class='clearfix'></div>
				<div class='line'>
					<div class='title'>
						Категория запчасти
					</div>
					<div class='cont'>
						<select name='part_cat' style='width:100%;'>
								<option value="">Любая</option>
								<option>Двигатель / Трансмиссия</option>
								<option>Ходовая / Шины / Диски</option>
								<option>Кузов / Салон / Оптика / Cтекла</option>
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
					<div class='cont'>
						<input type='checkbox' name='part_type1' value='1' id='l1'><label for='l1'> Оригинал</label>&nbsp;
						<input type='checkbox' name='part_type2' value='1' id='l2'><label for='l2'> Дубликат</label>&nbsp;
						<input type='checkbox' name='part_type3' value='1' id='l3'><label for='l3'> Б/У</label>
					</div>
				</div>

				<div class='clearfix'></div>
		
			</div>
		</div>
		<!--Place for additional parts of car-->
		<div id='query_area-p-pre'></div>
		<div class='query_control'>
			<input type='submit' class='right button-control b-c-blue' value='Искать...'>
		</div>
	</form>
</div>


<script type='text/javascript'>
	for(var i = 1989; i < 2012; i++)
		$('#js_hgjki234s').append('<option value='+i+'>'+i+'</option>')		
	$('#js_hgjki234s').on('change', function(){
		if($('#js_hgjki234s').val() == "")
			$('#js_hgjki234g').html('<option value>Любой</option>')
		else{
			var res = ""
			for(var i = parseInt($('#js_hgjki234s').val())+1; i <= 2012; i++)
			{
				res += '<option value=' +i+ '>' +i+ '</option>'
				$('#js_hgjki234g').html(res)
			}
		}
			
	});
</script>

<script type='text/javascript'>
var jkaslfasdfasf = (function()
{
	$('.typeahead').typeahead()
	
	
	$('#js_asfdasdfjl').on('change',function()
	{
		var $valueOfMark = 'company=' + $(this).val()
		$.ajax({
			url : 'http://gaika.kz/index.php/main/get_models',
			type : 'POST',
			data : $valueOfMark,
			success : function(res)
			{
				//now add not import choosing the param
				res += '<option value selected>Любое</option>'
				$('#js_ujoqwermasfyq').removeAttr('disabled')
				$('#js_ujoqwermasfyq').html(res)
			},
			error : function()
			{
				alert('ERrorr')
			},
			beforeSend : function()
			{
				$('#js_ujoqwermasfyq').attr('disabled','true')
			}
		})
	});
}());

</script>