<?php
include("views/view.php");
include("model/model_math.php");
//session_start();
if(!$_SESSION['id_usr']){
header("Location: login-page.php");
}



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
          <!-- nabvar -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <div class="container-fluid">
              <!--offcanvas triger-->
              <button
              class="navbar-toggler me-2"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasExample"
              aria-controls="offcanvasExample"
              >
              <span
                class="navbar-toggler-icon"
                data-bs-target="#offcanvasExample"
              ></span>
              </button>
              <!--offcanvas triger end-->
                <a class="navbar-brand fw-bold text-uppercase me-auto" href="#">
                  <i class="bi bi-discord fs-2 m-3"></i>FIRE SHARK</a>
              <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              >
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex ms-auto">
                  <div class="input-group my-3 my-lg-0 m-4">
                    <input
                    type="search"
                    class="form-control"
                    placeholder="Search......"
                    aria-label="Recipient's username"
                    aria-describedby="button-addon2"
                    />
                    <button
                    class="btn btn-outline-light"
                    type="button"
                    id="button-addon2"
                    >
                    <i class="bi bi-search"></i>
                    </button>
                  </div>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      >
                      <i class="bi bi-person-circle fs-3 text-light"></i>
                    </a>
                    <ul
                      class="dropdown-menu dropdown-menu-end"
                      aria-labelledby="navbarDropdown"
                      >
                      <li><a class="dropdown-item" href="#"><?php echo $_SESSION['username'];?></a></li>
                      <li><a class="dropdown-item" href="upload-page.php">Upload</a></li>
                      <li><hr class="dropdown-divider" /></li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <form action="controler/controler.php" id="out_form" method="post">
                            <button type="submit" name="kirim" form="out_form" value="logout">LOGOUT</button>
                          </form>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- end navbar-->
          <!--offCanvas-->
          <div
            class="offcanvas offcanvas-start sidebar-nav text-dark"
            tabindex="-1"
            id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel"
            style="background-color: #e0e0e0"
            >
            <div class="offcanvas-header bg-light">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">
              <i class="bi bi-apple fs-1 m-1" style="color: #757575"></i>
              <i class="bi bi-github fs-2 m-2" style="color: blueviolet"></i>
              <i class="bi bi-google fs-2 m-1" style="color: deeppink"></i>
              <i class="bi bi-windows fs-2 m-1" style="color: dodgerblue"></i>
              </h5>
              <button
              type="button"
              class="btn-close text-reset"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
              ></button>
            </div>
            <div class="offcanvas-body p-0">
              <nav>
                <ul class="navbar-nav">
                  <li>
                    <div
                      class="
                      text-muted
                      small
                      fw-bold
                      text-uppercase text-dark
                      px-3
                      mt-2
                      "
                      >
                      CORE
                    </div>
                  </li>
                  <li>
                    <a href="" class="nav-link px-3 active">
                      <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                      <span>DASHBOARD</span>
                    </a>
                    <a class="navbar-brand fw-bold text-uppercase me-auto" href="#">
                  <i class="bi bi-discord fs-2 m-3"></i>FIRE SHARK</a>
                  </li>
                  <li class="my-4">
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <div
                      class="text-mute small fw-bold text-uppercase text-dark px-3"
                      >
                      INTERFACE
                    </div>
                  </li>
                  <li>
                    <a
                      class="nav-link px-3 sidebar-link"
                      data-bs-toggle="collapse"
                      href="#collapseExample"
                      role="button"
                      aria-expanded="false"
                      aria-controls="collapseExample"
                      >
                      <span><i class="bi bi-columns m-2"></i></span>
                      <span>Layout</span>
                      <span class="right-icon ms-auto"
                        ><i class="bi bi-caret-down-fill text-dark"></i
                      ></span>
                    </a>
                    <div class="collapse" id="collapseExample">
                      <div class="card card-body bg-elight">
                        <ul class="navbar-nav ps-3">
                          <a href="#" class="nav-link px-3">
                            <span><i class="bi bi-back text-darkk m-1"></i></span>
                            <span class="text-dark">Nested Link</span>
                          </a>
                        </ul>
                        <ul class="navbar-nav ps-3">
                          <a href="#" class="nav-link px-3">
                            <span><i class="bi bi-wrench text-success m-1"></i></span>
                            <span class="text-dark">service</span>
                          </a>
                        </ul>
                        <ul class="navbar-nav ps-3">
                          <a href="#" class="nav-link px-3">
                            <span
                              ><i class="bi bi-person-lines-fill text-warning m-1"></i
                            ></span>
                            <span class="text-dark">contact</span>
                          </a>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="my-4">
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a
                      class="nav-link px-3 sidebar-link"
                      data-bs-toggle="collapse"
                      href="#tes"
                      role="button"
                      aria-expanded="false"
                      aria-controls="collapseExample"
                      >
                      <span><i class="bi bi-calendar2-range-fill m-2"></i></span>
                      <span>Data</span>
                      <span class="right-icon ms-auto"
                        ><i class="bi bi-caret-down-fill text-dark"></i
                      ></span>
                    </a>
                    <div class="collapse" id="tes">
                      <div class="card card-body bg-elight">
                        <ul class="navbar-nav ps-3">
                          <a href="#" class="nav-link px-3">
                            <span><i class="bi bi-people-fill"></i></span>
                            <span class="text-dark">Mahasiswa</span>
                          </a>
                        </ul>
                        <ul class="navbar-nav ps-3">
                          <a href="#" class="nav-link px-3">
                            <span><i class="bi bi-person-video2 m-1"></i></i></span>
                            <span class="text-dark">Dosen</span>
                          </a>
                        </ul>
                        <ul class="navbar-nav ps-3">
                          <a href="#" class="nav-link px-3">
                            <span
                              ><i class="bi bi-person-lines-fill text-warning m-1"></i
                            ></span>
                            <span class="text-dark">contact</span>
                          </a>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- end offcanvas-->
          <main class="mt-5 pt-5">
            <div class="container fluid">
              <div class="row">
                <div class="col-md-12 fw-bold fs-3">
                  <h2>Dashboard</h2>
                  <!-- -------------------- -->
                  <?php

                  //session_start();
                  if(isset($_SESSION['msg']))
                  echo $_SESSION['msg']; 
                  unset($_SESSION['msg']);


                   ?>
                </div>
                <div>
                  <table border="1">
                    <thead>
                      <th>nama file</th>
                      <th>ukuran</th>
                      <th>privasi</th>
                      <th colspan="2">action</th>

                    </thead>
                    <tbody>
                      <?php   

                      
                      $rr ="class='btn btn-success btn-sm'";


                        foreach ($xxx as $value) {
                          echo "<tr>";
                          echo "<td>".$value["file_name"]."</td>
                          <td>".size_convrt($value['size'])."</td>
                          <td>".$value['privasi']."</td>
                          <td> <a ".$rr." href='controler/controler.php?file_name=".$value['file_name']."'>Hapus</a></td>
                          <td> <a ".$rr."href='".$dir.$value['file_name']."' download='".$value['file_name']."'>Download</a></td>";

                          echo "</tr>";
                        }


                       ?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </main>
          <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"
          ></script>
        </body>
      </html>