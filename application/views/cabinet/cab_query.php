<div class="page">
	<!--content here-->
	<div class="row shadow pad-bottom">

		<div class="twelve columns field">
			<button class="btn button btn-orange " id="js-module-modal" data-target="js-modal-user-query">
				<i class="icon-edit pad-right"></i>Подать заявку
			</button>
			<div class="right">
				<button class="submenu-a" id="js-module-modal" data-target="js-modal-user-help-query">
					<i class="icon-star pad-right"></i>Как подавать заявку
				</button>
			</div>
		</div>
		
		<hr class="hr-dashed">

		<div data-description="content-in" class="line-before-big user-queries-page">
			<?php
				foreach($info as $key=>$value){
			?>
				<div class="six columns adv-line hr-dashed pointer color-b-254">
					<div class="seven columns">
						<a class="line-after block">
							<?php
								echo $value["car"].", ".$value["year"]." год";
							?>
						</a>
						<span class="breadcum">
							Vin-Code : 
							<?php 
								echo $key;
							?>

						</span>
					</div>
					<div class="two columns align-center font-size-14">
						<a>
							<?php 
								echo $this->session->userdata('id');
								echo count($value['sellers']);
							?>
						</a>
					</div>
					<div class="three columns adv-add-btn">
						<button class="btn btn-red button center" id="js-action-button" data-id="<?php echo $key;?>" 
							data-url="<?php echo base_url('index.php/main/accept_answer');?>">
							<i class="icon-trash"></i>
						</button>
					</div>
				</div>
			<?php
				}
			?>
		</div>
		<div class="twelve columns line-before-big">
			<div class="seven columns">
				
			</div>
			<div class="five columns">
				<div class="right">
					<span class="breadcum inline">
						В случае нажатия 
						<img src="<?php echo base_url('images/user/help-remove-button.PNG');?>" alt="" class="vertical-align-m">
						вы удалите ваш запрос
					</span>
				</div>
			</div>
		</div>
	</div>
	<!--end content here-->
</div>