<body>
	<p>Всего пользователей - <?php echo count($users)+count($sellers);?>
	<p>Из них покупателей - <?php echo count($users);?>
	<p>Продавцов<?php echo count($sellers);?>
	<h1> Покупатели </h1>
	<table>
		<thead>
			<th>e-mail</th>
			<th>Имя</th>
			<th>Телефон</th>
			<th>Город</th>
		</thead>
		<tbody>
			<?php foreach ($users as $obj) {
				echo '<tr>';
				echo '<td>'.$obj->mail.'</td>';
				echo '<td>'.$obj->name.'</td>';
				echo '<td>'.$obj->phone.'</td>';
				echo '<td>'.$obj->city.'</td>';
				echo '</tr>';
			}?>
		</tbody>
	</table>

	<h1> Продавцы </h1>
	<table border="1" cellspacing="2" width="800px">
		<thead>
			<th>Логин</th>
			<th>Название компании</th>
			<th>Количество денег на счету</th>
			<th>Номер телефона</th>
			<th>Адрес</th>
			<th>Город</th>
			<th>Пополнение баланса</th>
		</thead>
		<tbody>
			<?php foreach ($sellers as $obj) {
				echo '<tr>';
				echo '<td>'.$obj->login.'</td>';
				echo '<td>'.$obj->company_name.'</td>';
				echo '<td>'.$obj->money.'</td>';
				echo '<td>'.$obj->phone1.'</td>';
				echo '<td>'.$obj->adress.'</td>';
				echo '<td>'.$obj->city.'</td>';
				echo '<td>';
				echo  form_open('admin/add_money').'
						<input name="seller" type="text" value='.$obj->id.' hidden/>
						<input name="amount" type="number"/>
						<input type="submit" value="Пополнить"/>
						</form>';
				echo '</td></tr>';
			}?>
		</tbody>
	</table>
</body>
</html>