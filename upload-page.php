<?php
 session_start();
if (isset($_SESSION['id_usr'])){
    //header("Location: dasboard.php");
    //echo "_SESSION set";
}else{
    header("Location: login-page.php");
}
// //var_dump($_SESSION['id_usr']);
// //echo session_save_path();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style type="text/css">
      
      .errmsg{
        color: red;
      }
      .success{
        color: green;
      }
    </style>


    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
      />
      <!-- Bootstrap CSS -->
      <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
        />
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
          />
          <link rel="stylesheet" href="style.css" />
          <title>Halam Utama</title>
        </head>
<body>
    <!DOCTYPE html>
<html>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
	 <h4><a href="dasboard.php" class="success">dasboard</a></h4>
	</nav>
    <div class="container-fluid">
	<h1>File upload</h1>

	<p>Show a file-select field which allows a file to be chosen for upload:</p>
	<form action="controler/controler.php" method="post" enctype="multipart/form-data">
	  <label for="myfile">Select a file less than 40Mb:</label>
	  <input type="file" required id="myfile" name="myfile"><br><br>
	  <input type="radio" id="public"  name="privasi" value="1"> <label for="public">publik</label>
	  <input type="radio" id="private" checked name="privasi" value="2"> <label for="private">prtvate</label><br><br>
	 <input type="submit" name="kirim" value="upload">
	</form>
	</div>


</body>
</html>


    
</body>
</html>