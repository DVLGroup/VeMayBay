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

	function user($xhr = false) {
		$this->view->js = URL . 'Views/admincp/user/js/default.js';
		if($xhr == 'xhrGetListings'){
			$this->model->getListUser();
		} 
		elseif($xhr == 'xhrGetUserLevelName'){
			$this->model->getListUserLevelName();
		} 
		elseif($xhr == 'xhrInsert'){
			$this->model->insertUser();
		} 
		elseif($xhr == 'xhrUpdate'){
			$this->model->updateUser();
		}
		elseif($xhr == 'xhrDelete'){
			$this->model->deleteUser();
		}
		else {
			$this->view->render_admin('user/index');
		}
	}

	function yeucau($xhrGetListings = false) {
		$this->view->js = URL . 'Views/admincp/yeucau/js/default.js';
		if($xhrGetListings == 'xhrGetListings'){
			$this->model->getListYeuCau();
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