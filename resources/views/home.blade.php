@extends('main')

@section('utama')
<div class="container">
    <!-- baris 1 -->
    @if (auth()->user()->role == "user")
    <div class="row my-3 ms-4">
      <h4><i class="bi bi-star-fill text-warning me-2"></i>Favourites</h4>
      <hr class="ms-0" />

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-filetype-pdf fs-1 text-danger"></i>
              <p class="card-text">BB1 - 1/20</p>
            </div>
          </div>
        </button>
      </div>
    </div>
    @endif

    <!-- baris 2 -->
    <div class="row my-3 ms-4">
      <h4><i class="bi bi-folder-fill me-2 text-primary"></i>Documents</h4>
      <hr class="ms-0" />

      <div class="col">
        <a href="{{route('mech')}}">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Mechanical</p>
            </div>
          </div>
        </button>
        </a>
      </div>

      <div class="col">
        <a href="/home/electrical">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Electrical</p>
            </div>
          </div>
        </button>
        </a>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Utility</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Civil</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Others</p>
            </div>
          </div>
        </button>
      </div>

      @if (auth()->user()->role == "admin")
      <div class="col">
        <a href="/treebranch">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 6</p>
            </div>
          </div>
        </button>
        </a>
      </div>

      <div class="col">
        <a href="/treebranch">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 7</p>
            </div>
          </div>
        </button>
        </a>
      </div>
    </div>

    <!-- baris 3 -->
    <div class="row my-3 ms-4">
      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 8</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 9</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 10</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 11</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 12</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 13</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 14</p>
            </div>
          </div>
        </button>
      </div>
    </div>
    <!-- baris 4 -->
    <div class="row my-3 ms-4">
      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 15</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 16</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 17</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 18</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 19</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 20</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
              <p class="card-text">Area 21</p>
            </div>
          </div>
        </button>
      </div>
      @endif
    </div>
  </div>
@endsection