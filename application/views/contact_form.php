<div class="page">
	<!--content place-->
	<div class="row shadow pad-tb">
		<form action="" method="POST">
			<div class="six columns end">
				<?php if ($this->session->userdata('contact_sended')){
						echo 'Ваше сообщение отправлено. В ближайшее время мы с вами свяжемся.';
				} $this->session->unset_userdata('contact_sended');?>
				<label for="contact-form-email" class="list-name"><strong>Введите ваш почтовый ящик </strong> (required)</label>
				<input type="email" name="mail" id="contact-form-email" required>
				<label for="contact-form-header" class="list-name line-before"><strong>Заголовок сообщения </strong> (required)</label>
				<input type="text" name="title" id="contact-form-header" required>
			</div>
			<div class="eight columns end line-before end">
				<label for="contact-form-body" class="list-name"><strong>Ваше сообщение </strong> (required)</label>
				<textarea id="contact-form-body" name="content" required></textarea>
				<button class="btn button btn-green line-before">
					<i class="icon-envelope-alt pad-right"></i>Отправить письмо!
				</button>
			</div>
		</form>
	</div>
	<!--content end-->
</div>