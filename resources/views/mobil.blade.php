<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MT RentCar - Mobil</title>
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
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/cars.jpg');" data-stellar-background-ratio="0.5">
      	<div class="overlay">
      		<div class="container">
        		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          			<div class="col-md-9 ftco-animate pb-5">
          				<p class="breadcrumbs"><span class="mr-2"><a href="beranda">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Mobil <i class="ion-ios-arrow-forward"></i></span></p>
            			<h1 class="mb-3 bread">Pilih Mobil Anda</h1>
					</div>
				</div>
        	</div>
      	</div>
    </section>
		
	{{-- Etalase Mobil --}}
	<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
				@foreach ($data_detail as $row)
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
						<div class="badge badge-custom position-absolute" style="top: 0; right: 0; background-color: {{ $row->status === 'Tersedia' ? '#1089ff' : '#747474' }}; color: white;">
							{{ $row->status === 'Tersedia' ? 'Tersedia' : 'Tidak Tersedia' }}
						</div>
						<img src="{{ asset('file/Detail/' . $row->gambar) }}" class="img rounded d-flex align-items-end" alt="">

    					<div class="text">
    						<h2 class="mb-0"><a href="">{{ $row->nama_mobil}}</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat"></span>
	    						<p class="price ml-auto">Rp. {{ $row->harga}} <span>/hari</span></p>
    						</div>
    						{{-- <p class="d-flex mb-0 d-block">
								<a href="sewa" class="btn btn-primary py-2 mr-1">Sewa</a>
								<a href="" class="btn btn-secondary py-2 mr-1" data-toggle="modal" data-target="#Modalsatu{{$row->id}}">Detail</a>
							</p> --}}
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
  {{-- Sweet Alert --}}
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  {{-- PWA --}}
  <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
	
	{{-- sweetalert data berhasil tersimpan --}}
	<script>
		@if (Session::has('success'))
		swal({
				title: 'Mobil Berhasil Disewa',
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