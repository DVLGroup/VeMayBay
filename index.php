<?php

	require 'config.php';
	require 'util/Auth.php';

	//autoload libs
	function __autoload($class){
		require LIBS . $class .'.php';
	}
	
	require_once 'Libs/class.phpmailer.php';
	//require_once("src/facebook.php");

  	// $config = array(
      // 'appId' => '1480652755480301',
      // 'secret' => '2afcadec06be06f07d67c7943a44e61b',
      // 'fileUpload' => false, // optional
      // 'allowSignedRequest' => false, // optional, but should be set to false for non-canvas apps
  	// );

  	// $facebook = new Facebook($config);

  	// $facebook = new Facebook($config);
  	
	$app = new Bootstrap();
	
	

	