<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MT RentCar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/css/jquery.timepicker.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>

  {{-- style css tambahan --}}
  <style>
    ul.b {
      list-style-type: square;
    }
  </style>

  <body>
    <div class="footer-mt">
      <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">MT<span>RENTCAR</span></a></h2>
              <p>Nikmati perjalanan yang luar biasa dengan kenyamanan dan keandalan bersama kami! Sewa mobil berkualitas tinggi dengan harga bersaing untuk mendapatkan pengalaman perjalanan yang tak terlupakan.</p>
              <a href="/mobil" class="py-2 d-block">Pesan Mobil Anda Sekarang</a>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                {{-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li> --}}
                <li class="ftco-animate"><a href="https://instagram.com/abi_nublii?igshid=NTc4MTIwNjQ2YQ=="><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Informasi</h2>
              <ul class="list-unstyled">
                <li><a href="/tentang" class="py-2 d-block">Tentang Kami</a></li>
                <li><a href="/layanan" class="py-2 d-block">Layanan</a></li>
                <li><a href="" class="py-2 d-block" data-toggle="modal" data-target="#Modalsk">Syarat dan Ketentuan</a>
                  <div class="modal fade" id="Modalsk">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <!-- Header Modal Syarat dan Ketentuan -->
                        <div class="modal-header">
                          <h5 class="modal-title">Syarat dan Ketentuan Sewa Lepas Kunci</h5>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                        <!-- Body Modal Syarat dan Ketentuan -->
                        <div class="modal-body">
                          <ul class="b">
                            <li>Penyewa Harus Melakukan Login Terlebih Dahulu untuk Menyewa Mobil. Anda bisa Login <a href="/login" style="color: #01d28e;  text-decoration: underline;">disini.</a></li>
                            <li>Mengirimkan Foto E-KTP Asli.</li>
                            <li>Mengirimkan Foto SIM Pengemudi (Minimal SIM A).</li>
                            <li>Menitipkan Jaminan Sepeda Motor dan STNK.</li>
                            <li>Pembayaran LUNAS Pada Saat Serah Terima Kendaraan.</li>
                            <li>Penyewa dari Luar Kota Wajib Melampirkan Bukti Tiket Sesuai Persetujuan Pihak Rental.</li> 
                          </ul>
                        </div>
        
                        <!-- Footer Modal Syarat dan Ketentuan -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li><a href="" class="py-2 d-block" data-toggle="modal" data-target="#Modalkhp">Ketentuan Hari Penyewaan</a>
                  <div class="modal fade" id="Modalkhp">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <!-- Header Modal Ketentuan Hari Penyewaan -->
                        <div class="modal-header">
                          <h5 class="modal-title">Ketentuan Hari Penyewaan Sesuai Rute</h5>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                        <!-- Body Modal Ketentuan Hari Penyewaan -->
                        <div class="modal-body">
                          <ul class="b">
                            <li>1 Hari : Karangan, Singkawang, Tayan, Sosok, Ngabang</li>
                            <li>2 Hari : Bengkayang, Sambas, Balai Bekuak, Serimbu, Darit, Meliau, Sanggau, Entikong</li>
                            <li>3 Hari : Seluas, Aruk, Sandi, Sekadau, Sintang, Melawi</li>
                            <li>4 Hari : Semitau, Nanga Tayap, Putussibau</li>
                            <li>5 Hari : Ketapang, Sukadana, Air Upas, Badau</li>
                            <li>7 Hari : Khusus Di Luar Kalimantan Barat ( +Rp. 50.000/hari)</li>
                            *Setiap Perubahan Rute dan Waktu Tanpa Koordinasi Akan Dianggap Pelanggaran dan Dikenakan Denda/Biaya Tambahan.
                          </ul>
                        </div>
        
                        <!-- Footer Modal Ketentuan Hari Penyewaan -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li><a href="" class="py-2 d-block" data-toggle="modal" data-target="#Modallp">Larangan Penyewa</a>
                  <div class="modal fade" id="Modallp">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <!-- Header Modal Larangan Penyewa -->
                        <div class="modal-header">
                          <h5 class="modal-title">Penyewa Dilarang</h5>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                        <!-- Body Modal Larangan Penyewa -->
                        <div class="modal-body">
                          <ul class="b">
                            <li>Menjual dan Menggadaikan</li>
                            <li>Menyewakan Kembali ke Pihak Lain</li>
                            <li>Mengedarkan atau Membawa Narkotika dan Barang Non-Halal</li>
                          </ul>
                        </div>
        
                        <!-- Footer Modal Larangan Penyewa -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li> 

                <li><a href="" class="py-2 d-block" data-toggle="modal" data-target="#Modalkp">Ketentuan Penyewaan</a>
                  <div class="modal fade" id="Modalkp">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <!-- Header Modal Ketentuan Penyewaan -->
                        <div class="modal-header">
                          <h5 class="modal-title">Ketentuan Penyewaan</h5>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                        <!-- Body Modal Ketentuan Penyewaan -->
                        <div class="modal-body">
                          <ul class="b">
                            <li>Mengambil dan Mengembalikan Sesuai Waktu yang Disepakati</li>
                            <li>Pengembalian Kendaraan diluar Waktu yang Disepakati Dikenakan Denda Rp. 25.000/jam</li>
                          </ul>
                        </div>
        
                        <!-- Footer Modal Ketentuan Penyewaan -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>                
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Dukungan Pelanggan</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block" data-toggle="modal" data-target="#Modalfaq">FAQ</a>
                <div class="modal fade" id="Modalfaq">
                <div class="modal-dialog">
                <div class="modal-content">
      
                <!-- Header Modal FAQ -->
                <div class="modal-header">
                  <h5 class="modal-title">Frequently Ask Question</h5>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
      
                <!-- Body Modal FAQ -->
                <div class="modal-body">
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Bagaimana cara sewa mobil rental di MT RentCar Pontianak?
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> <ul class="b">
                          <li>Langkah pertama yang harus anda lakukan adalah membuat akun yang ada pada pojok kanan atas atau anda bisa buat akun <a href="/register" style="color: #01d28e;  text-decoration: underline;">disini.</a></li>
                          <li>Jika anda sudah mempunyai akun, anda dapat menyewa mobil pilihan anda dengan melakukan login terlebih dahulu atau anda bisa masuk ke akun anda <a href="/login" style="color: #01d28e;  text-decoration: underline;">disini.</a></li>
                          <li>Lalu buka halaman <a href="/mobil" style="color: #01d28e;  text-decoration: underline;">mobil</a> untuk melihat etalase mobil yang disediakan oleh MTRentCar. Jika anda sudah menentukan mobil mana yang ingin disewa, klik button sewa yang ada untuk mengisi formulir sewa mobil yang telah kami disediakan.</li>
                          <li>Selamat menikmati perjalanan indah anda dengan menggunakan jasa MTRentCar dan jangan lupa berikan kami testimoni dengan kesan terbaikmu.</li>
                        </ul>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Jenis mobil rental apa saja yang tersedia?
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Saat ini MT RentCar memiliki beberapa unit mobil dari berbagai merk dengan harga
                          sewa yang variatif tanpa mengurangi mutu layanan. Anda bisa melihatnya <a href="/mobil" style="color: #01d28e;  text-decoration: underline;">disini.</a></div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Mahal gak sih rental mobil di MT RentCar Pontianak?
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Biaya sewa mobil di MT RentCar terjangkau dan sangat kompetitif, mulai dari Rp 300,000 per hari.</div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor" aria-expanded="false" aria-controls="flush-collapseFor">
                          Apakah bisa sewa mobil bulanan di MT RentCar Pontianak?
                        </button>
                      </h2>
                      <div id="flush-collapseFor" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Ya. Sangat bisa. Silakan menghubungi admin kami di nomor <a href="https://wa.me/6289529358509/?text=Halo MT RentCar saya mau sewa mobil" style="color: #01d28e;  text-decoration: underline;">+62 895-2935-8509</a>, untuk mendapatkan penawaran spesial.</div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          Apa yang harus dilakukan jika terjadi kerusakan pada mobil sewaan?
                        </button>
                      </h2>
                      <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Jika Anda mengalami kerusakan pada mobil sewaan, segera hubungi perusahaan MT RentCar dan beri tahu MT RentCar tentang situasi tersebut. Jangan lupa untuk menjaga semua dokumen dan bukti terkait kerusakan.</div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                          Apakah ada batasan jarak yang ditetapkan untuk mobil yang disewa?
                        </button>
                      </h2>
                      <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">MT RentCar memberlakukan batasan jarak tertentu, terutama jika Anda menyewa mobil untuk perjalanan antarnegara atau mengunjungi pulau terpencil. Pastikan untuk memeriksa batasan jarak yang diberlakukan oleh perusahaan MT RentCar sebelum melakukan perjalanan jauh.</div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <!-- Footer Modal FAQ -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>

              <li><a href="#" class="py-2 d-block" data-toggle="modal" data-target="#Modalkiat">Kiat Pemesanan</a>
                <div class="modal fade" id="Modalkiat">
                  <div class="modal-dialog">
                    <div class="modal-content">
      
                      <!-- Header Modal Kiat Pemesanan -->
                      <div class="modal-header">
                        <h5 class="modal-title">Kiat Pemesanan</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
      
                      <!-- Body Modal Kiat Pemesanan -->
                      <div class="modal-body">
                        <ul class="b">
                          Berikut adalah beberapa tips pemesanan untuk rental mobil:

                          <li>1. Rencanakan dengan baik: Tentukan tanggal dan waktu yang diinginkan untuk penyewaan mobil. Jika Anda memiliki jadwal yang fleksibel, cobalah untuk menghindari periode sibuk seperti liburan atau akhir pekan, karena tarif sewa mungkin lebih tinggi pada saat-saat tersebut.</li>

                          <li>2. Simpan informasi kontak penting: Simpan nomor telepon dan alamat perusahaan rental mobil, serta nomor-nomor darurat setempat. Jika Anda mengalami masalah atau keadaan darurat selama penyewaan, Anda akan dapat menghubungi mereka dengan mudah.</li>

                          <li>3. Pesan lebih awal: Lakukan pemesanan secepat mungkin, terutama jika Anda merencanakan perjalanan pada periode sibuk. Dengan memesan lebih awal, Anda memiliki lebih banyak pilihan mobil dan kemungkinan mendapatkan harga yang lebih baik.</li>

                          <li>4. Periksa syarat dan ketentuan: Baca dan pahami syarat dan ketentuan penyewaan dengan teliti. Perhatikan batasan usia, persyaratan SIM, kebijakan bahan bakar, kebijakan asuransi, dan biaya tambahan lainnya. Pastikan Anda mengerti dan setuju dengan semua persyaratan sebelum melakukan pemesanan.</li>

                          <li>5. Pilih jenis mobil yang sesuai: Pertimbangkan kebutuhan perjalanan Anda dan pilihlah jenis mobil yang sesuai. Jika Anda bepergian dengan keluarga besar, mungkin mobil berukuran sedang atau MPV lebih cocok. Jika Anda bepergian sendirian atau dengan sedikit bagasi, mobil kecil atau ekonomi bisa menjadi pilihan yang lebih hemat.</li>

                          <li>6. Bandingkan harga: Selalu bandingkan harga antara beberapa perusahaan rental sebelum membuat keputusan. Perhatikan juga kebijakan pembatalan dan biaya tambahan yang mungkin tersembunyi. Pilihlah yang memberikan harga terbaik dengan layanan yang sesuai.</li>

                          <li>7. Periksa kondisi mobil sebelum penyewaan: Saat Anda mengambil mobil, periksa kondisinya dengan teliti. Perhatikan kerusakan atau goresan apa pun dan pastikan catatan tersebut dicatat dalam kontrak penyewaan. Juga, pastikan semua fitur dan aksesori mobil berfungsi dengan baik.</li>

                          <li>8. Pelajari aturan mengemudi dan hukum lalu lintas setempat: Jika Anda menyewa mobil di negara atau daerah yang berbeda, pastikan Anda mempelajari aturan mengemudi dan hukum lalu lintas setempat. Ketahui tanda-tanda jalan, batasan kecepatan, dan peraturan lainnya agar Anda dapat mengemudi dengan aman dan mematuhi hukum setempat.</li>

                          Dengan mengikuti tips-tips ini, Anda dapat melakukan pemesanan mobil sewaan dengan lancar dan memastikan perjalanan Anda berjalan dengan baik.
                        </ul>
                      </div>
      
                      <!-- Footer Modal Kiat Pemesanan -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li><a href="kontak" class="py-2 d-block">Kontak Kami</a></li>
              {{-- <li><a href="/blog" class="py-2 d-block">Blog Kami</a></li> --}}
            </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Hubungi Kami</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><a href="https://goo.gl/maps/Wv3LDJWEWR65VzKv8"><span class="icon icon-map-marker"></span><span class="text">Jl. MT Haryono, Kel. Akcaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat
                  </span></a></li>
	                <li><a href="https://wa.me/6289529358509/?text=Halo MT RentCar saya mau sewa mobil"><span class="icon icon-phone"></span><span class="text">+62 895-2935-8509</span></a></li>
	                <li><a href="https://mail.google.com/mail/u/0/#inbox"><span class="icon icon-envelope"></span><span class="text">abinubli788@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> - MTRENTCAR. All rights reserved</p>
          </div>
        </div>
      </div>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>