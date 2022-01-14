<?php
session_start();
if(isset($_SESSION['id_usr'])){
  header("Location: dasboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
      />
      <!--CDN-->
      <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
        />
        <link rel="shortcut icon" href="img/png-transparent-gray-shark-with-flames-illustration-shark-shark-bizant-river-shark-vicious-shark-animals-orange-logo.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <title>Login</title>
      </head>
      <style>
      * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      }
      body {
      width: 100%;
      height: 670px;
      display: flex;
      background-color: #3d5afe;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      }
      .box {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      background-color: #fafafa;
      border-radius: 15px;
      padding: 20px 20px;
      }
      .contentForm {
      margin: 10px;
      }
      .form-control {
      border-color: #3d5afe;
      border-style: solid;
      border-width: 0 0 1px 0;
      }
      .form-control:focus {
      border-width: 0 0 3px 0;
      color: #9e9e9e;
      box-shadow: none;
      transition: all 0.1s ease-in-out;
      }
      .btn {
      border-radius: 20px;
      margin: 5px;
      }
      .footer {
      background-color: black;
      width: 100%;
      height: 50px;
      overflow: hidden;
      }
      .errmsg{
        color: red;
      }
      .success{
        color: green;
      }
      .footer p {
      text-align: center;
      font-family: sans-serif;
      color: white;
      font-size: 1rem;
      line-height: 50px;
      }
      </style>
      <body>
        <div class="container p-4">
          <div class="box">
            <div class="row contentForm">
              <div class="col-sm-12 col-md-6 col-lg-6">
                <img src="asset/img/shark.png" alt="gambar" class="img-fluid" />
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6">
                <h4 class="text-center mb-5 text-primary">Login System</h4>
                <!--FORM LOGIN-->
                <form class="mt-3" id="log_form" action="controler/controler.php" method="post">
                  <div class="mb-3">
                    <label for="username" class="form-label text-primary"
                    >User Name</label
                    >
                    <input
                    placeholder="Masukkan User Name Anda"
                    type="text" name="username"
                    class="form-control"
                    id="username"
                    aria-describedby="emailHelp"
                    />
                  </div>
                  <div class="mb-3">
                    <label
                      for="password"
                      class="form-label text-primary"
                    >Password</label
                    >
                    <input
                    placeholder="Password"
                    type="password" name="password"
                    class="form-control"
                    id="password"
                    />
                  </div>
                   <!-- msg -->
                  <div class="mb-3">
                    <div class="form-label text-primary" >
                      <?php
                        if(isset($_SESSION['msg'])){
                         echo $_SESSION['msg'];
                         session_destroy();
                        }else{
                          //header("Location: dasboard.php");
                        }
                        
                      ?>
                      </div>
                  </div>
                  <!-- end msg -->
                  <div class="mb-3 form-check">
                    <!-- <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1"
                    />
                    <label class="form-check-label" for="exampleCheck1"
                    >Remember Me</label
                    > -->
                  </div>
                  <button
                  type="submit" name="kirim" form="log_form" value="login"
                  class="btn w-100"
                  style="background-color: #3d5afe; color: white"
                  >
                  <i class="bi bi-check-circle m-2"></i>LOGIN<i>
                  </button>
                  <!-- Button trigger modal -->
                  <button
                  type="button"
                  class="btn w-100"
                  data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop"
                  style="background-color: #3d5afe; color: white;"
                  >
                  <i class="bi bi-view-stacked m-1"></i>
                  REGISTRASI
                  </button>
                </form>
                <!--FORM LOGIN-->
              </div>
            </div>
          </div>
        </div>
     <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,192L48,213.3C96,235,192,277,288,245.3C384,213,480,107,576,101.3C672,96,768,192,864,213.3C960,235,1056,181,1152,165.3C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
       <div class="container-fluid pt-5 bg-light">
        <div class="container bg-light mb-4">
          <h2 class="text-center text-primary text-muted mb-4">
          <i class="bi bi-camera m-2 text-primary"></i>Photo
          </h2>
          <div
            id="carouselExampleCaptions"
            class="carousel slide"
            data-bs-ride="carousel"
            >
            <div class="carousel-indicators">
              <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
              ></button>
              <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="1"
              aria-label="Slide 2"
              ></button>
              <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="2"
              aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                src="img/gba1 (1).jpg"
                class="d-block w-100"
                alt="picture"
                height="400px"
                />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Views Of Montain Fuji</h5>
                  <p>
                    Wonderful Of The Tokyo , JAPAN 2019 In The Mauntain Of Wabaki
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img
                src="img/gba1 (2).jpg"
                class="d-block w-100"
                alt="..."
                height="400px"
                />
                <div class="carousel-caption d-none d-md-block">
                  <h5>DK (King Drift) The Tokyo</h5>
                  <p>
                    Fast And Forious Of Japan Part 6 , Tokyo Drift 21 desc 2011 & The Yakuza
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img
                src="img/gba1 (3).jpg"
                class="d-block w-100"
                alt="..."
                height="400px"
                />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Umbrrella</h5>
                  <p>
                    The Legend Of Californa 1999 years Ago ,first LEONARDO DA VINCI in Use Monalisa
                  </p>
                </div>
              </div>
            </div>
            <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev"
            >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next"
            >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><defs><linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%"><stop offset="5%" stop-color="#002bdc88"></stop><stop offset="95%" stop-color="#32ded488"></stop></linearGradient></defs><path d="M 0,600 C 0,600 0,200 0,200 C 77.46411483253587,230.29665071770336 154.92822966507174,260.5933014354067 256,252 C 357.07177033492826,243.4066985645933 481.7511961722488,195.92344497607658 598,207 C 714.2488038277512,218.07655502392342 822.066985645933,287.7129186602871 914,271 C 1005.933014354067,254.28708133971296 1081.9808612440193,151.22488038277513 1167,125 C 1252.0191387559807,98.77511961722487 1346.0095693779904,149.38755980861242 1440,200 C 1440,200 1440,600 1440,600 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150 path-0"></path><defs><linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%"><stop offset="5%" stop-color="#002bdcff"></stop><stop offset="95%" stop-color="#32ded4ff"></stop></linearGradient></defs><path d="M 0,600 C 0,600 0,400 0,400 C 114.89952153110048,368.7942583732057 229.79904306220095,337.58851674641147 331,360 C 432.20095693779905,382.41148325358853 519.7033492822967,458.4401913875598 612,463 C 704.2966507177033,467.5598086124402 801.3875598086123,400.65071770334924 890,392 C 978.6124401913877,383.34928229665076 1058.7464114832535,432.9569377990431 1149,444 C 1239.2535885167465,455.0430622009569 1339.6267942583731,427.52153110047846 1440,400 C 1440,400 1440,600 1440,600 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150 path-1"></path></svg>
    </div> -->
    <div class="footer">
      
    </div>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
    ></script>
    <!-- Modal -->
    <div
      class="modal fade"
      id="staticBackdrop"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
      >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header d-inline">
            <img
            src="img/reg.png"
            class="rounded mx-auto d-block"
            alt="gambar"
            width="200px"
            height="200px"
            />
            <h5 class="text-center text-primary">REGISTRASI</h5>
          </div>
          <!--FORM REGISTRASI-->
          <form action="controler/controler.php" id="reg_form" method="post">
            <div class="modal-body">
              <div class="mb-2">
                <label for="user name"
                  class="form-label text-primary"
                  >User Name
                </label>
                <input
                type="text" name="newusername"
                class="form-control"
                id="user name"
                placeholder="Masukkan Nama Lengkap Anda"
                />
              </div>
              <div class="mb-2">
                <!-- <label for="Nim" class="form-label text-primary"
                >Nim Anda</label
                >
                <input
                type="text"
                class="form-control"
                id="Nim"
                placeholder="NIM Anda"
                /> -->
              </div>
              <div class="mb-2">
                <!-- <label for="NimClient" class="form-label text-primary"
                >Jurusan</label
                >
                <select
                  class="form-select form-select-sm"
                  aria-label=".form-select-sm example"
                  >
                  <option selected>Pilihan</option>
                  <option value="1">TEHNIK INFORMATIKA</option>
                  <option value="2">SISTEM INFORMASI</option>
                </select> -->
              </div>
              <div class="mb-2">
                <!-- <label
                  for="exampleFormControlInput1"
                  class="form-label text-primary"
                >Email address</label
                >
                <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="name@example.com"
                /> -->
              </div>
              <div class="mb-2">
                <label
                  for="inputPassword" class="col-sm-2 col-form-label"
                >Password</label
                >
                <div class="col-sm-10">
                  <input
                  type="password" name="newpassword"
                  class="form-control"
                  id="inputPassword">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
              >
              <i class="bi bi-x-circle text-danger"></i>
              Close
              </button>
              <button type="submit" name="kirim" value="register" form="reg_form" class="btn btn-primary">
              Daftar Now!
              <i class="bi bi-bookmark-check"></i>
              </button>
            </div>
          </form>
          <!--FORM REGISTRASI-->
        </div>
      </div>
    </div>
  </body>
</html>