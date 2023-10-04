<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Detail Mobil</title>
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
                        <h4 class="page-title">Detail Mobil</h4>
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
                                <a href="#">Detail Mobil</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Detail Mobil</h4>
                                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                            data-target="#tambah" style="background: #01d28e!important;border-color:#01d28e!important;">
                                            <i class="fa fa-plus"></i>
                                            Tambah
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Start Modal Tambah Data -->
                                    <div class="modal fade" id="tambah" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header no-bd">
                                                    <h5 class="modal-title">
                                                        <span class="fw-mediumbold">
                                                            Tambah Data Detail Mobil</span>
                                                        <span class="fw-light"></span>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/admin/detail" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="input-group mb-3">
                                                                    <input type="file" name="gambar"
                                                                        class="form-control" id="inputGroupFile01"
                                                                        required>
                                                                    <label class="input-group-text bg-light"
                                                                        for="inputGroupFile01">Upload Gambar</label>
                                                                </div>
                                                                <label class="mx-2 mb-3 text-danger">(wajib rasio
                                                                    16:9)</label>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Status</label>
                                                                    <select name="status"
                                                                        class="form-control form-control"
                                                                        id="defaultSelect" required>
                                                                        <option value="Tersedia">Tersedia</option>
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Nama Mobil</label>
                                                                    <input type="text" name="nama_mobil"
                                                                        class="form-control"
                                                                        placeholder="Isi Nama Mobil" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Harga</label>
                                                                    <input type="text" name="harga"
                                                                        class="form-control" placeholder="Isi Harga"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Bahan Bakar</label>
                                                                    <input type="text" name="bahan_bakar"
                                                                        class="form-control"
                                                                        placeholder="Isi Bahan Bakar" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Jumlah Kursi</label>
                                                                    <input type="text" name="jumlah_kursi"
                                                                        class="form-control"
                                                                        placeholder="Isi Jumlah Kursi" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Penumpang</label>
                                                                    <input type="text" name="penumpang"
                                                                        class="form-control"
                                                                        placeholder="Isi Penumpang" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Tahun</label>
                                                                    <input type="text" name="tahun"
                                                                        class="form-control" placeholder="Isi Tahun"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Transmisi</label>
                                                                    <select name="transmisi"
                                                                        class="form-control form-control"
                                                                        id="defaultSelect">
                                                                        <option value="Automatic">Automatic</option>
                                                                        <option value="Manual">Manual</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Fasilitas</label>
                                                                    <input type="text" name="fasilitas"
                                                                        class="form-control"
                                                                        placeholder="Isi Fasilitas" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer d-flex justify-content-center">
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
                                    <!-- End Modal Tambah Data -->

                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped table-hover">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Gambar</th>
                                                    <th>Status</th>
                                                    <th>Nama Mobil</th>
                                                    <th>Harga</th>
                                                    <th>Bahan Bakar</th>
                                                    <th>Jumlah Kursi</th>
                                                    {{-- <th>Penumpang</th>
                                                    <th>Tahun</th>
                                                    <th>Transmisi</th> --}}
                                                    {{-- <th>AC</th>
													{{-- <th>Charger</th>  --}}
                                                    <th style="width: 10%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <?php $i = 1; ?>
                                                @foreach ($detail as $row)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td><img src="{{ asset('file/Detail/' . $row->gambar) }}"
                                                                width="150" height="100" alt=""></td>
                                                        <td>{{ $row->status }}</td>
                                                        <td>{{ $row->nama_mobil }}</td>
                                                        <td>{{ $row->harga }}</td>
                                                        <td>{{ $row->bahan_bakar }}</td>
                                                        <td>{{ $row->jumlah_kursi }}</td>
                                                        {{-- <td>{{ $row->penumpang }}</td>
                                                        <td>{{ $row->tahun }}</td>
                                                        <td>{{ $row->transmisi }}</td> --}}
                                                        {{-- <td>AC</td>
													<td>Charger</td> --}}
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#edit{{ $row->id }}"
                                                                    title="" class="btn btn-link btn-info"
                                                                    data-original-title="Edit">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                                <a href="#">
                                                                    <button type="button" data-toggle="tooltip"
                                                                        title=""
                                                                        class="btn btn-link btn-danger delete"
                                                                        data-id="{{ $row->id }}"
                                                                        data-nama="{{ $row->nama_mobil }}">
                                                                        <i class="fa fa-times"></i>
                                                                    </button>
                                                                </a>
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#modal-detail{{ $row->id }}"
                                                                    class="btn btn-link btn-warning">
                                                                    <i class="fa fa-info"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <!-- Modal Edit -->
                                                    {{-- <div class="modal fade" id="edit{{ $row->id }}"
                                                        tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header no-bd">
                                                                    <h5 class="modal-title">
                                                                        <span class="fw-mediumbold">
                                                                            Edit Data Detail Mobil</span>
                                                                        <span class="fw-light"></span>
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="/admin/detail/{{ $row->id }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row">

                                                                            <div class="col-md-12">

                                                                                <div class="d-flex mb-3">
                                                                                    <div class="col-md-4 p-0">
                                                                                        <p>File sebelumnya :</p>
                                                                                    </div>
                                                                                    <div class="col-md-8 p-0">
                                                                                        <a
                                                                                            href="{{ asset('file/Detail/' . $row->gambar) }}">
                                                                                            <img src="{{ asset('file/Detail/' . $row->gambar) }}"
                                                                                                width="150"height="100"
                                                                                                alt="">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">

                                                                                    <div class="input-group mb-3">
                                                                                        <input type="file"
                                                                                            name="gambar"
                                                                                            value="{{ $row->gambar }}"
                                                                                            class="form-control"
                                                                                            id="inputGroupFile01">
                                                                                        <label
                                                                                            class="input-group-text bg-light"
                                                                                            for="inputGroupFile01">Upload
                                                                                            Gambar</label>
                                                                                    </div>
                                                                                    <label
                                                                                        class="mx-2 mb-3 text-danger">(wajib
                                                                                        rasio 16:9)</label>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6 pr-0">
                                                                                        <div
                                                                                            class="form-group form-group-default">
                                                                                            <label>Status</label>
                                                                                            <select name="status"
                                                                                                class="form-control form-control"
                                                                                                id="defaultSelect"
                                                                                                required>
                                                                                                <option
                                                                                                    value="Tersedia"
                                                                                                    {{ (old('status') ?? $row->status) == 'Tersedia' ? 'selected' : '' }}>
                                                                                                    Tersedia
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Tidak Tersedia"
                                                                                                    {{ (old('status') ?? $row->status) == 'Tidak Tersedia' ? 'selected' : '' }}>
                                                                                                    Tidak Tersedia
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div
                                                                                            class="form-group form-group-default">
                                                                                            <label>Nama Mobil</label>
                                                                                            <input id="addName"
                                                                                                name="nama_mobil"
                                                                                                value="{{ $row->nama_mobil }}"
                                                                                                type="text"
                                                                                                class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6 pr-0">
                                                                                        <div
                                                                                            class="form-group form-group-default">
                                                                                            <label>Harga</label>
                                                                                            <input id="addName"
                                                                                                name="harga"
                                                                                                value="{{ $row->harga }}"
                                                                                                type="text"
                                                                                                class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div
                                                                                            class="form-group form-group-default">
                                                                                            <label>Bahan Bakar</label>
                                                                                            <input id="addName"
                                                                                                name="bahan_bakar"
                                                                                                value="{{ $row->bahan_bakar }}"
                                                                                                type="text"
                                                                                                class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6 pr-0">
                                                                                        <div
                                                                                            class="form-group form-group-default">
                                                                                            <label>Jumlah Kursi</label>
                                                                                            <input id="addPosition"
                                                                                                name="jumlah_kursi"
                                                                                                value="{{ $row->jumlah_kursi }}"
                                                                                                type="text"
                                                                                                class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div
                                                                                            class="form-group form-group-default">
                                                                                            <label>Penumpang</label>
                                                                                            <input id="addOffice"
                                                                                                name="penumpang"
                                                                                                value="{{ $row->penumpang }}"
                                                                                                type="text"
                                                                                                class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6 pr-0">
                                                                                        <div
                                                                                            class="form-group form-group-default">
                                                                                            <label>Tahun</label>
                                                                                            <input id="addOffice"
                                                                                                name="tahun"
                                                                                                value="{{ $row->tahun }}"
                                                                                                type="text"
                                                                                                class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div
                                                                                            class="form-group form-group-default">
                                                                                            <label>Transmisi</label>
                                                                                            <select name="transmisi"
                                                                                                class="form-control form-control"
                                                                                                id="defaultSelect">
                                                                                                <option
                                                                                                    value="Automatic"
                                                                                                    {{ (old('transmisi') ?? $row->transmisi) == 'Automatic' ? 'selected' : '' }}>
                                                                                                    Automatic
                                                                                                </option>
                                                                                                <option value="Manual"
                                                                                                    {{ (old('transmisi') ?? $row->transmisi) == 'Manual' ? 'selected' : '' }}>
                                                                                                    Manual
                                                                                                </option>
                                                                                            </select>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6 pr-0">
                                                                                        <div
                                                                                            class="form-group form-group-default">
                                                                                            <label>Fasilitas</label>
                                                                                            <input id="addOffice"
                                                                                                name="fasilitas"
                                                                                                value="{{ $row->fasilitas }}"
                                                                                                type="text"
                                                                                                class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer mx-auto">
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
                                                    </div> --}}
                                                    <!-- Modal End -->

                                                    <!-- Modal Detail -->
                                                    {{-- <div class="modal-detail">
                                                        <div class="modal fade" id="modal-detail{{ $row->id }}"
                                                            tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header no-bd">
                                                                        <h5 class="modal-title">
                                                                            <span class="fw-mediumbold">
                                                                                Detail Data Detail Mobil</span>
                                                                            <span class="fw-light"></span>
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Gambar</span>
                                                                                    <label><img
                                                                                            src="{{ asset('file/Detail/' . $row->gambar) }}"
                                                                                            width="150"
                                                                                            height="100"
                                                                                            alt=""></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 pr-0">
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
                                                                                    <span style="font-weight: 600">Nama
                                                                                        Mobil</span>
                                                                                    <label>{{ $row->nama_mobil }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Harga</span>
                                                                                    <label>{{ $row->harga }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Bahan
                                                                                        Bakar</span>
                                                                                    <label>{{ $row->bahan_bakar }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Jumlah
                                                                                        Kursi</span>
                                                                                    <label>{{ $row->jumlah_kursi }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Penumpang</span>
                                                                                    <label>{{ $row->penumpang }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Tahun</span>
                                                                                    <label>{{ $row->tahun }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Transmisi</span>
                                                                                    <label>{{ $row->transmisi }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <span
                                                                                        style="font-weight: 600">Fasilitas</span>
                                                                                    <label>{{ $row->fasilitas }}</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer no-bd">
                                                                            <button type="button"
                                                                                class="btn btn-success"
                                                                                data-dismiss="modal">Tutup</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
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
    @foreach ($detail as $row)
        <!-- Modal Edit -->
        <div class="modal fade" id="edit{{ $row->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header no-bd">
                        <h5 class="modal-title">
                            <span class="fw-mediumbold">
                                Edit Data Detail Mobil</span>
                            <span class="fw-light"></span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/admin/detail/{{ $row->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex mb-3">
                                        <div class="col-md-4 p-0">
                                            <p>File sebelumnya :</p>
                                        </div>
                                        <div class="col-md-8 p-0">
                                            <a href="{{ asset('file/Detail/' . $row->gambar) }}">
                                                <img src="{{ asset('file/Detail/' . $row->gambar) }}"
                                                    width="150"height="100" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">

                                        <div class="input-group mb-3">
                                            <input type="file" name="gambar" value="{{ $row->gambar }}"
                                                class="form-control" id="inputGroupFile01">
                                            <label class="input-group-text bg-light" for="inputGroupFile01">Upload
                                                Gambar</label>
                                        </div>
                                        <label class="mx-2 mb-3 text-danger">(wajib
                                            rasio 16:9)</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Status</label>
                                                <select name="status" class="form-control form-control"
                                                    id="defaultSelect" required>
                                                    <option value="Tersedia"
                                                        {{ (old('status') ?? $row->status) == 'Tersedia' ? 'selected' : '' }}>
                                                        Tersedia
                                                    </option>
                                                    <option value="Tidak Tersedia"
                                                        {{ (old('status') ?? $row->status) == 'Tidak Tersedia' ? 'selected' : '' }}>
                                                        Tidak Tersedia
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Nama Mobil</label>
                                                <input id="addName" name="nama_mobil"
                                                    value="{{ $row->nama_mobil }}" type="text"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Harga</label>
                                                <input id="addName" name="harga" value="{{ $row->harga }}"
                                                    type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Bahan Bakar</label>
                                                <input id="addName" name="bahan_bakar"
                                                    value="{{ $row->bahan_bakar }}" type="text"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Jumlah Kursi</label>
                                                <input id="addPosition" name="jumlah_kursi"
                                                    value="{{ $row->jumlah_kursi }}" type="text"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Penumpang</label>
                                                <input id="addOffice" name="penumpang" value="{{ $row->penumpang }}"
                                                    type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Tahun</label>
                                                <input id="addOffice" name="tahun" value="{{ $row->tahun }}"
                                                    type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Transmisi</label>
                                                <select name="transmisi" class="form-control form-control"
                                                    id="defaultSelect">
                                                    <option value="Automatic"
                                                        {{ (old('transmisi') ?? $row->transmisi) == 'Automatic' ? 'selected' : '' }}>
                                                        Automatic
                                                    </option>
                                                    <option value="Manual"
                                                        {{ (old('transmisi') ?? $row->transmisi) == 'Manual' ? 'selected' : '' }}>
                                                        Manual
                                                    </option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Fasilitas</label>
                                                <input id="addOffice" name="fasilitas" value="{{ $row->fasilitas }}"
                                                    type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer mx-auto">
                                    <button type="submit" onclick="showSweetAlertEdit()"
                                        class="btn btn-success">Edit</button>
                                    <button type="button" class="btn btn-primary"
                                        data-dismiss="modal">Batal</button>
                                </div>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->

        <!-- Modal Detail -->
        <div class="modal-detail">
            <div class="modal fade" id="modal-detail{{ $row->id }}" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header no-bd">
                            <h5 class="modal-title">
                                <span class="fw-mediumbold">
                                    Detail Data Detail Mobil</span>
                                <span class="fw-light"></span>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 pr-0">
                                    <div class="form-group form-group-default">
                                        <span style="font-weight: 600">Gambar</span>
                                        <label><img src="{{ asset('file/Detail/' . $row->gambar) }}" width="150"
                                                height="100" alt=""></label>
                                    </div>
                                </div>
                                <div class="col-md-6 pr-0">
                                    <div class="form-group form-group-default">
                                        <span style="font-weight: 600">Status</span>
                                        <label>{{ $row->status }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6 pr-0">
                                    <div class="form-group form-group-default">
                                        <span style="font-weight: 600">Nama
                                            Mobil</span>
                                        <label>{{ $row->nama_mobil }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6 pr-0">
                                    <div class="form-group form-group-default">
                                        <span style="font-weight: 600">Harga</span>
                                        <label>{{ $row->harga }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6 pr-0">
                                    <div class="form-group form-group-default">
                                        <span style="font-weight: 600">Bahan
                                            Bakar</span>
                                        <label>{{ $row->bahan_bakar }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <span style="font-weight: 600">Jumlah
                                            Kursi</span>
                                        <label>{{ $row->jumlah_kursi }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6 pr-0">
                                    <div class="form-group form-group-default">
                                        <span style="font-weight: 600">Penumpang</span>
                                        <label>{{ $row->penumpang }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <span style="font-weight: 600">Tahun</span>
                                        <label>{{ $row->tahun }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6 pr-0">
                                    <div class="form-group form-group-default">
                                        <span style="font-weight: 600">Transmisi</span>
                                        <label>{{ $row->transmisi }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <span style="font-weight: 600">Fasilitas</span>
                                        <label>{{ $row->fasilitas }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer no-bd">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
    @endforeach

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

    <script src="https://kit.fontawesome.com/cfd4f16976.js" crossorigin="anonymous"></script>

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
	  var detailid = $(this).attr('data-id');
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
		  window.location = "/admin/detail/delete/" + detailid;
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
	toastr.success("{{ Session ::get('success') }}")
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
@include('admin.layouts.sweetalert')
<!-- End sweetalert -->

</html>
