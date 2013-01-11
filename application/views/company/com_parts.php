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

	<!--parts-->
	<?php
		foreach ($answers as $row){
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

</div>


</div>