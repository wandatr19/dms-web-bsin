@extends('main')

@section('utama')
@php
  $userAccess = explode(',', auth()->user()->user_access); 
  $role = auth()->user()->role == "admin"  
@endphp
<div class="overflow-auto" style="max-width: 100%; max-height: 100%">
<div class="container-fluid m-0 p-0">
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
        @foreach ($folders as $folder)
          @if ($folder->id === 3)
            @if (in_array("$folder->name", $userAccess) || $role)
            <div class="col">
              <a href="{{route("mech")}}">
                <button type="button" class="btn btn-primary btn-light">
                  <div class="card shadow-sm" style="width: 8rem">
                    <div class="card-body text-center">
                      <i class="bi bi-folder-fill me-1 fs-1"></i>
                        <span class="tt" data-bs-placement="top" title="">
                          <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                        </span>
                    </div>
                  </div>
                </button>
              </a>
            </div>
            @endif
          @endif
        @endforeach
        <!-- Akhir Card MECHANICAL -->
        <!-- Card ELECTRICAL -->
        @foreach ($folders as $folder)
          @if ($folder->id === 4)
            @if (in_array("$folder->name", $userAccess) || $role)
            <div class="col">
              <a href="{{route("elect")}}">
                <button type="button" class="btn btn-primary btn-light">
                  <div class="card shadow-sm" style="width: 8rem">
                    <div class="card-body text-center">
                      <i class="bi bi-folder-fill me-1 fs-1"></i>
                        <span class="tt" data-bs-placement="top" title="">
                          <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                        </span>
                    </div>
                  </div>
                </button>
              </a>
            </div>
            @endif
          @endif
        @endforeach
        <!-- Akhir Card ELECTRICAL -->
        <!-- Card UTILITY -->
        @foreach ($folders as $folder)
          @if ($folder->id === 5)
            @if (in_array("$folder->name", $userAccess) || $role)
            <div class="col">
              <a href="{{route("util")}}">
                <button type="button" class="btn btn-primary btn-light">
                  <div class="card shadow-sm" style="width: 8rem">
                    <div class="card-body text-center">
                      <i class="bi bi-folder-fill me-1 fs-1"></i>
                        <span class="tt" data-bs-placement="top" title="">
                          <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                        </span>
                    </div>
                  </div>
                </button>
              </a>
            </div>
            @endif
          @endif
        @endforeach
        <!-- Akhir Card UTILITY -->
        <!-- Card CIVIL -->
        @foreach ($folders as $folder)
          @if ($folder->id === 6)
            @if (in_array("$folder->name", $userAccess) || $role)
            <div class="col">
              <a href="{{route("civil")}}">
                <button type="button" class="btn btn-primary btn-light">
                  <div class="card shadow-sm" style="width: 8rem">
                    <div class="card-body text-center">
                      <i class="bi bi-folder-fill me-1 fs-1"></i>
                        <span class="tt" data-bs-placement="top" title="">
                          <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                        </span>
                    </div>
                  </div>
                </button>
              </a>
            </div>
            @endif
          @endif
        @endforeach
        <!-- Akhir Card CIVIL -->
        <!-- Card OTHERS -->
        @foreach ($folders as $folder)
          @if ($folder->id === 7)
            @if (in_array("$folder->name", $userAccess) || $role)
            <div class="col">
              <a href="{{route("oth")}}">
                <button type="button" class="btn btn-primary btn-light">
                  <div class="card shadow-sm" style="width: 8rem">
                    <div class="card-body text-center">
                      <i class="bi bi-folder-fill me-1 fs-1"></i>
                        <span class="tt" data-bs-placement="top" title="">
                          <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                        </span>
                    </div>
                  </div>
                </button>
              </a>
            </div>
            @endif
          @endif
        @endforeach
        <!-- Akhir Card OTHERS -->

        <!-- Card AREA 6 -->
        @foreach ($folders as $folder)
          @if ($folder->id === 8)
            @if (in_array("$folder->name", $userAccess) || $role)
            <div class="col">
              <a href="{{route("Area6")}}">
                <button type="button" class="btn btn-primary btn-light">
                  <div class="card shadow-sm" style="width: 8rem">
                    <div class="card-body text-center">
                      <i class="bi bi-folder-fill me-1 fs-1"></i>
                        <span class="tt" data-bs-placement="top" title="">
                          <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                        </span>
                    </div>
                  </div>
                </button>
              </a>
            </div>
            @endif
          @endif
        @endforeach
        <!-- Akhir Card AREA 6 -->

        <!-- Card AREA 7 -->
        @foreach ($folders as $folder)
          @if ($folder->id === 9)
            @if (in_array("$folder->name", $userAccess) || $role)
            <div class="col">
              <a href="{{route("Area7")}}">
                <button type="button" class="btn btn-primary btn-light">
                  <div class="card shadow-sm" style="width: 8rem">
                    <div class="card-body text-center">
                      <i class="bi bi-folder-fill me-1 fs-1"></i>
                        <span class="tt" data-bs-placement="top" title="">
                          <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                        </span>
                    </div>
                  </div>
                </button>
              </a>
            </div>
            @endif
          @endif
        @endforeach
        <!-- Akhir Card AREA 7 -->

        <!-- Card AREA 8 -->
        @foreach ($folders as $folder)
          @if ($folder->id === 10)
            @if (in_array("$folder->name", $userAccess) || $role)
            <div class="col">
              <a href="{{route("Area8")}}">
                <button type="button" class="btn btn-primary btn-light">
                  <div class="card shadow-sm" style="width: 8rem">
                    <div class="card-body text-center">
                      <i class="bi bi-folder-fill me-1 fs-1"></i>
                        <span class="tt" data-bs-placement="top" title="">
                          <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                        </span>
                    </div>
                  </div>
                </button>
              </a>
            </div>
            @endif
          @endif
        @endforeach
        <!-- Akhir Card AREA 8 -->

        <!-- Card AREA 9 -->
        @foreach ($folders as $folder)
          @if ($folder->id === 11)
            @if (in_array("$folder->name", $userAccess) || $role)
            <div class="col">
              <a href="{{route("Area9")}}">
                <button type="button" class="btn btn-primary btn-light">
                  <div class="card shadow-sm" style="width: 8rem">
                    <div class="card-body text-center">
                      <i class="bi bi-folder-fill me-1 fs-1"></i>
                        <span class="tt" data-bs-placement="top" title="">
                          <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                        </span>
                    </div>
                  </div>
                </button>
              </a>
            </div>
            @endif
          @endif
        @endforeach
        <!-- Akhir Card AREA 9 -->

        <!-- Card AREA 10 -->
        @foreach ($folders as $folder)
          @if ($folder->id === 12)
            @if (in_array("$folder->name", $userAccess) || $role)
            <div class="col">
              <a href="{{route("Area10")}}">
                <button type="button" class="btn btn-primary btn-light">
                  <div class="card shadow-sm" style="width: 8rem">
                    <div class="card-body text-center">
                      <i class="bi bi-folder-fill me-1 fs-1"></i>
                        <span class="tt" data-bs-placement="top" title="">
                          <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                        </span>
                    </div>
                  </div>
                </button>
              </a>
            </div>
            @endif
          @endif
        @endforeach
        <!-- Akhir Card AREA 10 -->

        <!-- Card AREA 11 -->
        @foreach ($folders as $folder)
          @if ($folder->id === 13)
            @if (in_array("$folder->name", $userAccess) || $role)
            <div class="col">
              <a href="{{route("Area11")}}">
                <button type="button" class="btn btn-primary btn-light">
                  <div class="card shadow-sm" style="width: 8rem">
                    <div class="card-body text-center">
                      <i class="bi bi-folder-fill me-1 fs-1"></i>
                        <span class="tt" data-bs-placement="top" title="">
                          <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                        </span>
                    </div>
                  </div>
                </button>
              </a>
            </div>
            @endif
          @endif
        @endforeach
        <!-- Akhir Card AREA 11 -->

        <!-- Card AREA 12 -->
        @foreach ($folders as $folder)
          @if ($folder->id === 14)
            @if (in_array("$folder->name", $userAccess) || $role)
            <div class="col">
              <a href="{{route("Area12")}}">
                <button type="button" class="btn btn-primary btn-light">
                  <div class="card shadow-sm" style="width: 8rem">
                    <div class="card-body text-center">
                      <i class="bi bi-folder-fill me-1 fs-1"></i>
                        <span class="tt" data-bs-placement="top" title="">
                          <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                        </span>
                    </div>
                  </div>
                </button>
              </a>
            </div>
            @endif
          @endif
        @endforeach
        <!-- Akhir Card AREA 12 -->

        <!-- Card AREA 13 -->
        @foreach ($folders as $folder)
          @if ($folder->id === 15)
            @if (in_array("$folder->name", $userAccess) || $role)
            <div class="col">
              <a href="{{route("Area13")}}">
                <button type="button" class="btn btn-primary btn-light">
                  <div class="card shadow-sm" style="width: 8rem">
                    <div class="card-body text-center">
                      <i class="bi bi-folder-fill me-1 fs-1"></i>
                        <span class="tt" data-bs-placement="top" title="">
                          <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                        </span>
                    </div>
                  </div>
                </button>
              </a>
            </div>
            @endif
          @endif
        @endforeach
        <!-- Akhir Card AREA 13 -->

        <!-- Card AREA 14 -->
        @foreach ($folders as $folder)
          @if ($folder->id === 16)
            @if (in_array("$folder->name", $userAccess) || $role)
            <div class="col">
              <a href="{{route("Area14")}}">
                <button type="button" class="btn btn-primary btn-light">
                  <div class="card shadow-sm" style="width: 8rem">
                    <div class="card-body text-center">
                      <i class="bi bi-folder-fill me-1 fs-1"></i>
                        <span class="tt" data-bs-placement="top" title="">
                          <p class="card-text word-wrap text-truncate">{{ $folder->name }}</p>
                        </span>
                    </div>
                  </div>
                </button>
              </a>
            </div>
            @endif
          @endif
        @endforeach
        <!-- Akhir Card AREA 14 -->

        <!-- Card AREA 15 -->
        @if (in_array('area15', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area15')}}">
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
          <a href="{{route('Area16')}}">
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
          <a href="{{route('Area17')}}">
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
          <a href="{{route('Area18')}}">
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
          <a href="{{route('Area19')}}">
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
          <a href="{{route('Area20')}}">
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
          <a href="{{route('Area21')}}">
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
          <a href="{{route('Area22')}}">
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
          <a href="{{route('Area23')}}">
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
          <a href="{{route('Area24')}}">
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

        <!-- Card AREA 25 -->
        @if (in_array('area25', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area25')}}">
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
        <!-- Akhir Card AREA 25 -->

        <!-- Card AREA 26 -->
        @if (in_array('area26', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area26')}}">
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
        <!-- Akhir Card AREA 26 -->

        <!-- Card AREA 27 -->
        @if (in_array('area27', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area27')}}">
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
        <!-- Akhir Card AREA 27 -->

        <!-- Card AREA 28 -->
        @if (in_array('area28', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area28')}}">
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
        <!-- Akhir Card AREA 28 -->

        <!-- Card AREA 29 -->
        @if (in_array('area29', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area29')}}">
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
        <!-- Akhir Card AREA 29 -->

        <!-- Card AREA 30 -->
        @if (in_array('area30', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area30')}}">
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
        <!-- Akhir Card AREA 30 -->

        <!-- Card AREA 31 -->
        @if (in_array('area31', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area31')}}">
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
        <!-- Akhir Card AREA 31 -->
        <!-- Card AREA 32 -->
        @if (in_array('area32', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area32')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 34)
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

        <!-- Card AREA 33 -->
        @if (in_array('area33', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area33')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 35)
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
        <!-- Akhir Card AREA 33 -->

        <!-- Card AREA 34 -->
        @if (in_array('area34', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area34')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 36)
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
        <!-- Akhir Card AREA 34 -->
        <!-- Card AREA 35 -->
        @if (in_array('area35', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area35')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 37)
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
        <!-- Akhir Card AREA 35 -->

        <!-- Card AREA 36 -->
        @if (in_array('area36', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area36')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 114)
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
        <!-- Akhir Card AREA 36 -->

        <!-- Card AREA 37 -->
        @if (in_array('area37', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area37')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 115)
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
        <!-- Akhir Card AREA 37 -->

        <!-- Card AREA 38 -->
        @if (in_array('area38', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area38')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 116)
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
        <!-- Akhir Card AREA 38 -->

        <!-- Card AREA 39 -->
        @if (in_array('area39', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area39')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 117)
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
        <!-- Akhir Card AREA 39 -->

        <!-- Card AREA 40 -->
        @if (in_array('area40', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area40')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 118)
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
        <!-- Akhir Card AREA 40 -->

        <!-- Card AREA 41 -->
        @if (in_array('area41', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area41')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 119)
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
        <!-- Akhir Card AREA 41 -->

        <!-- Card AREA 42 -->
        @if (in_array('area42', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area42')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 120)
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
        <!-- Akhir Card AREA 42 -->

        <!-- Card AREA 43 -->
        @if (in_array('area43', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area43')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 121)
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
        <!-- Akhir Card AREA 43 -->

        <!-- Card AREA 44 -->
        @if (in_array('area44', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area44')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 122)
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
        <!-- Akhir Card AREA 44 -->

        <!-- Card AREA 45 -->
        @if (in_array('area45', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area45')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 123)
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
        <!-- Akhir Card AREA 45 -->

        <!-- Card AREA 46 -->
        @if (in_array('area46', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area46')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 124)
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
        <!-- Akhir Card AREA 46 -->

        <!-- Card AREA 47 -->
        @if (in_array('area47', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area47')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 125)
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
        <!-- Akhir Card AREA 47 -->

        <!-- Card AREA 48 -->
        @if (in_array('area48', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area48')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 126)
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
        <!-- Akhir Card AREA 48 -->

        <!-- Card AREA 49 -->
        @if (in_array('area49', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area49')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 127)
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
        <!-- Akhir Card AREA 49 -->

        <!-- Card AREA 50 -->
        @if (in_array('area50', $userAccess) || $role)
        <div class="col">
          <a href="{{route('Area50')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 128)
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
        <!-- Akhir Card AREA 50 -->
      </div>
    </div>
  {{-- </div> --}}
</div>
</div>
@endsection