<?php

/**
 *
 */
class Index_admin extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		// header('location:../login');
		$this -> view -> render('index_admin/index');
	}

	function logout() {
		Session::init();
		Session::destroy();
		header('location:' . URL . 'login');
		exit ;
	}

}
