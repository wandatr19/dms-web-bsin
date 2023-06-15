<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('vendor/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />

    <!-- App css -->
    <link href="assets/css/config/creative/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet"/>
    {{-- <link href="assets/css/config/creative/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" /> --}}
    <link href="assets/css/config/creative/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    {{-- <link href="assets/css/config/creative/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" /> --}}

    <!-- icons -->
    <link rel="icon" href="img/bs-logo-white.png">
    <title>Login | DMS Project</title>
</head>

<body>
    <!-- Box Login-->

    <section id="logincard">
        <section class="vh-100" style="background-color: #000000e0">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block mt-4 pt-4">
                                    <img src="img\bs.png" alt="Bridgestone"
                                        class="rounded mx-auto d-block align-middle text-center"
                                        style="background-position: center; background-size: cover" />
                                </div>
                                <div class="col-md-6 col-lg-6 d-flex align-items-center ms-4">
                                    <div class="card-body text-black">
                                        <form action="{{ 'postlogin' }}" method="post">
                                            {{ csrf_field() }}
                                            <h1 class="fw-bold">DMS Engineering Design</h1>

                                            <h5 class="fw-normal mb-1 pb-3" style="letter-spacing: 1px">Log in to your account</h5>
                                            @if (session('failed'))
                                                <div class="alert alert-danger">
                                                    {{ session('failed') }}
                                                </div>
                                            @endif

                                            <div class="form-outline mb-4">
                                                <p class="form-label fw-bold" for="form2Example17">Email</p>
                                                <input type="email" id="email"
                                                    class="form-control form-control-lg shadow fs-6" name="email"
                                                    placeholder="Masukan Email anda...">
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label for="password" class="form-label fw-bold">Password</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="password" id="password"
                                                        class="form-control form-control-lg shadow fs-6" name="password"
                                                        placeholder="Masukan Password anda...">
                                                    <div class="input-group-text" data-password="false">
                                                        <span class="password-eye"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <section class="loginbtn">
                                                <div class="d-grid gap-2 mb-4 rounded-top shadow">
                                                    <!-- Button trigger modal -->
                                                    <button type="submit"
                                                        class="btn btn-danger btn-block">LOGIN</button>
                                                </div>
                                            </section>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Akhir Box Login-->

    <script src="{{ asset('vendor/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js')}}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
</body>

</html>
