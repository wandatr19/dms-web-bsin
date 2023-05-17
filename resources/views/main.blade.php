<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="layer.css" />

    <!-- Font Link Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />

    <!-- Link Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />

    <title>DMS | Eng Design</title>
  </head>
  <body>
    <div class="container-fluid">
      <!-- Header -->
      <div class="row bg-dark sticky-top">
        <div class="col-auto text-start bg-dark p-0 me-auto">
          <nav class="navbar navbar-light bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="img/bs-putih.png" alt="" height="24" />
              </a>
            </div>
          </nav>
        </div>

        <div class="col-auto bg-dark mt-3 text-end">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none fs-6" id="UserInfo" data-bs-toggle="UserInfo" aria-expanded="false">
            <i class="bi bi-person-circle mx-2 fs-5"></i>
            {{auth()->user()->name}}
          </a>
          <!-- <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
              <p class="text-center">Email:</p>
              <li><a class="dropdown-item" href="#">New project...</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="#">Log out</a></li>
            </ul> -->
        </div>

        <!-- Garis Merah -->
        <div id="redline" class="container-fluid" style="width: 100%">
          <div class="row bg-danger">
            <div class="card bg-danger" style="height: 3px"></div>
          </div>
        </div>

        <!-- Akhir Garis Merah -->
      </div>
      <!-- Akhir header -->

      <!-- ---------------------------------------------------------------------------------------------------------------------- -->

      <!-- Sidebar & Content -->
      <div class="row">
        <!-- Sidebar -->
        <div class="col-sm-2 text-start bg-dark py-1">
          <div class="container-fluid m-0 p-0">
            <div id="sidebar" class="d-flex flex-column flex-shrink-0 p-0 text-white bg-dark shadow py-1" style="height: 100vh">
              <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <!-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap" /></svg>
              <span class="fs-4">Sidebar</span> -->
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                  <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </form>
              </a>
              <hr />
              <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item btn-outline-secondary rounded">
                  <a href="{{route('home')}}" class="nav-link text-white" aria-current="page">
                    <i class="bi bi-house-door fs-5"></i>
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home" /></svg>
                    Home
                  </a>
                </li>
                <li class="nav-item btn-outline-secondary rounded">
                  <a href="{{route('treebr')}}" class="nav-link text-white">
                    <i class="bi bi-signpost-split fs-5"></i>
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2" /></svg>
                    Tree Branch
                  </a>
                </li>
                <li class="nav-item btn-outline-secondary rounded">
                  <a href="{{route('masterlist')}}" class="nav-link text-white">
                    <i class="bi bi-easel3-fill fs-5"></i>
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2" /></svg>
                    Masterlist
                  </a>
                </li>
                @if (auth()->user()->role == "admin")
                <li class="nav-item btn-outline-secondary rounded">
                  <a href="{{route('adduser')}}" class="nav-link text-white">
                    <i class="bi bi-person-fill-add fs-5"></i>
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2" /></svg>
                    Add User
                  </a>
                </li>
                <li class="nav-item btn-outline-secondary rounded">
                  <a href="" class="nav-link text-white">
                    <i class="bi bi-file-earmark-plus-fill fs-5"></i>
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2" /></svg>
                    Add Document
                  </a>
                </li>
                <li class="nav-item btn-outline-secondary rounded">
                  <a href="{{route('listuser')}}" class="nav-link text-white">
                    <i class="bi bi-person-lines-fill fs-5"></i>
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2" /></svg>
                    List User
                  </a>
                </li>
                <li class="nav-item btn-outline-secondary rounded">
                  <a href="{{route('history')}}" class="nav-link text-white">
                    <i class="bi bi-clock-history fs-5"></i>
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2" /></svg>
                    History
                  </a>
                </li>
                @endif
                <!-- <hr class="text-dark" />
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
                <hr class="text-dark" /> -->
              </ul>
              <hr />
            </div>
          </div>

          <!-- logout -->
          <div class="d-grid gap-2 shadow nav-item bg-light rounded">
            <!-- Button trigger modal -->
            <a href="#" class="nav-link text-danger text-center btn-outline-secondary rounded" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <!-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#home" /></svg> -->
              <i class="bi bi-box-arrow-right"></i>
              Log Out
            </a>
            <!-- <button class="btn btn-dark btn-lg btn-block bg-danger" type="button">Login</button> -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow" style="border-radius: 15px">
                  <!-- Header Modal & Tanda Silang -->

                  <div class="modal-body text-center">
                    <strong style="color: rgb(0, 0, 0)">Are you sure you want to exit? </strong>
                  </div>
                  <div class="text-center">
                    <a href="{{route('logout')}}">
                    <button type="button" class="btn btn-secondary btn-success" data-bs-dismiss="modal">Yes</button>
                    </a>
                    <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal">No</button>
                  </div>
                  <div class="mb-3"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Akhir Sidebar -->

        <!-- Isi Content -->
        <div class="col-sm-10" style="height: 100vh">
          @yield('utama')
          <!-- Akhir Isi Konten Kanan -->
        </div>
        <!-- Akhir Isi Content -->
      </div>
      <!-- Akhir Sidebar & Content -->

      <!-- ---------------------------------------------------------------------------------------------------------------------- -->
      <!-- Footer -->
      <div class="row">
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
      </div>

      <!-- Akhir Footer -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Buat Tooltips -->
    <script>
      const tooltips = document.querySelectorAll('.tt');
      tooltips.forEach((t) => {
        new bootstrap.Tooltip(t);
      });
    </script>

    <!-- Buat Tooltip -->
    <!-- <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
      });
    </script> -->
  </body>
</html>
