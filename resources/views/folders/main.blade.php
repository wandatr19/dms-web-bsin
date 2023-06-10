@extends('main')

@section('utama')
<!-- Back Button -->
<div class="row">
    <div class="input-group input-group-sm m-0 p-0">
      <a href="{{route('folder')}}">
      <button class="input-group-text" id="inputGroup-sizing-sm" onclick="">Back</button>
      </a>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled />
    </div>
</div>

@if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

<div class="overflow-auto" style="max-width: 100%; max-height: 500px">
  <div class="table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Folder Name</th>
          <th scope="col">Rename</th>
          <th scope="col">Category</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($folders as $folder)
          @if ($folder->category == "main")
            <tr>
              <td>{{ $folder->id }}</td>
              <td>{{ $folder->name }}</td>
              <td>
                <a class="btn btn-link" aria-current="page" data-bs-toggle="modal" data-bs-target="#ModalOpen{{ $folder->id }}">
                  Edit
                </a>
                <div class="modal fade" id="ModalOpen{{ $folder->id }}" tabindex="-1" aria-labelledby="ModalOpen{{ $folder->id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content shadow px-5" style="border-radius: 15px">
                      <!-- Header Modal & Tanda Silang -->
                      <div class="modal-body text-center">
                        <strong style="color: rgb(0, 0, 0)">Rename Folder </strong>
                      </div>
                      <!-- buat input password -->
                      <div class="mb-3 row">
                        <form action="{{route('re-folder', $folder->id)}}" method="POST" >
                          @csrf
                          <div class="form-group">
                            <label for="name" class=" col-form-label"></label>
                            <input type="name" class="form-control" id="name" name="name" value="{{ $folder->name }}" required>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-secondary btn-success">Confirm</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td>{{$folder->category}}</td>
            </tr>
          @endif
        @endforeach
      </tbody>
    </table>
  </div>
</div>


@endsection