<?php
include("../model/model_users.php");
if(isset($_POST['kirim'])){
	//user logout
	include("../model/model_file.php");
	if($_POST['kirim'] === "logout"){
		$out = logout();
		if($out){
			header("Location: ../login-page.php");
		}
	}

	
	//include("../sampah/ss.php");
	// //user login
	if($_POST['kirim'] === "login"){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$success = login($user,$pass);
		if($success == 1){
			echo "berhasil";
			header("Location: ../index.php");
		}
		else{
			echo "yoru password or username salah";
			header("Location: ../login-page.php");
		}
	}

	//register
	if($_POST['kirim'] === "register"){
		echo "user mau daftar";
		$newuser = $_POST['newusername'];
		$newpass = $_POST['newpassword'];
		 $reg_success = register($newuser, $newpass);
		if ($reg_success) {
			header("Location: ../login-page.php");
			echo "regiter berhasil silahkAN <a href='login-page.php>Login</a>";
		}
		else{
			header("Location: ../login-page.php");
			//echo "gagal";
		}
		 //break;
	}



	// file upload
	if($_POST['kirim'] === "upload"){
		//echo "ada file user - on controler kirim == upload 1 <br>";
		$data_up = file_data($_FILES['myfile']);
		if(!$data_up){
			echo "controler -> post  = upload -> data_up";
		}
		echo "ada file user  - on controler kirim == upload 2 <br>";
	}
}


if(isset($_GET['file_name'])){
	include("../model/model_file.php");
	//get delete file
	if($_GET['file_name'] == true){
		echo $_GET['file_name'];
		$s = hapus_file($_GET['file_name']);
		
		if($s){
			echo "ok";
		}
	}
}

 ?>
