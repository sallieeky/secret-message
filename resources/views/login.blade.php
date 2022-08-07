<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lixie | Send Secret Message To Me</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="fa/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="nt.svg" type="image/x-icon" />

  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="text-center">
            <img
              src="assets/foto1.jpeg"
              class="rounded-circle img-fluid"
              style="width: 100px; height: 100px; object-fit: cover"
            />
            <h4 class="text-light mb-0"><strong>@salliemansurina</strong></h4>
            <p class="mt-0 mb-3 text-light">Login page to see all message!</p>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <h3 class="text-center">LOGIN</h3>

                  <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input
                        type="text"
                        class="form-control"
                        id="username"
                        name="username"
                        aria-describedby="emailHelp"
                        required
                      />
                      <div id="emailHelp" class="form-text">
                        Use register username from owner.
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label"
                        >Password</label
                      >
                      <input
                      name="password"
                        type="password"
                        class="form-control"
                        id="exampleInputPassword1"
                        required
                      />
                    </div>
                    <button
                      type="submit"
                      class="btn btn-primary text-center w-100"
                    >
                      Login
                    </button>
                    @if(session("pesan"))
                    <div class="alert alert-danger p-2 mt-3" role="alert">
                      <i class="fa-solid fa-circle-xmark"></i> {{ session("pesan") }}
                    </div>
                    @endif
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
      integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
      crossorigin="anonymous"
    ></script>

    <script src="fa/js/all.min.js"></script>
  </body>
</html>
