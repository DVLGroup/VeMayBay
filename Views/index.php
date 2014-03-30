<?php
	//Config
	require 'Libs/Controller.php';
	require 'Libs/View.php';
	require 'Libs/Model.php';
	require 'Libs/Bootstrap.php';

	require 'Config/database.php';
	require 'Config/Paths.php';
	require 'Config/constant.php';
	require 'Libs/Session.php';	

	
	require_once("src/facebook.php");

  	$config = array(
      'appId' => '1480652755480301',
      'secret' => '2afcadec06be06f07d67c7943a44e61b',
      'fileUpload' => false, // optional
      'allowSignedRequest' => false, // optional, but should be set to false for non-canvas apps
  	);

  	// $facebook = new Facebook($config);

	$app = new Bootstrap();
	
	$facebook = new Facebook($config);