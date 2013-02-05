			<?php 
				echo validation_errors();
			?>
			<?php 
				echo form_open_multipart('news/upload_image');
			?>
			<input type="file" name="news_file"/><br/>
			<input type="submit" value="Загрузить"/>
			<!--form-->
			<!--end-->
			</form>