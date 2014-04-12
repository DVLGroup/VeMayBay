<?php
/**
 *
 */
class yeucau_model extends Model {

	function __construct() {
		parent::__construct();
	}

	function send($data) {
		$table = 'yeu_cau';
		$result = $this -> db -> insert($table, $data);
		Session::init();
		Session::set('check', 1);
		
	}

}
