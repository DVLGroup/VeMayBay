<?php

/**
 *
 */
class thongtinkh extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		if ($_SESSION['check']) {
			$this -> view -> render("thongtinkh/index", TRUE);
		} else {
			header("Location:" . URL . "index");
		}

	}

	function getSession() {
		Session::init();
		Session::set('total', $_POST['total']);
		Session::set('aName', $_POST['_aName']);
		Session::set('timeGo1', $_POST['_timeGo1']);
		Session::set('timeGo2', $_POST['_timeGo2']);
		Session::set('cost1', $_POST['_cost1']);
		Session::set('hangVe1', $_POST['_hangVe1']);
		Session::set('codeFlight1', $_POST['_codeFlight1']);
		Session::set('crypt1', $_POST['_crypt1']);
		if (isset($_POST['_timeBack1'])) {
			Session::set('timeGo1', $_POST['_timeBack1']);
			Session::set('timeGo2', $_POST['_timeBack2']);
			Session::set('cost2', $_POST['_cost2']);
			Session::set('hangVe2', $_POST['_hangVe2']);
			Session::set('codeFlight2', $_POST['_codeFlight2']);
			Session::set('crypt2', $_POST['_crypt2']);
		}
		header("Location:" . URL . "thongtinkh/index");
	}

}
