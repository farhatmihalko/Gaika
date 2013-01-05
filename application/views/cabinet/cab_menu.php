<div class="hide">
	<div class='row' id='js_block-query12311'>
		<div class="block">
			<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					<h2 style='margin-top:0px;'>Ваши заявки</h2>
					<ul>
						<!--
						<li class="nobg"><a href="#"><i class="icon-wrench"></i>Посмотреть запросы</a></li>
						<li><a href="#"><i class="icon-share-alt"></i>Добавить новый запрос</a></li>
						-->
					</ul>
			</div>		<!-- .block_head ends -->
			
			<div class="block_content">
				<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
							<thead>
								<tr>
									<th class="thheader" style="cursor: pointer; ">#</th>
									<th class='thheader' style="cursor: pointer; ">VIN-КОД</th>
									<th class="thheader" style="cursor: pointer; ">Название</th>
									<th class="thheader" style="cursor: pointer; ">Дата подачи</th>
									<th class="thheader" style="cursor: pointer; ">Отзывы</th>
									<th>Действия</th>
								</tr>
							</thead>
							<tbody>

								<?php
								 $counter = 1;
								 foreach($info as $key=>$value){ ?>
								<tr class="even">
									<td><a href="#"><?php echo $counter++; ?></a></td>
									<td><a href='#'><?php echo $key;?></a></td>
									<td><a href='#'><?php echo $value['car'].', '.$value['year'].' год';?></a></td>
									<td><a href="#"><?php 
											foreach ($value['parts'] as $row) {
												echo $row.' ';
											}
										?></a></td>
									<td><a href="#"><?php echo count($value['sellers']);?></a></td>
									<td class="delete"><a href="#" data-id="<?php echo $key;?>" >Удалить</a></td>
								</tr>
								<tr class='t_query-main'>
									<td colspan='7' style='background:white;'>
										<div class='t_query-content'>
											<div class='t_q-c-header'>
												<div class='name' style='width : 25%;'>
													Название компании
												</div>
												<div class='comment' style='width : 35%;'>
													Общая цена на запчасти
												</div>
												<div class='actions' style='width : 35%;'>
													Действия
													<?php echo $this->session->userdata('delete_approve');?>
												</div>

											</div>
											<div class='clearfix'></div>
											<?php 
											if (count($value['sellers'])==0){ ?>
											<div class='t_q-c-line t_q-c-l-first' style="line-height:80px;">

												<div class='t_q-c-l-i' style='width : 25%;'>
													Пусто
												</div>
												<div class='t_q-c-l-s' style='width : 35%;'>
													 Пусто
												</div>
												<div class='t_q-c-l-a' style='width : 35%;'>
													Пусто
												</div>
											</div>	
											<?php }
											foreach($value['sellers'] as $row) {?>
											<div class='t_q-c-line t_q-c-l-first'>
												<div class='t_q-c-l-i' style='width : 25%;'>
													<img style="width:40px;height:60px;" src="<?php echo base_url();?>imgs/<?php echo $row->img;?>">
													<br>
													<?php echo $row->seller_name;?>
												</div>
												<div class='t_q-c-l-s' style='width : 35%;'>
													<p class='t_q-c-s-tenge'><?php echo $row->parts_val.' запчастей за '.$row->overall;?> <span>тенге</span></p>
												</div>
												<div class='t_q-c-l-a' style='width : 35%;'>
													<div class='buttons'>
														<a href='<?php echo base_url();?>index.php/main/view_seller_answers/<?php echo $key."/".$row->seller_id;?>' onclick='var href = this.getAttribute("href"); document.location.replace(href);'class='btn'><i class='icon-hand-right'></i> Подробнее</a>
													</div>
												</div>
											</div>
											<?php }
										}?>
									</tr>
							</tbody>
				</table>
											
						
						
						
						
						
											
			</div>		
				
				<div class="bendl"></div>
				<div class="bendr"></div>
		</div>
	</div>
</div>