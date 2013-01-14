<div class="page">
	<div class="row pad-tb shadow">

		<!--header of products-->
		<div class="twelve columns adv-line font-gray-bold  align-center adv-list-bordered">
			<div class="one column align-initial">
				#
			</div>
			<div class="four columns align-initial">
				Название запчасти
			</div>
			<div class="two columns">
				Цена запчасти
			</div>
			<div class="five columns">
				Ваш комментарий
			</div>
		</div>
		<!--end of header-->

		<!--content of products-->
		<?php
			$NUMBER_ROW = 0;
			foreach ($answers as $row){ 
				$NUMBER_ROW++;
		?>
			<div class="twelve columns adv-line hr-dashed">
				<div class="one column">
					<?php
						echo $NUMBER_ROW;
					?>
				</div>
				<div class="four columns">
					<span class="bold">
						<?php
							echo $queries[$row->id]->part;
						?>
					</span>
					<span class="breadcum line-before">
						На
						<?php
							echo $cars[$row->id];
						?>
					</span>
					<span class="breadcum">
						В городе
						<?php
							echo $queries[$row->id]->city;
						?>
					</span>
				</div>
				<div class="two columns align-center">
					<?php
						echo $row->price;
					?>
					тенге
				</div>
				<div class="five columns align-center">
					<span class="breadcum">
						<?php
							echo $row->comment;
						?>
					</span>
				</div>
			</div>
		<?php
			}
		?>
		<!--end of content-->

		<div class="twelve columns line-before pad-top">
			<div class="four columns right align-right">
				<span class="breadcum">
					<i class="icon-plus pad-right"></i>
					Всего вы ответили на
					<?php
						echo $NUMBER_ROW." ";
						if($NUMBER_ROW == 1)
							echo "запрос";
						else if($NUMBER_ROW == 2 || $NUMBER_ROW == 3 || $NUMBER_ROW == 4)
							echo "запроса";
						else 
							echo "запросов";
					?>
				</span>

			</div>
		</div>

	</div>
</div>

<div class="hide">
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

</div>