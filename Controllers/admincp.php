<?php

/**
 *
 */
class Admincp extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->view->render_admin('index', true);
	}

	function dashboard() {
		$this->view->render_admin('dashboard/index');
	}

	function vemaybay() {
		$this->view->render_admin('vemaybay/index');
	}

	function diadiem() {
		$this->view->render_admin('diadiem/index');
	}

	function hangmaybay() {
		$this->view->render_admin('hangmaybay/index');
	}

	function yeucau() {
		$this->view->render_admin('yeucau/index');
	}

	/////////////////////////////
	function login() {
		$this->model->login();
	}

	function logout() {
		$this->model->logout();
	}
}