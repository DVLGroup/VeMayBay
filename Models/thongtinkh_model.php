<?php
/**
 * 
 */
class thongtinkh_model extends Model {
	
	function __construct() {
		parent::__construct();
	}
	function getHanhLy(){
		if(Session::get('cost1')<4600000){
			return $this->db->select("select * from hanh_ly where hang_bay='".Session::get('aName')."' and gia_bay=1550000");
		}
		else {
			return $this->db->select("select * from hanh_ly where hang_bay='".Session::get('aName')."' and gia_bay=4600000");
		}
	}
	function getHanhLyVe(){
		if(Session::get('cost2')<4600000){
			return $this->db->select("select * from hanh_ly where hang_bay='".Session::get('bName')."' and gia_bay=1550000");
		}
		else {
			return $this->db->select("select * from hanh_ly where hang_bay='".Session::get('bName')."' and gia_bay=4600000");
		}
	}
	function getLaiSuat($hang_bay){
		return $this->db->select("select * from lai_ban where hang_bay='".$hang_bay."'");
	}
}
