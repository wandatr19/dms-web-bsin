@extends('main')

@section('utama')
<!-- Back Button -->
<div class="row">
    <div class="input-group input-group-sm m-0 p-0">
      <a href="{{route('home')}}">
      <button class="input-group-text" id="inputGroup-sizing-sm" onclick=""><b>Back</b></button>
      </a>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled />
    </div>
</div>

@if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
{{-- <form action="{{route('store-pw')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="password" class="form-label">Masukan Password Dokumen</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form> --}}

<p>Password Document : <br><b>{{$passwordDoc->password}}</b></p>
{{-- <table border="1">
  <thead>
    <th>Password : </th>
  </thead>
  <tbody>
    <td>{{$passwordDoc->password}}</td>
  </tbody>
</table> --}}

<form action="{{ route('update-pw') }}" method="POST">
  @csrf

  <div class="mb-3">
      <label for="password" class="form-label">Edit Password</label>
      <input type="password" class="form-control" id="password" name="password">
  </div>

  <button type="submit" class="btn btn-primary">Update Password</button>
</form>
@endsection