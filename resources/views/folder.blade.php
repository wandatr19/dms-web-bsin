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

@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

<form id="addBladeForm" method="POST" action="{{route('folder')}}">
  @csrf
  <div>
      <label for="name">Nama Folder:</label>
      <input type="text" id="name" name="name">
  </div>
  <div>
      <label for="category">Isi Content:</label>
      <textarea id="category" name="category"></textarea>
  </div>
  <div>
      <button type="submit">Tambah Blade</button>
  </div>
</form>

@endsection