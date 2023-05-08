<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/login.css" />

    <!-- Font Link Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />

    <title>Change Password | DMS Project</title>
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
                    <img src="img\bs.png" alt="Bridgestone" class="rounded mx-auto d-block align-middle text-center" style="background-position: center; background-size: cover" />
                  </div>
                  <div class="col-md-6 col-lg-6 d-flex align-items-center ms-4">
                    <div class="card-body text-black">
                      <form>
                        <h1 class="fw-bold">CHANGE PASSWORD</h1>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">Silahkan buat password baru!!</h5>

                        <div class="form-outline mb-4">
                          <p class="form-label fw-bold" for="form2Example17">New Password</p>
                          <input type="password" id="newpassword" class="form-control form-control-lg shadow fs-6" placeholder="Masukan password baru anda!!" />
                        </div>

                        <div class="form-outline mb-4">
                          <p class="form-label fw-bold" for="form2Example27">Confirm Password</p>
                          <input type="password" id="password" class="form-control form-control-lg shadow fs-6" placeholder="Ketik ulang password baru anda!!" />
                        </div>
                        <section class="changebtn">
                          <div class="d-grid gap-2 mb-4 rounded-top shadow">
                            <!-- Button trigger modal -->
                            <button class="btn btn-danger mt-4 shadow btn-lg fw-bold" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">CHANGE</button>
                            <!-- <button class="btn btn-dark btn-lg btn-block bg-danger" type="button">Login</button> -->

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <!-- Header Modal & Tanda Silang -->
                                  <!-- <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div> -->

                                  <div class="modal-body text-center">
                                    <strong style="color: green">Password Updated!</strong> <br />
                                    Login Using
                                    <strong style="color: green">NEW</strong>
                                    Password Nexttime!
                                  </div>
                                  <div class="text-center">
                                    <a href="/relogin">
                                    <button type="button" class="btn btn-secondary btn-success" data-bs-dismiss="modal">OK</button>
                                    </a>
                                  </div>
                                  <div class="mb-3"></div>
                                </div>
                              </div>
                            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
