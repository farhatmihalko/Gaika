<?php
	foreach($news as $row){
?>
	<div class="twelve columns line-after hr-dashed pad-tb">
		<h3>
			<a class="pointer">
				<?php
					//new header
					echo $row->title;
				?>
			</a>
		</h3>
		<p>
			<?php
				//new content
				echo $row->content;
			?>
		</p>
		<span class="breadcum right inline">
			<span class="pad-right">
				Город : 
				<?php
					echo $row->city;
				?>
			</span>
			<span>
				Добавлено : 
				<?php
					echo $row->adding_date;
				?>
			</span>
		</span>
	</div>
<?php
	}
?>