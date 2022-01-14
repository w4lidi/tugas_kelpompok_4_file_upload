<?php 
//include("../config/config.php");
function cek_user($user){
	global $cp;
	$user = mysqli_query($cp, "select user_name from users where user_name='$user'");
	$c = mysqli_num_rows($user);
	//var_dump($user);
	//echo "jumlah = ".$c;
	//echo "<br> <br>";
	//var_dump($c);
	if($c == 1 ){
		
		return true;
	}
}

/*function setid_usr(){
	global $cp;
	$get_id_usr = mysqli_query($cp,"select max(id_user) from users");
	$id_usr = mysqli_fetch_row($get_id_usr);
	//var_dump($id_usr);
	$div_id = explode("_", $id_usr[0]);
	if($div_id[0] == ""){
		$div_id[0] = "usr";
	}else if($div_id[1] == ""){
		$div_id[1] = null;
	}
	var_dump($div_id); 
	echo "<br>";
	var_dump($div_id[1]);
	
	$coba = $div_id[1] + 2;
	echo "<br>userrrr === ".$coba;
	$joined_id = $div_id[0]."_".$coba;
	echo "<br>jadiiii === ".$joined_id;
	return $joined_id;

}
*/
function cek_login(){
	
}

function logout(){
	session_start();
	$ses_out = session_destroy();
	if($ses_out){
		return true;
		//header("Location: ../login-page.php");
	    //echo "<h1>anda sudah logout</h1>";
	    //echo "<a href='login.php'>login</a> <p> or </p> <a href='reg-page.php'>register</a>";
	}
}

function register($newuser,$newpass){
	global $cp;
	if(($newuser == true) && ($newpass == true)){
		if (cek_user($newuser) == true){
			session_start();
			$_SESSION['msg'] = "<p class='errmsg'>username sudah digunakan, silahkan cari yang lain</p>";
			//echo " username sudah terpakai <br>";
			//echo "<a href='reg-page.php'>cobalagi</a>";
		}
		else{
			//$id = setid_usr();
			$insert = mysqli_query($cp, "insert into users values('','".$newuser."','".$newpass."')");
			if ($insert){
				echo "berhasil daftar";
				mkdir("../users/".$newuser);
				session_start();
				$_SESSION['msg'] = "<p class='success'>berhasil daftar, silahkan login</p>";
				//header("Location: ../login-page.php");
				//header("Location: login.php");
				return true;
			}
			else{
				echo " gagal insert ";
				echo mysqli_error($cp);
			}
		}
	}
	else{
		echo"p u kosong";
	}
}

function login($user, $pass){
	global $cp;
	$user = mysqli_query($cp, "select * from users where user_name='".$user."' and password='".$pass."'");
	$c = mysqli_num_rows($user);
	//var_dump($user);
	//echo "jumlah = ".$c;
	//echo "<br> <br>";
	//var_dump($c);
	if($c == 1 ){
		session_start();
		$data = mysqli_fetch_row($user);
		$_SESSION['id_usr'] = $data[0];
		$_SESSION['username'] = $data[1];
		//echo $data[0].$data[1];
		return true;
	}
	else{
		session_start();
		$_SESSION['msg'] = "<p class='errmsg'>password or username salah</p>";
		echo "not found";
	}

}









 ?>