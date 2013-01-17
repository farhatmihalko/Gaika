<?php
	foreach($news as $row){
?>
	<div class="twelve columns line-after hr-dashed pad-tb">
		<div class="row">

			<div class="twelve columns">
				<h3>
					<a class="pointer font-color-b-180">
						<?php
							//new header
							echo $row->title;
						?>
					</a>
				</h3>
			</div>

			<div class="twelve columns">
				<p class="font-size-1em">
					<?php
						//new content
						echo $row->content;
					?>
				</p>
			</div>

		</div>

		<div class="row pad-top">

			<div class="four columns">
				<a class="breadcum pointer inline a_type color-b-254">
					Новости
				</a>
				<a class="breadcum pointer inline a_type color-b-l">
					Запчасти
				</a>
				<a class="breadcum pointer inline a_type color-b-254">
					DIV*
				</a>
			</div>

			<div class="seven columns">
				<div class="right breadcum inline a_type">
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
				</div>
			</div>
		</div>

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
			<a>20</a>
		</li>
		<li data-target="3">
			<a>Вперед  →</a>
		</li>
	</ul>
</div>