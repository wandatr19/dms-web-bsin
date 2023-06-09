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

    <!-- CSS of Tree View (New Design) -->
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
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                  <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </form>
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
          <!-- Isi Konten Kanan -->

          <!-- scroll -->
          <div class="overflow-auto" style="max-width: 100%; max-height: 100%">
            <section class="container-fluid">
              <div class="row content d-flex">
                <div class="col-lg-10 py-4">
                  <div class="box p-4 rounded-3">
                    <ul id="myUL">
                      <!-- MECHANICAL -->
                      <li>
                          <span class="caret">
                            <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                            MECHANICAL
                          </span>
                          <ul class="nested">
                            <!-- BANBURY -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                BANBURY
                              </span>
                              <ul class="nested">
                              @foreach ($documents as $document)
                                @if ($document->category == "banbury")
                                <li>
                                  <span>
                                    <a href="{{route('open-bb', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    {{ $document->doc_name }}</a>
                                  </span>
                                </li>
                                @endif
                              @endforeach
                              </ul>
                            </li>
                            <!-- AKHIR BANBURY -->

                            <!-- STRAINER -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                STRAINER
                              </span>
                              <ul class="nested">
                              @foreach ($documents as $document)
                                @if ($document->category == "strainer")
                                <li>
                                  <span>
                                    <a href="{{route('open-bb', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    {{ $document->doc_name }}</a>
                                  </span>
                                </li>
                                @endif
                              @endforeach
                              </ul>
                            </li>
                            <!-- AKHIR STRAINER -->

                            <!-- POLYFILM -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                POLYFILM
                              </span>
                              <ul class="nested">
                              @foreach ($documents as $document)
                                @if ($document->category == "polyfilm")
                                <li>
                                  <span>
                                    <a href="{{route('open-bb', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    {{ $document->doc_name }}</a>
                                  </span>
                                </li>
                                @endif
                              @endforeach
                              </ul>
                            </li>
                            <!-- AKHIR POLYFILM -->

                            <!-- CALENDER -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                CALENDER
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR CALENDER -->

                            <!-- BEXTER -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                BEXTER
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR BEXTER -->

                            <!-- QCT -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                QCT
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR QCT -->

                            <!-- 1/N DCT -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                1/N DCT
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR 1/N DCT -->

                            <!-- 8CT -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                8CT
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR 8CT -->

                            <!-- BEAD -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                BEAD
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR BEAD -->

                            <!-- MONOWIRE -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                MONOWIRE
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR MONOWIRE -->

                            <!-- RTB -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                RTB
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR RTB -->

                            <!-- PLY CUTTING NO.1 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                PLY CUTTING NO.1
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR PLY CUTTING NO.1 -->

                            <!-- PLY CUTTING NO.2 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                PLY CUTTING NO.2
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR PLY CUTTING NO.2 -->

                            <!-- SR BELT 1 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                SR BELT 1
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR SR BELT 1 -->

                            <!-- SR BELT 2 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                SR BELT 2
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR SR BELT 2 -->

                            <!-- PSP -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                PSP
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR PSP -->

                            <!-- IL 2RH -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                IL 2RH
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR IL 2RH -->

                            <!-- KBN2 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                KBN2
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR KBN2 -->

                            <!-- IL K1-S -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                K1-S
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR K1-S -->

                            <!-- HF-1 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                HF-1
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR HF-1 -->

                            <!-- CURE -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                CURE
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR CURE -->

                            <!-- INNER APDD-1 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                INNER APDD-1
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR INNER APDD-1 -->

                            <!-- APDD-1 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                APDD-1
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR APDD-1 -->

                            <!-- WHITE BUFF-2 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                WHITE BUFF-2
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR WHITE BUFF-2 -->

                            <!-- RIM FLOW -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                RIM FLOW
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR RIM FLOW -->

                            <!-- UNIFORMITY -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                UNIFORMITY
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR UNIFORMITY -->

                            <!-- HP LRP -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                HP LRP
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR HP LRP -->

                            <!-- LW BUFF -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                LW BUFF
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR LW BUFF -->

                            <!-- REWORK -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                REWORK
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR REWORK -->

                            <!-- TIRE REPAIR -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                TIRE REPAIR
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR TIRE REPAIR -->

                            <!-- FURNITURE -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                FURNITURE
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR FURNITURE -->

                            <!-- CEMENT HOUSE -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                CEMENT HOUSE
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR CEMENT HOUSE -->

                            <!-- HATSUGAMA M/C -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                HATSUGAMA M/C
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR HATSUGAMA M/C -->

                            <!-- HP LRP 3 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                HP LRP 3
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR HP LRP 3 -->
                          </ul>
                      </li>
                      <!-- AKHIR MECHANICAL -->

                      <!-- ELECTRICAL -->
                      <li>
                          <span class="caret">
                            <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                            ELECTRICAL
                          </span>
                          <ul class="nested">
                            <!-- BANBURY -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                BANBURY
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR BANBURY -->

                            <!-- STRAINER -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                STRAINER
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR STRAINER -->

                            <!-- POLYFILM -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                POLYFILM
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR POLYFILM -->

                            <!-- CALENDER -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                CALENDER
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR CALENDER -->

                            <!-- BEXTER -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                BEXTER
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR BEXTER -->

                            <!-- QCT -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                QCT
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR QCT -->

                            <!-- 1/N DCT -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                1/N DCT
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR 1/N DCT -->

                            <!-- 8CT -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                8CT
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR 8CT -->

                            <!-- BEAD -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                BEAD
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR BEAD -->

                            <!-- MONOWIRE -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                MONOWIRE
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR MONOWIRE -->

                            <!-- RTB -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                RTB
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR RTB -->

                            <!-- PLY CUTTING NO.1 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                PLY CUTTING NO.1
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR PLY CUTTING NO.1 -->

                            <!-- PLY CUTTING NO.2 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                PLY CUTTING NO.2
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR PLY CUTTING NO.2 -->

                            <!-- SR BELT 1 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                SR BELT 1
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR SR BELT 1 -->

                            <!-- SR BELT 2 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                SR BELT 2
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR SR BELT 2 -->

                            <!-- PSP -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                PSP
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR PSP -->

                            <!-- IL 2RH -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                IL 2RH
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR IL 2RH -->

                            <!-- KBN2 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                KBN2
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR KBN2 -->

                            <!-- IL K1-S -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                K1-S
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR K1-S -->

                            <!-- HF-1 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                HF-1
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR HF-1 -->

                            <!-- CURE -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                CURE
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR CURE -->

                            <!-- INNER APDD-1 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                INNER APDD-1
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR INNER APDD-1 -->

                            <!-- APDD-1 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                APDD-1
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR APDD-1 -->

                            <!-- WHITE BUFF-2 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                WHITE BUFF-2
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR WHITE BUFF-2 -->

                            <!-- RIM FLOW -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                RIM FLOW
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR RIM FLOW -->

                            <!-- UNIFORMITY -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                UNIFORMITY
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR UNIFORMITY -->

                            <!-- HP LRP -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                HP LRP
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR HP LRP -->

                            <!-- LW BUFF -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                LW BUFF
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR LW BUFF -->

                            <!-- REWORK -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                REWORK
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR REWORK -->

                            <!-- TIRE REPAIR -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                TIRE REPAIR
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR TIRE REPAIR -->

                            <!-- FURNITURE -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                FURNITURE
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR FURNITURE -->

                            <!-- CEMENT HOUSE -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                CEMENT HOUSE
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR CEMENT HOUSE -->

                            <!-- HATSUGAMA M/C -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                HATSUGAMA M/C
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR HATSUGAMA M/C -->

                            <!-- HP LRP 3 -->
                            <li>
                              <span class="caret">
                                <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                                HP LRP 3
                              </span>
                              <ul class="nested">
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 1
                                  </span>
                                </li>
                                <li>
                                  <span class="caret">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    Doc Item 2
                                  </span>
                                </li>
                              </ul>
                            </li>
                            <!-- AKHIR HP LRP 3 -->
                          </ul>
                      </li>
                      <!-- AKHIR ELECTRICAL -->

                      <!-- UTILITY -->
                      <li>
                          <span class="caret">
                            <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                            UTILITY
                          </span>
                          <ul class="nested">
                            @foreach ($documents as $document)
                                @if ($document->category == "utility")
                                <li>
                                  <span>
                                    <a href="{{route('show-banbury', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    {{ $document->doc_name }}</a>
                                  </span>
                                </li>
                              @endif
                            @endforeach
                          </ul>
                      </li>
                      <!-- AKHIR UTILITY -->

                      <!-- CIVIL -->
                      <li>
                          <span class="caret">
                            <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                            CIVIL
                          </span>
                          <ul class="nested">
                            @foreach ($documents as $document)
                                @if ($document->category == "civil")
                                <li>
                                  <span>
                                    <a href="{{route('open-bb', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                    <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                    {{ $document->doc_name }}</a>
                                  </span>
                                </li>
                                @endif
                              @endforeach
                          </ul>
                      </li>
                      <!-- AKHIR CIVIL -->

                      <!-- OTHERS -->
                      <li>
                          <span class="caret">
                            <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                            OTHERS
                          </span>
                          <ul class="nested">
                            <li>
                              <span class="caret">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                Doc Item 1
                              </span>
                            </li>
                            <li>
                              <span class="caret">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                Doc Item 2
                              </span>
                            </li>
                          </ul>
                      </li>
                      <!-- AKHIR OTHERS -->
                    </ul>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <!-- Akhir scroll -->

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

    <!-- Script ikon Caret List -->
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
  </body>
</html>
