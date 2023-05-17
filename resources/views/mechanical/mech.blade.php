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
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="BANBURY">
                  <p class="card-text word-wrap text-truncate">BANBURY</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card BANBURY -->
        <!-- Card STRAINER -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="STRAINER">
                  <p class="card-text word-wrap text-truncate">STRAINER</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card STRAINER -->
        <!-- Card UTILITY -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="UTILITY">
                  <p class="card-text word-wrap text-truncate">UTILITY</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card UTILITY -->
        <!-- Card POLYFILM -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="POLYFILM">
                  <p class="card-text word-wrap text-truncate">POLYFILM</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card POLYFILM -->
        <!-- Card CALENDER -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="CALENDER">
                  <p class="card-text word-wrap text-truncate">CALENDER</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card CALENDER -->
        <!-- Card BEXTER -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="BEXTER">
                  <p class="card-text word-wrap text-truncate">BEXTER</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card BEXTER -->
        <!-- Card QCT -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="QCT">
                  <p class="card-text word-wrap text-truncate">QCT</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card QCT -->
        <!-- Card 1/N DCT -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="1/N DCT">
                  <p class="card-text word-wrap text-truncate">1/N DCT</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card 1/N DCT -->
        <!-- Card 8CT -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="8CT">
                  <p class="card-text word-wrap text-truncate">8CT</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card 8CT -->
        <!-- Card BEAD -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="BEAD">
                  <p class="card-text word-wrap text-truncate">BEAD</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card BEAD -->
        <!-- Card MONOWIRE -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="MONOWIRE">
                  <p class="card-text word-wrap text-truncate">MONOWIRE</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card MONOWIRE -->
        <!-- Card RTB -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="RTB">
                  <p class="card-text word-wrap text-truncate">RTB</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card RTB -->
        <!-- Card PLY CUTTING NO.1 -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="PLY CUTTING NO.1">
                  <p class="card-text word-wrap text-truncate">PLY CUTTING NO.1</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card PLY CUTTING NO.1 -->
        <!-- Card PLY CUTTING NO.2 -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="PLY CUTTING NO.2">
                  <p class="card-text word-wrap text-truncate">PLY CUTTING NO.2</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card PLY CUTTING NO.2 -->
        <!-- Card SR BELT 1 -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="SR BELT 1">
                  <p class="card-text word-wrap text-truncate">SR BELT 1</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card SR BELT 1 -->
        <!-- Card SR BELT 2 -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="SR BELT 2">
                  <p class="card-text word-wrap text-truncate">SR BELT 2</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card SR BELT 2 -->
        <!-- Card PSP -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="PSP">
                  <p class="card-text word-wrap text-truncate">PSP</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card PSP -->
        <!-- Card IL 2RH -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="IL 2RH">
                  <p class="card-text word-wrap text-truncate">IL 2RH</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card IL 2RH -->
        <!-- Card KBN2 -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="KBN2">
                  <p class="card-text word-wrap text-truncate">KBN2</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card KBN2 -->
        <!-- Card K1-S -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="K1-S">
                  <p class="card-text word-wrap text-truncate">K1-S</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card K1-S -->
        <!-- Card HF-1 -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="HF-1">
                  <p class="card-text word-wrap text-truncate">HF-1</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card HF-1 -->
        <!-- Card CURE -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="CURE">
                  <p class="card-text word-wrap text-truncate">CURE</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card CURE -->
        <!-- Card APDD-1 -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="APDD-1">
                  <p class="card-text word-wrap text-truncate">APDD-1</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card APDD-1 -->
        <!-- Card INNER APDD-1 -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="INNER APDD-1">
                  <p class="card-text word-wrap text-truncate">INNER APDD-1</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card INNER APDD-1 -->
        <!-- Card WHITE BUFF-2 -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="WHITE BUFF-2">
                  <p class="card-text word-wrap text-truncate">WHITE BUFF-2</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card WHITE BUFF-2 -->
        <!-- Card RIM FLOW -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="RIM FLOW">
                  <p class="card-text word-wrap text-truncate">RIM FLOW</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card RIM FLOW -->
        <!-- Card UNIFORMITY -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="UNIFORMITY">
                  <p class="card-text word-wrap text-truncate">UNIFORMITY</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card UNIFORMITY-->
        <!-- Card HP LRP -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="HP LRP">
                  <p class="card-text word-wrap text-truncate">HP LRP</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card HP LRP -->
        <!-- Card LW BUFF -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="LW BUFF">
                  <p class="card-text word-wrap text-truncate">LW BUFF</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card LW BUFF -->
        <!-- Card REWORK -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="REWORK">
                  <p class="card-text word-wrap text-truncate">REWORK</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card REWORK -->
        <!-- Card TIRE REPAIR -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="TIRE REPAIR">
                  <p class="card-text word-wrap text-truncate">TIRE REPAIR</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card TIRE REPAIR -->
        <!-- Card FURNITURE -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="FURNITURE">
                  <p class="card-text word-wrap text-truncate">FURNITURE</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card FURNITURE -->
        <!-- Card CEMENT HOUSE -->
        <div class="col">
          <button type="button" class="btn btn-primary btn-light">
            <div class="card shadow-sm" style="width: 8rem">
              <div class="card-body text-center">
                <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="CEMENT HOUSE">
                  <p class="card-text word-wrap text-truncate">CEMENT HOUSE</p>
                </span>
              </div>
            </div>
          </button>
        </div>
        <!-- Akhir Card CEMENT HOUSE -->
      </div>
    </div>
  </div>
  <!-- Akhir scroll -->
  <!-- Akhir Isi Konten Kanan -->
@endsection