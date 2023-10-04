<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Daftar</title>

  {{-- <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' /> --}}
	{{-- <link rel="icon" href="../admin/assets/img/icon.ico" type="image/x-icon"/> --}}

	<!-- Fonts and icons -->
	<script src="../admin/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../admin/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../admin/assets/css/atlantis.min.css">
	<link rel="stylesheet" href="../admin/assets/css/style.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../admin/assets/css/demo.css">

	{{-- Font Awesome --}}
	<script src="https://kit.fontawesome.com/cfd4f16976.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('Logo-MT3.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

</head>
<body>

<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background: hsla(0, 0%, 100%, 0.8);
       
        height: 130px;
        "></div>
  <!-- CSS Style -->
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color: #f8f9fa;
            }
    
            .card-container {
                width: 40rem;
            }
    
            .card {
                margin-top: -100px;
                background: hsla(0, 0%, 100%, 0.8);
                backdrop-filter: blur(100px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 30px;
                padding: 20px;
            }

            .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            }

             /* Responsive styles */
        @media (max-width: 768px) {
            .card-container {
                max-width: 30rem;
            }
        }

        @media (max-width: 576px) {
            .card-container {
                max-width: 25rem;
            }
        }
        </style>
 
  <body>
      <div class="card-container">
          <div class="card mx-5 mx-md-8 shadow-5-strong">
              <div class="card-body py-10 px-md-10">
                  <div class="row d-flex justify-content-center">
                      <div class="col-lg-9">
                          <h2 class="fw-bold mb-5"><main>Daftar</main></h2>
                        
                            {{-- @if(session('email_exists'))
                                <script>
                                    swal("Peringatan", "Email ini sudah terdaftar. Silakan gunakan email lain.", "warning");
                                </script>
                            @endif --}}

                          <form action="/register" method="post">
                            @csrf

                              <!-- Name input -->
                              <div class="form-outline mb-2">
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-control rounded-4" id="name" placeholder="name" required>
                                        <label for="name">Nama Lengkap</label>
                                    </div>
                                </div>
                              </div>

                              <!-- Email input -->
                              <div class="form-outline mb-2">
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control rounded-4" id="email" placeholder="name@example.com" data-validate = "Masukan Email Dengan Benar!" required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                              </div>
  
                              <!-- Password input -->
                              <div class="form-outline mb-3">
                                <div class="p-2">
                                  <div class="form-floating">
                                    <input type="password" name="password" class="form-control rounded-4" id="password" placeholder="password" required>
                                    <label for="password">Password</label>
                                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                                      <i class="fa fa-eye" aria-hidden="true"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                             
                              <button type="submit" class="btn btn-success btn-block mb-4">Daftar </button>
                              <!-- Register buttons -->
                              <div class="text-center">
                                  <p class="mb-5 pb-lg-2" style="color: #01d28e;">Sudah punya akun? <a href="/login"
                                          style="color: #01d28e;">Login disini</a></p>
                              </div>
                          </form>

                        @if(session('error'))
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: '{{ session('error') }}',
                                    });
                                });
                            </script>
                        @endif
                      </div>
                  </div>
              </div>
          </div>
      </div>
</section>

  <!--   Core JS Files   -->
	<script src="../admin/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../admin/assets/js/core/popper.min.js"></script>
	<script src="../admin/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../admin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="../admin/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../admin/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../admin/assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="../admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../admin/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../admin/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="../admin/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../admin/assets/js/atlantis.min.js"></script>

    {{-- Sweet Alert --}}
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

   {{-- Icon Mata Pada Password --}}
    <script>
    function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var eyeIcon = document.querySelector(".toggle-password i");
  
        if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
        } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
        }
    }
    
    @if (Session::has('error'))
        swal({
            title: "Akun Email Sudah Terdaftar",
            text: "Gunakan akun email lain.",
            icon: "error"
        });
    @endif
    </script>

    {{-- <script>
       // Fungsi untuk menampilkan Sweet Alert
        function showAlreadyRegisteredAlert() {
            swal({
                title: "Akun Email Sudah Terdaftar",
                text: "Gunakan akun email lain.",
                icon: "error"
            });
        }

        // Fungsi untuk memeriksa apakah email sudah terdaftar atau belum
        function checkEmailAvailability() {
            var emailInput = document.getElementById("email"); // Ganti dengan id input email yang sesuai
            var email = emailInput.value; // Ambil nilai email dari input

            // Lakukan permintaan AJAX atau pemrosesan server untuk memeriksa apakah email sudah terdaftar
            // Contoh menggunakan permintaan AJAX dengan jQuery
            $.ajax({
                url: '/check-email', // Ganti dengan URL yang sesuai
                type: 'POST',
                data: { email: email },
                success: function(response) {
                    if (response.exists) {
                        // Jika email sudah terdaftar, tampilkan Sweet Alert
                        showAlreadyRegisteredAlert();
                    } else {
                        // Jika email belum terdaftar, lanjutkan proses pendaftaran
                        // ... kode untuk pendaftaran pengguna ...
                    }
                }
            });
        }
    </script> --}}


    @include('sweetalert::alert')

  </body>
</html>