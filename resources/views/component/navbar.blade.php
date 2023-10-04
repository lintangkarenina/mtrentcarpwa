<link rel="stylesheet" href="css/flaticon.css">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="beranda">MT<span>RentCar</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item {{ Request::is('beranda') ? 'active' : '' }}"><a href="/beranda" class="nav-link">Beranda</a></li>
	          {{-- <li class="nav-item {{ Request::is('tentang') ? 'active' : '' }}"><a href="tentang" class="nav-link">Tentang Kami</a></li> --}}
	          <li class="nav-item {{ Request::is('layanan') ? 'active' : '' }}"><a href="/layanan" class="nav-link">Layanan</a></li>
	          <li class="nav-item {{ Request::is('mobil') ? 'active' : '' }}"><a href="/mobil" class="nav-link">Mobil</a></li>
	          {{-- <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}"><a href="blog" class="nav-link">Blog</a></li> --}}
	          <li class="nav-item {{ Request::is('kontak') ? 'active' : '' }}"><a href="/kontak" class="nav-link">Kontak</a></li>
			  @auth
			  @csrf
			  <li class="nav-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
				<a href="#" class="nav-link"> Welcome, {{ Auth::user()->name }}</a>
                <!-- Tampilkan ikon (misalnya, ikon pengguna dari font-awesome) -->
                {{-- <i class="fas fa-user"></i> --}}
                <!-- Tampilkan nama pengguna yang telah login -->
               
			  {{-- </li>
			    <li class="nav-item {{ Request::is('logout') ? 'active' : '' }}"><a href="logout" class="nav-link">Keluar</a></li> --}}
			@else
			  <li class="nav-item {{ Request::is('login') ? 'active' : '' }}"><a href="/login" class="nav-link">Masuk</a></li>
			  @endauth
	        </ul>
	      </div>
	    </div>
	  </nav>

	  @auth
	  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		
		<div class="modal-dialog" >
		  <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Akun Pengguna</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			<div class="modal-body">
				<li>Nama : {{ Auth::user()->name }}</li>
				<li>Email : {{ Auth::user()->email }}</li>
					Terima Kasih Sudah Berkunjung

			</div>
			<div class="modal-footer">
				<a href="/user/{{auth()->user()->name}}" >
					<button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="">Lihat Profil</button>
				  </a>
				<a href="/logout" >
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="logout-link">Keluar</button>
				</a>
			</div>
		  </div>
		</div>
	  </div>
	  @endauth
    <!-- END nav -->

	{{-- Sweetalert --}}
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 


	
	