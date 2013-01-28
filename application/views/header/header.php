<!DOCTYPE html>
	<head>
		<?php
			//render loader
			require_once("forms/_loader.php");
		?>
	</head>

	<body>
		<!--header place-->
		<header class="header shadow pad">
			<div class="row">
				<div class="four columns">
					<?php
						require_once("forms/_left_menu.php");
					?>
				</div>
				<div class="two columns">&nbsp;
				</div>
				<div class="six columns">
					<div class="right">
						<!--site menu-->
						<?php
							require_once("forms/_right_menu.php");
						?>
						<!--site menu-->
					</div>
				</div>
			</div>
		</header>
		<!--end header-->

<?php
	require_once("forms/_modal.php");
?>


		