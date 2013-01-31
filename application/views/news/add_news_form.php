<div class="page">
	<div class="row shadow pad-tb">
		<div class="twelve columns">
			<?php 
				echo validation_errors();
			?>
			<?php 
				echo form_open_multipart('news/add_news');
			?>
			<!--form-->
			<?php
				require_once('_add_news_display.php');
			?>
			<!--end-->
			</form>
		</div>
	</div>
</div>