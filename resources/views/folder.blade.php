@extends('main')

@section('utama')
<!-- Back Button -->
<div class="row">
    <div class="input-group input-group-sm m-0 p-0">
      <a href="{{route('home')}}">
      <button class="input-group-text" id="inputGroup-sizing-sm" onclick="">Back</button>
      </a>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled />
    </div>
</div>



<div class="container-fluid">
  <div class="row my-3 ms-4 fs-5 row-cols-auto">
    <div class="col">
      <a href="{{route("main-folder")}}">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="Main">
                  <p class="card-text word-wrap text-truncate">Main</p>
                </span>
            </div>
          </div>
        </button>
      </a>
    </div>

    <div class="col">
      <a href="{{route("mech-folder")}}">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="Mechanical">
                  <p class="card-text word-wrap text-truncate">Mechanical</p>
                </span>
            </div>
          </div>
        </button>
      </a>
    </div>

    <div class="col">
      <a href="{{route("elect-folder")}}">
        <button type="button" class="btn btn-primary btn-light">
          <div class="card shadow-sm" style="width: 8rem">
            <div class="card-body text-center">
              <i class="bi bi-folder-fill me-1 fs-1"></i>
                <span class="tt" data-bs-placement="top" title="Electrical">
                  <p class="card-text word-wrap text-truncate">Electrical</p>
                </span>
            </div>
          </div>
        </button>
      </a>
    </div>
  </div>
</div>
@endsection