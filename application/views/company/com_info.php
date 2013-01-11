<div class="row">
	<!--view needed to receive information-->
	<div class="twelve columns line-after">
		<?php
			if(is_object($seller)){
		?>
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
		?>
	</div>
</div>