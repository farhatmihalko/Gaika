<div class="row">
	<div class="twelve columns">

		<div class="four columns">
			
		</div>
	
	</div>
</div>



<div class='row'>
	<hr>
			<table style='width : 100%;'>
				<tbody style='width : 90%;  text-align : center;margin:0 auto; font-size : 13px;'>
					<tr class='t_query-main'>
									<td colspan='7' style='background:white;'>
										<div class='t_query-content'>
											<div class='t_q-c-header'>
												<div class='name'>
													Название запчасти
												</div>
												<div class='salary'>
													Цена запчасти
												</div>
												<div class='comment'>
													Комментарий к товару
												</div>
												<div class='action'>
													Дата
												</div>

											</div>
											<div class='clearfix'></div>
											<?php 
											$counter=1;
											foreach ($answers as $row) { ?>


											<div class='t_q-c-line <?php if ($counter++==1) echo 't_q-c-l-first';?>'>
												<div class='t_q-c-l-i'>
													<div class='marginTop20'>
														<a href='#' class='btn'><i class='icon-bookmark-empty'></i> <?php echo $queries[$row->query_id]->part; ?></a>
													</div>
												</div>
												<div class='t_q-c-l-s'>
													<p class='t_q-c-s-tenge'><?php echo $row->price;?><span>тенге</span></p>
												</div>
												<div class='t_q-c-l-c'>
													<p>
													<?php echo $row->comment; ?>
													</p>
												</div>
												<div class='t_q-c-l-a'>
													<p>
													<?php echo $row->answer_date; ?>
													</p>
												</div>
												
											</div>
											<?php } ?>
										
											
										</div>
									</td>
								</tr>
				</tbody>
			</table>
	</div>
	