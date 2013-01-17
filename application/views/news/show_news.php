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

<div class="twelve columns line-before pad-top">
	<ul class="about_list pad-left-big">
		<li class="active" data-target="1">
			<a>1</a>
		</li>
		<li data-target="2">
			<a>2</a>
		</li>
		<li data-target="3">
			<a>3</a>
		</li>
		<li data-target="3">
			<a>......</a>
		</li>
		<li data-target="3">
			<a>Вперед  →</a>
		</li>
	</ul>
</div>