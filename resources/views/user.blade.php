<!DOCTYPE html>
<html lang="en">

<head>
    <title>MT RentCar - Akun Pengguna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('Logo-MT3.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

</head>

<body>

    <style>
        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        /* Existing styles... */

        /* Media query for screens smaller than 768px (tablets and mobile devices) */
        @media (max-width: 767px) {
            /* Add responsive styles here */
            /* For example, you can adjust padding, font sizes, and margins */
            /* Make sure to test and adjust as needed */
        }

        /* Media query for screens between 768px and 992px (medium-sized devices) */
        @media (min-width: 768px) and (max-width: 991px) {
            /* Add responsive styles here */
        }

        /* Media query for screens between 992px and 1200px (larger devices) */
        @media (min-width: 992px) and (max-width: 1199px) {
            /* Add responsive styles here */
        }

        /* Media query for screens larger than 1200px (desktop) */
        @media (min-width: 1200px) {
            /* Add responsive styles here */
        }
    </style>

    @include('component.navbar')

    <div class="container mt-5">
        <h3 class="mt-5 text-center">PROFIL</h3>
        <hr class="border mb-5 border-dark border-2 opacity-75 mx-auto" style="width: 10%;">
        <ul class="nav nav-tabs -flex justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link text-dark active" id="profile-tab" data-bs-toggle="tab" href="#lihatprofil"
                    role="tab" aria-controls="profile" aria-selected="true">Lihat Profil</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab" href="#ubahprofil" role="tab"
                    aria-controls="profile" aria-selected="true">Ubah Profil</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-dark" id="orders-tab" data-bs-toggle="tab" href="#pesanan" role="tab"
                    aria-controls="orders" aria-selected="false">Riwayat Pesanan</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-dark" id="orders-tab" data-bs-toggle="tab" href="#testimoni" role="tab"
                    aria-controls="orders" aria-selected="false">Testimoni Penyewa</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="lihatprofil" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container mt-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-3 d-flex justify-content-center mt-3">
                            @if (Auth::user()->upload_ktp)
                                <img src="{{ asset('file/User/' . Auth::user()->upload_ktp) }}" width="200"
                                    alt="">
                            @else
                                <img src="/images/id-card.png" alt="" width="200">
                            @endif
                        </div>
                        <div class="col-md-3 d-flex justify-content-center mt-3">
                            @if (Auth::user()->upload_sim)
                                <img src="{{ asset('file/User/' . Auth::user()->upload_sim) }}" width="200"
                                    alt="">
                            @else
                                <img src="/images/id-card.png" alt="" width="200">
                            @endif
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-3">
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <strong>Nama:</strong>
                                            {{ Auth::user()->name }}
                                        </div>
                                        <div class="mb-3">
                                            <strong>Email:</strong>
                                            {{ Auth::user()->email }}
                                        </div>
                                        <div class="mb-3">
                                            <strong>Alamat:</strong>
                                            {{ Auth::user()->alamat }}
                                        </div>
                                        <div class="mb-3">
                                            <strong>Kota:</strong>
                                            {{ Auth::user()->kota }}
                                        </div>
                                        <div class="mb-3">
                                            <strong>No Handphone:</strong>
                                            {{ Auth::user()->no_handphone }}
                                        </div>
                                        <div class="mb-3">
                                            <strong>NIK:</strong>
                                            {{ Auth::user()->nik }}
                                        </div>
                                        <div class="mb-3">
                                            <strong>Pekerjaan:</strong>
                                            {{ Auth::user()->pekerjaan }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="modal-body">
                        <form action="{{ route('Update-User', auth()->user()->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" value="{{ Auth::user()->name }}"
                                            class="form-control rounded-4" id="floatingInput" name="name"
                                            style="height: 150px;" readonly>
                                        <label for="floatingInput">Username</label>
                                    </div>
                                </div>


                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" value="{{ Auth::user()->email }}"
                                            class="form-control rounded-4" id="floatingInput" name="email"
                                            style="height: 150px;" readonly>
                                        <label for="floatingInput">Email</label>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="number" value="{{ Auth::user()->no_handphone }}"
                                            class="form-control rounded-4" id="floatingInput" name="no_handphone"
                                            style="height: 150px;" readonly>
                                        <label for="floatingInput">No Handphone</label>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="number" value="{{ Auth::user()->nik }}"
                                            class="form-control rounded-4" id="floatingInput" name="nik"
                                            style="height: 150px;" readonly>
                                        <label for="floatingInput">NIK</label>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="form-floating" class="input-group">
                                        <input type="file" name="upload_ktp" class="form-control rounded-4" id="floatingInput" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" >
                                        <label for="floatingInput">Upload KTP <i><span class="text-sm text-danger">*Wajib diisi</span></i></label>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="form-floating" class="input-group">
                                        <input type="file" name="upload_sim" class="form-control rounded-4" id="floatingInput" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" >
                                        <label for="floatingInput">Upload SIM <i><span class="text-sm text-danger">*Wajib diisi</span></i></label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> --}}

            </div>

            <div class="tab-pane fade" id="ubahprofil" role="tabpanel" aria-labelledby="profile-tab">
                @auth
                    <div class="modal-body">
                        <form action="{{ route('Update-User', auth()->user()->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" value="{{ Auth::user()->name }}"
                                            class="form-control rounded-4" id="floatingInputName" name="name"
                                            style="height: 150px;" required>
                                        <label for="floatingInputName">Nama</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" value="{{ Auth::user()->email }}"
                                            class="form-control rounded-4" id="floatingInput" name="email"
                                            style="height: 150px;" required>
                                        <label for="floatingInput">Email</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" value="{{ Auth::user()->alamat }}"
                                            class="form-control rounded-4" id="floatingInput" name="alamat"
                                            style="height: 150px;" required>
                                        <label for="floatingInput">Alamat</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" value="{{ Auth::user()->kota }}"
                                            class="form-control rounded-4" id="floatingInput" name="kota"
                                            style="height: 150px;" required>
                                        <label for="floatingInput">Kota</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="number" value="{{ Auth::user()->no_handphone }}"
                                            class="form-control rounded-4" id="floatingInput" name="no_handphone"
                                            style="height: 150px;" required>
                                        <label for="floatingInput">No Handphone</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="number" value="{{ Auth::user()->nik }}"
                                            class="form-control rounded-4" id="floatingInput" name="nik"
                                            style="height: 150px;" required>
                                        <label for="floatingInput">NIK</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="text" value="{{ Auth::user()->pekerjaan }}"
                                            class="form-control rounded-4" id="floatingInput" name="pekerjaan"
                                            style="height: 150px;" required>
                                        <label for="floatingInput">Pekerjaan</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating" class="input-group">
                                        <input type="file" name="upload_ktp" class="form-control rounded-4"
                                            id="floatingInput" id="inputGroupFile04"
                                            aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                            required accept=".png, .jpg, .jpeg, image/png, image/jpeg">
                                        <label for="floatingInput">Upload KTP <i><span class="text-sm text-danger">*Wajib
                                                    diisi</span></i>
                                        </label>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="form-floating" class="input-group">
                                        <input type="file" name="upload_sim" class="form-control rounded-4"
                                            id="floatingInput" id="inputGroupFile04"
                                            aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                            required accept=".png, .jpg, .jpeg, image/png, image/jpeg">
                                        <label for="floatingInput">Upload SIM <i><span class="text-sm text-danger">*Wajib
                                                    diisi</span></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control rounded-4"
                                            id="password" placeholder="password" required>
                                        <label for="password">Password</label>
                                        <span class="toggle-password" onclick="togglePasswordVisibility()"
                                            style="margin-right: 10px;">
                                            <i id="password-icon" class="fa fa-eye" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                                <label for="floatingInput">Password minimal 6 karakter<i><span class="text-sm text-danger">*Password lama tidak dapat dilihat kembali, masukkan password baru jika anda ingin mengubah profil</span></i>
                        </label>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="submit" onclick="showSweetAlertEdit()"
                                    class="btn btn-primary">Edit</button>
                                <a href="/mobil" type="button" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                @endauth
            </div>

            <div class="tab-pane fade" id="pesanan" role="tabpanel" aria-labelledby="orders-tab">
                <div class="table-responsive" style="max-height: 500px; overflow:auto;">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Tanggal Mulai Sewa</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider text-center">
                            <?php $i = 1; ?>
                            @foreach ($data_sewa as $row)
                                <tr class="text-center">
                                    <th style="padding-top:30px;padding-bottom:30px;">{{ $i++ }}</th>
                                    <td>{{ $row->tanggal_mulai_sewa }}</td>
                                    <td>
                                        <a href="" class="btn btn-primary" data-toggle="modal"
                                            data-target="#edit{{ $row->id }}">Edit Pesanan
                                        </a>
                                        <a href="" class="btn btn-secondary" data-toggle="modal"
                                            data-target="#detail{{ $row->id }}">Detail
                                        </a>
                                    </td>
                                </tr>
                        </tbody>

                        <!-- Modal Start-->
                        <div class="modal fade" id="detail{{ $row->id }}">
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
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <h5 class="fw-bolder"></h5>
                                                                    <div class="rent-price mb-3">
                                                                        <span style="font-size: 1rem"
                                                                            class="text-primary"></span>
                                                                    </div>
                                                                </div>
                                                                <ul class="list-unstyled list-style-group">
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Nama Mobil</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ $row->relasidetail->nama_mobil }}</span>
                                                                    </li>
                                                                    {{-- <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Nama Lengkap</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ Auth::user()->name }}</span>
                                                                    </li>
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>No Handphone</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ Auth::user()->no_handphone }}</span>
                                                                    </li>
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Email</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ Auth::user()->email }}</span>
                                                                    </li>
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Kota/Kabupaten</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ Auth::user()->kota }}</span>
                                                                    </li>
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Detail Alamat</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ Auth::user()->alamat }}</span>
                                                                    </li> --}}
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Jenis Layanan</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ $row->jenis_layanan }}</span>
                                                                    </li>
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Tanggal Mulai Sewa</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ $row->tanggal_mulai_sewa }}</span>
                                                                    </li>
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Tanggal Selesai Sewa</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ $row->tanggal_selesai_sewa }}</span>
                                                                    </li>
                                                                    {{-- <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Foto KTP</span>
                                                                        <span style="font-weight: 600"><img
                                                                                src="{{ asset('file/User/' . Auth::user()->upload_ktp) }}"
                                                                                width="200" alt="">
                                                                        </span>
                                                                    </li>
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Foto SIM</span>
                                                                        <span style="font-weight: 600"><img
                                                                                src="{{ asset('file/User/' . Auth::user()->upload_sim) }}"
                                                                                width="200" alt="">
                                                                        </span>
                                                                    </li> --}}
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Foto Tiket</span>
                                                                        <span style="font-weight: 600"><img
                                                                                src="{{ asset('file/Sewa/' . $row->upload_tiket) }}"
                                                                                width="150" height="100"
                                                                                alt="Tidak ada gambar">
                                                                        </span>
                                                                    </li>
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Rute Perjalanan</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ $row->relasirute->rute }}
                                                                        </span>
                                                                    </li>

                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Pesan Tambahan</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ $row->pesan_tambahan }}</span>
                                                                    </li>
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Status</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ $row->status }}</span>
                                                                    </li>
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Jam Pengambilan Mobil</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ $row->jam_pengambilan }}</span>
                                                                    </li>
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Jam Pengembalian Mobil</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ $row->jam_pengembalian }}</span>
                                                                    </li>
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Denda</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ $row->denda }}</span>
                                                                    </li>
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Harga Sewa Mobil Perhari</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ $row->relasidetail->harga }}</span>
                                                                    </li>
                                                                    <li
                                                                        class="border-bottom p-2 d-flex justify-content-between">
                                                                        <span>Total Pembayaran</span>
                                                                        <span
                                                                            style="font-weight: 600">{{ rupiah($row->total) }}</span>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Tutup</button>
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
                        @endforeach

                        @foreach ($data_sewa as $row)
                         <!-- Start Modal Edit Data-->
                         <div class="modal fade" id="edit{{ $row->id }}"
                            tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header no-bd">
                                        <h5 class="modal-title">
                                        </h5>
                                        <button type="button" class="close"
                                            data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form
                                            action="/user/edit/{{ $row->id }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="p-2">
                                                    <div class="form-floating">
                                                        <input type="text" name="detail_id" value="{{$row->detail_id}}" class="form-control rounded-4" id="floatingInput">
                                                        <label>{{$row->relasidetail->nama_mobil}}</label>
                                                    </div>
                                                </div>

                                                <div class="p-2">
                                                    <div class="form-floating">
                                                        <select class="form-select rounded-4" name="jenis_layanan" class="form-control" id="floatingInput" required>
                                                            <option
                                                                value="Sewa Lepas Kunci"
                                                                {{ (old('jenis_layanan') ?? $row->jenis_layanan) == 'Sewa Lepas Kunci' ? 'selected' : '' }}>
                                                                Sewa Lepas Kunci
                                                            </option>

                                                            <option value="Sewa Dengan Driver"
                                                                {{ (old('jenis_layanan') ?? $row->jenis_layanan) == 'Sewa Dengan Driver' ? 'selected' : '' }}>
                                                                Sewa Dengan Driver
                                                            </option>
                                                        </select>
                                                        <label for="floatingInput">Jenis Layanan <i><span class="text-sm text-danger">*Wajib diisi</span></i></label>
                                                    </div>
                                                </div>

                                                <div class="p-2">
                                                    <div class="form-floating">
                                                        <input type="date" name="tanggal_mulai_sewa" value="{{ $row->tanggal_mulai_sewa }}" class="form-control rounded-4" id="tanggal_mulai_sewa">
                                                        <label>Tanggal Mulai Sewa</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="p-2">
                                                    <div class="form-floating">
                                                        <input type="date" name="tanggal_selesai_sewa" value="{{ $row->tanggal_selesai_sewa }}" class="form-control rounded-4" id="tanggal_selesai_sewa">
                                                        <label>Tanggal Selesai Sewa</label>
                                                    </div>
                                                </div>

                                                <div class="p-2">
                                                    <div class="form-floating">
                                                        <input type="text" name="pesan_tambahan" value="{{ $row->pesan_tambahan }}" class="form-control rounded-4" id="pesan_tambahan" required>
                                                        <label for="pesan_tambahan">Pesan Tambahan<i><span class="text-sm text-danger">*Wajib diisi</span></i></label>
                                                    </div>
                                                </div>
                                                
                                                <div class="p-2">
                                                    <div class="d-flex mb-3">
                                                        <div class="col-md-4 p-0">
                                                            <p>File sebelumnya :</p>
                                                        </div>
                                                        <div class="col-md-8 p-0">
                                                            <a
                                                                href="{{ asset('file/Sewa/' . $row->upload_tiket) }}">
                                                                <img src="{{ asset('file/Sewa/' . $row->upload_tiket) }}"
                                                                    width="150"height="100"
                                                                    alt="Tidak ada gambar">
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <input type="file"
                                                            name="upload_tiket"
                                                            value="{{ $row->upload_tiket }}"
                                                            class="form-control rounded-4"
                                                            id="inputGroupFile01">
                                                        <label
                                                            class="input-group-text bg-light"
                                                            for="inputGroupFile01">Upload
                                                            Tiket
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="p-2">
                                                    <div class="form-floating">
                                                        <select class="form-select rounded-4" name="rute_id" id="rute" required>
                                                            @foreach ($rute as $row)
                                                                <option value="{{ $row->id }}" {{ (old('rute_id') ?? Auth::user()->rute_id) == $row->id ? 'selected' : '' }}>
                                                                    {{ $row->rute }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <label for="rute">Rute Perjalanan <i><span class="text-sm text-danger">*Wajib diisi</span></i></label>
                                                    </div>
                                                </div>
                                                
                                                <div class="modal-footer mx-auto">
                                                    <button type="submit"
                                                        onclick="showSweetAlertEdit()"
                                                        class="btn btn-primary">Edit</button>
                                                    <button type="button"
                                                        class="btn btn-secondary"
                                                        data-dismiss="modal">Batal</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Edit Data-->
                    @endforeach
                    </table>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="testimoni" role="tabpanel" aria-labelledby="orders-tab">
            @auth
                <div class="modal-body">
                    <form action="/testi" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="p-2">
                            <div class="form-floating">
                                <textarea type="text" value="" class="form-control rounded-4" id="floatingInput"
                                    name="pesan" required></textarea>
                                <label for="floatingInput">Pesan <i><span class="text-sm text-danger">*Wajib
                                            diisi</span></i>
                                </label>
                            </div>
                        </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" onclick="showSweetAlertEdit()" class="btn btn-primary">Kirim</button>
                    <a href="/mobil" type="button" class="btn btn-secondary">Kembali</a>
                </div>
                </form>
            </div>
        @endauth
    </div>

    </div>

    @include('component.footer')

    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script src="/js/jquery.timepicker.min.js"></script>
    <script src="/js/scrollax.min.js"></script>
    <!-- <script src=""></script>
    <script src="/js/google-map.js"></script> -->
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <!-- Toastr -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.23/dist/sweetalert2.all.min.js"></script>

    {{-- Sweet Alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
    // Ambil elemen input tanggal
    var tanggalMulaiSewa = document.getElementById('tanggal_mulai_sewa');
    var tanggalSelesaiSewa = document.getElementById('tanggal_selesai_sewa');

    // Atur tanggal minimal untuk tanggal mulai sewa sebagai tanggal hari ini
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; // January is 0!
    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd;
    }
    if (mm < 10) {
        mm = '0' + mm;
    }
    today = yyyy + '-' + mm + '-' + dd;
    tanggalMulaiSewa.setAttribute('min', today);

    // Tambahkan event listener untuk memeriksa tanggal selesai sewa
    tanggalSelesaiSewa.addEventListener('change', function() {
        if (tanggalSelesaiSewa.value < tanggalMulaiSewa.value) {
            alert('Tanggal selesai sewa tidak bisa sebelum tanggal mulai sewa');
            tanggalSelesaiSewa.value = tanggalMulaiSewa.value;
        }
    });

    // Menonaktifkan tanggal sebelum tanggal mulai sewa
    tanggalSelesaiSewa.addEventListener('focus', function() {
        tanggalSelesaiSewa.setAttribute('min', tanggalMulaiSewa.value);
    });
</script>

    {{-- Icon Mata Pada Password --}}
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var passwordIcon = document.getElementById("password-icon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordIcon.classList.remove("fa-eye");
                passwordIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                passwordIcon.classList.remove("fa-eye-slash");
                passwordIcon.classList.add("fa-eye");
            }
        }
    </script>

    {{-- toastr sweetalert validasi --}}
    @if ($errors->any())
        <script>
            Swal.fire({
                title: 'Gagal!',
                text: 'Inputan tidak boleh simbol seperti "- _ ! @ # $ % ^ & * ( )" dan Jika Anda Upload Gambar harus berupa format gambar',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Sukses!',
                text: 'Data Berhasil Tersimpan!',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    {{-- sweetalert data berhasil tersimpan --}}
    {{-- <script>
        @if (Session::has('success'))
            swal({
                title: 'Sukses',
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
    </script> --}}


    <!-- sweetalert logout-->
    @include('component.sweetalert')
    <!-- End sweetalert -->

</body>

</html>
