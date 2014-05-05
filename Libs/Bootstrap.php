<?php

/**
 *
 */
class Bootstrap {

	function __construct() {
		//
		//error_reporting(E_ERROR | E_PARSE);
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		
		//print_r($url);

		if (empty($url[0])) {
			require 'Controllers/index.php';
			$controller = new index();
			$controller->index();
			return false;
		}
		
		//
		$file = 'Controllers/' . $url[0] . '.php';
		
		if(file_exists($file)){
			require $file;
		} else {
			$this->error();	
			return false;
		}
		
		$controller = new $url[0];
		$controller->loadModel($url[0]);
		
		//
		if(isset($url[2])) {
			if (method_exists($controller, $url[1])) {
				$controller->{$url[1]}($url[2]);
			} else {
				$this->error();
			}
		} else {
			if (isset($url[1])){
				if(method_exists($controller, $url[1])){
					$controller->{$url[1]}();
				} else {
					$this->error();
				}
			} else {
				$controller->index();
			}
		}
		

	}
	
	//
	function error() {
		require 'Controllers/error.php';
		$controller = new error();
		$controller->index();
		return false;
	}

}