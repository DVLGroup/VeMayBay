<?php
/**
 *
 */
class xacnhan extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		Session::init();
		if ($_SESSION['check']) {
			$this -> view -> render('xacnhan/index', TRUE);
		} else {
			header("Location:" . URL . "index");
		}
	}

	function getSession() {
		Session::init();
		//Hành khách
		if (isset($_SESSION['check'])) {
			for ($i = 1; $i <= Session::get('nguoiLon'); $i++) {
				Session::set("nguoiLon" . $i, $_POST["nguoiLon" . $i]);
				Session::set("tuoiNguoiLon" . $i, $_POST["tuoiNguoiLon" . $i]);
			}
			for ($i = 1; $i <= Session::get('treEm'); $i++) {
				Session::set("treEm" . $i, $_POST["treEm" . $i]);
				Session::set("tuoiTreEm" . $i, $_POST["tuoiTreEm" . $i]);
			}
			for ($i = 1; $i <= Session::get('soSinh'); $i++) {
				Session::set("soSinh" . $i, $_POST["soSinh" . $i]);
				Session::set("tuoiSoSinh" . $i, $_POST["tuoiSoSinh" . $i]);
			}
			//Hành lý
			Session::set('hanhLyDi', $_POST['hanhLyDi']);
			Session::set('giaHanhLyDi', $_POST['giaHanhLyDi']);
			if (Session::get('loaiVe') == 1) {
				Session::set('hanhLyVe', $_POST['hanhLyVe']);
				Session::set('giaHanhLyVe', $_POST['giaHanhLyVe']);
			}
			//Thông tin liên hệ
			Session::set('hoTen', $_POST['hoTen']);
			Session::set('dThoai', $_POST['dThoai']);
			Session::set('email', $_POST['email']);
			Session::set('dChi', $_POST['dChi']);
			Session::set('tinhThanh', $_POST['tinhThanh']);
			Session::set('quocGia', $_POST['quocGia']);
			//chuyển Khoản
			Session::set('chuyenKhoan', $_POST['chuyenKhoan']);
			header("Location:" . URL . "xacnhan/index");
		} else {
			header("Location:" . URL . "index");
		}
	}

}