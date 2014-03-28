<?php

/**
 *
 */
class Admincp extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->view->render_admin('index');
	}

}