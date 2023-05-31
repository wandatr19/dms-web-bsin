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
<!-- Akhir Back Button -->

@if (session('success'))
  <div class="alert alert-danger">
    {{ session('success') }}
  </div>
@endif

<!-- Baris 2: Btn Delete All-->
@if (auth()->user()->role == "admin")
<div class="row text-end mx-3">
  <div class="col">
    <!-- Button Delete All History -->
    <!-- Button trigger modal -->
    <button href="#" type="button" class="btn btn-danger btn-sm" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModalDelete">Delete</button>
    <!-- Akhir Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow" style="border-radius: 15px">
          <!-- Header Modal & Tanda Silang -->

          <div class="modal-body text-center">
            <strong style="color: rgb(0, 0, 0)"
              >Are you sure you want to
              <span class="text-danger">Delete</span>
              All the History?
            </strong>
          </div>
          <div class="text-center">
          <a href="{{route('deleteUtil', ['category'=>'utility'])}}">
            <button type="button" class="btn btn-secondary btn-success" data-bs-dismiss="modal">Yes</button>
          </a>
            <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal">No</button>
          </div>
          <div class="mb-3"></div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal -->
    <!-- Akhir Button Delete All History -->
  </div>
</div>
@endif
<!-- Akhir Baris 2: Btn Export & Delete -->

        

<!-- List Doc -->
<div class="overflow-auto" style="max-width: 100%; max-height: 93%">
<table class="table table-sm table-bordered table-striped table-hover">
  <thead>
      <tr>
          <th scope="col">Doc Name</th>
          <th scope="col">Size</th>
          <th scope="col">Date Added</th>
          <th scope="col">Action</th>
          @if (auth()->user()->role == "admin")
          <th scope="col">Delete</th>
          @endif
      </tr>
  </thead>
  <tbody>
    @foreach ($documents as $document)
      @if ($document->category == "utility")
          <tr>
              <td>{{ $document->doc_name }}</td>
              <td>{{ $document->size }} mb</td>
              <td>{{ $document->created_at }}</td>
              <td><a href="{{route('show-util', $document->id)}}" target="_blank">Open</a></td>
              @if (auth()->user()->role == "admin")
                <td><a href="{{ route('delUtil', ['id' => $document->id]) }}" type="button"
                class="btn btn-link"><i class="bi bi-trash-fill text-danger"></a></td>
              @endif
          </tr>
      @endif
    @endforeach
  </tbody>
</table>
</div>

<!-- Button Plus -->
@if (auth()->user()->role == "admin")
<div class="position-relative">
  <!-- Button trigger modal -->

  <a href="#" class="rounded" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModalbtnplus">
    <span class="tt" data-bs-placement="top" title="Add Document">
      <i class="bi bi-plus-circle-fill fs-1 text-dark"></i>
    </span>
  </a>

  <!-- <button class="btn btn-dark btn-lg btn-block bg-danger" type="button">Login</button> -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalbtnplus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content shadow p-3" style="border-radius: 15px">
        
        <div class="text-center">
        <!-- Dropzone Baru -->
          <form action="{{route('uputil')}}" method="POST" encytype="multipart/form-data" id="pdf-upload" class="dropzone">
            @csrf
          </form>  
        <!-- Akhri Dropzone baru -->

          <a href="">
            <button type="button" class="btn btn-secondary btn-success mt-3" data-bs-dismiss="modal">Confirm</button>
          </a>
        </div>
        <div class="mb-3"></div>
      </div>
    </div>
  </div>
</div>
@endif
<!-- Akhir Button Plus -->

@endsection