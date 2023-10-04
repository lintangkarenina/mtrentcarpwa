<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MT RentCar - Kontak</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('Logo-MT3.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

  </head>
  <body>

  @include('component.navbar')
    
    {{-- Breadcrumbs --}}
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/kontak.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="beranda">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Kontak <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Kontak Kami</h1>
          </div>
        </div>
      </div>
    </section>

    {{-- Tabel Kontak Kami --}}
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-4">
        		<div class="row mb-5">
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>ALamat:</span> <a href="https://goo.gl/maps/Wv3LDJWEWR65VzKv8" >Jl. MT HaryonoAkcaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat</a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div>
			            <p><span>Hp:</span> <a href="https://wa.me/6289529358509/?text=Saya Mau Bertanya">+62 895-2935-8509</a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="https://mail.google.com/mail/u/0/#inbox">abinubli788@gmail.com</a></p>
			          </div>
		          </div>
		        </div>
          </div>
          <div class="col-md-8 block-9 mb-md-5">

            <form action="{{route ('Tambah-Kontak-Kami')}}" method="POST" enctype="multipart/form-data" required>
							@csrf
              <div class="form-group">
                <input id="addName" type="text" name="nama" class="form-control" placeholder="Isi Nama" required>
                <i><span class="text-sm text-danger">*Wajib diisi</span></i>
              </div>
              <div class="form-group">
                <input id="addPosition" type="email" name="email" class="form-control" placeholder="Isi Email" required>
                <i><span class="text-sm text-danger">*Wajib diisi</span></i>
              </div>
              <div class="form-group">
                <input id="addOffice" type="text" name="subjek" class="form-control" placeholder="Isi Subjek" required>
                <i><span class="text-sm text-danger">*Wajib diisi</span></i>
              </div>
              <div class="form-group">
                <textarea name="pesan" id="" cols="30" rows="7" class="form-control" placeholder="Pesan" required></textarea>
                <i><span class="text-sm text-danger">*Wajib diisi</span></i>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary py-2 px-4">
              </div>
            </form>
          </div>
        </div>

      </div> 
    </section>

  @include('component.footer')
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>

  <!-- Toastr -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.23/dist/sweetalert2.all.min.js"></script>
  
  
  {{-- sweetalert --}}
  @if($errors->any())
    <script>
            Swal.fire({
            title: 'Gagal!',
            text: 'Subjek dan Pesan tidak boleh simbol seperti "- _ ! @ # $ % ^ & * ( )"',
            icon: 'error',
            confirmButtonText: 'OK'
          });
    </script>
  @endif
  @if(session('success'))
    <script>
            Swal.fire({
            title: 'Pesan Anda Berhasil Terkirim!',
            icon: 'success',
            confirmButtonText: 'OK'
          });
    </script>
  @endif


  {{-- PWA --}}
  <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>

<!-- sweetalert -->
@include('component.sweetalert')
<!-- End sweetalert -->

  </body>
</html>