<?php
	require 'connect.php';
	session_destroy();
	$path = 'index.php';
	header("Location:".$path);
?>