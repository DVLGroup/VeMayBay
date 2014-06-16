<?php

	class Admincp_Model extends Model {
		function __construct(){
			parent::__construct();
		}

		function login(){

			$sql = "SELECT user_id FROM user WHERE user_email = :user_email AND user_password = :user_password";

			$user = array(
					':user_email' 		=> $_POST['user_email'],
					':user_password' 	=> Hash::create('md5', $_POST['user_password'], HASH_PASSWORD_KEY)
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

		///////////////////////////// VE MAY BAY //////////////////////////
		function getList_veMayBay(){
			$json = file_get_contents("./DataFile/dbvemaybay.json");
			$jsonIterator = new RecursiveIteratorIterator(
			    new RecursiveArrayIterator(json_decode($json, TRUE)),
			    RecursiveIteratorIterator::SELF_FIRST
			   );

			foreach ($jsonIterator as $key => $val) {
			    if(is_array($val)) {
			        echo "$key:\n";
			    } else {
			        echo "$key => $val\n";
			    }
			}
		}

		///////////////////////////// DAT VE //////////////////////////
		function getList_datVe(){
			$query = "SELECT * , count( ct_dat_ve.ct_dat_ve_id ) as tong_so_ve
					FROM dat_ve, ct_dat_ve, thanh_toan, hanh_ly
					WHERE dat_ve.dat_ve_id = ct_dat_ve.dat_ve_id
					AND dat_ve.thanh_toan_id = thanh_toan.thanh_toan_id
					GROUP BY dat_ve.dat_ve_id";
			$result = $this->db->select($query);
			echo json_encode($result);
		}

		// get ct_datVe with ID 
		function getList_ct_datVe ( $dat_ve_id ) {
			$query = "SELECT * FROM ct_dat_ve, hanh_ly 
					WHERE ct_dat_ve.hanh_ly_id = hanh_ly.hanh_ly_id 
					AND ct_dat_ve.dat_ve_id = '". $dat_ve_id ."'";
			$result = $this->db->select($query);
			echo json_encode($result);
		}


		///////////////////////////// HANH LY //////////////////////////
		function getList_hanhLy(){
			$query = "SELECT * FROM hanh_ly";
			$result = $this->db->select($query);
			echo json_encode($result);
		}
		
		function insert_hanhLy() {
			//get last ID
			$last_hanhLyID = $this->db->select("SELECT hanh_ly_id FROM hanh_ly ORDER BY hanh_ly_id DESC LIMIT 1");
			if ( $last_hanhLyID ) {
				$last_hanhLyID = $last_hanhLyID[0]['hanh_ly_id'] + 1;
			} else {
				$last_hanhLyID = 1;
			}

			$data = array(
					'hanh_ly_id'		=> $last_hanhLyID,
					'hanh_ly_name'		=> $_POST['hanh_ly_name'],
					'hang_bay'			=> $_POST['hang_bay'],
					'gia_bay'			=> $_POST['gia_bay'],
					'gia_hanh_ly'		=> $_POST['gia_hanh_ly']
				);
			
			if($this->db->insert('hanh_ly', $data)){
				echo 'success';
			} else {
				echo 'error';
			}
			
		}

		function delete_hanhLy() {
			$id = $_POST['hanh_ly_id'];
			$delete = $this->db->delete('hanh_ly', "hanh_ly_id = '$id'");
		}

		function update_hanhLy() {
			$id = $_POST['edit_hanhLy_id'];
		
			$data = array(
				'hanh_ly_id'	=> $_POST['edit_hanhLy_id'],
				'hanh_ly_name'	=> $_POST['edit_hanhLy_name'],
				'hang_bay'		=> $_POST['edit_hangBay'],
				'gia_bay'		=> $_POST['edit_giaBay'],
				'gia_hanh_ly'	=> $_POST['edit_giaHanhLy']
			);

			$sth = $this->db->update('hanh_ly', $data, "hanh_ly_id = '$id'");

			if( $sth ) {
				echo 'success';
			} else {
				echo 'error';
			}

		}


		///////////////////////////// SAN BAY //////////////////////////
		function getList_sanBay(){
			$query = "SELECT * FROM san_bay";
			$result = $this->db->select($query);
			echo json_encode($result);
		}
		
		function insert_sanBay() {

			$data = array(
					'san_bay_code'	=> $_POST['san_bay_code'],
					'name'			=> $_POST['san_bay_name'],
					'diadiem'		=> $_POST['san_bay_diaDiem']
				);
			
			if($this->db->insert('san_bay', $data)){
				echo 'success';
			} else {
				echo 'error';
			}
			
		}

		function delete_sanBay() {
			$id = $_POST['san_bay_code'];
			echo $id;
			$delete = $this->db->delete('san_bay', "san_bay_code = '$id'");
		}

		function update_sanBay() {
			$id = $_POST['edit_sanBay_id'];
		
			$data = array(
				'san_bay_code'	=> $_POST['edit_sanBay_id'],
				'name'			=> $_POST['edit_sanBay_name'],
				'diadiem'		=> $_POST['edit_sanBay_diaDiem']
			);

			$sth = $this->db->update('san_bay', $data, "san_bay_code = '$id'");
			if( $sth ){
				echo 'success';
			} else {
				echo 'error';
			}

		}


		///////////////////////////// YEU CAU //////////////////////////
		function getList_YeuCau(){
			$result = $this->db->select("SELECT * FROM yeu_cau");
			echo json_encode($result);
		}

		///////////////////////////// USER //////////////////////////
		function getList_User(){
			$query = "SELECT * FROM user, user_level WHERE user.user_level_id = user_level.user_level_id";
			$result = $this->db->select($query);
			echo json_encode($result);
		}
		
		function insert_User() {
			$data = array(
					'user_email'	=> $_POST['user_email'],
					'user_password'	=> Hash::create('md5', $_POST['user_password'], HASH_PASSWORD_KEY),
					'user_level_id'	=> $_POST['user_level_id']
				);
			
			if($this->db->insert('user', $data)){
				echo 'success';
			} else {
				echo 'error';
			}
			
		}

		function delete_User() {
			$id = $_POST['user_id'];
			$delete = $this->db->delete('user', "user_id = '$id'");
		}

		function update_User() {
			$id = $_POST['edit_user_id'];
			$pass = Hash::create('md5', $_POST['edit_user_password'], HASH_PASSWORD_KEY);
			$old_pass = $this->db->select("SELECT user_password FROM user WHERE user_id = '$id'");
			 // echo $old_pass[0]['user_password'] .'</br>' ;
			 // echo $pass;
			if($pass == $old_pass[0]['user_password']){
				$data = array(
					'user_password'=> Hash::create('md5', $_POST['edit_user_new_password'], HASH_PASSWORD_KEY),
					'user_level_id'=> $_POST['edit_user_level_id']
				);
				$sth = $this->db->update('user', $data, "user_id = '$id'");
				if($sth->affected_rows() >= 0){
					echo 'success';
					return;
				}
			}
			
			echo 'error';
		}

		///////////////////////////// USER LEVEL //////////////////////////
		function getList_UserLevel() {
			$result = $this->db->select("SELECT * FROM user_level");
			echo json_encode($result);
		}

		function insert_UserLevel() {
			//get last ID
			$last_userLevelID = $this->db->select("SELECT user_level_id FROM user_level ORDER BY user_level_id DESC LIMIT 1");
			if ( $last_userLevelID ) {
				$last_userLevelID = $last_userLevelID[0]['user_level_id'] + 1;
			} else {
				$last_userLevelID = 1;
			}

			$data = array(
					'user_level_id'		=> $last_userLevelID
					,'user_level_name' 	=> $_POST['user_level_name']
				);
			$result = $this->db->insert('user_level', $data);
			if( $result ){
				echo 'success';
			} else {
				echo 'error';
			}
		}

		function delete_UserLevel() {
			$id = $_POST['user_level_id'];
			$delete = $this->db->delete('user_level', "user_level_id = '$id'");
		}
	}