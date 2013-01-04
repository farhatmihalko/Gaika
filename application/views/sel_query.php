	

<div class='row' id='js_block-query12311'>
		
	<br><br><br>
		<div class="block">
			<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					<h2 style='margin-top:0px;'>Результаты поиска</h2>
			</div>		<!-- .block_head ends -->
			
			<div class="block_content">
				<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
							<thead>
								<tr>
		
									<th class="thheader" style="cursor: pointer; ">#</th>
									<th class='thheader' style="cursor: pointer; ">VIN-КОД</th>
									<th class="thheader" style="cursor: pointer; ">Машина</th>
									<th class="thheader" style="cursor: pointer; ">Количество запчастей</th>
									<th class="thheader" style="cursor: pointer; ">Город</th>
									<th>Действия</th>
								</tr>
							</thead>
							<tbody>
								<?php $counter_big=1;
									$bool=FALSE;
								 
								foreach ($res as $key=>$value) { 
									$bool=TRUE;?>
								<tr class="even">
									<td><a href="#"><?php echo $counter_big++; ?></a></td>
									<td><a href='#'><?php echo $key;?></a></td>
									<td><a href='#'><?php echo $cars[$info[$key]->car_id].', '.$info[$key]->year.' года';?></a></td>
									<td><a href='#'><?php echo count($value);?></a></td>
									<td><a href="#"><?php echo $info[$key]->city;?></a></td>
									<td class="delete"><a href="#">Посмотреть</a></td>
								</tr>
								<tr class='t_query-main'>
									<td colspan='7' style='background:white;'>
										<div class='t_query-content'>
											<div class='t_q-c-header'>
												<div class='name'>
													Название запчасти
												</div>
												<div class='salary'>
													Цена
												</div>
												<div class='comment'>
													Комментарий
												</div>
												<div class='actions'>
													Действия
												</div>

											</div>
											<div class='clearfix'></div>
											<form method="post" id='adsfkuiuoijnmn'>
											<?php $counter=0;
											foreach ($value as $obj) {

											 ?>
											<div class='t_q-c-line t_q-c-l-first'>
												
												<div class='t_q-c-l-i'>
													<div class='marginTop20'>
														<a href='#' ><?php echo $obj->part;
														if ($obj->place1 == 1)
															echo 'Левый ';
														elseif($obj->place1 ==2 )
															echo 'Центральный ';
														elseif ($obj->place1 == 3)
															echo 'Правый ';
														if ($obj->place2 == 1)
															echo 'Задний ';
														elseif($obj->place2 ==2 )
															echo 'Передний ';
														elseif ($obj->place2 == 3)
															echo 'Центральный ';
														if ($obj->place3 == 1)
															echo 'Верхний ';
														elseif($obj->place3 ==2 )
															echo 'Центральный ';
														elseif ($obj->place3 == 3)
															echo 'Нижний ';
														echo '(';
														if ($obj->type1 == 1)
															echo 'Оригинал ';
														if($obj->type2 ==1)
															echo 'Дубликат ';
														if($obj->type3 ==1)
															echo 'Б/У';
														echo ')<br/>'; 
														
														?></a>
													</div>
													<input type="text" name="query_id[<?php echo $counter;?>]" value="<?php echo $obj->id;?>" style="display:none;" />
												</div>
												<div class='t_q-c-l-s'>
													<p class='t_q-c-s-tenge'> <input type="number" min="1"  name="price[<?php echo $counter;?>]" class='s_goodInput width-60 fontSize-1f2p'/><span>тенге</span></p>
												</div>
												<div class='t_q-c-l-c'>
													<p>
													<style type='text/css'>
														.asdfjalsdfasfdoiu
														{
															width : 80%;
															height : 80px;
														}
													</style>
													<textarea name="comment[<?php echo $counter;?>]" class='asdfjalsdfasfdoiu s_goodTextArea width-80' ></textarea>
													</p>
												</div>
												<div class='t_q-c-l-a'>
													<?php if ($counter+1==count($value)){ ?>
													<div class='buttons'>
														
														<input type="submit" class='btn' value='Готово!' id='js_uiponasdfnmb'>
														
													</div>
													<?php }?>
												</div>
												<?php $counter++; }?>
												
												</form>

											</div>
											
								
									</tr>
								<?php ;}
								if (!$bool){?>
								<tr class="even">
									<td><a href="#">На</a></td>
									<td><a href='#'>ваш</a></td>
									<td><a href='#'>запрос</a></td>
									<td><a href='#'>нет</a></td>
									<td><a href="#">подходящих</a></td>
									<td><a href="#">машин</a></td>
								</tr>
								<?php }
							?>
							</tbody>
				</table>
				<?php echo $pagination;?>
												
			</div>		
				
				<div class="bendl"></div>
				<div class="bendr"></div>
		</div>
	</div>

	<script type='text/javascript'>
	var jaksdfiqure = (function()
	{
		$('body').find('#adsfkuiuoijnmn').each(function(){
			var $form = $(this)
			var submitButton = $(this).find('input[type="submit"]').live('click', function(){
				var $queryData = $form.serialize()
				$.ajax({
					url : 'http://gaika.kz/index.php/main/add_answer',
					type : 'POST',
					data : $queryData,
					success : function(res)
					{
						if(res == 0)
						{
							$form.parent().parent().parent().prev().remove()
							$form.parent().parent().parent().remove()
							//document.location.replace('http://gaika.kz/index.php/main/find_queries')
							alert('Запрос прошел успешно!')
						}
						else
							if (res== 1)
								alert('У вас недостаточно денег на счете. Пополните баланс')
						else
							alert('произошла ошибка, попробуйте еще раз')
							
					},
					error : function()
					{
						alert('Some error with data in server!')
						document.location.replace('http://gaika.kz/index.php/main/find_queries')
					}
				})
				return false
			})
		})
	}());
	</script>