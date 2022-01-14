<?php
 session_start();
if (isset($_SESSION['id_usr'])){
    header("Location: dasboard.php");
    //echo "_SESSION set";
}else{
    header("Location: login-page.php");
}
// //var_dump($_SESSION['id_usr']);
// //echo session_save_path();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>index</title>
 </head>
 <body>
 <h1>halaman index</h1>
 <h3>halo <?php echo $_SESSION['username'] ?> selamat datang</h3>
 <form action="controler/controler.php" method="post">
     <input type="submit" name="kirim" value="logout">
 </form>
 <h4><a href="dasboard.php">halaman  dasboarad</a></h4>
 </body>
 </html>