@extends('main')

@section('utama')
<!-- Back Button -->
<div class="row">
    <div class="input-group input-group-sm m-0 p-0">
      <a href="{{route('mech')}}">
      <button class="input-group-text" id="inputGroup-sizing-sm" onclick="">Back</button>
      </a>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled />
    </div>
</div>
@if (session('success'))
  <div class="alert alert-danger">
    {{ session('success') }}
  </div>
@endif
@if (session('failed'))
  <div class="alert alert-danger">
    {{ session('failed') }}
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
              All Document?
            </strong>
          </div>
          <div class="text-center">
          <a href="{{route('destroy-Folder8', ['category'=>'Folder8'])}}">
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
<div class="overflow-auto" style="max-width: 100%; max-height: 90%">
<table class="table table-sm table-bordered table-striped table-hover">
  <thead>
      <tr>
          <th scope="col">Doc Name</th>
          <th scope="col" style="text-align: center">Size</th>
          <th scope="col" style="text-align: center">Action</th>
          {{-- <th scope="col" style="text-align: center">Favorite</th> --}}
          @if (auth()->user()->role == "admin")
          <th scope="col" style="text-align: center">Date Added</th>
          <th scope="col" style="text-align: center">Delete</th>
          @endif
      </tr>
  </thead>
  <tbody>
    @foreach ($documents as $document)
      @if ($document->category == "Folder8")
          <tr>
              <td><a href="{{ route('view-Folder8', $document->id) }}" target="_blank">{{ $document->doc_name }}</a></td>
              <td style="text-align: center">{{ $document->size }} mb</td>
              <td style="text-align: center"><a class="btn btn-link" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModalOpen{{ $document->id }}"><i class="bi bi-download"></i></a>
              <!-- Modal buat open Doc-->
                <div class="modal fade" id="exampleModalOpen{{ $document->id }}" tabindex="-1" aria-labelledby="exampleModalOpen{{ $document->id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content shadow px-5" style="border-radius: 15px">
                      <!-- Header Modal & Tanda Silang -->
                      <div class="modal-body text-center">
                        <strong style="color: rgb(0, 0, 0)">Please Input Password! </strong>
                      </div>
                      <!-- buat input password -->
                      <div class="mb-3 row">
                        <form action="{{route('pw-Folder8', $document->id)}}" method="POST" target="_blank">
                          @csrf
                          <div class="form-group">
                            <label for="password" class=" col-form-label"></label>
                            <input type="password" class="form-control" id="password" name="password">
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-secondary btn-success">Confirm</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- Akhir modal buat open doc -->
              </td>
              {{-- <td style="text-align: center"><a href="{{route('add-fav', $document)}}">Add to <i class="bi bi-star"></i></a></td> --}}
              @if (auth()->user()->role == "admin")
                <td style="text-align: center">{{ $document->created_at }}</td>
                <td style="text-align: center"><a href="{{ route('del-Folder8', ['id' => $document->id]) }}" type="button"
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
          <form action="{{route('up-Folder8')}}" method="POST" encytype="multipart/form-data" id="pdf-upload" class="dropzone">
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
