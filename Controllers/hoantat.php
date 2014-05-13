<?php
/**
 *
 */
class hoantat extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this -> view -> render('hoantat/index', TRUE);
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

			//sending email
			$mail = new PHPMailer(TRUE);
			$mail->CharSet = "UTF-8";
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
			$mail -> SetFrom("baytructuyen@gmail.com");
			$mail -> Subject = "Xác nhận thông tin đặt vé từ baytructuyen.com!";
			$body = "Cám ơn bạn đã đặt vé của baytructuyen.com 
			<h3 class=''>
				<strong> Thông tin hành trình </strong>
			</h3>";
			$mail -> Body = $body;
			$mail -> AddAddress($data['email']);
			if (!$mail -> Send()) {
				echo "Mailer Error: " . $mail -> ErrorInfo;
				//(1)
			} else {
				echo "Message has been sent";
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
				}
				Session::destroy();
			}
		} else
			header("Location:" . URL . "index");
	}

}
