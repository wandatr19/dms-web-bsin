
@extends('main')


@section('utama')
@if (auth()->user()->role == "admin")
<form action="{{ route('upload-mstr') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="file" name="pdf_file">
  <button type="submit">Upload</button>
</form>
@endif

<h4 style="text-align: center"><b>Masterlist Drawing</b></h4>
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
      @if ($document->category == "masterlist")
          <tr>
              <td>{{ $document->doc_name }}</td>
              <td>{{ $document->size }} mb</td>
              <td>{{ $document->created_at }}</td>
              <td><a href="{{route('mstrlist.show', $document->id)}}" target="_blank">Open</a></td>
              @if (auth()->user()->role == "admin") 
                <td><a href="{{ route('deleteML', ['id' => $document->id]) }}" type="button"
                class="btn btn-link"><i class="bi bi-trash-fill text-danger"></a></td> 
              @endif
          </tr>
      @endif
    @endforeach
  </tbody>
</table>
@endsection
        