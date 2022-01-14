<?php 
session_start();
if(!isset($_SESSION['id_usr'])){
	header("Location: ../login-page.php");
}else{
	header("Location: ../dasboard.php");
}


 ?>