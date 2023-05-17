@extends('main')

@section('utama')
<!-- Back Button -->
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
      <h4 class="text-center fw-bold fs-3">History</h4>
      <div class="row">
        <hr class="ms-0" />
      </div>
    </div>
    <!-- Akhir Baris 1 -->

    <!-- Baris 2: Btn Export & Delete -->
    <div class="row text-end mx-3">
      <div class="col">
        <!-- Button Export History -->
        <!-- Button trigger modal -->
        <button href="#" type="button" class="btn btn-success btn-sm" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModalExport">Export</button>
        <!-- Akhir Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModalExport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow" style="border-radius: 15px">
              <!-- Header Modal & Tanda Silang -->

              <div class="modal-body text-center">
                <strong style="color: rgb(0, 0, 0)"
                  >Are you sure you want to
                  <span class="text-success">Export</span>
                  All the History Data?
                </strong>
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-secondary btn-success" data-bs-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal">No</button>
              </div>
              <div class="mb-3"></div>
            </div>
          </div>
        </div>
        <!-- Akhir Modal -->
        <!-- Akhir Button Export History -->

        <!-- Button Delete All History -->
        <!-- Button trigger modal -->
        <button href="#" type="button" class="btn btn-danger btn-sm" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModalDelete">Delete</button>
        <!-- Akhir Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow" style="border-radius: 15px">
              <!-- Header Modal & Tanda Silang -->

              <div class="modal-body text-center">
                <strong style="color: rgb(0, 0, 0)"
                  >Are you sure you want to
                  <span class="text-danger">Delete</span>
                  All the History?
                </strong>
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-secondary btn-success" data-bs-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal">No</button>
              </div>
              <div class="mb-3"></div>
            </div>
          </div>
        </div>
        <!-- Akhir Modal -->
        <!-- Akhir Button Delete All History -->
      </div>
    </div>
    <!-- Akhir Baris 2: Btn Export & Delete -->

    <!-- Baris 3: Table History -->
    <div class="row my-3 ms-4">
      <!-- scroll -->
      <div class="overflow-auto" style="max-width: 1200px; max-height: 500px">
        <div class="table-responsive">
          <table class="table table-sm table-bordered table-striped table-hover">
            <caption>
              List of History
            </caption>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Print Date</th>
                <th scope="col">Activity</th>
                <th scope="col">...</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Uzumaki Rendra</td>
                <td>ENGINEERING</td>
                <td>05/01/2023</td>
                <td><span type="" class="text-primary">Open</span></td>
                <td class="text-center">
                  <button type="button" class="btn btn-link">
                    <i class="bi bi-trash-fill text-danger"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Arya Uchiha</td>
                <td>MECHANICAL</td>
                <td>05/01/2023</td>
                <td><span type="" class="text-success">Print</span></td>
                <td class="text-center">
                  <button type="button" class="btn btn-link">
                    <i class="bi bi-trash-fill text-danger"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- Akhir scroll -->
    </div>
    <!-- Akhir Baris 3 -->

    <!-- Baris 4: Pagination -->
    <div class="row">
      <div class="col">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- Akhir Baris 4 -->
  </div>
  <!-- Akhir Isi Konten Kanan -->
</div>
@endsection