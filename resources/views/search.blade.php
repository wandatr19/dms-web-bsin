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


{{-- @foreach($documents as $document)
    <p>{{ $document->doc_name }}</p>
@endforeach --}}

<table class="table table-sm table-bordered table-striped table-hover">
  

    <thead>
        <tr>
            <th scope="col">Doc Name</th>
            <th scope="col">Folder</th>
            <th scope="col">Size</th>
            <th scope="col">Date Added</th>
            <th scope="col">Action</th>
            {{-- <th scope="col">Delete</th> --}}
        </tr>
    </thead>
    <tbody>
      @foreach ($documents as $document)
        {{-- @if ($document->category == "banbury") --}}
            <tr>
                <td>{{ $document->doc_name }}</td>
                <td>{{ $document->category }}</td>
                <td>{{ $document->size }} mb</td>
                <td>{{ $document->created_at }}</td>
                <td><a href="{{ route('showdoc', $document->id) }}" target="_blank">Open</a></td>
                {{-- <td><a href="{{ route('deleteBB', ['id' => $document->id]) }}" type="button"
                  class="btn btn-link"><i class="bi bi-trash-fill text-danger"></a></td> --}}
            </tr>
        {{-- @endif --}}
      @endforeach
    </tbody>
  </table>
  


@endsection