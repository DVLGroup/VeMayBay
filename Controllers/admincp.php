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
		$this->view->script = array(
			URL . 'Views/admincp/vemaybay/js/default.js'
			,URL . 'public/js/admincp/bootstrap-datepicker.js'
			,URL . 'public/js/admincp/moment.min.js'
			,URL . 'public/js/admincp/daterangepicker.js'
			,URL . 'public/js/admincp/app.js'
			,URL . 'public/js/admincp/components-pickers.js'
		);

		$this->view->style = array(
			URL . 'public/css/admincp/datepicker.css'
			,URL . 'public/css/admincp/daterangepicker-bs3.css'
		);

		if($xhr == 'xhrGetListings'){
			$this->model->getList_veMayBay();
		}
		else {
			$this->view->render_admin('vemaybay/index');
		}
	}

	function datve( $xhr = false ) {
		Auth::handleLogin();
		$this->view->script = array(
			URL . 'Views/admincp/datve/js/default.js'
			,URL . 'public/js/admincp/custom/table-advanced.js'
		);

		$this->view->style = array(
			// style
		);

		if($xhr == 'xhrGetListings'){
			$this->model->getList_datVe();
		}
		elseif($xhr == 'xhrInsert'){
			$this->model->insert_datVe();
		}
		elseif($xhr == 'xhrUpdate'){
			$this->model->update_datVe();
		}
		elseif($xhr == 'xhrDelete'){
			$this->model->delete_datVe();
		}
		else {
			$this->view->render_admin('datve/index');
		}
	}
	
	function get_ct_dat_ve( $dat_ve_id ) {
		$this->model->getList_ct_datVe($dat_ve_id);
	}

	function hanhly( $xhr = false ) {
		Auth::handleLogin();
		$this->view->script = array( URL . 'Views/admincp/hanhly/js/default.js' );
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
		$this->view->script = array( URL . 'Views/admincp/sanbay/js/default.js' );
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
		$this->view->render_admin('thanhtoan/index');
	}

	function yeucau( $xhr = false ) {
		Auth::handleLogin();
		$this->view->script = array( URL . 'Views/admincp/yeucau/js/default.js' );
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
		$this->view->script = array( URL . 'Views/admincp/user/js/default.js' );
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

	public function get_money($number) {
		// VietNam national format with 2 decimals`
		setlocale(LC_MONETARY, 'vi_VN');
		return money_format('%.2n', $number) . "đ";
	}
}