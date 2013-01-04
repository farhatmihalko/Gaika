<?php echo form_open('main/add_advert'); ?>

<form action="<?php echo base_url();?>index.php/functions/upload" method="post" target="hiddenframe"  enctype="multipart/form-data" onsubmit="hideBtn();">
<input type="file" id="userfile" name="userfile" />
<input type="submit" name="upload" id="upload" value="Загрузить" class='btn sharp'/>
</form>

<input type = "text" name="title" />

<textarea name="text"></textarea>

<select name="category">
	<?php foreach($categories as $row) 
		echo '<option value="'.$row->name.'">'.$row->name.'</option>'?>
</select>

<input type="submit"  value="create"/>

</form>



<iframe id="hiddenframe" name="hiddenframe" style="width:0px; height:0px; border:0px"></iframe>

    <script type="text/javascript">   
        function hideBtn(){
            $('#upload').hide();
            $('#res').html("Идет загрузка файла");
        }
        function handleResponse(mes) {
            $('#upload').show();
            if (mes.errors != null) {
                $('#res').html("Возникли ошибки во время загрузки файла: " + mes.errors);
            }   
            else {
                $('#res').html("Файл " + mes.name + " загружен");   
		document.location.reload()
		alert("Файл загружен!")
            }   
        }

  </script>
