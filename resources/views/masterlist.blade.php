{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>Contoh menampilkan file pdf dengan tag embed</h4>
    <embed type="application/pdf" src="img/dokumen.pdf" width="600" height="400"></embed>
</body>
</html> --}}

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
        <a class="navbar-brand" href="#">
          <img src="img/bs-putih.png" alt="" height="24" />
        </a>
      </div>
    </nav>

    <!-- Garis Merah -->
    <div id="redline" class="container-fluid" style="width: 100%">
      <div class="row bg-danger">
        <div class="card bg-danger" style="height: 3px"></div>
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
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <!-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap" /></svg>
              <span class="fs-4">Sidebar</span> -->
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
              </form>
            </a>
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
                <a href="#" class="nav-link text-white">
                  <i class="bi bi-signpost-split fs-5"></i>
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2" /></svg>
                  Tree Branch
                </a>
              </li>
              <li>
                <a href="/masterlist" class="nav-link active">
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
                  Log Out
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Akhir Sidebar -->

        <!-- Sisi kanan (kolom kanan)-->

        <div class="col-sm-10">
          <div class="container">
            <!-- baris 1 -->
            <div class="row my-3 ms-4">
              <h4><i class="bi bi-kanban-fill"></i> Master Lists</h4>
              <hr class="ms-0" />
            </div>
            <div>
                <embed type="application/pdf" src="img/dokumen.pdf" width="1300" height="600"></embed>
            </div>
          </div>
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
        <div class="card bg-danger" style="height: 7px"></div>
      </div>
    </div>
    <!-- Akhir Garis Merah -->

    <!-- AKHIR Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
