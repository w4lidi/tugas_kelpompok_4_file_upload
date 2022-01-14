<?php
//session_start();
//header("Location: ../index.php");
define("host", "localhost");
define("username","root");
define("password","");
define("database","file_upload");

$cp = mysqli_connect('localhost', 'root','','file_upload');

function get($tabel){
	global $cp;
	$data = mysqli_query($cp, "select * from $tabel where id_user=$user");
	return $data;
}


?>