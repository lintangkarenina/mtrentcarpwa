<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MT RentCar - Blog</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
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
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/blog.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="beranda">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Blog Kami</h1>
          </div>
        </div>
      </div>
    </section>

    {{-- Blog Kami --}}
    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end mb-md-5">
              <a href="" class="block-20 img" style="background-image: url('images/waterfall.jpg');">
              </a>
              <div class="text px-md-5 pt-4">
              	<div class="meta mb-3">
                  <div><a href="">17 Mei 2016</a></div>
                  <div><a href="">Pontinesia</a></div>
                </div>
                <h3 class="heading mt-2"><a href="">Lima Air Terjun di Kalimantan Barat, Tempat Wisata yang Masih Perawan</a></h3>
                <p>Bagi Anda yang suka travelling ke tempat wisata. Kalian harus mencoba singgah di lima air terjun di Kalbar ini. Di mana pemandangannya sangat asri dan alami. Dan masing-masing memiliki ciri khas yang berbeda. Yang pasti perjalanan Anda akan terpuaskan setelah melihat delapan air terjun di Kalbar ini. Sebenarnya masih banyak lagi air terjun di Kalbar yang tidak kalah indah dan asrinya.</p>
                <p><a href="" class="btn btn-primary" data-toggle="modal" data-target="#Modalblog">Baca Selengkapnya <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Start-->
					<div class="modal fade" id="Modalblog">
						<div class="modal-dialog">
							<div class="modal-content">
                <!-- Header Modal -->
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
								<!-- Body Modal -->
								<div class="modal-body mt-3">
									<form>
										<div class="row g-3">
											<div class="container">
												<div class="row">
													<div class="col-sm-12">
														<div class="card">
															  <div class="card-body shadow-lg">
																<div class="d-flex justify-content-between align-items-center">
																	<h5 class="fw-bolder">Lima Air Terjun di Kalimantan Barat, Tempat Wisata yang Masih Perawan</h5>
																	<div class="rent-price mb-3">
																		<span style="font-size: 1rem" class="text-primary"></span>
																	</div>
																</div>
																<ul class="list-unstyled list-style-group">
                                  <li style="font-weight: 600">1. Air Terjun Riam Merasap</li>
                                  <li>Ketinggian air terjun Merasap ini sekitar 27 meter dan lebar sekitar 200 meter. Konon legendanya ada intan sebesar kepalan tangan yang dijaga oleh seekor labi-labi (kura-kura putih). Air terjun ini terletak di Kabupaten Bengkayang, Kalimantan Barat.
                                  <br>
                                  Masyarakat setempat menyebutnya dengan riam merasap karena kalau pada musim bulan oktober atau pada musim penghujan dan airnya deras, banyak buih-buih dari tetesan riam ini yang seperti asap.</li>
                                  <br>
                                  <li style="font-weight: 600">2. Air Terjun Tikalong</li>
                                  <li>Air terjun tikalong dengan ketinggian kira-kira 5 meter ini, terletak di desa karangan. Dari pontianak kira-kira harus menempuh perjalanan sekitar 3,5 jam. Dari pontianak anda menuju ke sui. pinyuh (kira-kira 1,5 jam) lalu anda akan menemukan persimpangan dekat dengan sebuah SPBU. Persimpangan tersebut membagi dua jalan menuju singkawang dan menuju mandor. Nah, Kita harus mengambil jalan menuju mandor. Cukup mengikuti jalan tersebut kira-kira 2 jam Anda sudah bisa menemukan Air terjun Tikalong.</li>
                                  <br>
                                  <li style="font-weight: 600">3. Air Terjun Entugun</li>
                                  <li>Air Terjun Entugun terletak di Dusun Kepayang Desa Tembaga Kecamatan Nanga Mahap Kabupaten Sekadau, daerah air terjun yang berbatasan dengan Ketapang ini mempunyai tiga tingkatan. Masing-masing tingkatan ada kurang lebih 30 meter. Airnya deras berliku-liku dan batunya terhampar saling memadu antara satu dengan yang lain. Gunungnya tinggi berhutan lebat lagi terjal disertai kucuran dan gemuruhnya air terjun membuat kita tak dapat mengungkapkan dengan kata-kata lisan. Air mengalir silih berganti berhawa dingin dan sejuk terasa sampai ketulang.</li>
                                  <br>
                                  <li style="font-weight: 600">4. Air Terjun Gurung Sumpit</li>
                                  <li>Air Terjun Gurung Sumpit, terletak di Desa Sumpit Kecamatan Belitang Hilir Kabupaten Sekadau. Jarak tempuh dari Sungai Ayak sampai ke lokasi, kurang lebih 15 Km. Perjalanan dapat ditempuh menggunakan kendaraan roda dua dan roda empat. Ketinggian air terjun tersebut 50 meter. Selain Goa Ratu Kudong, dibawahnya kala hujan dapat dijadikan tempat berteduh.Keunikan air terjun ini adalah di dinding bagian tepi air terjun tersebut ada terdapat gua yang menjorok ke dalam yang disebut gua Ratu Kudung, konon sebagai tempat bertapa Ratu Kudung dari Kerajaan Sekadau.</li>
                                  <br>
                                  <li style="font-weight: 600">5. Air Terjun Nokayanan</li>
                                  <li>Air terjun Nokanayan, anda akan melalui hulu sungai Melawi, yang ada di wilayah kecamatan Ambalau, tepat-nya di Kecamtan Ambalau Kabupaten Sintang Kalimantan Barat. Tujuan wisata in memiliki potensi dan daya tarik berupa panorama alam air terjun yang indah dengan ketinggian180 meter.
                                  Lokasi air terjun ini masih asli dan asri, yang dapat ditempuh dengan menyusuri riam sungai Melawi. Untuk mencapai ke lokasi ini membutuhkan dua hari perjalanan dari Pontianak, Kalimantan Barat yaitu satu hari menggunakan jalan darat dan satu hari menggunakan speed boat melalui sungai.</li>
																</ul>
															  </div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div> 
				<!-- Modal End -->

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
    
<!-- sweetalert -->
@include('component.sweetalert')
<!-- End sweetalert -->

  </body>
</html>