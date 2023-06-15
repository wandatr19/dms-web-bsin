@extends('main')

@section('utama')

<!-- Back Button & Breadcrumbs -->
  <!-- Back Button -->
  <div class="row">
    <div class="input-group input-group-sm m-0 p-0">
      <a href="{{route('home')}}">
      <button class="input-group-text" id="inputGroup-sizing-sm" onclick="">Back</button>
      </a>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled />
    </div>
  </div>
  <!-- Akhir Back Button -->
  <!-- Isi Konten Kanan -->
  <!-- scroll -->
  <div class="overflow-auto" style="max-width: 100%; max-height: 100%">
    <div class="container-fluid">
      <!-- Baris 1 : Card Folder -->
      <div class="row my-3 ms-4 fs-5 row-cols-auto">
        <!-- Card BANBURY -->
        <div class="col">
        <a href="{{route('EBanbury')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 71)
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
        <!-- Akhir Card BANBURY -->
        <!-- Card STRAINER -->
        <div class="col">
        <a href="{{route('EStrainer')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 72)
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
        <!-- Akhir Card STRAINER -->
        <!-- Card POLYFILM -->
        <div class="col">
        <a href="{{route('EPolyfilm')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 73)
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
        <!-- Akhir Card POLYFILM -->
        <!-- Card CALENDER -->
        <div class="col">
        <a href="{{route('ECalender')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 74)
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
        <!-- Akhir Card CALENDER -->
        <!-- Card BEXTER -->
        <div class="col">
        <a href="{{route('EBexter')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 75)
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
        <!-- Akhir Card BEXTER -->
        <!-- Card QCT -->
        <div class="col">
        <a href="{{route('EQCT')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 76)
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
        <!-- Akhir Card QCT -->
        <!-- Card 1/N DCT -->
        <div class="col">
        <a href="{{route('E1NDCT')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 77)
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
        <!-- Akhir Card 1/N DCT -->
        <!-- Card 8CT -->
        <div class="col">
        <a href="{{route('E8CT')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 78)
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
        <!-- Akhir Card 8CT -->
        <!-- Card BEAD -->
        <div class="col">
        <a href="{{route('EBead')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 79)
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
        <!-- Akhir Card BEAD -->
        <!-- Card MONOWIRE -->
        <div class="col">
        <a href="{{route('EMonowire')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 80)
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
        <!-- Akhir Card MONOWIRE -->
        <!-- Card RTB -->
        <div class="col">
        <a href="{{route('ERTB')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 81)
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
        <!-- Akhir Card RTB -->
        <!-- Card PLY CUTTING NO.1 -->
        <div class="col">
        <a href="{{route('EPCT1')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 82)
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
        <!-- Akhir Card PLY CUTTING NO.1 -->
        <!-- Card PLY CUTTING NO.2 -->
        <div class="col">
        <a href="{{route('EPCT2')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 83)
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
        <!-- Akhir Card PLY CUTTING NO.2 -->
        <!-- Card SR BELT 1 -->
        <div class="col">
        <a href="{{route('ESRB1')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 84)
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
        <!-- Akhir Card SR BELT 1 -->
        <!-- Card SR BELT 2 -->
        <div class="col">
        <a href="{{route('ESRB2')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 85)
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
        <!-- Akhir Card SR BELT 2 -->
        <!-- Card PSP -->
        <div class="col">
        <a href="{{route('EPSP')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 86)
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
        <!-- Akhir Card PSP -->
        <!-- Card IL 2RH -->
        <div class="col">
        <a href="{{route('EIL2RH')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 87)
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
        <!-- Akhir Card IL 2RH -->
        <!-- Card KBN2 -->
        <div class="col">
        <a href="{{route('EKBN2')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 88)
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
        <!-- Akhir Card KBN2 -->
        <!-- Card K1-S -->
        <div class="col">
        <a href="{{route('EK1S')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 89)
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
        <!-- Akhir Card K1-S -->
        <!-- Card HF-1 -->
        <div class="col">
        <a href="{{route('EHF1')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                  @if ($folder->id === 90)
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
        <!-- Akhir Card HF-1 -->
        <!-- Card CURE -->
        <div class="col">
        <a href="{{route('ECure')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 91)
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
        <!-- Akhir Card CURE -->
        <!-- Card APDD-1 -->
        <div class="col">
        <a href="{{route('EAPPD1')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 92)
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
        <!-- Akhir Card APDD-1 -->
        <!-- Card INNER APDD-1 -->
        <div class="col">
        <a href="{{route('EInAPPD1')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 93)
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
        <!-- Akhir Card INNER APDD-1 -->
        <!-- Card WHITE BUFF-2 -->
        <div class="col">
        <a href="{{route('EWB2')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 94)
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
        <!-- Akhir Card WHITE BUFF-2 -->
        <!-- Card RIM FLOW -->
        <div class="col">
        <a href="{{route('ERF')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 95)
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
        <!-- Akhir Card RIM FLOW -->
        <!-- Card UNIFORMITY -->
        <div class="col">
        <a href="{{route('EUniform')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 96)
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
        <!-- Akhir Card UNIFORMITY-->
        <!-- Card HP LRP -->
        <div class="col">
        <a href="{{route('EHPLRP')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 97)
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
        <!-- Akhir Card HP LRP -->
        <!-- Card LW BUFF -->
        <div class="col">
        <a href="{{route('ELWB')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 98)
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
        <!-- Akhir Card LW BUFF -->
        <!-- Card REWORK -->
        <div class="col">
        <a href="{{route('ERework')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                  @if ($folder->id === 99)
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
        <!-- Akhir Card REWORK -->
        <!-- Card TIRE REPAIR -->
        <div class="col">
        <a href="{{route('ETR')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 100)
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
        <!-- Akhir Card TIRE REPAIR -->
        <!-- Card FURNITURE -->
        <div class="col">
        <a href="{{route('EFurn')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 101)
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
        <!-- Akhir Card FURNITURE -->
        <!-- Card CEMENT HOUSE -->
        <div class="col">
        <a href="{{route('ECH')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 102)
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
        <!-- Akhir Card CEMENT HOUSE -->
        <!-- Card Hatsugama M/C -->
        <div class="col">
          <a href="#">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 103)
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
        <!-- Akhir Card Hatsugama M/C -->
        <!-- Card Folder 1 -->
        <div class="col">
          <a href="#">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 109)
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
        <!-- Akhir Card Folder 1 -->
        <!-- Card Folder 2 -->
        <div class="col">
          <a href="#">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 110)
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
        <!-- Akhir Card Folder 2 -->
        <!-- Card Folder 3 -->
        <div class="col">
          <a href="#">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 111)
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
        <!-- Akhir Card Folder 3 -->
        <!-- Card Folder 4 -->
        <div class="col">
          <a href="#">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 112)
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
        <!-- Akhir Card Folder 4 -->
        <!-- Card Folder 5 -->
        <div class="col">
          <a href="#">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 113)
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
        <!-- Akhir Card Folder 5 -->
      </div>
    </div>
  </div>
  <!-- Akhir scroll -->
  <!-- Akhir Isi Konten Kanan -->
@endsection