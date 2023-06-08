<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/home.css" />

    <!-- Font Link Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />

    <!-- Link Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />

    {{-- Titik 3 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
    <!-- Link CDN Buat Dropzone -->
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />

    <style>
      ul,
      #myUL {
        list-style-type: none;
      }
      #myUL {
        margin: 0;
        padding: 0;
      }
      .caret {
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .caret::before {
        content: '\25B6';
        color: black;
        display: inline-block;
        margin-right: 6px;
      }
      .caret-down::before {
        -ms-transform: rotate(90deg);
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
      }
      .nested {
        display: none;
      }
      .active {
        display: block;
      }
      /* Masterlist */
      .pdf-container {
        width: 100%;
        height: 0;
        padding-bottom: 75%; /* Aspek rasio 4:3 */
        position: relative;
        }
    
      .pdf-container iframe {
        position: absolute;
        width: 100%;
        height: 100%;
        }
    </style>
    <style>
      /* Gaya tampilan untuk elemen PDF viewer */
      #pdf-viewer {
          width: 100%;
          height: 600px;
      }
    </style>
    <link rel="icon" href="/img/bs-logo-white.png">
    <title>DMS | Eng Design</title>
  </head>
  <body>
    <div class="container-fluid">
      <!-- Header -->
      <div class="row bg-dark sticky-top">
        <div class="col-auto text-start bg-dark p-0 me-auto">
          <nav class="navbar navbar-light bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('home')}}">
                <img src="/img/bs-putih.png" alt="" height="24" />
              </a>
            </div>
          </nav>
        </div>

        <div class="col-auto bg-dark mt-3 text-end">
          <p class="d-flex align-items-center text-white text-decoration-none fs-6" id="UserInfo" data-bs-toggle="UserInfo" aria-expanded="false"">
            <i class="bi bi-person-circle mx-2 fs-5"></i>
            {{auth()->user()->name}}
          </p>
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
                <form class="d-flex" action="{{route('searchdoc')}}" method="GET">
                  <input class="form-control me-2" type="text" name="keyword" placeholder="Search by Title" aria-label="Search" />
                  <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </form>
              <hr>
                {{-- <form class="d-flex" action="{{route('searchdoc')}}" method="GET">
                  <input class="form-control me-2" type="text" name="keyword" placeholder="Search by Keyword" aria-label="Search" />
                  <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </form>
              <hr> --}}
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
                  <a href="{{route('pwdoc')}}" class="nav-link text-white">
                    <i class="bi bi-file-earmark-lock2-fill"></i>
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2" /></svg>
                    Password Doc
                  </a>
                </li>
                <li class="nav-item btn-outline-secondary rounded">
                  <a href="{{route('adduser')}}" class="nav-link text-white">
                    <i class="bi bi-person-fill-add fs-5"></i>
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2" /></svg>
                    Add User
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
                
              </ul>
              <hr />
            </div>
          </div>

          <!-- logout -->
          <div class="d-grid gap-2 shadow nav-item bg-light rounded">
            <!-- Button trigger modal -->
            <a href="#" class="nav-link text-danger text-center btn-outline-secondary rounded" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="bi bi-box-arrow-right"></i>
              Log Out
            </a>

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
  </body>

  <script type="text/javascript">
    new Dropzone('#pdf-upload', {
      thumbnailWidth: 200,
      maxFilesize: 1000,
      acceptedFiles: ' .jpeg,.jpg,.png,.pdf',
    });
  </script>
  
  {{-- Dropzone --}}
  <script src="../node_modules/dropzone/dist/min/dropzone.min.js"></script>
  <script src="../assets/js/dropzone.js"></script>
  {{-- Bootstrap --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  {{-- password-eye --}}
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var passwordInput = document.getElementById('password');
      var passwordVisibleInput = document.getElementById('password_visible');
      var showPasswordCheckbox = document.getElementById('show_password');
    
      passwordVisibleInput.style.display = 'none'; // Sembunyikan input field password_visible saat halaman dimuat
      
      passwordInput.addEventListener('keyup', function() {
        passwordVisibleInput.value = passwordInput.value;
      });
      
      showPasswordCheckbox.addEventListener('change', function() {
        if (this.checked) {
          passwordInput.style.display = 'none';
          passwordVisibleInput.style.display = 'block';
        } else {
          passwordInput.style.display = 'block';
          passwordVisibleInput.style.display = 'none';
        }
      });
    });
  </script>
    
</html>
