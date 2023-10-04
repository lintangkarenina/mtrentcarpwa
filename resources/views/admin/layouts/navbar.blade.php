<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
    <div class="container-fluid">
        <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        
                    </div>
                    
                </div>
            </form>
        </div>
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            
            
            <li class="nav-item dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                        <img src="../admin/assets/img/user.png" alt="..." class="avatar-img rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            @auth
                            <div class="user-box">
                                <div class="avatar-lg"><img src="../admin/assets/img/user.png" alt="image profile" class="avatar-img rounded"></div>
                                <div class="u-text">
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <p class="text-muted">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout" id="logout-link">Keluar</a>
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
        @endauth
    </div>
</nav>

{{-- Sweetalert --}}
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

		<script>
			// Add an event listener to the logout link
			document.getElementById('logout-link').addEventListener('click', function (event) {
			event.preventDefault(); // Prevent the default link behavior
		
			// Display the SweetAlert confirmation dialog
			Swal.fire({
				title: 'Yakin?',
				text: 'Anda akan keluar dari akun Anda!',
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#d33',
				cancelButtonColor: '#3085d6',
				cancelButtonText: 'Batal',
				confirmButtonText: 'Ya, keluar',

			}).then((result) => {
				// If the user clicks the "Yes, keluar" button, redirect to the logout URL
				if (result.isConfirmed) {
				window.location.href = "/logout";
				}
			});
			});
		</script>