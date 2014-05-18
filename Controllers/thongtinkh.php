<?php

/**
 *
 */
class thongtinkh extends Controller {

	function __construct() {
		parent::__construct();
		$this -> view -> js = array('Views/thongtinkh/js/custom.js');
	}

	function index() {
		Session::init();
		if ($_SESSION['check']) {
			$this -> view -> hanhLyDi = $this -> model -> getHanhLy();
			$this -> view -> hanhLyVe = $this -> model -> getHanhLyVe();
			$this -> view -> render("thongtinkh/index", TRUE);
		} else {
			header("Location:" . URL . "index");
		}

	}

	function getSession() {
		Session::init();
		if (isset($_SESSION['check'])) {
			
			Session::set('aName', $_POST['_aName']);
			Session::set('timeGo1', $_POST['_timeGo1']);
			Session::set('timeGo2', $_POST['_timeGo2']);
			Session::set('cost1', $_POST['_cost1']);
			Session::set('hangVe1', $_POST['_hangVe1']);
			Session::set('codeFlight1', $_POST['_codeFlight1']);
			Session::set('crypt1', $_POST['_crypt1']);
			$lai_di = $this -> model -> getLaiSuat(Session::get('aName'));
			Session::set('total', $_POST['total']+$lai_di[0]['lai_xuat']*(Session::get('nguoiLon')+Session::get('treEm')+Session::get('soSinh')));
			if (isset($_POST['_timeBack1'])) {
				Session::set('bName', $_POST['_bName']);
				Session::set('timeBack1', $_POST['_timeBack1']);
				Session::set('timeBack2', $_POST['_timeBack2']);
				Session::set('cost2', $_POST['_cost2']);
				Session::set('hangVe2', $_POST['_hangVe2']);
				Session::set('codeFlight2', $_POST['_codeFlight2']);
				Session::set('crypt2', $_POST['_crypt2']);
				$lai_ve = $this -> model -> getLaiSuat(Session::get('bName'));
				Session::set('total', $_POST['total']+$lai_di[0]['lai_xuat']*(Session::get('nguoiLon')+Session::get('treEm')+Session::get('soSinh'))+$lai_ve[0]['lai_xuat']*(Session::get('nguoiLon')+Session::get('treEm')+Session::get('soSinh')));
			}
			header("Location:" . URL . "thongtinkh/index");
		} else
			header("Location:" . URL . "index");
	}

}
