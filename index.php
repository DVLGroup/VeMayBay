<?php
	//Config
	require 'Config/database.php';
	require 'Config/Paths.php';

	//autoload libs
	function __autoload($class){
		require LIBS . $class .'.php';
	}
		

	$app = new Bootstrap();

