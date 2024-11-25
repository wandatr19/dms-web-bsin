<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- DataTable --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('vendor/DataTables/DataTables-1.13.4/css/jquery.dataTables.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('vendor/DataTables/DataTables-1.13.4/css/dataTables.bootsrap5.min.css') }}"/>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}"/>

    <!-- My CSS -->
    <link rel="stylesheet" href="css/home.css" />

    <!-- Link Bootstrap Icons -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap-icons-1.10.5/font/bootstrap-icons.css') }}">
    
    <!-- Link CDN Buat Dropzone -->
    <script src="{{ asset('vendor/dropzone/dist/dropzone-min.js') }}"></script>
    <link href="{{ asset('vendor/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />

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
      .highlight {
        background-color: yellow;
        font-weight: bold;
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
                <img src="/img/Bridgestone-logo-White-scaled-removebg-preview.png" alt="" height="40" />
              </a>
            </div>
          </nav>
        </div>

        <div class="col-auto bg-dark mt-3 text-end">
          <p class="d-flex align-items-center text-white text-decoration-none fs-6" id="UserInfo" data-bs-toggle="UserInfo" aria-expanded="false">
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
                  <a href="{{route('folder')}}" class="nav-link text-white">
                    <i class="bi bi-pencil-square"></i>
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2" /></svg>
                    Rename Folder
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

    <script src="{{ asset('vendor/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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

  <script>
    var toggler = document.getElementsByClassName('caret');
    var i;

    for (i = 0; i < toggler.length; i++) {
      toggler[i].addEventListener('click', function () {
        this.parentElement.querySelector('.nested').classList.toggle('active');
        this.classList.toggle('caret-down');
      });
    }
  </script>
    
</html>
