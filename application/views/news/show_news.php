<?php
	foreach($news as $row){
?>
	<div class="twelve columns line-after hr-dashed pad-tb">
		<div class="row">

			<div class="twelve columns">
				<h3>
					<a class="pointer article-title">
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
				<div class="align-left">
					<a class="pointer readmore">Подробнее →</a>
				</div>
			</div>

			<div class="five columns">
				
				<div class="breadcum right">
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
					
				<div class="right line-before">
					<a class="breadcum pointer inline badge">
						<i class="icon-tag pad-right"></i>Новости
					</a>
					<a class="breadcum pointer inline a_type badge">
						<i class="icon-cog pad-right"></i>Запчасти
					</a>
				</div>	
				
			</div>

			
		</div>

	</div>
<?php
	}
?>

<div class="twelve columns line-before pad-top align-center">
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
			<a>Далее →</a>
		</li>
	</ul>
</div>