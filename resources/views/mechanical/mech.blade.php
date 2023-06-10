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
        <a href="{{route('qct')}}">
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
        <a href="{{ route('ndct')}}">
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
        <a href="{{ route('8ct')}}">
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
        <a href="{{ route('rtb')}}">
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
        <a href="{{ route('plycutting1')}}">
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
        <a href="{{ route('plycutting2')}}">
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
        <a href="{{ route('srbelt1')}}">
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
        <a href="{{ route('srbelt2')}}">
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
        <a href="{{ route('psp')}}">
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
        <a href="{{ route('il2rh')}}">
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
        <a href="{{ route('kbn2')}}">
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
        <a href="{{ route('k1-s')}}">
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
        <a href="{{ route('hf-1')}}">
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
        <a href="{{ route('apdd-1')}}">
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
        <a href="{{ route('inner_apdd1')}}">
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
        <a href="{{ route('white_buff')}}">
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
        <a href="{{ route('rim_flow')}}">
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
        <a href="{{ route('uniformity')}}">
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
        <a href="{{ route('hp_lrp')}}">
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
        <a href="{{ route('lw_buff')}}">
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
        <a href="{{ route('rework')}}">
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
        <a href="{{ route('tire_repair')}}">
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
        <a href="{{ route('furniture')}}">
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
        <a href="{{ route('cement_house')}}">
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
      </div>
    </div>
  </div>
  <!-- Akhir scroll -->
  <!-- Akhir Isi Konten Kanan -->
@endsection