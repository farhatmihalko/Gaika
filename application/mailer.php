<?php
	$_GET["/functions/mailer"] = null;
	mail('kumar.akhmadiyev@gmail.com','cron','true');
	require "index.php";
?>