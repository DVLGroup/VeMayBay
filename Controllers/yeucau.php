<?php

/**
 *
 */
class yeucau extends Controller {

	function __construct() {
		parent::__construct();
		$this -> view -> js = array('Views/yeucau/js/custom.js');
	}

	function index() {
		$this -> view -> render('yeucau/index');
	}

	function send() {
		$data = array();
		$data['ho_ten'] = $_POST['hoTen'];
		$data['email'] = $_POST['email'];
		$data['so_dt'] = $_POST['dThoai'];
		$data['dia_diem_di'] = $_POST['ori'];
		$data['dia_diem_den'] = $_POST['des'];
		$data['loai_ve'] = $_POST['loaiVe'];
		$data['so_luong'] = $_POST['soLuong'];
		$data['ngay_di'] = $_POST['ngayDi1'];
		$data['ngay_di_2'] = $_POST['ngayDi2'];
		$data['ngay_ve'] = $_POST['ngayVe1'];
		$data['ngay_ve_2'] = $_POST['ngayVe2'];
		$data['hang_bay'] = $_POST['hangBay1'];
		if (isset($_POST['hangBay2'])) {
			$data['hang_bay'] .= '/' . $_POST['hangBay2'];
		}
		if (isset($_POST['hangBay3'])) {
			$data['hang_bay'] .= '/' . $_POST['hangBay3'];
		}
		$data['gui_qua_mail'] = null;
		if (isset($_POST['quaMail'])) {
			$data['gui_qua_mail'] = 1;
		}
		$this -> model -> send($data);//Chuyển hàm send vào (1) để tránh email ko tồn tại
		//sending email
		$mail = new PHPMailer();
		// create a new object
		$mail -> IsSMTP();
		// enable SMTP
		$mail -> SMTPDebug = 1;
		// debugging: 1 = errors and messages, 2 = messages only
		$mail -> SMTPAuth = true;
		// authentication enabled
		$mail -> SMTPSecure = 'ssl';
		// secure transfer enabled REQUIRED for GMail
		$mail -> Host = "smtp.gmail.com";
		$mail -> Port = 465;
		// or 587
		$mail -> IsHTML(true);
		$mail -> Username = "vietnt134@gmail.com";
		$mail -> Password = "whatdidyoudo1341996";
		$mail -> SetFrom("BayTrucTuyen@gmail.com");
		$mail -> Subject = "Hello Mr Bean";
		$mail -> Body = "Hello im from BayTrucTuyen.com <hr/>";
		$mail -> AddAddress($data['email']);
		if (!$mail -> Send()) {
			echo "Mailer Error: " . $mail -> ErrorInfo;//(1)
		} else {
			echo "Message has been sent";
		}
		header('Location:' . URL . 'yeucau');
	}

}
