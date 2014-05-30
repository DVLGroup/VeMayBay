<?php
/**
 *
 */
class chonchuyenbay extends Controller {

	function __construct() {
		parent::__construct();
		$this -> view -> js = array('Views/chonchuyenbay/js/custom.js');
	}

	function index() {
		Session::init();
		if (isset($_SESSION['check'])) {
			$this -> view -> json = json_decode(Session::get('check'), true);
			// print_r($json);
			// $i = 0;
			// $min = null;
			$this -> view -> render('chonchuyenbay/index', TRUE);
		} else {
			header("Location:" . URL . "index");
		}
	}

	function getSession() {
		Session::init();
		// if (!isset($_SESSION['check'])) {
			// if (!isset($_POST['jsonFile']) && !isset($_POST['oriName']) && !isset($_POST['desName']) && !isset($_POST['dateGo']) && !isset($_POST['dateBack'])) {
				// header('Location:' . URL . 'index');
			// }
			$good = str_replace('\"','"',$_POST['jsonFile']);
			Session::set('check', $good);
			Session::set('oriName', $_POST['oriName']);
			Session::set('desName', $_POST['desName']);
			Session::set('ori', $_POST['ori']);
			Session::set('des', $_POST['des']);
			Session::set('dateGo', $_POST['dateGo']);
			Session::set('dateBack', $_POST['dateBack']);
			Session::set('nguoiLon', $_POST['adult']);
			Session::set('treEm', $_POST['kid']);
			Session::set('soSinh', $_POST['baby']);
			Session::set('loaiVe', $_POST['ticketType']);
			// unset($_POST['jsonFile']);
			// unset($_POST['oriName']);
			// unset($_POST['desName']);
			// unset($_POST['dateGo']);
			// unset($_POST['dateBack']);
			// unset($_POST['adult']);
			// unset($_POST['kid']);
			// unset($_POST['baby']);
			// unset($_POST['ticketType']);
		// }
		header("Location: " . URL . "chonchuyenbay/index");
	}

	function fillComboBox1() {
		$this -> model -> fillCombo1();
	}

	function fillComboBox2() {
		$this -> model -> fillCombo2();
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
