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
	</div>
<?php
	}
?>