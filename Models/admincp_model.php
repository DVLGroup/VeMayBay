<?php

	class Admincp_Model extends Model {
		function __construct(){
			parent::__construct();
		}

		function login(){

			$sql = "SELECT user_id FROM user WHERE user_email = :user_email AND user_password = :user_password";

			$user = array(
					':user_email' => $_POST['user_email'],
					':user_password' => Hash::create('md5', $_POST['user_password'], HASH_KEY)
				);

			$sth = $this->db->prepare($sql);
			$sth->execute($user);
			$count = $sth->rowCount();

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

		///////////////////////////// YEU CAU //////////////////////////
		function getListYeuCau(){
			$result = $this->db->select("SELECT * FROM yeu_cau");
			echo json_encode($result);
		}

		///////////////////////////// USER //////////////////////////
		function getListUser(){
			$query = "SELECT user.user_id, user.user_email, user.user_password, user_level.user_level_name FROM user, user_level WHERE user.user_level_id = user_level.user_level_id";
			$result = $this->db->select($query);
			echo json_encode($result);
		}

		function getListUserLevelName(){
			$result = $this->db->select("SELECT * FROM user_level");
			echo json_encode($result);
		}
		
		function insertUser() {
			$data = array(
					'user_email'=> $_POST['user_email'],
					'user_password'=> Hash::create('md5', $_POST['user_password'], HASH_KEY),
					'user_level_id'=> $_POST['user_level_id']
				);
			
			if($this->db->insert('user', $data)){
				echo 'success';
			} else {
				echo 'error';
			}
			
		}

		function deleteUser() {
			$id = $_POST['user_id'];
			$delete = $this->db->delete('user', "user_id = '$id'");
		}

		///////////////////////////// ??? //////////////////////////
	}