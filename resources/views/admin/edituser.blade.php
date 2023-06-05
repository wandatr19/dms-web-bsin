@extends('main')

@section('utama')
    <!-- Back Button -->
    <div class="row">
      <div class="input-group input-group-sm m-0 p-0">
        <a href="{{route('listuser')}}">
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
        <h4 class="text-center fw-bold fs-3">Edit User Information</h4>
        <div class="row">
          <hr class="ms-0"/>
        </div>
      </div>

      <form method="POST" action="{{ route('update-user', $user->id) }}">
        {{ csrf_field() }}
        @method('PUT')
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
                    <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Nama User..." value="{{ $user->name }}" required/>
                  </div>
                  <div class="mb-3 fs-6">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="name@example.com" value="{{ $user->email }}" required/>
                  </div>
                  <div class="mb-3 fs-6">
                    <label for="password" class="form-label">Edit Password :</label>
                    <input type="password" id="password" name="password" class="form-control form-control-sm" placeholder="Enter Password"/>
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
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="mech" {{ in_array('mech', $user->user_access) ? 'checked' : '' }}/>
                      MECHANICAL
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="elect" {{ in_array('elect', $user->user_access) ? 'checked' : '' }}/>
                      ELECTRICAL
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="util" {{ in_array('util', $user->user_access) ? 'checked' : '' }}/>
                      UTILITY
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="civil" {{ in_array('civil', $user->user_access) ? 'checked' : '' }}/>
                      CIVIL
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="oth" {{ in_array('oth', $user->user_access) ? 'checked' : '' }}/>
                      OTHERS
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area6" {{ in_array('area6', $user->user_access) ? 'checked' : '' }}/>
                      AREA 6
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area7" {{ in_array('area7', $user->user_access) ? 'checked' : '' }}/>
                      AREA 7
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area8" {{ in_array('area8', $user->user_access) ? 'checked' : '' }}/>
                      AREA 8
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area9" {{ in_array('area9', $user->user_access) ? 'checked' : '' }}/>
                      AREA 9
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area10" {{ in_array('area10', $user->user_access) ? 'checked' : '' }}/>
                      AREA 10
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area11" {{ in_array('area11', $user->user_access) ? 'checked' : '' }}/>
                      AREA 11
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area12" {{ in_array('area12', $user->user_access) ? 'checked' : '' }}/>
                      AREA 12
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area13" {{ in_array('area13', $user->user_access) ? 'checked' : '' }}/>
                      AREA 13
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area14" {{ in_array('area14', $user->user_access) ? 'checked' : '' }}/>
                      AREA 14
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="area15" {{ in_array('area15', $user->user_access) ? 'checked' : '' }}/>
                      AREA 15
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area16" {{ in_array('area16', $user->user_access) ? 'checked' : '' }}/>
                      AREA 16
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area17" {{ in_array('area17', $user->user_access) ? 'checked' : '' }}/>
                      AREA 17
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area18" {{ in_array('area18', $user->user_access) ? 'checked' : '' }}/>
                      AREA 18
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area19" {{ in_array('area19', $user->user_access) ? 'checked' : '' }}/>
                      AREA 19
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area20" {{ in_array('area20', $user->user_access) ? 'checked' : '' }}/>
                      AREA 20
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area21" {{ in_array('area21', $user->user_access) ? 'checked' : '' }}/>
                      AREA 21
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area22" {{ in_array('area22', $user->user_access) ? 'checked' : '' }}/>
                      AREA 22
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area23" {{ in_array('area23', $user->user_access) ? 'checked' : '' }}/>
                      AREA 23
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area24" {{ in_array('area24', $user->user_access) ? 'checked' : '' }}/>
                      AREA 24
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area25" {{ in_array('area25', $user->user_access) ? 'checked' : '' }}/>
                      AREA 25
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area26" {{ in_array('area26', $user->user_access) ? 'checked' : '' }}/>
                      AREA 26
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area27" {{ in_array('area27', $user->user_access) ? 'checked' : '' }}/>
                      AREA 27
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area28" {{ in_array('area28', $user->user_access) ? 'checked' : '' }}/>
                      AREA 28
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area29" {{ in_array('area29', $user->user_access) ? 'checked' : '' }}/>
                      AREA 29
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" name="user_access" type="checkbox" value="area30" {{ in_array('area30', $user->user_access) ? 'checked' : '' }}/>
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
            <button type="submit" class="btn btn-success shadow px-5" style="border-radius: 20px">Edit User Info</button>
          </div>
        </div>
      </form>
      

    </div>
    <!-- Akhir Isi Konten Kanan -->
  </div>
  <!-- Akhir Isi Content -->
@endsection