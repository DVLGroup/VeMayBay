<?php

/**
 *
 */
class lienhe extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this -> view -> render('lienhe/index');
	}

}
