<div class="page">
	
	<div class="row shadow pad-tb">
		<!--Information about company-->
		<div class="twelve columns">
			
		</div>
		<!--end of information about company-->
	</div>

</div>

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
					
				</div>
			</div>
			<div class='clearfix'></div>
		</div>
	</div>

<div class='row'>
		<div class='r_cab-menu'>
			<div class='r_cab-menu-hello left'>
				<span class='r_cab-menu-h-hh'> 
					Название компании &nbsp;- 
					<a href='<?php echo base_url();?>index.php/main/company_info/<?php echo $id;?>' ><?php echo $seller;	?></a>
				</span>
			</div>
			<div class='r_cab-menu-rel right'>
				<ul>
					
					
					<li class='left r_c-m-r-margin'><a href='<? echo base_url('index.php/main/view_my_queries');?>' class='btn'><i class="icon-signout"></i>Назад</a></li>
				</ul>


			</div>
			<div style='clear:both;'></div>
		</div>
	</div>