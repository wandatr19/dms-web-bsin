@extends('main')

@section('utama')
@php
  $userAccess = explode(',', auth()->user()->user_access); 
  $role = auth()->user()->role == "admin"  
@endphp
<div class="overflow-auto" style="max-width: 100%; max-height: 100%">
<div class="container-fluid m-0 p-0">
  <!-- Baris 1: Favourites -->
  {{-- @if (auth()->user()->role == "user")
  <div class="row my-3 ms-4">
    <h4><i class="bi bi-star-fill text-warning me-2"></i>Favourites</h4>
    <div class="row">
      <hr class="ms-0" />
    </div>
  </div> --}}
  <!-- Baris 2 : card document -->
  {{-- <div class="overflow-auto" style="max-width: 100%; max-height: 200px"> --}}
  {{-- @if ($favorites->isEmpty())
    <p>Tidak ada dokumen favorit.</p>
  @else
    @foreach ($favorites as $favorite)     
      <div class="container-fluid">
        <div class="row my-3 ms-4 fs-5 row-cols-auto">
          <div class="col">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-filetype-pdf fs-1 text-danger"></i>
                  <span class="tt" data-bs-placement="top" title="Banbury 1 - 1/20.pdf">
                    <p class="card-text word-wrap text-truncate">{{ $favorite->document->doc_name }}</p>
                  </span>
                </div>
              </div>
            </button>
          </div>
        </div>
      </div>
    @endforeach
  @endif
  </div>
  @endif --}}

  <!-- Baris 3: Document Text -->
  <div class="row my-3 ms-4">
    <h4><i class="bi bi-folder-fill me-2 text-primary"></i>Documents</h4>
    <div class="row">
      <hr class="ms-0" />
    </div>
  </div>

  <!-- Baris 4 : Card Folder -->
  {{-- <div class="overflow-auto" style="max-width: 100%; max-height: 700px"> --}}
    <div class="container-fluid">
      <div class="row my-3 ms-4 fs-5 row-cols-auto">
        <!-- Card MECHANICAL -->
        @if (in_array('mech', $userAccess) || $role)
        <div class="col">
          <a href="{{route("mech")}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 3)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card MECHANICAL -->
        <!-- Card ELECTRICAL -->
        @if (in_array('elect', $userAccess) || $role)
        <div class="col">
          <a href="{{route("elect")}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 4)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card ELECTRICAL -->
        <!-- Card UTILITY -->
        @if (in_array('util', $userAccess) || $role)
        <div class="col">
          <a href="{{route("util")}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 5)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card UTILITY -->
        <!-- Card CIVIL -->
        @if (in_array('civil', $userAccess) || $role)
        <div class="col">
          <a href="{{route("civil")}}">
            <button type="button" class="btn btn-primary btn-light" href="">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 6)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card CIVIL -->
        <!-- Card OTHERS -->
        @if (in_array('oth', $userAccess) || $role)
        <div class="col">
          <a href="{{route('others')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 7)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card OTHERS -->

        <!-- Card AREA 6 -->
        @if (in_array('area6', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 8)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 6 -->

        <!-- Card AREA 7 -->
        @if (in_array('area7', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 9)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 7 -->

        <!-- Card AREA 8 -->
        @if (in_array('area8', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 10)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 8 -->

        <!-- Card AREA 9 -->
        @if (in_array('area9', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light" href="">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 11)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 9 -->

        <!-- Card AREA 10 -->
        @if (in_array('area10', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 12)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 10 -->

        <!-- Card AREA 11 -->
        @if (in_array('area11', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 13)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 11 -->

        <!-- Card AREA 12 -->
        @if (in_array('area12', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 14)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 12 -->

        <!-- Card AREA 13 -->
        @if (in_array('area13', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 15)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 13 -->

        <!-- Card AREA 14 -->
        @if (in_array('area14', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light" href="">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 16)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 14 -->

        <!-- Card AREA 15 -->
        @if (in_array('area15', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 17)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 15 -->

        <!-- Card AREA 16 -->
        @if (in_array('area16', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 18)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 16 -->

        <!-- Card AREA 17 -->
        @if (in_array('area17', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 19)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 17 -->

        <!-- Card AREA 18 -->
        @if (in_array('area18', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 20)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 18 -->

        <!-- Card AREA 19 -->
        @if (in_array('area19', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light" href="">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 21)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 19 -->

        <!-- Card AREA 20 -->
        @if (in_array('area20', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 22)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 20 -->

        <!-- Card AREA 21 -->
        @if (in_array('area21', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 23)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 21 -->

        <!-- Card AREA 22 -->
        @if (in_array('area22', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 24)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 22 -->

        <!-- Card AREA 23 -->
        @if (in_array('area23', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 25)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 23 -->

        <!-- Card AREA 24 -->
        @if (in_array('area24', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light" href="">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 26)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 24 -->

        <!-- Card AREA 26 -->
        @if (in_array('area26', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 27)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 26 -->

        <!-- Card AREA 27 -->
        @if (in_array('area27', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 28)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 27 -->

        <!-- Card AREA 28 -->
        @if (in_array('area28', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 29)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 28 -->

        <!-- Card AREA 29 -->
        @if (in_array('area29', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 30)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 29 -->

        <!-- Card AREA 30 -->
        @if (in_array('area30', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 31)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 30 -->

        <!-- Card AREA 31 -->
        @if (in_array('area31', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 32)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 31 -->

        <!-- Card AREA 32 -->
        @if (in_array('area32', $userAccess) || $role)
        <div class="col">
          <a href="">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 33)
                      <span class="tt" data-bs-placement="top" title="{{ $folder->name }}">
                        <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                      </span>
                    @endif
                  @endforeach
                </div>
              </div>
            </button>
          </a>
        </div>
        @endif
        <!-- Akhir Card AREA 32 -->
      </div>
    </div>
  {{-- </div> --}}
</div>
</div>
@endsection