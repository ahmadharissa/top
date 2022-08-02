<?php
	session_start();

	session_unset();
	session_destroy();

	header('REFRESH:0;url=home.php');
	exit();