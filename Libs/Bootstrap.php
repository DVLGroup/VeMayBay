<?php

/**
 *
 */
class Bootstrap {

	function __construct() {
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		// print_r($url);

		if (empty($url[0])) {
			require 'Controllers/index_admin.php';
			$controller = new Index_admin();
			$controller -> index();
			return false;
		}

		$file = 'Controllers/' . $url[0] . '.php';
		if (file_exists($file)) {
			require $file;
		} else {
			$this -> error();
			return FALSE;
		}

		$controller = new $url[0];
		$controller -> loadModel($url[0]);

		//calling method
		if (isset($url[2])) {
			if (method_exists($controller, $url[1])) {
				$controller -> $url[1]($url[2]);
			} else {
				$this -> Error();
			}
		} else {
			if (isset($url[1])) {
				if (method_exists($controller, $url[1])) {
					$controller -> $url[1]();
				} else {
					$this -> Error();
				}
			} else {
				$controller -> index();
			}

		}

	}

	public function error() {
		require 'Controllers/error.php';
		$error = new Error();
		$error -> index();
		return FALSE;
	}

}
