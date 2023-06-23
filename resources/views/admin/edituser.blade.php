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
                    @foreach ($folders as $folder)
                      @if ($folder->id === 3)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach  
                    @foreach ($folders as $folder)
                      @if ($folder->id === 4)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 5)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 6)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 7)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 8)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 9)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 10)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 11)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 12)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 13)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 14)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 15)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 16)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 17)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 18)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 19)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 20)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 21)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 22)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 23)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 24)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 25)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 26)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 27)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 28)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 29)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 30)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 31)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 32)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 33)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 34)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 35)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 36)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 37)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 114)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 115)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 116)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 117)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 118)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 119)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 120)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 121)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 122)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 123)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 124)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 125)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 126)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 127)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
                    @foreach ($folders as $folder)
                      @if ($folder->id === 128)
                        <li class="list-group-item">
                          <input class="form-check-input me-1" name="user_access[]" type="checkbox" value="{{ $folder->name }}" {{ in_array("$folder->name", $user->user_access) ? 'checked' : '' }}/>
                          {{ $folder->name }}
                        </li>
                      @endif
                    @endforeach
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