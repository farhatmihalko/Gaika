<div class="row pad-bottom">

	<!--header of products-->
	<div class="twelve columns adv-line font-gray-bold  align-center adv-list-bordered">
		<div class="five columns">
			Название запчасти
		</div>
		<div class="two columns">
			Цена запчасти
		</div>
		<div class="five columns">
			Комментарий компании
		</div>
	</div>
	<!--end of header-->

	<?php
		$C_COUNTER = 0;
	?>
	<!--parts-->
	<?php
		foreach ($answers as $row){
			$C_COUNTER++;
	?>
	<div class="twelve columns adv-line hr-dashed">
		<div class="five columns align-center">
			<?php echo $queries[$row->query_id]->part; ?>
			<span class="breadcum">
				<?php echo $row->answer_date; ?>
			</span>
		</div>
		<div class="two columns align-center">
			<?php echo $row->price;?> тенге
		</div>
		<div class="five columns align-center">
			<?php echo $row->comment; ?>
		</div>
	</div>
	<?php
		}
	?>
	<!--end of parts-->
	<div class="clearfix"></div>

	<div class="twelve columns line-before-big">
		<div class="three columns right">
			<span class="breadcum">
				<i class="icon-cog"></i>
				<?php
					echo "Всего предложено ".$C_COUNTER." запчасти";
				?>
			</span>
		</div>
	</div>

</div>


</div>