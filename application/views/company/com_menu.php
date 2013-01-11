<div class="page">
	<div class="row  pad-tb">
		<!--Information about company-->
		<div class="twelve columns pad-bottom">
			<?php
				if(is_object($seller)){
			?>

				<a href="">
					<?php
						echo $seller->company_name;
					?>
				</a>
				<a href="">
					<?php
						echo $seller->about;
					?>
				</a>
				<a href="">
					<?php
						echo $seller->adress;
					?>
				</a>
				<a href="">
					<?php
						echo $seller->phone1;
						echo $seller->phone2;
						echo $seller->phone3;
					?>
				</a>
			<?php
				}
				else{
			?>

				<a href="<?php echo base_url("index.php/main/company_info/".$id);?>">
					Название компании :
					<?php
						echo $seller;
					?>
				</a>

			<?php
				}
			?>
		</div>	
		<!--end of information about company-->
	</div>

