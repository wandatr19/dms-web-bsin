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

@if(isset($documents) && count($documents) > 0)
<div class="overflow-auto" style="max-width: 100%; max-height: 93%">
  <table class="table table-sm table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th scope="col">Doc Name</th>
              <th scope="col">Folder</th>
              <th scope="col">Size</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($documents as $document)
              <tr>
                  <td><a href="{{route('view-doc', $document->id)}}">{!! $document->doc_name !!}</a></td>
                  <td>{{ $document->category }}</td>
                  <td>{{ $document->size }} mb</td>
                  <td style="text-align: center"><a class="btn btn-link" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModalOpen{{ $document->id }}"><button><i class="bi bi-download"></i></button></a>
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
                              <form action="{{route('pw-search', $document->id)}}" method="POST" target="_blank">
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
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
@else
  <p>Tidak ada dokumen yang ditemukan</p>
@endif



@endsection