<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../admin/assets/img/car.png" type="image/x-icon"/>

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

	<!-- PWA  -->
	<meta name="theme-color" content="#6777ef"/>
	<link rel="apple-touch-icon" href="{{ asset('Logo-MT3.png') }}">
	<link rel="manifest" href="{{ asset('/manifest.json') }}">

	{{-- Font Awesome --}}
	<script src="https://kit.fontawesome.com/cfd4f16976.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
                @include('admin.layouts.logo-header')
			<!-- End Logo Header -->

			<!-- Navbar Header -->
                @include('admin.layouts.navbar')
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
            @include('admin.layouts.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="panel-header">
					<div class="page-inner py-5 d-flex align-items-center justify-content-center" style="height: 400px">
						<div class="row" >
							<div class="col-md-12">
								<div class="text-center">
									<h1 class="text-green pb-2 fw-bold">Selamat Datang</h1>
									<h3 class="text-green op-7">Admin!</h3>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			@include('admin.layouts.footer')
		</div>	
	</div>
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
            title: 'Login Berhasil',
            text: 'Berhasil login sebagai admin',
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
		@include('admin.layouts.sweetalert')
		<!-- End sweetalert -->

</body>
</html>