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
        <a href="{{route('banbury')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 38)
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
        <a href="{{route('strainer')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 39)
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
        <a href="{{route('polyfilm')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 40)
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
        <a href="{{route('calender')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 41)
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
        <a href="{{route('bexter')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 42)
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
        <a href="{{route('QCT')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 43)
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
        <a href="{{ route('N1DCT')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 44)
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
        <a href="{{ route('CT8')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 45)
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
        <a href="{{ route('bead')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 46)
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
        <a href="{{ route('monowire')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 47)
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
        <a href="{{ route('RTB')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 48)
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
        <a href="{{ route('PCT1')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 49)
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
        <a href="{{ route('PCT2')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 50)
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
        <a href="{{ route('SRB1')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 51)
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
        <a href="{{ route('SRB2')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 52)
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
        <a href="{{ route('PSP')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 53)
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
        <a href="{{ route('IL2RH')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 54)
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
        <a href="{{ route('KBN2')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 55)
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
        <a href="{{ route('K1S')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 56)
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
        <a href="{{ route('HF1')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 57)
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
        <a href="{{ route('cure')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 58)
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
        <a href="{{ route('APPD1')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 59)
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
        <a href="{{ route('InAPPD1')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 60)
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
        <a href="{{ route('WB2')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 61)
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
        <a href="{{ route('RF')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 62)
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
        <a href="{{ route('Uniform')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 63)
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
        <a href="{{ route('HPLRP')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 64)
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
        <a href="{{ route('LWB')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 65)
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
        <a href="{{ route('Rework')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 66)
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
        <a href="{{ route('TR')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 67)
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
        <a href="{{ route('Furn')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 68)
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
        <a href="{{ route('CH')}}">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                @foreach ($folders as $folder)
                    @if ($folder->id === 69)
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
                      @if ($folder->id === 70)
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
          <a href="{{route('Folder1')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 104)
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
          <a href="{{route('Folder2')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 105)
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
          <a href="{{route('Folder3')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 106)
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
          <a href="{{route('Folder4')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 107)
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
          <a href="{{route('Folder5')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 108)
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
        <!-- Card Folder 6 -->
        <div class="col">
          <a href="{{route('Folder6')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 129)
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
        <!-- Akhir Card Folder 6 -->
        <!-- Card Folder7 -->
        <div class="col">
          <a href="{{route('Folder7')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 130)
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
        <!-- Akhir Card Folder7 -->
        <!-- Card Folder6 -->
        <div class="col">
          <a href="{{route('Folder6')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 131)
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
        <!-- Akhir Card Folder6 -->
        <!-- Card Folder9 -->
        <div class="col">
          <a href="{{route('Folder9')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 132)
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
        <!-- Akhir Card Folder9 -->
        <!-- Card Folder10 -->
        <div class="col">
          <a href="{{route('Folder10')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 133)
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
        <!-- Akhir Card Folder10 -->
        <!-- Card Folder11 -->
        <div class="col">
          <a href="{{route('Folder11')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 134)
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
        <!-- Akhir Card Folder11 -->
        <!-- Card Folder12 -->
        <div class="col">
          <a href="{{route('Folder12')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 135)
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
        <!-- Akhir Card Folder12 -->
        <!-- Card Folder13 -->
        <div class="col">
          <a href="{{route('Folder13')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 136)
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
        <!-- Akhir Card Folder13 -->
        <!-- Card Folder14 -->
        <div class="col">
          <a href="{{route('Folder14')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 137)
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
        <!-- Akhir Card Folder14 -->
        <!-- Card Folder15 -->
        <div class="col">
          <a href="{{route('Folder15')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 138)
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
        <!-- Akhir Card Folder15 -->
        <!-- Card Folder16 -->
        <div class="col">
          <a href="{{route('Folder16')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 139)
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
        <!-- Akhir Card Folder16 -->
        <!-- Card Folder17 -->
        <div class="col">
          <a href="{{route('Folder17')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 140)
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
        <!-- Akhir Card Folder17 -->
        <!-- Card Folder18 -->
        <div class="col">
          <a href="{{route('Folder18')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 141)
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
        <!-- Akhir Card Folder18 -->
        <!-- Card Folder19 -->
        <div class="col">
          <a href="{{route('Folder19')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 142)
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
        <!-- Akhir Card Folder19 -->
        <!-- Card Folder20 -->
        <div class="col">
          <a href="{{route('Folder20')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 143)
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
        <!-- Akhir Card Folder20 -->
        <!-- Card Folder21 -->
        <div class="col">
          <a href="{{route('Folder21')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 144)
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
        <!-- Akhir Card Folder21 -->
        <!-- Card Folder22 -->
        <div class="col">
          <a href="{{route('Folder22')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 145)
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
        <!-- Akhir Card Folder22 -->
        <!-- Card Folder23 -->
        <div class="col">
          <a href="{{route('Folder23')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 146)
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
        <!-- Akhir Card Folder23 -->
        <!-- Card Folder24 -->
        <div class="col">
          <a href="{{route('Folder24')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 147)
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
        <!-- Akhir Card Folder24 -->
        <!-- Card Folder25 -->
        <div class="col">
          <a href="{{route('Folder25')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 148)
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
        <!-- Akhir Card Folder25 -->
        <!-- Card Folder26 -->
        <div class="col">
          <a href="{{route('Folder26')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 149)
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
        <!-- Akhir Card Folder26 -->
        <!-- Card Folder27 -->
        <div class="col">
          <a href="{{route('Folder27')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 150)
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
        <!-- Akhir Card Folder27 -->
        <!-- Card Folder28 -->
        <div class="col">
          <a href="{{route('Folder28')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 151)
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
        <!-- Akhir Card Folder28 -->
        <!-- Card Folder29 -->
        <div class="col">
          <a href="{{route('Folder29')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 152)
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
        <!-- Akhir Card Folder29 -->
        <!-- Card Folder30 -->
        <div class="col">
          <a href="{{route('Folder30')}}">
            <button type="button" class="btn btn-primary btn-light">
              <div class="card shadow-sm" style="width: 8rem">
                <div class="card-body text-center">
                  <i class="bi bi-folder-fill me-1 fs-1"></i>
                  @foreach ($folders as $folder)
                      @if ($folder->id === 153)
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
        <!-- Akhir Card Folder30 -->
      </div>
    </div>
  </div>
  <!-- Akhir scroll -->
  <!-- Akhir Isi Konten Kanan -->
@endsection