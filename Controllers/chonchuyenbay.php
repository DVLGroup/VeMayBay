<?php
/**
 *
 */
class chonchuyenbay extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		Session::init();
		if (!isset($_SESSION['check'])) {
			if (!isset($_POST['jsonFile']) && !isset($_POST['oriName']) && !isset($_POST['desName']) && !isset($_POST['dateGo']) && !isset($_POST['dateBack'])) {
				header('Location:' . URL . 'index');
			}
			Session::set('check', $_POST['jsonFile']);
			Session::set('oriName', $_POST['oriName']);
			Session::set('desName', $_POST['desName']);
			Session::set('dateGo', $_POST['dateGo']);
			Session::set('dateBack', $_POST['dateBack']);
			// unset($_POST['jsonFile']);
			// unset($_POST['oriName']);
			// unset($_POST['desName']);
			// unset($_POST['dateGo']);
			// unset($_POST['dateBack']);
		}
		$this -> view -> json = json_decode(Session::get('check'), true);
		// print_r($json);
		// $i = 0;
		// $min = null;
		$this -> view -> render('chonchuyenbay/index', TRUE);
	}

	function proxy() {
		$url = $_POST['url'];
		unset($_POST['url']);

		$fields_string = "";

		foreach ($_POST as $key => $value) {
			$fields_string .= $key . '=' . $value . '&';
		}
		$fields_string = rtrim($fields_string, '&');

		$ch = curl_init();
		ini_set('max_execution_time', 300);

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, count($_POST));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

		$result = curl_exec($ch);

		curl_close($ch);
	}

}
