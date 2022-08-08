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
            <p class="mt-0 mb-3 text-light">List all messages!</p>
          </div>

          <div class="row">
            @foreach ($data as $dt)
            <div class="col-md-4 mb-3">
              <div class="card" id="html-content-holder-{{ $dt->pesan->id }}">
                <div class="card-title p-0 mx-3 mb-0 mt-3">
                  <div class="d-flex align-items-center">
                    <i class="fa-solid fa-message"></i>
                    <div class="mx-2">
                      <p class="my-0"><strong>Receive on</strong></p>
                      <p class="my-0" style="font-size: 0.8em">
                        {{ $dt->pesan->created_at->isoFormat('dddd, D MMMM Y H:m:s') }}
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h6 class="text-secondary"><small>Message</small></h6>
                  <p>{{ $dt->pesan->isi }}</p>
                </div>
                <div class="card-footer">
                  <ul>
                    <li>Browser : {{ $dt->browser }}</li>
                    <li>Os : {{ $dt->os }}</li>
                    <li>Platform : {{ $dt->platform }}</li>
                    <li>Source : {{ $dt->source }}</li>
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
            
            <div id="previewImg" class="d-none"></div>
            
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

    <script>
    @foreach ($data as $dt)
    $("#html-content-holder-{{ $dt->pesan->id }}").on('click', function () {
      html2canvas(document.getElementById("html-content-holder-{{ $dt->pesan->id }}")).then(function (canvas) {                   
          var anchorTag = document.createElement("a");
          document.body.appendChild(anchorTag);
          document.getElementById("previewImg").appendChild(canvas);
          anchorTag.download = "secret_message_{{ $dt->pesan->id }}.jpg";
          anchorTag.href = canvas.toDataURL();
          anchorTag.target = '_blank';
          anchorTag.click();
      });
    });
    @endforeach
    </script>
    
  </body>
</html>
