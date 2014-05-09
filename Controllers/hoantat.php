<?php
/**
 * 
 */
class hoantat extends Controller {
	
	function __construct() {
		parent::__construct();
	}
	function index(){
		$this->view->render('hoantat/index',TRUE);
	}
}
