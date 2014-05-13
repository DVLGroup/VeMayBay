<?php
/**
 * 
 */
class hoantat_model extends Model {
	
	function __construct() {
		parent::__construct();
	}
	function insertPhieuDat($data)
	{
		$this->db->insert('dat_ve', $data);
	}
	function insertCTPhieuDat($dataDetail)
	{
		$this->db->insert('ct_dat_ve', $dataDetail);
	}
}
