<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Blog</title>
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

	<!-- CKEditor -->
	<script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
	
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
						<h4 class="page-title">Blog</h4>
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
								<a href="#">Blog</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Blog</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" style="background: #01d28e!important;border-color:#01d28e!important;">
											<i class="fa fa-plus"></i>
											Tambah
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Tambah Data Blog</span> 
														<span class="fw-light"></span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form action="/admin/blog-kami" method="POST" enctype="multipart/form-data">
														@csrf
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Judul</label>
																	<input id="addName" type="text" name="judul" class="form-control" placeholder="Isi Judul" required>
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Subjudul</label>
																	<textarea  type="text" name="subjudul" class="form-control" rows="4" placeholder="Isi Subjudul" required></textarea>
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Konten</label>
																	<textarea  type="text" name="konten" id="tambah_konten" class="form-control" rows="4" placeholder="Isi Konten"></textarea>
																</div>
															</div>
															<div class="col-md-12">
																<div class="input-group mb-3">
																	<input type="file" name="gambar" class="form-control" id="inputGroupFile01" required>
																	<label class="input-group-text bg-light" for="inputGroupFile01">Upload Gambar</label>
																  </div>
																  <label class="mx-2 mb-3 text-danger">(wajib rasio 16:9)</label>
															</div>
														</div>
														<div class="modal-footer d-flex justify-content-center">
															<button type="submit" onclick="showSweetAlertTambah()"
																class="btn btn-success">Tambah</button>
															<button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
														</div>
													</form>
												</div>
												<script>
													ClassicEditor
															.create( document.querySelector( '#tambah_konten' ) )
															.then( tambah_konten => {
																	console.log( tambah_konten );
															} )
															.catch( error => {
																	console.error( error );
															} );
												</script>
											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr class="text-center">
													<th>No</th>
													<th>Judul</th>
													<th>Subjudul</th>
													<th>Konten</th>
													<th>Gambar</th>
													<th style="width: 10%">Aksi</th>
												</tr>
											</thead>
											<tbody class="text-center">
												<?php $i=1;?>
												@foreach ($blog as $row)
												<tr>
													<td>{{ $i++ }}</td>
													<td>{{ $row->judul }}</td>
													<td><?php
														$num_char = 50;
														$text = $row->subjudul;
														echo substr($text, 0, $num_char) . '...';
														?></td></td>
													<td><?php
														$num_char = 50;
														$text = $row->konten;
														echo substr($text, 0, $num_char) . '...';
														?></td>
													<td><img src="{{ asset('file/Blog/' . $row->gambar) }}" width="150" height="100" alt=""></td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#edit{{$row->id}}" title="" class="btn btn-link btn-info" data-original-title="Edit">
																<i class="fa fa-edit"></i>
															</button>
															<a href="#">
																<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->judul }}">
																	<i class="fa fa-times"></i>
																</button>
															</a>		
															<button type="button" data-toggle="modal" data-target="#detail{{$row->id}}" title="" class="btn btn-link btn-warning" data-original-title="Detail">
																<i class="fa-solid fa-circle-info"></i>
															</button>														
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
																	Edit Data Blog</span> 
																	<span class="fw-light"></span>
																</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form action="/admin/blog-kami/{{$row->id}}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="form-group form-group-default">
																				<label>Judul</label>
																				<input name="judul" value="{{ $row->judul}}" type="text" class="form-control" placeholder="Isi Nama">
																			</div>
																		</div>
																		<div class="col-sm-12">
																			<div class="form-group form-group-default">
																				<label>Subjudul</label>
																				<textarea  type="text" name="subjudul" class="form-control" rows="5" value="{{ $row->subjudul}}"></textarea>
																			</div>
																		</div>
																		<div class="col-sm-12">
																			<div class="form-group form-group-default">
																				<label>Konten</label>
																				<textarea name="konten" id='edit_konten_{{ $row->id }}' class="form-control" rows="5">{{ $row->konten}}</textarea>
																			</div>
																		</div>
																		<div class="col-md-12">
																			<div class="d-flex mb-3">
																				<div class="col-md-4 p-0">
																					<p>File sebelumnya :</p>
																				</div>
																				<div class="col-md-8 p-0">
																					<a href="{{ asset('file/Blog/' . $row->gambar) }}">
																						<img src="{{ asset('file/Blog/' . $row->gambar) }}" width="150"height="100" alt="">
																					</a>
																				</div>
																			</div>
																			<div class="input-group mb-3">
																				<input type="file" name="gambar" value="{{ $row->gambar}}"class="form-control" id="inputGroupFile01">
																				<label class="input-group-text bg-light" for="inputGroupFile01">Upload Gambar</label>
																			</div>
																			<label class="mx-2 mb-3 text-danger">(wajib rasio 16:9)</label>
																		</div>
																	</div>
																	<div class="modal-footer d-flex justify-content-center">
																		<button type="submit" onclick="showSweetAlertEdit()"
																			class="btn btn-success">Edit</button>
																		<button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
																	</div>
																</form>
															</div>
															<script>
																ClassicEditor
																	.create( document.querySelector('#edit_konten_' + @json($row->id)) )
																	.then( edit_konten => {
																			console.log( edit_konten );
																	} )
																	.catch( error => {
																			console.error( error );
																	} );
															</script>
														</div>
													</div>
												</div>
												<!-- Modal Edit End -->

												<!-- Modal Detail -->
												<div class="modal-detail">
													<div class="modal fade" id="detail{{$row->id}}" tabindex="-1" role="dialog" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header no-bd">
																	<h5 class="modal-title">
																		<span class="fw-mediumbold">
																		Detail Data Blog</span> 
																		<span class="fw-light"></span>
																	</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
															</div>
															<div class="modal-body">
																<form>
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="form-group form-group-default">
																				<span style="font-weight: 600">Judul</span> <br><br>
																				<p>
																					<?php
																					$text = $row->judul;
																					echo ($text);
																					?> 
																				</p>
																			</div>
																		</div>
																		<div class="col-sm-12">
																			<div class="form-group form-group-default">
																				<span style="font-weight: 600" style="height: 150px;">Subjudul</span> <br><br>
																				<p>
																					<?php
																					$text = $row->subjudul;
																					echo ($text);
																					?> 
																				</p>
																			</div>
																		</div>
																		<div class="col-sm-12">
																			<div class="form-group form-group-default">
																				<span style="font-weight: 600" style="height: 150px;">Konten</span>
																				<p>
																					<?php
																					$text = $row->konten;
																					echo ($text);
																					?> 
																				</p>
																			</div>
																		</div>
																		<div class="col-sm-12">
																			<div class="form-group form-group-default">
																				<span style="font-weight: 600">Gambar</span> <br><br>
																				<label><img src="{{ asset('file/Blog/' . $row->gambar) }}" width="150" height="100" alt=""></label>
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer no-bd">
																		<button type="button" class="btn btn-success" data-dismiss="modal">Tutup</button>
																	</div>
																</form>
															</div>
															<script>
																ClassicEditor
																		.create( document.querySelector( '#editkonten' ) )
																		.then( editkonten => {
																				console.log( editkonten );
																		} )
																		.catch( error => {
																				console.error( error );
																		} );
															</script>
														</div>
													</div>
												</div>
												<!-- Modal End -->

												@endforeach	
											</div>	
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

{{-- Sweet Alert Delete--}}
<script>

	$('.delete').click(function(){
		var blogid = $(this).attr('data-id');
		var judul = $(this).attr('data-nama');
		
		swal({
			title: "Yakin?",
			text: "Kamu akan menghapus data blog dengan judul "+judul+" ",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				window.location = "/admin/blog-kami/delete/"+blogid+" "
				swal("Data berhasil di hapus", {
				icon: "success",
				});
		} else {
			swal("Data tidak jadi dihapus");
		}
		});
	});
		
</script>

<!-- Toastr -->
<script>

	@if (Session::has('success'))
	toastr.success("{{ Session ::get('success') }}")
	@endif
	
</script>

<!-- sweetalert -->
@include('admin.layouts.sweetalert')
<!-- End sweetalert -->

</html>