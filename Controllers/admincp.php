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

	function datve() {
		$this->view->render_admin('datve/index');
	}

	function vemaybay() {
		$this->view->render_admin('vemaybay/index');
	}

	function user($xhrGetListings = false) {
		$this->view->js = URL . 'Views/admincp/user/js/default.js';
		if($xhrGetListings == 'xhrGetListings'){
			$this->model->showListUser();
		} elseif($xhrGetListings == 'xhrGetUserLevelName'){
			$this->model->showListUserLevelName();
		} else {
			$this->view->render_admin('user/index');
		}
	}

	function yeucau($xhrGetListings = false) {
		$this->view->js = URL . 'Views/admincp/yeucau/js/default.js';
		if($xhrGetListings == 'xhrGetListings'){
			$this->model->showListYeuCau();
		} else {
			$this->view->render_admin('yeucau/index');
		}
		
	}

	
	
	/////////////////////////////
	function login() {
		$this->model->login();
	}

	function logout() {
		$this->model->logout();
	}
}