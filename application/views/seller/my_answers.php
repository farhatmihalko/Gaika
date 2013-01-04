<div class='row'>
	<div class='row whiteSmoke'>
	Тут находится вся история ваших ответов!
	</div>
	<br><br><br>
		<div class="block">
			<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					<h2 style='margin-top:0px;'>Ваши ответы</h2>
			</div>		<!-- .block_head ends -->
			
			<div class="block_content">
				<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
							<thead>
								<tr>
		
									<th class="thheader" style="cursor: pointer; ">#</th>
									<th class="thheader" style="cursor: pointer; ">Машина</th>
									<th class="thheader" style="cursor: pointer; ">Запчасть</th>
									<th class='thheader' style="cursor: pointer; ">Цена</th>
									<th class="thheader" style="cursor: pointer; ">Город</th>
									<th>Ваш комментарий</th>
								</tr>
							</thead>
							<tbody>
								<?php $counter=1;
								foreach ($answers as $row) { 
									?>
								<tr class="even">
									<td><a href="#"><?php echo $counter++; ?></a></td>
									<td><a href='#'><?php echo $cars[$row->id];?></a></td>
									<td><a href='#'><?php echo $queries[$row->id]->part.'('.$queries[$row->id]->category.')';?></a></td>
									<td><a href='#'><?php echo $row->price.' тенге';?></a></td>
									<td><a href="#"><?php echo $queries[$row->id]->city;?></a></td>
									<td><a href="#"><?php echo $row->comment;?></a></td>
								</tr>
								
								<?php }?>
							</tbody>
				</table>
				
			</div>		
				
				<div class="bendl"></div>
				<div class="bendr"></div>
		</div>
	</div>

	<script type='text/javascript'>
	var jaksdfiqure = (function()
	{
		$('#adsfkuiuoijnmn').live('submit',function()
		{
			var $queryData = $(this).serialize()
			console.log($queryData)
			$.ajax({
				url : 'http://gaika.kz/index.php/main/add_answer',
				type : 'POST',
				data : $queryData,
				success : function(res)
				{
					if(res == 0)
					{
						document.location.replace('http://gaika.kz/index.php/main/find_queries')
					}
					else
						alert('eror')
				},
				error : function()
				{
					alert('Some error with data in server!')
				}
			})
			return false
		});

	}());
	</script>