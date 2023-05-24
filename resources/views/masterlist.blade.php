
@extends('main')


@section('utama')

<form action="{{ route('upload-mstr') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="file" name="pdf_file">
  <button type="submit">Upload</button>
</form>

{{-- <div class="pdf-container">
  <embed src="{{ route('mstrlist.show', $documents->id) }}" width="100%" height="600px" type="application/pdf">
</div> --}}
@endsection
        