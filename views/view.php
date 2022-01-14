<?php 
include("config/query_mysql.php");

$dir = "users/".$_SESSION['username']."/";
$xxx = get_data("user_files", $_SESSION['id_usr']);

 ?>