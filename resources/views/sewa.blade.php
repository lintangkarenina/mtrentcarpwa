<!DOCTYPE html>
<html lang="en">

  <head>
    <title>MT RentCar - Sewa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('Logo-MT3.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

  </head>
  <body>
    
  @include('component.navbar')

  <style>

    .ftco-section {
        padding: 2em 0 !important;
        position: relative;
    }
    .p-2 {
        margin: 10px 0; /* Atur nilai margin atas dan bawah sesuai keinginan Anda */
    }

    .error-message {
      position: absolute;
      bottom: -20px;
      left: 0;
      color: red;
      font-size: 12px;
    }

    .error-border {
        border: 1px solid red;
    }
  </style>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

  @auth
    {{-- Form Sewa --}}
    <div class="card">
    <div class="card-body">
    <section class="ftco-section contact-section">
      <form action="/sewa/{{$data_detail->id}}" method="POST" enctype="multipart/form-data" required>
        @csrf
        <div class="container">
          <div class="block-9 ">
            <div class="p-2">
              <div class="form-floating">
                  <input type="text" name="detail_id" value="{{$data_detail->id}}" class="form-control rounded-4" id="floatingInput" readonly>
                  <label for="floatingInput">{{$data_detail->nama_mobil}}</label>
              </div>
            </div>
            <div class="p-2">
              <div class="form-floating">
                  <input type="text" value="{{$data_detail->harga}}" class="form-control rounded-4" id="floatingInput" readonly>
                  <label for="floatingInput">Harga Mobil</label>
              </div>
            </div>
            
            <div class="p-2">
              <div class="form-floating">
                <select class="form-select rounded-4" name="jenis_layanan" class="form-control" id="floatingInput" required>
                  <option value="Sewa Lepas Kunci">Sewa Lepas Kunci</option>
                  <option value="Sewa Dengan Driver">Sewa Dengan Driver</option>
                </select>
                <label for="floatingInput">Jenis Layanan <i><span class="text-sm text-danger">*Wajib diisi</span></i></label>
              </div>
            </div>

            <div class="p-2">
              <div class="form-floating">
                  <input type="date" name="tanggal_mulai_sewa" class="form-control rounded-4" id="tanggalMulai" required>
                  <label for="tanggalMulai">Tanggal Mulai Sewa <i><span class="text-sm text-danger">*Wajib diisi</span></i></label>
              </div>
            </div>
      
          <div class="p-2">
              <div class="form-floating">
                  <input type="date" name="tanggal_selesai_sewa" class="form-control rounded-4" id="tanggalSelesai" required>
                  <label for="tanggalSelesai">Tanggal Selesai Sewa <i><span class="text-sm text-danger">*Wajib diisi</span></i></label>
              </div>
          </div>
      
          <span id="tanggalError" style="color: red;"></span>
      

          {{-- <div class="p-2">
            <div class="form-floating" class="input-group">
                <input type="file" name="upload_ktp" value="{{ Auth::user()->upload_ktp }}" class="form-control rounded-4" id="uploadKtp" accept=".jpg, .jpeg, .png" required>
                <label for="uploadKtp">Upload KTP <i><span class="text-sm text-danger">*Wajib diisi</span></i></label>
            </div>
          </div>

          <div class="p-2">
            <div class="form-floating" class="input-group">
                <input type="file" name="upload_sim" value="{{ Auth::user()->upload_sim }}" class="form-control rounded-4" id="upload_ktp" accept=".jpg, .jpeg, .png" >
                <label for="">Upload SIM <i><span class="text-sm text-danger">*Wajib diisi</span></i></label>
            </div>
          </div> --}}

          <div class="p-2">
            <div class="form-floating" class="input-group">
                <input type="file" name="upload_tiket" class="form-control rounded-4" id="upload_sim" accept=".jpg, .jpeg, .png" >
                <label for="">Upload Tiket Pesawat <i><span class="text-sm text-danger">*Diisi bagi domilisi luar pontianak</span></i></label>
            </div>
          </div>

          <div class="p-2">
            <div class="form-floating">
              <select class="form-select rounded-4" name="rute_id" class="form-control" id="floatingInput" required>
                <option value="" disabled selected>Pilih Rute</option>
                @foreach ($rute as $rute)
                  <option value="{{ $rute->id }}">{{ $rute->rute }}</option>
                @endforeach
              </select>
              <label for="floatingInput">Rute Perjalanan<i><span class="text-sm text-danger">*Wajib diisi</span></i></label>
            </div>
          </div>

            {{-- <div class="p-2">
              <div class="form-floating">
                <input type="text" name="rute_perjalanan" class="form-control rounded-4" id="floatingInput" required>
                <label for="floatingInput">Rute Perjalanan <i><span class="text-sm text-danger">*Wajib diisi</span></i></label>
              </div>
            </div> --}}
            
            <div class="p-2">
              <div class="form-floating">
                <input type="text" name="pesan_tambahan" class="form-control rounded-4" id="floatingInput" required>
                <label for="floatingInput">Pesan Tambahan <i><span class="text-sm text-danger">*Wajib diisi</span></i></label>
              </div>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex mb-2">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked required>
              <label class="form-check-label" for="form2Example33">
                <p class="text-secondary">Pastikan data yang anda input sudah benar</p>
              </label>
            </div>
            <div class="container mt-3 d-flex justify-content-end">
              <div>
                <input type="submit" value="Sewa" class="btn btn-primary py-2 px-4">
                <a href="/mobil" type="button" class="btn btn-secondary py-2 px-4" >Batal</a>
              </div>
            </div>
          </div>
        </div> 
      </form>     
    </section>
  </div>
</div> 
@endauth

  @include('component.footer')

  <!-- loader -->
  {{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> --}}

  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/jquery.animateNumber.min.js"></script>
  <script src="/js/bootstrap-datepicker.js"></script>
  <script src="/js/jquery.timepicker.min.js"></script>
  <script src="/js/scrollax.min.js"></script>
  <!-- <script src=""></script>
  <script src="/js/google-map.js"></script> -->
  <script src="/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  {{-- PWA --}}
  <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>

    {{-- validasi tanggal sewa --}}
    <script>
      const tanggalMulaiInput = document.getElementById("tanggalMulai");
      const tanggalSelesaiInput = document.getElementById("tanggalSelesai");
      const tanggalError = document.getElementById("tanggalError");

      // Set tanggal minimal pada input tanggalMulai ke tanggal hari ini
      const today = new Date().toISOString().split("T")[0];
      tanggalMulaiInput.min = today;

      tanggalMulaiInput.addEventListener("change", function () {
          // Set tanggal minimal pada input tanggalSelesai agar tidak bisa diatur sebelum tanggalMulai
          tanggalSelesaiInput.min = tanggalMulaiInput.value;
          tanggalError.textContent = "";
      });

      document.getElementById("reservationForm").addEventListener("submit", function (event) {
          const tanggalMulai = new Date(tanggalMulaiInput.value);
          const tanggalSelesai = new Date(tanggalSelesaiInput.value);

          if (tanggalSelesai <= tanggalMulai) {
              // Tanggal selesai harus setelah tanggal mulai
              tanggalError.textContent = "Tanggal selesai harus setelah tanggal mulai.";
              event.preventDefault();
          } else {
              tanggalError.textContent = "";
          }
      });
    </script>

  {{-- Validasi No Handphone --}}
  <script>
    const no_handphoneInput = document.getElementById('no_handphoneInput');
    const no_handphoneError = document.getElementById('no_handphoneError');

    no_handphoneInput.addEventListener('input', checkNoHandphoneValidity);
    no_handphoneInput.addEventListener('blur', checkNoHandphoneValidity);

    function checkNoHandphoneValidity() {
        const no_handphone = no_handphoneInput.value;
        const isNumeric = /^\d+$/.test(no_handphone); // Regex untuk memeriksa apakah input hanya mengandung angka

        if (!isNumeric) {
            no_handphoneError.textContent = 'No Handphone hanya boleh berisi angka!';
            no_handphoneInput.classList.add('error-border');
        } else if (no_handphone.length > 13) {
            no_handphoneError.textContent = 'No Handphone tidak boleh lebih dari 13 angka!';
            no_handphoneInput.classList.add('error-border');
        } else {
            no_handphoneError.textContent = '';
            no_handphoneInput.classList.remove('error-border');
        }
    }
  </script>

<!-- sweetalert -->
@include('component.sweetalert')
<!-- End sweetalert -->

  </body>
</html>