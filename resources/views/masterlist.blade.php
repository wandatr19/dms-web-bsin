
@extends('main')


@section('utama')

        <div class="col-sm-10">
          <div class="container">
            <!-- baris 1 -->
            <div class="row my-3 ms-4">
              <h4><i class="bi bi-kanban-fill"></i> Master Lists</h4>
              <hr class="ms-0" />
            </div>
            <div id="pdf-container">
                <embed type="application/pdf" src="img/dokumen.pdf" width="1300" height="600"></embed>
            </div>
          </div>
        </div>
@endsection
        