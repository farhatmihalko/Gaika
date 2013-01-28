<!-- TDD forms/_left_menu -->
<div>
	<?php
		if (!($this->session->userdata("login"))){
	?>	
		<a href="<?php echo base_url('index.php/main/about');?>" class="font-gray-bold">
			<i class="icon-bullhorn pad-right"></i>Узнайте больше о нашем сервисе
		</a>
	<?php
		}
		else {
	?>
		<?php
			if($this->session->userdata("type") == "seller" && !(isset($bool))){
		?>	
		<!--seller place-->
		<div class="inline">
			<a class="dropdown-open pointer"><i class="icon-h-sign pad-right"></i>Как пользоваться?</a>
			<ul class="dropdown-menu dropdown-menu-help" style="display: none;">
				<li class="dropdown-caret">
               		 <span class="caret-outer"></span>
               	 	 <span class="caret-inner"></span>
            	</li>
            	<li>
        			<a class="bold pointer" id="js-module-modal" data-target="js-modal-seller-help">
        				<i class="icon-group pad-right"></i>Общая справка
            		</a>
            	</li>
            	<li>
        			<a class="pointer" id="js-module-modal" data-target="js-modal-seller-help-find">
        				<i class="icon-edit pad-right"></i>Как искать
            		</a>
            	</li>
            	<li class="dropdown-divider"></li>
			</ul>
		</div>
		<!--end of seller place-->
		<?php	
			}
			else if($this->session->userdata("type") == "user" && !(isset($bool))){
		?>
		<!--user place-->
		<div class="inline">
			<a class="dropdown-open pointer"><i class="icon-h-sign pad-right"></i>Как пользоваться?</a>
			<ul class="dropdown-menu dropdown-menu-help" style="display: none;">
				<li class="dropdown-caret">
               		 <span class="caret-outer"></span>
               	 	 <span class="caret-inner"></span>
            	</li>
            	<li>
        			<a class="bold pointer" id="js-module-modal" data-target="js-modal-user-help">
        				<i class="icon-group pad-right"></i>Общая справка
            		</a>
            	</li>
        		<li>
        			<a class="pointer" id="js-module-modal" data-target="js-modal-user-help-query">
        				<i class="icon-edit pad-right"></i>Как подавать заявку
            		</a>
            	</li>
            	<li class="dropdown-divider"></li>
			</ul>
		</div>
		<!--end of user place-->
		<?php
			}
		?>
	<?php
		}
		//end
	?>
</div>