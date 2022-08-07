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
        <div class="col-sm-12 col-md-6 offset-md-3">
          <div class="text-center">
            <img
              src="assets/foto1.jpeg"
              class="rounded-circle img-fluid"
              style="width: 100px; height: 100px; object-fit: cover"
            />
            <h4 class="text-light mb-0"><strong>@salliemansurina</strong></h4>
            <p class="mt-0 mb-3 text-light">Send me anonymous messages!</p>
          </div>
          <div class="card">
            <div class="card-head">
              <div class="d-flex align-items-center mx-3 mt-3">
                <i class="fa-brands fa-instagram rounded-circle"></i>
                <div class="mx-2">
                  <p class="my-0">Follow me in instagram</p>
                  <p class="my-0" style="font-size: 0.8em">
                    <a href="https://www.instagram.com/salliemansurina/" target="_blank" style="text-decoration: none; color: #293462"
                      ><strong>@salliemansurina</strong></a
                    >
                  </p>
                </div>
              </div>
            </div>
            <form action="/send" method="POST">
              @csrf
            <div class="card-body">
              <textarea
                class="form-control custom-ta"
                name="isi"
                id="ta_message"
                rows="5"
                placeholder="Type your messages here . . ."
              ></textarea>

              @if(session("pesan"))
              <div class="alert alert-success p-2 mt-3" role="alert">
                <i class="fa-solid fa-circle-check"></i> {{ session("pesan") }}
              </div>
              @endif

            </div>
          </div>
          <div class="text-center">
            <small
              ><i class="fa-solid fa-lock text-warning"></i
              ><span class="text-light"> secret q&a</span></small
            >
          </div>
          <div class="mt-3 text-center">
            <button class="btn btn-primary" id="btn_send" type="submit" hidden>
              Send Messages!
            </button>
          </div>
        </form>
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
    <script>
      const btn_send = document.getElementById("btn_send");
      const ta_message = document.getElementById("ta_message");

      ta_message.addEventListener("input", function () {
        btn_send.hidden = ta_message.value !== "" ? false : true;
      });
    </script>
  </body>
</html>
