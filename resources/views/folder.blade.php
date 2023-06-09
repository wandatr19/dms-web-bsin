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

@if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

<form method="POST" action="{{route('add-folder')}}">
    @csrf
    <div>
        <label for="name">Nama Folder:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="category">Kategori:</label>
        <select name="category" id="category">
            <option value="main">Main</option>
            <option value="secondary">Mechanical</option>
            <option value="other">Electrical</option>
        </select>
    </div>
    <button type="submit">Tambah Folder</button>
</form>
<h4>List Folder</h4>

<div class="overflow-auto" style="max-width: 1200px; max-height: 500px">
  <div class="table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">Folder Name</th>
          <th scope="col">Rename</th>
          <th scope="col">Category</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($folders as $folder)
          <tr>
            <td>{{$folder->name}}</td>
            <td>Edit</td>
            <td>{{$folder->category}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


@endsection