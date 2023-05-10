<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/home.css"/>

    <!-- Link Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />

    <title>Home</title>
  </head>
  <body>
    <!-- Header-->
    <nav class="navbar navbar-light bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/home">
          <img src="img/bs-putih.png" alt="" height="24" />
        </a>
      </div>
    </nav>

    <!-- Garis Merah -->
    <div id="redline" class="container-fluid" style="width: 100%">
      <div class="row bg-danger">
        <div class="card bg-danger" style="height: 5px"></div>
      </div>
    </div>
    <!-- Akhir Garis Merah -->
    <!-- Akhir Header-->

    <!-- Halaman -->
    <div class="container-fluid">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-sm-2 text-start bg-dark">
          <div id="sidebar" class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px">
            {{-- <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> --}}
              <!-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap" /></svg>
              <span class="fs-4">Sidebar</span> -->
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
              </form>
            {{-- </a> --}}
            <hr />
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="/home" class="nav-link text-white" aria-current="page">
                  <i class="bi bi-house-door fs-5"></i>
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#home" /></svg>
                  Home
                </a>
              </li>
              <li>
                <a href="/treebranch" class="nav-link text-white">
                  <i class="bi bi-signpost-split fs-5"></i>
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2" /></svg>
                  Tree Branch
                </a>
              </li>
              <li>
                <a href="/masterlist" class="nav-link text-white">
                  <i class="bi bi-list-stars"></i>
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2" /></svg>
                  Master List
                </a>
              </li>
              <hr class="text-dark" />
              <hr class="text-dark" />
              <hr class="text-dark" />
              <hr class="text-dark" />
              <hr class="text-dark" />
              <hr class="text-dark" />
              <hr class="text-dark" />
              <hr class="text-dark" />
              <hr class="text-dark" />
              <hr class="text-dark" />
              <hr class="text-dark" />
              <hr class="text-dark" />
              <hr class="text-dark" />
              <hr />
              <li class="nav-item bg-light rounded">
                <a href="/" class="nav-link text-danger" aria-current="page">
                  <i class="bi bi-box-arrow-left"></i>
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#home" /></svg>
                  <b>Log Out</b>
                </a>
              </li>
            </ul>

            <!-- CODE SEBELUMNYA (DARI TEMPLATE) -->
            <!-- <div class="dropdown">
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2" />
                <strong>Rendra Edrian</strong>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div> -->
          </div>
        </div>
        <!-- Akhir Sidebar -->

        <!-- Sisi kanan (kolom kanan)-->

        <div class="col-sm-10">
          @yield('utama')
        </div>
        <!-- Akhir Sisi Kanan -->
      </div>
    </div>

    <!-- Akhir Halaman -->

    <!-- Footer -->
    <footer class="bg-dark text-white text-center pb-1 pt-1">
      <p class="text-muted">© Engineering Department - <a href="https://www.bridgestone.co.id/" class="text-white text-muted">PT. Bridgestone Tire Indonesia</a></p>
    </footer>
    <!-- Garis Merah -->
    <div id="redline" class="container-fluid" style="width: 100%">
      <div class="row bg-danger">
        <div class="card bg-danger" style="height: 8px"></div>
      </div>
    </div>
    <!-- Akhir Garis Merah -->

    <!-- AKHIR Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
