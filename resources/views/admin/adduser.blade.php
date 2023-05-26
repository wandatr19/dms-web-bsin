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
      <!-- Baris 1: Add User Text -->
      <div class="row my-3 ms-4">
        <h4 class="text-center fw-bold fs-3">Add User</h4>
        <div class="row">
          <hr class="ms-0" />
        </div>
      </div>

      <form method="POST" action="{{route('save-adduser')}}">
        {{ csrf_field() }}
        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif
        <!-- Baris 2 : User Info & User Access -->
        <div class="row my-3 ms-4 fs-5">
          <!--  User Info -->
          <div class="col-sm-6">
            <div class="container-fluid">
              <div class="row my-3 ms-4">
                <h4 class="fw-bold fs-3">User Info</h4>
                <div class="row">
                  <hr class="ms-0" />
                </div>

                <fieldset>
                  <div class="mb-3 fs-6">
                    <label for="name" class="form-label">Name :</label>
                    <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Nama User..." />
                  </div>
                  <div class="mb-3 fs-6">
                    <label for="department" class="form-label">Department :</label>
                    <input type="text" id="department" name="department" class="form-control form-control-sm" placeholder="Department User..." />
                  </div>
                  <div class="mb-3 fs-6">
                    <label for="role" class="form-label">Role :</label>
                    <select class="form-select" name="role" id="role" aria-label="Default select example">
                      <option selected>Select role</option>
                      <option value="admin">admin</option>
                      <option value="user">user</option>
                    </select>
                  </div>
                  <div class="mb-3 fs-6">
                    <label for="password" class="form-label">Enter Password :</label>
                    <input type="password" id="password" name="password" class="form-control form-control-sm" placeholder="Enter Password" />
                  </div>
                  <div class="mb-3 fs-6">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="name@example.com" />
                  </div>
                </fieldset>
              </div>
            </div>
          </div>
          <!-- Akhir  User Info -->

          <!-- User Access -->
          <div class="col-sm-6">
            <div class="container-fluid">
              <div class="row my-3 ms-4">
                <h4 class="fw-bold fs-3">User Access</h4>
                <div class="row">
                  <hr class="ms-0" />
                </div>

                <!-- scroll -->
                <div class="overflow-auto" style="max-width: 500px; max-height: 380px">
                  <ul class="list-group fs-6">
                    <li class="list-group-item bg-secondary text-light sticky-top">Area Access<i class="bi bi-caret-up-fill ms-2"></i><i class="bi bi-caret-down-fill"></i></li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="mech" aria-label="..." />
                      MECHANICAL
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="elect" aria-label="..." />
                      ELECTRICAL
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="util" aria-label="..." />
                      UTILITY
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="civil" aria-label="..." />
                      CIVIL
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="oth" aria-label="..." />
                      OTHERS
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area6" aria-label="..." />
                      AREA 6
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="" aria-label="..." />
                      AREA 7
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="" aria-label="..." />
                      AREA 8
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="" aria-label="..." />
                      AREA 9
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="" aria-label="..." />
                      AREA 10
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="" aria-label="..." />
                      AREA 11
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="" aria-label="..." />
                      AREA 12
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="" aria-label="..." />
                      AREA 13
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="" aria-label="..." />
                      AREA 14
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="" aria-label="..." />
                      AREA 15
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="" aria-label="..." />
                      AREA 16
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="" aria-label="..." />
                      AREA 17
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="" aria-label="..." />
                      AREA 18
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="" aria-label="..." />
                      AREA 19
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="" aria-label="..." />
                      AREA 20
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="" aria-label="..." />
                      AREA 21
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="" aria-label="..." />
                      AREA 22
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="" aria-label="..." />
                      AREA 23
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="" aria-label="..." />
                      AREA 24
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="" aria-label="..." />
                      AREA 25
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 26
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 27
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 28
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 29
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 30
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 31
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 32
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 33
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 34
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 35
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 36
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 37
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 38
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 39
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 40
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 41
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 42
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 43
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 44
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 45
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 46
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 47
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 48
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 49
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                      AREA 50
                    </li>
                  </ul>
                </div>
                <!-- Akhir scroll -->
              </div>
            </div>
          </div>
          <!-- Akhir User Access -->
        </div>

        <!-- Baris 3 : Button Add User -->
        <div class="row text-center">
          <div class="col">
            <button type="submit" class="btn btn-success shadow px-5" style="border-radius: 20px">Add User</button>
          </div>
        </div>
      </form>
      

    </div>
    <!-- Akhir Isi Konten Kanan -->
  </div>
  <!-- Akhir Isi Content -->
@endsection