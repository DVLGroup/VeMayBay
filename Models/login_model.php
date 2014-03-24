<?php
/**
 * 
 */
class login_model extends Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function run(){
		$stm = $this -> db -> prepare("select user_id from user where 
		user_email=:login and user_pass_hash=:password");
		$stm -> execute(array(':login' => $_POST['login'], ':password' => $_POST['password']));
		// $data = $stm->fetchAll();
		// print_r($data);
		$count = $stm -> rowCount();
		if ($count > 0) {
			//login
			Session::init();
			Session::set('loggedIn', TRUE);
			header('Location:'.URL.'index_admin');
		} else {
			//error
			header('Location:'.URL.'login');
		}
	}
}
