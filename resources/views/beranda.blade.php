<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MT RentCar - Beranda</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
    
    {{-- Hero Section --}}
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/beranda2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Cara Cepat & Mudah Sewa Mobil</h1>
	            <p style="font-size: 18px;">Rental terbaik untuk kebutuhan perjalananmu</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Tabel Promosi --}}
    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-12 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							<h3 class="text-center heading-section mb-4">Cara Terbaik untuk Menyewa Mobil Pilihan Anda</h3>
	  							<div class="row d-flex mb-4">
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Pilih Lokasi Penjemputan Anda</h3>
				                </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Pilih Penawaran Terbaik</h3>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Pesan Mobil Anda</h3>
					              </div>
					            </div>      
					          </div>
					        </div>
					        <p style="text-align:center"><a href="mobil" class="btn btn-primary py-3 px-4">Pesan Mobil Pilihan Anda</a></p>
	  						</div>
	  					</div>
	  				</div>
				</div>
  		</div>
    </section>

    {{-- Etalase Mobil --}}
    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Apa Yang Kami Tawarkan</span>
            <h2 class="mb-2">Kendaraan Unggulan</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
              @foreach ($data_detail as $row)
                <div class="item">
                  <div class="car-wrap rounded ftco-animate">
                    <div class="badge badge-custom position-absolute" style="top: 0; right: 0; background-color: {{ $row->status === 'Tersedia' ? '#1089ff' : '#747474' }}; color: white;">
                      {{ $row->status === 'Tersedia' ? 'Tersedia' : 'Tidak Tersedia' }}
                    </div>
                    <img src="{{ asset('file/Detail/' . $row->gambar) }}" class="img rounded d-flex align-items-end" alt="">
        
                      <div class="text">
                        <h2 class="mb-0"><a href="">{{ $row->nama_mobil}}</a></h2>
                        <div class="d-flex mb-3">
                          <span class="cat"></span>
                          <p class="price ml-auto">Rp. {{ $row->harga}},00 <span>/hari</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block justify-content-center">
                          @if($row->status === 'Tersedia')
                          <a href="/sewa/{{$row->id}}" class="btn btn-primary py-2 mr-1">Sewa</a>
                          <a href="" class="btn btn-secondary py-2 mr-1" data-toggle="modal" data-target="#Modalsatu{{$row->id}}">Detail</a>
                          @else
                            <button class="btn py-2 mr-1" style="width: 100%; background-color: #e5e5e5; color: #747474" disabled>Tidak Tersedia</button>
                          @endif
                        </p>
                    </div>
                  </div>
                </div>
              @endforeach
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    @foreach ($data_detail as $row)
    <!-- Modal Detail Start -->
    <div class="modal fade" id="Modalsatu{{$row->id}}">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title">Detail Mobil</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Body Modal -->
          <div class="modal-body mt-3">
            <form>
              <div class="row g-3">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12 mb-3">
                      <div class="card">
                          <div class="card-body shadow-lg">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="fw-bolder">Nama Mobil</h5>
                            <div class="rent-price mb-3">
                              <span style="font-size: 1rem" class="text-primary"></span>
                            </div>
                          </div>
                          <ul class="list-unstyled list-style-group">
                            <li class="border-bottom p-2 d-flex justify-content-between">
                              <span>{{ $row->nama_mobil}}</span>
                              {{-- <span style="font-weight: 600">Bensin</span> --}}
                            </li>
                          </ul>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-12 mb-3">
                      <div class="card">
                          <div class="card-body shadow-lg">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="fw-bolder">Spesifikasi Teknis</h5>
                            <div class="rent-price mb-3">
                              <span style="font-size: 1rem" class="text-primary"></span>
                            </div>
                          </div>
                          <ul class="list-unstyled list-style-group">
                            <li class="border-bottom p-2 d-flex justify-content-between">
                              <span>Bahan Bakar</span>
                              <span style="font-weight: 600">{{ $row->bahan_bakar}}</span>
                            </li>
                            <li class="border-bottom p-2 d-flex justify-content-between">
                              <span>Jumlah Kursi</span>
                              <span style="font-weight: 600">{{ $row->jumlah_kursi}}</span>
                            </li>
                            <li class="border-bottom p-2 d-flex justify-content-between">
                              <span>Penumpang</span>
                              <span style="font-weight: 600">{{ $row->penumpang}}</span>
                            </li>
                            <li class="border-bottom p-2 d-flex justify-content-between">
                              <span>Tahun</span>
                              <span style="font-weight: 600">{{ $row->tahun}}</span>
                            </li>
                            <li class="border-bottom p-2 d-flex justify-content-between">
                              <span>Transmisi</span>
                              <span style="font-weight: 600">{{ $row->transmisi}}</span>
                            </li>
                          </ul>
                          </div>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="card">
                          <div class="card-body shadow-lg">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="fw-bolder">Fasilitas</h5>
                            <div class="rent-price mb-3">
                              <span style="font-size: 1rem" class="text-primary"></span>
                            </div>
                          </div>
                          <ul class="list-unstyled list-style-group">
                            <li class="border-bottom p-2 d-flex justify-content-between">
                              <span>{{ $row->fasilitas}}</span>
                              {{-- <span style="font-weight: 600">Bensin</span> --}}
                            </li>
                          </ul>
                          </div>

                          <div class="modal-footer">
                            <a href="/sewa/{{$row->id}}" class="btn btn-primary">Sewa</a>
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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
  <!-- Modal Detail End -->
    @endforeach

    
    {{-- Tentang Kami --}}
    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('images/depanrumahradank.jpg');;">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">Tentang MTRentCar</span>
	            <h2 class="mb-4">Selamat Datang di MTRentCar</h2>

	            <p>MT RentCar adalah salah satu badan usaha yang bergerak di bidang jasa penyewaan mobil. Dimana seseorang dapat menyewa untuk jangka waktu tertentu. Dalam rental mobil, pelanggan dapat memilih mobil yang sesuai dengan kebutuhan mereka, baik itu mobil penumpang, mobil van, atau mobil mewah. Pelanggan biasanya membayar biaya sewa harian atau mingguan dan dapat menggunakan mobil tersebut untuk perjalanan pribadi, bisnis, atau wisata. Layanan rental mobil memberikan fleksibilitas dan kemudahan dalam mendapatkan transportasi sementara tanpa harus memiliki kendaraan sendiri. Saat ini MT RentCar memiliki unit mobil dari berbagai merk dengan harga sewa yang variatif tanpa mengurangi mutu layanan. </p>
	            <p><a href="tentang" class="btn btn-primary py-3 px-4">Baca Selengkapnya</a></p>
	          </div>
					</div>
				</div>
			</div>
		</section>

    {{-- Layanan Kami --}}
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Layanan</span>
            <h2 class="mb-3">Layanan Terbaru Kami</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Layanan Sewa Lepas Kunci</h3>
                <p>Sewa lepas kunci mobil memberikan kebebasan dan fleksibilitas dalam penggunaan mobil selama periode sewa.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Antar Jemput Kota</h3>
                <p>Perusahaan menyediakan pengemudi yang akan mengantar anda dari titik asal ke tujuan yang diinginkan.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Antar Jemput Bandara</h3>
                <p>Menyediakan mobil dan pengemudi yang akan menjemput atau mengantar anda di bandara sesuai dengan jadwal penerbangan anda.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Tur Seluruh Kota</h3>
                <p>Layanan yang ditawarkan untuk anda yang ingin melakukan tur atau penjelajahan di sekitar suatu kota dengan menggunakan mobil sewaan.</p>
              </div>
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
                    <span class="position">{{ $row->relasitesti->pekerjaan}}</span>
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
  
        
        
  
      </section>
    </div>
    	
  @include('component.footer')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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

  
	<!-- Sweet Alert -->
	<script src="../admin/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

  {{-- PWA --}}
  <script src="{{ asset('/sw.js') }}"></script>
  <script>
      if (!navigator.serviceWorker.controller) {
          navigator.serviceWorker.register("/sw.js").then(function (reg) {
              console.log("Service worker has been registered for scope: " + reg.scope);
          });
      }
  </script>
    
    <script>
      @if (Session::has('success'))
      swal({
              title: 'Berhasil',
              text: "{{ Session ::get('success') }}",
              icon: 'success',
              buttons: {
                  cancel: {
                      text: 'OK',
                      value: null,
                      visible: true,
                      className: 'btn btn-primary'
                  }
              }
          });
      @endif
    </script>

<!-- sweetalert -->
@include('component.sweetalert')
<!-- End sweetalert -->

  </body>
</html>