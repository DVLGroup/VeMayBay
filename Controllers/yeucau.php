<?php

	/**
	 * 
	 */
	class yeucau extends Controller {
		
		function __construct() {
			parent::__construct();
		}
		
		function index() {
			$this->view->render('yeucau/index');
		}
		function send()
		{
			$this->model->send();
		}
	}