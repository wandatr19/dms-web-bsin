@extends('main')

@section('utama')
    <div class="row">
        <div class="input-group input-group-sm m-0 p-0">
            <button class="input-group-text" id="inputGroup-sizing-sm" onclick=""><b>Back</b></button>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                disabled />
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
        @if (session('success1'))
            <div class="alert alert-success">
                {{ session('success1') }}
            </div>
        @endif

        <!-- Baris 2: List User Text -->
        <div class="row my-3 ms-4">
            <!-- scroll -->
            @if (session('success'))
                <div class="alert alert-danger">
                    {{ session('success') }}
                </div>
            @endif
            <div class="overflow-auto" style="max-width: 100%; max-height: 100%">
                <div class="table-responsive">
                    <table class="table table-sm table-bordered table-striped table-hover">
                        <caption>
                            List of users
                        </caption>

                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Department</th>
                                <th scope="col">Role</th>
                                <th scope="col">Email</th>
                                {{-- <th scope="col">Created at</th> --}}
                                <th scope="col">User Access</th>
                                <th scope="col" style="text-align: center">Delete</th>
                                <th scope="col" style="text-align: center">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->department }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->email }}</td>
                                    {{-- <td>{{ $user->created_at }}</td> --}}
                                    <td>{{ $user->user_access }}</td>
                                    <td style="text-align: center"><a href="{{ route('deleteUser', ['id' => $user->id]) }}" type="button"
                                            class="btn btn-link"><i class="bi bi-trash-fill text-danger"></a></td>
                                    <td style="text-align: center"><a href="{{ route('edit-user', $user->id) }}"><i class="bi bi-pencil-square"></i></a></td>
                                </tr>
                            @endforeach
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
