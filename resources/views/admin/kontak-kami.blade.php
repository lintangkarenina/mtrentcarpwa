<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Kontak</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../../admin/assets/img/car.png" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="../../admin/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../admin/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../../admin/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../admin/assets/css/atlantis.min.css">
	<link rel="stylesheet" href="../admin/assets/css/style.css">
	
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../admin/assets/css/demo.css">

	{{-- Font Awesome --}}
	<script src="https://kit.fontawesome.com/cfd4f16976.js" crossorigin="anonymous"></script>

	{{-- Toastr --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- PWA  -->
	<meta name="theme-color" content="#6777ef"/>
	<link rel="apple-touch-icon" href="{{ asset('Logo-MT3.png') }}">
	<link rel="manifest" href="{{ asset('/manifest.json') }}">
	
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
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Kontak</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="/admin/beranda">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Kontak</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Kontak</h4>
										{{-- <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" style="background: #01d28e!important;border-color:#01d28e!important;">
											<i class="fa fa-plus"></i>
											Tambah
										</button> --}}
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Tambah Data Kontak</span> 
														<span class="fw-light"></span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Buat baris baru menggunakan formulir ini, pastikan anda mengisi semuanya dengan benar</p>
													<form action="/admin/kontak-kami" method="POST" enctype="multipart/form-data">
														@csrf
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Nama</label>
																	<input id="addName" type="text" name="nama" class="form-control" placeholder="Isi Nama">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Email</label>
																	<input id="addPosition" type="text" name="email" class="form-control" placeholder="Isi Email">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Subjek</label>
																	<input id="addOffice" type="text" name="subjek" class="form-control" placeholder="Isi Subjek">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Pesan</label>
																	<input id="addOffice" type="text" name="pesan" class="form-control" placeholder="Isi Pesan">
																</div>
															</div>
														</div>
														<div class="modal-footer no-bd">
															<button type="submit" onclick="showSweetAlertTambah()"
																class="btn btn-primary">Tambah</button>
															<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!-- End Modal Tambah Data -->

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr class="text-center">
													<th>No</th>
													<th>Nama</th>
													<th>Email</th>
													<th>Subjek</th>
													<th>Pesan</th>
													<th style="width: 10%">Aksi</th>
												</tr>
											</thead>
											<tbody class="text-center">
												<?php $i=1;?>
												@foreach ($kontak as $row)
												<tr>
													<td>{{ $i++ }}</td>
													<td>{{ $row->nama }}</td>
													<td>{{ $row->email }}</td>
													<td>{{ $row->subjek }}</td>
													<td>{{ $row->pesan }}</td>
													<td>
														<div class="form-button-action">
															<a href="#">
																<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">
																	<i class="fa fa-times"></i>
																</button>
															</a>
														</div>
													</td>
												</tr>
												
												<!-- Modal Edit -->
												<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header no-bd">
																<h5 class="modal-title">
																	<span class="fw-mediumbold">
																	Edit Data Kontak</span> 
																	<span class="fw-light"></span>
																</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form action="/admin/kontak-kami/{{$row->id}}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="form-group form-group-default">
																				<label>Nama</label>
																				<input type="text" name="nama" value="{{ $row->nama}}" class="form-control">
																			</div>
																		</div>
																		<div class="col-sm-12">
																			<div class="form-group form-group-default">
																				<label>Email</label>
																				<input type="text" name="email" value="{{ $row->email}}" class="form-control">
																			</div>
																		</div>
																		<div class="col-sm-12">
																			<div class="form-group form-group-default">
																				<label>Subjek</label>
																				<input type="text" name="subjek" value="{{ $row->subjek}}" class="form-control">
																			</div>
																		</div>
																		<div class="col-sm-12">
																			<div class="form-group form-group-default">
																				<label>Pesan</label>
																				<input type="text" name="pesan" value="{{ $row->pesan}}" class="form-control">
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer d-flex justify-content-center">
																		<button type="submit" onclick="showSweetAlertEdit()"
																			class="btn btn-success">Edit</button>
																		<button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
												<!-- Modal End -->

												@endforeach
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>         
            @include('admin.layouts.footer')
		</div>
	</div>

	

	<!-- Modal Detail -->
	<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header no-bd">
					<h5 class="modal-title">
						<span class="fw-mediumbold">
						Detail Data Kontak</span> 
						<span class="fw-light"></span>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p class="small">Buat baris baru menggunakan formulir ini, pastikan anda mengisi semuanya dengan benar</p>
					<form>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label>Nama</label>
									<input id="addName" type="text" class="form-control" placeholder="Isi Nama">
								</div>
							</div>
							<div class="col-md-6 pr-0">
								<div class="form-group form-group-default">
									<label>Gelar</label>
									<input id="addPosition" type="text" class="form-control" placeholder="Isi Gelar">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group form-group-default">
									<label>Pesan</label>
									<input id="addOffice" type="text" class="form-control" placeholder="Isi Pesan">
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group mb-3">
									<input type="file" class="form-control" id="inputGroupFile01">
									<label class="input-group-text bg-light" for="inputGroupFile01">Upload Foto</label>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer no-bd">
					<button type="button" class="btn btn-success" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal End -->

	<!--   Core JS Files   -->
	<script src="../../admin/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../admin/assets/js/core/popper.min.js"></script>
	<script src="../../admin/assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../admin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../../admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../../admin/assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../../admin/assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../../admin/assets/js/setting-demo2.js"></script>

	{{-- Sweet Alert --}}
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



	<!-- Toastr -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	{{-- PWA --}}
	<script src="{{ asset('/sw.js') }}"></script>
	<script>
		if (!navigator.serviceWorker.controller) {
			navigator.serviceWorker.register("/sw.js").then(function (reg) {
				console.log("Service worker has been registered for scope: " + reg.scope);
			});
		}
	</script>

	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>

{{-- sweetalert tambah dan edit--}}
<script>
    function showSweetAlertTambah() {
        swal({
            title: 'TAMBAH DATA',
            text: 'Data Berhasil di Tambah',
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
    }

    function showSweetAlertEdit() {
        swal({
            title: 'EDIT DATA',
            text: 'Data Berhasil di Edit',
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
    }
</script>

{{-- sweetalert delete --}}
<script>
	$('.delete').click(function() {
	  var kontakid = $(this).attr('data-id');
	  var nama = $(this).attr('data-nama');
	  
	  swal.fire({
		title: "Yakin?",
		text: "Kamu akan menghapus data kontak dengan nama " + nama,
		icon: "warning",
		buttons: {
		  cancel: "Batal",
		  confirm: "Ya, Hapus"
		},
		dangerMode: true,
		showCancelButton: true,
		confirmButtonColor: '#d33',
		cancelButtonColor: '#3085d6',
	  })
	  .then((willDelete) => {
		if (willDelete.isConfirmed) {
		  window.location = "/admin/kontak-kami/delete/" + kontakid;
		  swal.fire("Data berhasil dihapus", {
			icon: "success"
		  });
		} else {
		  swal.fire("Data tidak jadi dihapus");
		}
	  });
	});
  </script>
  

<script>

	@if (Session::has('success'))
	toastr.success("{{ Session ::get('success') }}")
	@endif
	
</script>

<!-- sweetalert -->
@include('admin.layouts.sweetalert')
<!-- End sweetalert -->

</html>