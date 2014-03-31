<?php

	class Admincp_Model extends Model {
		function __construct(){
			parent::__construct();
		}

		function login(){
			$user_email = $_POST['user_email'];
			$user_password = $_POST['user_password'];
			$sql = "SELECT user_id FROM user WHERE user_email = :user_email AND user_password = :user_password";
			$sth = $this->db->prepare($sql);
			$sth->execute(array(
				':user_email' => $user_email,
				':user_password' => Hash::create('md5', $user_password, HASH_KEY)
				)
			);

			$count = $sth->rowCount();
			echo $count;

			if($count > 0){
				Session::init();
				Session::set('Admin', true);
				Session::set('loggedIn', 'Day la logged');
				header('location:'.URL.'admincp/dashboard');
			} else {
				header('location:'.URL.'admincp');
				return false;
			}

		}

		function logout() {
			Session::init();
			Session::destroy();
			header('location:'.URL.'admincp');
			exit;
		}

		/////////////////////////////
		function showListYeuCau(){
			$sql = "SELECT * FROM yeu_cau";
			$sth = $this->db->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_ASSOC);
			$sth->execute();

			$data = $sth->fetchAll();
			print_r($data);
			//echo json_encode($data);
		}

		
	}