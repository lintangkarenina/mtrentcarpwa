<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MT RentCar - Tentang Kami</title>
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
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bamburuncing.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="beranda">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Tentang Kami<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Tentang Kami</h1>
          </div>
        </div>
      </div>
    </section>

    {{-- Tentang Kami --}}
    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('images/depanrumahradank.jpg');">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">Tentang Kami</span>
	            <h2 class="mb-4">Selamat Datang di MTRentCar</h2>
	            <p>MT RentCar adalah salah satu badan usaha yang bergerak di bidang jasa penyewaan mobil. Dimana seseorang dapat menyewa untuk jangka waktu tertentu. Dalam rental mobil, pelanggan dapat memilih mobil yang sesuai dengan kebutuhan mereka, baik itu mobil penumpang, mobil van, atau mobil mewah. Pelanggan biasanya membayar biaya sewa harian atau mingguan dan dapat menggunakan mobil tersebut untuk perjalanan pribadi, bisnis, atau wisata. Layanan rental mobil memberikan fleksibilitas dan kemudahan dalam mendapatkan transportasi sementara tanpa harus memiliki kendaraan sendiri. Saat ini MT RentCar memiliki unit mobil dari berbagai merk dengan harga sewa yang variatif tanpa mengurangi mutu layanan. </p>
	            <p>Kelebihan dari MT RentCar adalah kami menawarkan jasa sewa mobil dengan armada/kendaran terbaik dan terbaru dengan kondisi terawat dan selalu bersih demi kenyamanan semua pelanggan kami. Mt RentCar juga menyediakan driver berpengalaman. Selain mengetahui seluruh area/medan di Kalimantan Barat driver kami juga berdedikasi tinggi sehingga melayani setiap pelanggan dengan senang hati dan selalu membantu sesuai kebutuhan pekerjaan di lapangan, sifat ramah driver adalah kewajiban yang harus di berikan kepada pelanggan yang memilih jasa kami.</p>
              <p><a href="mobil" class="btn btn-primary py-3 px-4">Sewa Mobil Anda Sekarang</a></p>
	          </div>
					</div>
				</div>
			</div>
		</section>

    {{-- Testimoni Penyewa --}}
    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimoni</span>
            <h2 class="mb-3">Apa yang Mereka Katakan</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-car owl-carousel carousel-testimony ftco-owl">
              @foreach ($data_testimoni as $row)
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2">
                    <img src="/images/user.png" class="img-fluid mb-2 rounded-circle" alt="">
                  </div>
                  <div class="text pt-4">    
                    <p class="name">{{ isset($row->relasitesti->name) ? $row->relasitesti->name : 'Anonim' }}</p>
                    <span class="position">{{ $row->gelar}}</span>
                    <p class="mb-4">{{ $row->pesan}}</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div> 
          </div>
        </div>
      </div>
    </section>
  

  @include('component.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

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