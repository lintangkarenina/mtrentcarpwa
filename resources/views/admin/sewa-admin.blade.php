<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Sewa</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../../admin/assets/img/car.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../../admin/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['../../admin/assets/css/fonts.min.css']
            },
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
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
                        <h4 class="page-title">Sewa</h4>
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
                                <a href="#">Sewa</a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Sewa</h4>
                                        {{-- <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#tambah" style="background: #01d28e!important;border-color:#01d28e!important;">
											<i class="fa fa-plus"></i>
											Tambah
										</button> --}}
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Start Modal Tambah Data-->
                                    <div class="modal fade" id="tambah" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header no-bd">
                                                    <h5 class="modal-title">
                                                        <span class="fw-mediumbold">
                                                            Tambah Data Penyewa</span>
                                                        <span class="fw-light"></span>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/admin/sewa-admin" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>Nama</label>
                                                                    <input id="addName" type="text"
                                                                        name="nama_lengkap" class="form-control"
                                                                        placeholder="Isi Nama" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>No Handphone</label>
                                                                    <input id="addPosition" type="text"
                                                                        name="no_handphone" class="form-control"
                                                                        placeholder="Isi No Handphone" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Email</label>
                                                                    <input id="addOffice" type="text" name="email"
                                                                        class="form-control" placeholder="Isi Email"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Kota/Kabupaten</label>
                                                                    <input id="addPosition" type="text"
                                                                        name="kota_kabupaten" class="form-control"
                                                                        placeholder="Isi Domisili" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Detail Alamat</label>
                                                                    <input id="addOffice" type="text"
                                                                        name="detail_alamat" class="form-control"
                                                                        placeholder="Isi Detail Alamat" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Jenis Layanan</label>
                                                                    <input id="addPosition" type="text"
                                                                        name="jenis_layanan" class="form-control"
                                                                        placeholder="Isi Jenis Layanan" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Tanggal Mulai Sewa</label>
                                                                    <input type="date" name="tanggal_mulai_sewa"
                                                                        class="form-control rounded-4"
                                                                        id="floatingInput" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Tanggal Selesai Sewa</label>
                                                                    <input type="date" name="tanggal_selesai_sewa"
                                                                        class="form-control rounded-4"
                                                                        id="floatingInput" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="input-group mb-3">
                                                                    <input type="file" name="upload_ktp"
                                                                        class="form-control" id="inputGroupFile01"
                                                                        required>
                                                                    <label class="input-group-text bg-light"
                                                                        for="inputGroupFile01">Upload KTP</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Rute Perjalanan</label>
                                                                    <input id="addPosition" type="text"
                                                                        name="rute_perjalanan" class="form-control"
                                                                        placeholder="Isi Pesan Tambahan" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Pesan Tambahan</label>
                                                                    <input id="addPosition" type="text"
                                                                        name="pesan_tambahan" class="form-control"
                                                                        placeholder="Isi Pesan Tambahan" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer mx-auto">
                                                            <button type="submit" onclick="showSweetAlertTambah()"
                                                                class="btn btn-success">Tambah</button>
                                                            <button type="button" class="btn btn-primary"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Tambah Data-->

                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped table-hover">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Nama Mobil</th>
                                                    <th>Nama</th>
                                                    <th>No Handphone</th>
                                                    <th>Email</th>
                                                    <th style="width: 10%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <?php $i = 1; ?>
                                                @foreach ($sewa as $row)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ isset($row->relasidetail) ? $row->relasidetail->nama_mobil : 'Tidak Ada Mobil' }}</td>
                                                        <td>{{ $row->relasiuser->name }}</td>
                                                        <td>{{ $row->relasiuser->no_handphone }}</td>
                                                        <td>{{ $row->relasiuser->email }}</td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#edit{{ $row->id }}"
                                                                    title="" class="btn btn-link btn-info"
                                                                    data-original-title="Edit">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#detail{{ $row->id }}"
                                                                    title="" class="btn btn-link btn-warning"
                                                                    data-original-title="Detail">
                                                                    <i class="fa fa-info"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <!-- Start Modal Edit Data-->
                                                    <div class="modal fade" id="edit{{ $row->id }}"
                                                        tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header no-bd">
                                                                    <h5 class="modal-title">
                                                                        <span class="fw-mediumbold">
                                                                            Edit Data Penyewa</span>
                                                                        <span class="fw-light"></span>
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form
                                                                        action="/admin/sewa-admin/{{ $row->id }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row">
                                                                            {{-- <div class="col-sm-12">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Nama</label>
                                                                                    <input id="addName"
                                                                                        type="text"
                                                                                        name="nama_lengkap"
                                                                                        value="{{ $row->relasiuser->name }}"
                                                                                        class="form-control"
                                                                                        placeholder="Isi Nama">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>No Handphone</label>
                                                                                    <input id="addPosition"
                                                                                        type="text"
                                                                                        name="no_handphone"
                                                                                        value="{{ $row->relasiuser->no_handphone }}"
                                                                                        class="form-control"
                                                                                        placeholder="Isi No Handphone">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Email</label>
                                                                                    <input id="addOffice"
                                                                                        type="text" name="email"
                                                                                        value="{{ $row->relasiuser->email }}"
                                                                                        class="form-control"
                                                                                        placeholder="Isi Email">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Kota/Kabupaten
                                                                                        Domisili</label>
                                                                                    <select name="kota_kabupaten"
                                                                                        class="form-control form-control"
                                                                                        id="defaultSelect" required>
                                                                                        <option value="Kota Pontianak"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Kota Pontianak' ? 'selected' : '' }}>
                                                                                            Kota Pontianak</option>
                                                                                        <option value="Kota Singkawang"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Kota Singkawang' ? 'selected' : '' }}>
                                                                                            Kota Singkawang</option>
                                                                                        <option value="Kab Kubu Raya"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Kab Kubu Raya' ? 'selected' : '' }}>
                                                                                            Kab Kubu Raya</option>
                                                                                        <option value="Kab Mempawah"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Kab Mempawah' ? 'selected' : '' }}>
                                                                                            Kab Mempawah</option>
                                                                                        <option value="Kab Sambas"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Kab Sambas' ? 'selected' : '' }}>
                                                                                            Kab Sambas</option>
                                                                                        <option value="Kab Sintang"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Kab Sintang' ? 'selected' : '' }}>
                                                                                            Kab Sintang</option>
                                                                                        <option value="Kab Bengkayang"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Kab Bengkayang' ? 'selected' : '' }}>
                                                                                            Kab Bengkayang</option>
                                                                                        <option value="Kab Sanggau"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Kab Sanggau' ? 'selected' : '' }}>
                                                                                            Kab Sanggau</option>
                                                                                        <option value="Kab Sekadau"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Kab Sekadau' ? 'selected' : '' }}>
                                                                                            Kab Sekadau</option>
                                                                                        <option value="Kab Melawi"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Kab Melawi' ? 'selected' : '' }}>
                                                                                            Kab Melawi</option>
                                                                                        <option value="Kab Kapuas Hulu"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Kab Kapuas Hulu' ? 'selected' : '' }}>
                                                                                            Kab Kapuas Hulu</option>
                                                                                        <option value="Kab Landak"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Kab Landak' ? 'selected' : '' }}>
                                                                                            Kab Landak</option>
                                                                                        <option value="Kab Ketapang"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Kab Ketapang' ? 'selected' : '' }}>
                                                                                            Kab Ketapang</option>
                                                                                        <option
                                                                                            value="Kab Kayong Utara"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Kab Kayong Utara' ? 'selected' : '' }}>
                                                                                            Kab Kayong Utara</option>
                                                                                        <option value="Lainnya"
                                                                                            {{ (old('kota_kabupaten') ?? $row->kota_kabupaten) == 'Lainnya' ? 'selected' : '' }}>
                                                                                            Lainnya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Detail Alamat
                                                                                        Pontianak</label>
                                                                                    <input id="addOffice"
                                                                                        type="text"
                                                                                        name="detail_alamat"
                                                                                        value="{{ $row->relasiuser->alamat }}"
                                                                                        class="form-control"
                                                                                        placeholder="Isi Detail Alamat">
                                                                                </div>
                                                                            </div> --}}

                                                                            {{-- <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Jenis Layanan</label>
                                                                                    <select name="jenis_layanan"
                                                                                        class="form-control form-control"
                                                                                        id="defaultSelect" required>
                                                                                        <option
                                                                                            value="Sewa Lepas Kunci"
                                                                                            {{ (old('jenis_layanan') ?? $row->jenis_layanan) == 'Sewa Lepas Kunci' ? 'selected' : '' }}>
                                                                                            Sewa Lepas Kunci</option>
                                                                                        <option value="Sewa Dengan Driver"
                                                                                            {{ (old('jenis_layanan') ?? $row->jenis_layanan) == 'Sewa Dengan Driver' ? 'selected' : '' }}>
                                                                                            Sewa Dengan Driver</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Tanggal Mulai Sewa</label>
                                                                                    <input type="date"
                                                                                        name="tanggal_mulai_sewa"
                                                                                        value="{{ $row->tanggal_mulai_sewa }}"
                                                                                        class="form-control rounded-4"
                                                                                        id="floatingInput">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Tanggal Selesai Sewa</label>
                                                                                    <input type="date"
                                                                                        name="tanggal_selesai_sewa"
                                                                                        value="{{ $row->tanggal_selesai_sewa }}"
                                                                                        class="form-control rounded-4"
                                                                                        id="floatingInput">
                                                                                </div>
                                                                            </div> --}}

                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Jam Pengambilan</label>
                                                                                    <input type="time"
                                                                                        name="jam_pengambilan"
                                                                                        value="{{ $row->jam_pengambilan }}"
                                                                                        class="form-control rounded-4"
                                                                                        id="floatingInput">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Jam Pengembalian</label>
                                                                                    <input type="time"
                                                                                        name="jam_pengembalian"
                                                                                        value="{{ $row->jam_pengembalian }}"
                                                                                        class="form-control rounded-4"
                                                                                        id="floatingInput">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Denda</label>
                                                                                    <input type="text"
                                                                                        name="denda"
                                                                                        value="{{ $row->denda }}"
                                                                                        class="form-control rounded-4"
                                                                                        id="floatingInput">
                                                                                </div>
                                                                            </div>

                                                                            {{-- <div class="col-md-12">
                                                                                <div class="d-flex mb-3">
                                                                                    <div class="col-md-4 p-0">
                                                                                        <p>File sebelumnya :</p>
                                                                                    </div>
                                                                                    <div class="col-md-8 p-0">
                                                                                        <a
                                                                                            href="{{ asset('file/Sewa/' . $row->upload_tiket) }}">
                                                                                            <img src="{{ asset('file/Sewa/' . $row->upload_tiket) }}"
                                                                                                width="150"height="100"
                                                                                                alt="">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="input-group mb-3">
                                                                                    <input type="file"
                                                                                        name="upload_ktp"
                                                                                        value="{{ $row->upload_tiket }}"
                                                                                        class="form-control"
                                                                                        id="inputGroupFile01">
                                                                                    <label
                                                                                        class="input-group-text bg-light"
                                                                                        for="inputGroupFile01">Upload
                                                                                        Tiket</label>
                                                                                </div>
                                                                            </div> --}}

                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Total Pembayaran</label>
                                                                                    <input id="addPosition"
                                                                                        type="text"
                                                                                        name="total"
                                                                                        value="{{ $row->total }}"
                                                                                        class="form-control">
                                                                                </div>
                                                                            </div>

                                                                            {{-- <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Pesan Tambahan</label>
                                                                                    <input id="addName"
                                                                                        type="text"
                                                                                        name="pesan_tambahan"
                                                                                        value="{{ $row->pesan_tambahan }}"
                                                                                        class="form-control" required>
                                                                                </div>
                                                                            </div> --}}

                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Status</label>
                                                                                    <select name="status"
                                                                                        class="form-control form-control"
                                                                                        id="defaultSelect" required>
                                                                                        <option value="Dipesan"
                                                                                            {{ (old('status') ?? $row->status) == 'Dipesan' ? 'selected' : '' }}>
                                                                                            Dipesan</option>
                                                                                        <option value="Sedang diproses"
                                                                                            {{ (old('status') ?? $row->status) == 'Sedang diproses' ? 'selected' : '' }}>
                                                                                            Sedang diproses</option>
                                                                                        <option value="Selesai"
                                                                                            {{ (old('status') ?? $row->status) == 'Selesai' ? 'selected' : '' }}>
                                                                                            Selesai</option>
                                                                                        <option
                                                                                            value="Pesanan Dibatalkan"
                                                                                            {{ (old('status') ?? $row->status) == 'Pesanan Dibatalkan' ? 'selected' : '' }}>
                                                                                            Pesanan Dibatalkan
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="modal-footer d-flex justify-content-center">
                                                                            <button type="submit"
                                                                                onclick="showSweetAlertEdit()"
                                                                                class="btn btn-success">Edit</button>
                                                                            <button type="button"
                                                                                class="btn btn-primary"
                                                                                data-dismiss="modal">Batal</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Modal Edit Data-->
                                                @endforeach

                                                @foreach ($sewa as $row)
                                                    <!-- Modal Detail -->
                                                    <div class="modal fade" id="detail{{ $row->id }}"
                                                        tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header no-bd">
                                                                    <h5 class="modal-title">
                                                                        <span class="fw-mediumbold">
                                                                            Detail Data Penyewa</span>
                                                                        <span class="fw-light"></span>
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span style="font-weight: 600">Nama
                                                                                        Lengkap</span>
                                                                                    <label>{{ $row->relasiuser->name }}</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span style="font-weight: 600">No
                                                                                        Handphone</span>
                                                                                    <label>{{ $row->relasiuser->no_handphone }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Email</span>
                                                                                    <label>{{ $row->relasiuser->email }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Kota/Kabupaten</span>
                                                                                    <label>{{ $row->relasiuser->kota }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span style="font-weight: 600">Rute
                                                                                        Perjalanan</span>
                                                                                    <label>{{ $row->relasirute->rute }}</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Jenis
                                                                                        Layanan</span>
                                                                                    <label>{{ $row->jenis_layanan }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Tanggal
                                                                                        Mulai Sewa</span>
                                                                                    <label>{{ $row->tanggal_mulai_sewa }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Tanggal
                                                                                        Selesai Sewa</span>
                                                                                    <label>{{ $row->tanggal_selesai_sewa }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span style="font-weight: 600">Jam
                                                                                        Pengambilan</span>
                                                                                    <label>{{ $row->jam_pengambilan }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span style="font-weight: 600">Jam
                                                                                        Pengembalian</span>
                                                                                    <label>{{ $row->jam_pengembalian }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Denda</span>
                                                                                    <label>{{ $row->denda }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Status</span>
                                                                                    <label>{{ $row->status }}</label>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Upload
                                                                                        KTP</span>
                                                                                    <label><img
                                                                                            src="{{ asset('file/User/' . $row->relasiuser->upload_ktp) }}"
                                                                                            width="200"
                                                                                            alt=""></label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Upload
                                                                                        SIM</span>
                                                                                    <label><img
                                                                                            src="{{ asset('file/User/' . $row->relasiuser->upload_sim) }}"
                                                                                            width="200"
                                                                                            alt=""></label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Upload
                                                                                        Tiket</span>
                                                                                    <label><img
                                                                                            src="{{ asset('file/Sewa/' . $row->upload_tiket) }}"
                                                                                            width="150"
                                                                                            height="100"
                                                                                            alt="Tidak ada gambar"></label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-12">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Detail
                                                                                        Alamat</span>
                                                                                    <label>{{ $row->relasiuser->alamat }}</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-12">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Pesan
                                                                                        Tambahan</span>
                                                                                    <label>{{ $row->pesan_tambahan }}</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer no-bd">
                                                                    <button type="button" class="btn btn-success"
                                                                        data-dismiss="modal">Tutup</button>
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
            navigator.serviceWorker.register("/sw.js").then(function(reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#basic-datatables').DataTable({});

            $('#multi-filter-select').DataTable({
                "pageLength": 5,
                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-control"><option value=""></option></select>'
                            )
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d +
                                '</option>')
                        });
                    });
                }
            });

            // Add Row
            $('#add-row').DataTable({
                "pageLength": 5,
            });

            var action =
                '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

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

{{-- sweetalert tambah dan edit --}}
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
        var sewaid = $(this).attr('data-id');
        var nama_mobil = $(this).attr('data-nama');

        swal.fire({
                title: "Yakin?",
                text: "Kamu akan menghapus data sewa dengan nama mobil " + nama_mobil,
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
                    window.location = "/admin/sewa-admin/delete/" + sewaid;
                    swal.fire("Data berhasil dihapus", {
                        icon: "success"
                    });
                } else {
                    swal.fire("Data tidak jadi dihapus");
                }
            });
    });
</script>

{{-- SweetAlert Tambah Data dan Edit Data --}}
<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
        swal({
            title: 'Berhasil',
            text: "{{ Session::get('success') }}",
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

</html>
