
@extends('main')


@section('utama')

<form action="{{ route('upload-mstr') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="file" name="pdf_file">
  <button type="submit">Upload</button>
</form>

<div>
  @if (session('pdf_path'))
    <iframe src="{{ asset('storage/' . session('pdf_path')) }}" width="100%" height="500px"></iframe>
  @endif

</div>

        {{-- <div class="col-sm-10">
          <div class="container">
            <!-- baris 1 -->
            <div class="row my-3 ms-4">
              <h4><i class="bi bi-kanban-fill"></i> Master Lists</h4>
              <hr class="ms-0" />
            </div>
            <div id="pdf-container">
                <embed type="application/pdf" src="img/masterlist.pdf" width="1300" height="600"></embed>
            </div>
          </div>
        </div> --}}
@endsection
        