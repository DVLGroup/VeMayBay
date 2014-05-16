<?php

	require 'config.php';
	require 'util/Auth.php';

	//autoload libs
	function __autoload($class){
		require LIBS . $class .'.php';
	}
	
	require_once 'Libs/class.phpmailer.php';
	require_once("src/facebook.php");

  	
  	
	$app = new Bootstrap();
	
	

	