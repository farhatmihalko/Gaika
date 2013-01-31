<div class="page">
	<div class="row shadow pad-tb">
		<div class="twelve columns pad-bottom">
			<?php echo validation_errors();?>
			<?php echo form_open_multipart('news/add_news');?>
				<input type="text" name="title" maxlength="250" placeholder="title"/><br/>
				<input type="file" name="news_file"/>
				<textarea name="short_content" type="text" cols="30" rows="10">
					short content
				</textarea><br/>
				<textarea name="content" type="text" cols="50" rows="10">
					content
				</textarea><br/>
				<?php foreach ($categories as $obj) {
					echo "<input type='checkbox' name='categories[]' value='".$obj->name."'>".$obj->name."</option>";
				}?>
				<select name="city">
					<?php foreach ($cities as $obj) { 
			            echo '<option value="'.$obj->name.'">'.$obj->name.'</option>';
			        }?>
				</select>
				<input type="submit" value="Добавить новость!"/>
			</form>
		</div>
	</div>
</div>

<div class="page">
	<div class="row shadow pad-tb">
		<div class="twelve columns">
			<?php 
				echo validation_errors();
			?>
			<?php 
				echo form_open_multipart('news/add_news');
			?>
			
			</form>
		</div>
	</div>
</div>