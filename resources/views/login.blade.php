<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="stylelogin.css" />

    <title>Coba Bikin Login</title>
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
                        <h1 class="fw-bold">Login</h1>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">Sign in Using Bridgestone Account</h5>

                        <div class="form-outline mb-4">
                          <p class="form-label" for="form2Example17">Email</p>
                          <input type="email" id="email" class="form-control form-control-lg shadow" />
                        </div>

                        <div class="form-outline mb-4">
                          <p class="form-label" for="form2Example27">Password</p>
                          <input type="password" id="password" class="form-control form-control-lg shadow" />
                        </div>
                        <section class="loginbtn">
                          <div class="d-grid gap-2 mb-4 rounded-top shadow">
                            <button class="btn btn-danger mt-4 shadow btn-lg" type="button">Login</button>
                            <!-- <button class="btn btn-dark btn-lg btn-block bg-danger" type="button">Login</button> -->
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
