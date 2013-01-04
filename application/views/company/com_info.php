<div class='row ddd'>
		<div class='r_company-content white'>
			<div class='r_c-c-title'>
				<a href='#'><?php if (is_object($seller))
				echo $seller->company_name;?></a>
			</div>
			<div class='r_c-c-main'>

				<div class='r_c-c-m-leftPanel left'>
					<div class='hhddzz'>
						<img src='<?php if (is_object($seller))
						echo base_url();?>imgs/<?php echo $seller->img;?>'>
					</div>
				</div>

				<div class='r_c-c-m-rightPanel right'>
					<div class='blockRP'>
						<p class='information'>
							<?php
							if (is_object($seller)) echo $seller->about;?>
						</p>
						<span class='telephoneInformation'>
							Адрес компании :
							<a href='#'><?php if (is_object($seller)) echo $seller->adress?></a>
						</span>
						<br>
						<br>
						<span class='telephoneInformation'>
							Телефоны компании :
							<a href='#'><?php if (is_object($seller)) echo $seller->phone1;?></a>
							<a href='#'><?php if (is_object($seller)) echo $seller->phone2;?></a>
							<a href='#'><?php if (is_object($seller)) echo $seller->phone3;?></a>
						</span>
					</div>
					

					<!--<div class='hhttxx'>
						<span class='hhttxxInfo left'>
							Неверная информация?
						</span>
						<a href='#' class='btn right'><i class='icon-phone'></i> Перезвоните мне</a>
						<a href='#' class='btn right'><i class='icon-paste'></i> Условия работы</a>

						<div class='clearfix'></div>
					</div>-->

				</div>
			</div>
			<div class='clearfix'></div>
		</div>
	</div>