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
		Auth::handleLogin();
		$this->view->render_admin('dashboard/index');
	}

	function vemaybay( $xhr = false ) {
		Auth::handleLogin();
		$this->view->render_admin('vemaybay/index');
	}

	function datve( $xhr = false ) {
		Auth::handleLogin();
		$this->view->render_admin('datve/index');
	}

	function hanhly( $xhr = false ) {
		Auth::handleLogin();
		$this->view->js = URL . 'Views/admincp/hanhly/js/default.js';
		if($xhr == 'xhrGetListings'){
			$this->model->getList_hanhLy();
		}
		elseif($xhr == 'xhrInsert'){
			$this->model->insert_hanhLy();
		} 
		elseif($xhr == 'xhrUpdate'){
			$this->model->update_hanhLy();
		}
		elseif($xhr == 'xhrDelete'){
			$this->model->delete_hanhLy();
		}
		else {
			$this->view->render_admin('hanhly/index');
		}
	}
	
	function sanbay( $xhr = false ) {
		Auth::handleLogin();
		$this->view->js = URL . 'Views/admincp/sanbay/js/default.js';
		if($xhr == 'xhrGetListings'){
			$this->model->getList_sanBay();
		}
		elseif($xhr == 'xhrInsert'){
			$this->model->insert_sanBay();
		} 
		elseif($xhr == 'xhrUpdate'){
			$this->model->update_sanBay();
		}
		elseif($xhr == 'xhrDelete'){
			$this->model->delete_sanBay();
		}
		else {
			$this->view->render_admin('sanbay/index');
		}
	}

	function thanhtoan( $xhr = false ) {
		Auth::handleLogin();
		$this->view->render_admin('vemaybay/index');
	}

	function yeucau( $xhr = false ) {
		Auth::handleLogin();
		$this->view->js = URL . 'Views/admincp/yeucau/js/default.js';
		if($xhr == 'xhrGetListings'){
			$this->model->getList_YeuCau();
		} 
		elseif($xhr == 'xhrInsert'){
			$this->model->insert_YeuCau();
		}  
		elseif($xhr == 'xhrUpdate'){
			$this->model->update_YeuCau();
		}
		elseif($xhr == 'xhrDelete'){
			$this->model->delete_YeuCau();
		}
		else {
			$this->view->render_admin('yeucau/index');
		}
		
	}

	function user($xhr = false) {
		Auth::handleLogin();
		$this->view->js = URL . 'Views/admincp/user/js/default.js';
		if($xhr == 'xhrGetListings'){
			$this->model->getList_User();
		}
		elseif($xhr == 'xhrInsert'){
			$this->model->insert_User();
		} 
		elseif($xhr == 'xhrUpdate'){
			$this->model->update_User();
		}
		elseif($xhr == 'xhrDelete'){
			$this->model->delete_User();
		}
		else {
			$this->view->render_admin('user/index');
		}
	}

	function user_level ( $xhr = false ) {
		if($xhr == 'xhrGetListings'){
			$this->model->getList_UserLevel();
		} 
		elseif($xhr == 'xhrInsert'){
			$this->model->insert_UserLevel();
		}  
		elseif($xhr == 'xhrUpdate'){
			$this->model->update_UserLevel();
		}
		elseif($xhr == 'xhrDelete'){
			$this->model->delete_UserLevel();
		}
		else {
			$this->view->render_admin('user/index');
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