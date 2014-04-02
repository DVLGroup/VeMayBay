<?php
/**
 *
 */
class yeucau_model extends Model {

	function __construct() {
		parent::__construct();
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
		$data['hang_bay'] = $_POST['hangBay1'].'/'.$_POST['hangBay2'].'/'.$_POST['hangBay3'];
		$table = 'yeu_cau';
		// print_r($data);
		$result = $this->db->insert($table, $data);
		//$result = $this->db->insert($table, $data);
		header('Location:'.URL.'yeucau');
	}

}
