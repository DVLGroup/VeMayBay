<?php

	/**
	 * 
	 */
	class yeucau extends Controller {
		
		function __construct() {
			parent::__construct();
			$this->view->js = array('Views/yeucau/js/custom.js');
		}
		
		function index() {
			$this->view->render('yeucau/index');
		}
		function send()
		{
			$this->model->send();
		}
	}