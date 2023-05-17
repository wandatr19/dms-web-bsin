@extends('main')

@section('utama')
<div class="row">
    <div class="input-group input-group-sm m-0 p-0">
      <button class="input-group-text" id="inputGroup-sizing-sm" onclick="">Back</button>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled />
    </div>
  </div>
  <!-- Akhir Back Button -->

  <!-- Isi Konten Kanan -->
  <div class="container-fluid my-3 p-0">
    <!-- Baris 1: List User Text -->
    <div class="row my-3 ms-4">
      <h4 class="text-center fw-bold fs-3">List User</h4>
      <div class="row">
        <hr class="ms-0" />
      </div>
    </div>

    <!-- Baris 2: List User Text -->
    <div class="row my-3 ms-4">
      <!-- scroll -->
      <div class="overflow-auto" style="max-width: 1200px; max-height: 500px">
        <div class="table-responsive">
          <table class="table table-sm table-bordered table-striped table-hover">
            <caption>
              List of users
            </caption>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Date Added</th>
                <th scope="col">...</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Uzumaki Rendra</td>
                <td>ENGINEERING</td>
                <td>05/01/2023</td>
                <td><button type="button" class="btn btn-link">Edit</button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Wanda Cargloss</td>
                <td>ELECTRICAL</td>
                <td>05/01/2023</td>
                <td><button type="button" class="btn btn-link">Edit</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- Akhir scroll -->
    </div>
  </div>
  <!-- Akhir Isi Konten Kanan -->
</div>
@endsection