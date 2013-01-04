
<?php echo form_open('main/adverts')?>
<select>
	<?php foreach($categories as $row) 
		echo '<option value="'.$row->name.'">'.$row->name.'</option>'?>
</select>

<input type="submit" />
</form>

<?php foreach($adverts as $row) 
	echo '<p>'.$row->title.' ';
	?>
