@extends('main')

@section('utama')
<!-- Back Button -->
<div class="row">
    <div class="input-group input-group-sm m-0 p-0">
      <a href="{{route('banbury')}}">
      <button class="input-group-text" id="inputGroup-sizing-sm" onclick="">Back</button>
      </a>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled />
    </div>
</div>
  <!-- Akhir Back Button -->
  {{-- @php
    dd($pdfLink) 
  @endphp --}}
<embed style="width: 100%; height:100vh" src="{{$pdfLink}}" type="application/pdf">
@endsection