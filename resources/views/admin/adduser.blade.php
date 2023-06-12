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
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="name@bridgestone.com" />
                  </div>
                  <div class="mb-3 fs-6">
                    <label for="department" class="form-label">Department :</label>
                    <input type="text" id="department" name="department" class="form-control form-control-sm" placeholder="Department User..." />
                  </div>
                  <div class="mb-3 fs-6">
                    <label for="role" class="form-label">Role :</label>
                    <select class="form-select" name="role" id="role" aria-label="Default select example">
                      <option selected>Select role</option>
                      <option value="user">user</option>
                      <option value="admin">admin</option>
                    </select>
                  </div>
                  <div class="mb-3 fs-6">
                    <label for="password" class="form-label">Enter Password :</label>
                    <input type="password" id="password" name="password" class="form-control form-control-sm" placeholder="Enter Password" />
                    <input type="text" name="password_visible" id="password_visible" class="form-control form-control-sm" style="display: none;">
                    <label for="show_password">
                      <input type="checkbox" id="show_password"> Show Password
                    </label>                    
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
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="mech"/>
                      MECHANICAL
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="elect"/>
                      ELECTRICAL
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="util"/>
                      UTILITY
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="civil"/>
                      CIVIL
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="oth"/>
                      OTHERS
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area6"/>
                      AREA 6
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area7"/>
                      AREA 7
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area8"/>
                      AREA 8
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area9"/>
                      AREA 9
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area10"/>
                      AREA 10
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area11"/>
                      AREA 11
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area12"/>
                      AREA 12
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area13"/>
                      AREA 13
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area14"/>
                      AREA 14
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area15"/>
                      AREA 15
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area16"/>
                      AREA 16
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area17"/>
                      AREA 17
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area18"/>
                      AREA 18
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area19"/>
                      AREA 19
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area20"/>
                      AREA 20
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area21"/>
                      AREA 21
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area22"/>
                      AREA 22
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area23"/>
                      AREA 23
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area24"/>
                      AREA 24
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area25"/>
                      AREA 25
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area26"/>
                      AREA 26
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area27"/>
                      AREA 27
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area28"/>
                      AREA 28
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area29"/>
                      AREA 29
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area30"/>
                      AREA 30
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area31"/>
                      AREA 31
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area32"/>
                      AREA 32
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area33"/>
                      AREA 33
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area34"/>
                      AREA 34
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area35"/>
                      AREA 35
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area36"/>
                      AREA 36
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area37"/>
                      AREA 37
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area38"/>
                      AREA 38
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area39"/>
                      AREA 39
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area40"/>
                      AREA 40
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area41"/>
                      AREA 41
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area42"/>
                      AREA 42
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area43"/>
                      AREA 43
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area44"/>
                      AREA 44
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area45"/>
                      AREA 45
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area46"/>
                      AREA 46
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area47"/>
                      AREA 47
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area48"/>
                      AREA 48
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area49"/>
                      AREA 49
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area50"/>
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