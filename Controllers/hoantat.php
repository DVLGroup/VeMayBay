<?php
/**
 *
 */
class hoantat extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		Session::init();
		if ($_SESSION['check']) {
			$this -> view -> render('hoantat/index', TRUE);
			Session::destroy();
		} else {
			header("Location:" . URL . "index");
		}
	}

	function hoantat() {
		Session::init();
		if (isset($_SESSION['check'])) {
			$data = array();
			Session::set('datVeId', (uniqid(rand())));
			$data['dat_ve_id'] = Session::get('datVeId');
			$data['tong_gia'] = Session::get('total');
			$data['dia_diem_di'] = Session::get('ori');
			$data['dia_diem_den'] = Session::get('des');

			$ngayGioDi = explode('/', Session::get('dateGo'));
			$data['ngay_gio_di'] = $ngayGioDi[2] . "-" . $ngayGioDi[1] . "-" . $ngayGioDi[0];

			$ngayGioVe = explode('/', Session::get('dateBack'));
			$data['ngay_gio_ve'] = $ngayGioVe[2] . "-" . $ngayGioVe[1] . "-" . $ngayGioVe[0];

			$data['ho_ten'] = Session::get('hoTen');
			$data['so_dt'] = Session::get('dThoai');
			$data['email'] = Session::get('email');
			$data['dia_chi'] = Session::get('dChi');
			$data['thanh_pho'] = Session::get('tinhThanh');
			$data['quoc_gia'] = Session::get('quocGia');
			$data['thanh_toan_id'] = Session::get('chuyenKhoan');
			//body email
			$body = "Cám ơn Quý Khách đã đặt vé của baytructuyen.com 
			<div align='center' style='border: 1px solid black;'>
			<h3 style='color: #300000'>
				<strong> Thông tin hành trình </strong>
			</h3>
			<h4 style='color: red'>Chiều đi</h4>
			<h4>" . Session::get('oriName') . "->" . Session::get('desName') . "<h4> 
			<h4>Ngày: " . Session::get('dateGo') . "</h4>";
			if (Session::get('loaiVe') == 1) {
				$body .= "<h4 style='color: red'>Chiều về</h4><h4>" . Session::get('desName') . "->" . Session::get('oriName') . "<h4> 
				<h4>Ngày: " . Session::get('dateBack') . "</h4>";
			}
			$body .= "<h3 style='color: gray'>Hành Khách</h3>";
			for ($i = 1; $i <= Session::get('nguoiLon'); $i++) {
				$date = date_create(Session::get('tuoiNguoiLon' . $i));
				$body .= "<h4>Ông/Bà: " . Session::get('nguoiLon' . $i) . ", Ngày Sinh: " . date_format($date, 'd/m/Y') . "</h4>";
			}
			for ($i = 1; $i <= Session::get('treEm'); $i++) {
				$date = date_create(Session::get('tuoiTreEm' . $i));
				$body .= "<h4>Cháu: " . Session::get('treEm' . $i) . ", Ngày Sinh: " . date_format($date, 'd/m/Y') . "</h4>";
			}
			for ($i = 1; $i <= Session::get('soSinh'); $i++) {
				$date = date_create(Session::get('tuoiSoSinh' . $i));
				$body .= "<h4>Bé: " . Session::get('soSinh' . $i) . ", Ngày Sinh: " . date_format($date, 'd/m/Y') . "</h4>";
			}
			$body .= "<h3 style='color: Orange'>Người Liên Hệ</h3>";
			$body .= "<h4>Họ Tên: " . Session::get('hoTen') . "</h4><h4>Điện Thoại: " . Session::get('dThoai') . "</h4>";
			$body .= "<h4>Email: " . Session::get('email') . "</h4><h4>Địa Chỉ: " . Session::get('dChi') . ", " . Session::get('tinhThanh') . ", " . Session::get('quocGia') . "</h4>";

			$body .= "<h3 style='color: Blue'>Tổng Giá Tiền</h3>";
			$body .= "<h4>" . Session::get('nguoiLon') . " X Người Lớn</h4>";
			if (Session::get('treEm') != 0) {
				$body .= "<h4>" . Session::get('treEm') . " X Trẻ Em</h4>";
			}
			if (Session::get('soSinh') != 0) {
				$body .= "<h4>" . Session::get('soSinh') . " X Bé Sơ Sinh</h4>";
			}
			$body .= "<h4 style='color: red'>Chi Tiết Giá Hành Lý</h4>";
			if (Session::get('loaiVe') == 0) {
				$body .= "<h4>" . Session::get('giaHanhLyDi') . " Vnđ</h4>";
			} else {
				$body .= "<h4>" . Session::get('giaHanhLyDi') + Session::get('giaHanhLyVe') . " Vnđ</h4>";
			}
			$body .= "<h4 style='color: red'>Tổng Cộng</h4>";
			if (Session::get('loaiVe') == 0) {
				$body .= "<h4>" . (Session::get('total') + Session::get('giaHanhLyDi')) . " Vnđ</h4>";
			} else {
				$body .= "<h4>" . (Session::get('total') + Session::get('giaHanhLyDi') + Session::get('giaHanhLyVe')) . " Vnđ</h4>";
			}
			$body .= "</div>Quý Khách vui lòng...";
			//Gửi mail trên web
			$too = $data['email'];
			$subject = "Cảm ơn bạn đã đặt vé trên baytructuyen.com";
			$message = $body;
			$user_email = "baytructuyen";
			// valid POST email address
			$headers = "From: $user_email\r\n";
			$headers .= "Reply-To: $too\r\n";
			$headers .= "Return-Path: $too\r\n";
			$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
			$headers .= 'MIME-Version: 1.0' . "\n";
			$headers .= 'Content-type: text/html; UTF-8' . "\r\n";
			if (mail($too, $subject, $message, $headers))
				// //Gửi mail local
				// $mail = new PHPMailer(TRUE);
				// $mail -> CharSet = "UTF-8";
				// // create a new object
				// $mail -> IsSMTP();
				// // enable SMTP
				// $mail -> SMTPDebug = 1;
				// // debugging: 1 = errors and messages, 2 = messages only
				// $mail -> SMTPAuth = true;
				// // authentication enabled
				// $mail -> SMTPSecure = 'ssl';
				// // secure transfer enabled REQUIRED for GMail
				// $mail -> Host = "smtp.gmail.com";
				// $mail -> Port = 465;
				// // or 587
				// $mail -> IsHTML(true);
				// $mail -> Username = "vietnt134@gmail.com";
				// $mail -> Password = "whatdidyoudo1341996";
				// $mail -> SetFrom("baytructuyen@gmail.com");
				// $mail -> Subject = "Xác nhận thông tin đặt vé từ baytructuyen.com!";
// 				
				// $mail -> Body = $body;
				// $mail -> AddAddress($data['email']);
				// if (!$mail -> Send()) {
				// echo "Mailer Error: " . $mail -> ErrorInfo;
				// //(1)
				// } else {
				// echo "Message has been sent";
				// }
				

				$this -> model -> insertPhieuDat($data);

			$dataDetail = array();
			for ($i = 1; $i <= Session::get('nguoiLon'); $i++) {
				//$dataDetail['ct_dat_ve_id'] = Session::get('datVeId');
				$dataDetail['ten_kh'] = Session::get('nguoiLon' . $i);
				$dataDetail['ngay_sinh'] = Session::get('tuoiNguoiLon' . $i);
				$dataDetail['hang_ve'] = Session::get('hangVe1');
				$dataDetail['hanh_ly_id'] = Session::get('hanhLyDi');
				$dataDetail['gio_bay'] = Session::get('timeGo1') . " - " . Session::get('timeGo2');
				$dataDetail['hang_bay'] = Session::get('aName');
				$dataDetail['dat_ve_id'] = Session::get('datVeId');
				$dataDetail['crypt'] = Session::get('crypt1');
				$this -> model -> insertCTPhieuDat($dataDetail);
			}
			for ($i = 1; $i <= Session::get('treEm'); $i++) {
				//$dataDetail['ct_dat_ve_id'] = Session::get('datVeId');
				$dataDetail['ten_kh'] = Session::get('treEm' . $i);
				$dataDetail['ngay_sinh'] = Session::get('tuoiTreEm' . $i);
				$dataDetail['hang_ve'] = Session::get('hangVe1');
				$dataDetail['hanh_ly_id'] = Session::get('hanhLyDi');
				$dataDetail['gio_bay'] = Session::get('timeGo1') . " - " . Session::get('timeGo2');
				$dataDetail['hang_bay'] = Session::get('aName');
				$dataDetail['dat_ve_id'] = Session::get('datVeId');
				$dataDetail['crypt'] = Session::get('crypt1');
				$this -> model -> insertCTPhieuDat($dataDetail);
			}
			for ($i = 1; $i <= Session::get('soSinh'); $i++) {
				//$dataDetail['ct_dat_ve_id'] = Session::get('datVeId');
				$dataDetail['ten_kh'] = Session::get('soSinh' . $i);
				$dataDetail['ngay_sinh'] = Session::get('tuoiSoSinh' . $i);
				$dataDetail['hang_ve'] = Session::get('hangVe1');
				$dataDetail['hanh_ly_id'] = Session::get('hanhLyDi');
				$dataDetail['gio_bay'] = Session::get('timeGo1') . " - " . Session::get('timeGo2');
				$dataDetail['hang_bay'] = Session::get('aName');
				$dataDetail['dat_ve_id'] = Session::get('datVeId');
				$dataDetail['crypt'] = Session::get('crypt1');
				$this -> model -> insertCTPhieuDat($dataDetail);
			}
			if (Session::get('loaiVe') == 1) {
				for ($i = 1; $i <= Session::get('nguoiLon'); $i++) {
					//$dataDetail['ct_dat_ve_id'] = Session::get('datVeId');
					$dataDetail['ten_kh'] = Session::get('nguoiLon' . $i);
					$dataDetail['ngay_sinh'] = Session::get('tuoiNguoiLon' . $i);
					$dataDetail['hang_ve'] = Session::get('hangVe2');
					$dataDetail['hanh_ly_id'] = Session::get('hanhLyVe');
					$dataDetail['gio_bay'] = Session::get('timeBack1') . " - " . Session::get('timeBack2');
					$dataDetail['hang_bay'] = Session::get('bName');
					$dataDetail['dat_ve_id'] = Session::get('datVeId');
					$dataDetail['crypt'] = Session::get('crypt2');
					$this -> model -> insertCTPhieuDat($dataDetail);
				}
				for ($i = 1; $i <= Session::get('treEm'); $i++) {
					//$dataDetail['ct_dat_ve_id'] = Session::get('datVeId');
					$dataDetail['ten_kh'] = Session::get('treEm' . $i);
					$dataDetail['ngay_sinh'] = Session::get('tuoiTreEm' . $i);
					$dataDetail['hang_ve'] = Session::get('hangVe2');
					$dataDetail['hanh_ly_id'] = Session::get('hanhLyVe');
					$dataDetail['gio_bay'] = Session::get('timeBack1') . " - " . Session::get('timeBack2');
					$dataDetail['hang_bay'] = Session::get('bName');
					$dataDetail['dat_ve_id'] = Session::get('datVeId');
					$dataDetail['crypt'] = Session::get('crypt2');
					$this -> model -> insertCTPhieuDat($dataDetail);
				}
				for ($i = 1; $i <= Session::get('soSinh'); $i++) {
					//$dataDetail['ct_dat_ve_id'] = Session::get('datVeId');
					$dataDetail['ten_kh'] = Session::get('soSinh' . $i);
					$dataDetail['ngay_sinh'] = Session::get('tuoiSoSinh' . $i);
					$dataDetail['hang_ve'] = Session::get('hangVe2');
					$dataDetail['hanh_ly_id'] = Session::get('hanhLyVe');
					$dataDetail['gio_bay'] = Session::get('timeBack1') . " - " . Session::get('timeBack2');
					$dataDetail['hang_bay'] = Session::get('bName');
					$dataDetail['dat_ve_id'] = Session::get('datVeId');
					$dataDetail['crypt'] = Session::get('crypt2');
					$this -> model -> insertCTPhieuDat($dataDetail);
				}

				header("Location:" . URL . "hoantat/index");
			}
		} else
			header("Location:" . URL . "index");
	}

}
