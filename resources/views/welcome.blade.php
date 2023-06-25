<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Profile</title>
    <!-- boostrap -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('frontend/assets/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css') }}">
  </head>
  <body>
        <section id="topbar">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <ul class="top-contact">
                  <li><a href="#"><i class="fas fa-phone"></i>08921212121</a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i>Fakultas Sains&Terapan.co.id</a></li>
                </ul>
             </div>
             <div class="col-md-3">
               <div class="sosmed">
                 <li><a href="" class="fab fa-facebook"></a></li>
                 <li><a href="" class="fab fa-instagram"></a></li>
                 <li><a href="" class="fab fa-twitter"></a></li>
                 <li><a href="" class="fab fa-youtube"></a></li>
               </div>
             </div>
            </div>
          </div>
        </section>

        <header>
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="brand">
                  <img class="img-responsive" src="{{asset('frontend/assets/img/logo1.png') }}" alt=""height="60" width="60">
                  <div class="brand-name">
                    <h1>FASTER</h1>
                    <h3>Fakultas Sains Dan Terapan
                    </h3>
                  </div>
                  
                </div>
              </div>
              <div class="col-md-4 searchbox-wrapper">
                <div class="searchbox">
                  <form action="" method="get">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Cari sesuatu">
                      <div class="input-group-append">
                        <button class="btn btn-success" id="tombol-cari">Cari</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>  
          </div>
        </header>

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-navbar">
          <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#heri-area">Beranda</a>
                </li>

                <li class="nav-item dropdown">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                  <div class="dropdown-menu">
                    <div class="colum ">
                    <div class="card" style="width: 18rem;">
                    <div class="card-header">
                      Selayang Pandang
                    </div>
                    <ul class="list-group list-group-flush">
                      <a  class="dropdown-item" href="">Kata Pengantar</a>
                      <a  class="dropdown-item" href="">Sambutan Dekan</a>
                      <a  class="dropdown-item" href="">Sejarah</a>
                      <a  class ="dropdown-item "href="">Visi & Misi</a>
                    </ul>
                  </div>
                    <div class="card" style="width: 18rem;">
                    <div class="card-header">
                      Pimpinan Fakultas
                    </div>
                    <ul class="list-group list-group-flush">
                      <a  class="dropdown-item" href="">Dekan</a>
                      <a  class="dropdown-item" href="">Wakil Dekan</a>
                      <a  class="dropdown-item" href="">Ketua Program Studi</a>
                      <a  class ="dropdown-item "href="">Kepala SPMI</a>
                      <a  class ="dropdown-item "href="">Kepala lKIPKM</a>
                    </ul>
                  </div>
                  </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akademik</a>
                  <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">perwalian</a>
                    <a href="#" class="dropdown-item">progran studi</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sarana & Prasarana</a>
                  <div class="dropdown-menu">
                    <div class="card" style="width: 18rem;">
                    <div class="card-header">
                      Featured
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">An item</li>
                      <li class="list-group-item">A second item</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                  </div>
                    <div class="card" style="width: 18rem;">
                    <div class="card-header">
                      Featured
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item" >An item</li>
                      <li class="list-group-item">A second item</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                  </div>
                    <a href="#" class="dropdown-item">Sarana Infrastruktur</a>
                    <a href="#" class="dropdown-item">Sarana Pembelajaran</a>
                  </div>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="#">Himpunan Mahasiswa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Prestasi</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#alumni">Alumni</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Berita</a>
                  <div class="dropdown-menu">
                    <a href="#Brita" class="dropdown-item">Berita Sekolah</a>
                    <a href="#" class="dropdown-item">Pengumuman</a>
                    <a href="#" class="dropdown-item">Agenda</a>
                    <a href="#" class="dropdown-item">Kalender Akademik</a>
                  </div>
                </li>
                <li class=" nav-item dropdown">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeri</a>
                  <div class="dropdown-menu">
                    <a href="#gallery" class="dropdown-item">Galeri Foto</a>
                    <a href="#" class="dropdown-item">GAleri Video/Dokumentasi</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Kontak</a>
                </li>
               
              </ul>
            </div>
          </div>
         
        </nav>
        <!-- akhir navbar -->

        <!-- section hero area -->
        <section id="hero-area">
          <div id="slider-hero-nav"></div>
            <div class="owl-carousel" id="slider-hero">
              <div class="slider-item">
                <div class="slider-item-img">
                  <img src="{{asset('frontend/assets/img/banner-siswa.jpg') }}" alt="">
                </div>
                <div class="slider-item-content">
                  <h2>Penerimaan Peserta Didik Baru TA 2020/2021 Telah dibuka!</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, vel. Animi maiores, adipisci ea nemo dicta ad consectetur tenetur quasi?</p>
                  <button class="btn btn-success">DAFTAR PPDB</button>
                </div>
              </div>
              <div class="slider-item">
                <div class="slider-item-img">
                  <img src="{{asset('frontend/assets/img/banner-siswa.jpg') }}" alt="">
                </div>
                <div class="slider-item-content">
                  <h2>Title2</h2>
                  <p> ad consectetur tenetur quasi?</p>
                  <button class="btn btn-success">CTA BUTTON</button>
                </div>
              </div>
            </div>
        </section>
        <!-- akhir section hero area -->\

        <section id="sambutan">
          <div class="container">
            <h2>PROFILE FAKULTAS SAINS TERAPAN</h2>
            <div class="row">
            
              <div class="col-md-6">
               
                <div class="video-wrapper">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/1nEJS_PSmmM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-md-6 pl-4">
                <h3>Kata Pengantar</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium earum eum 
                  eos iusto distinctio qui fuga autem natus praesentium vero?
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quas laborum minus vitae ipsa magni dicta. Obcaecati ipsum quos provident ea, architecto excepturi eius in voluptates aperiam ratione officiis unde?
                </p>
                <a href="" class="btn btn-success">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </section>
           <section id="akreditasi" >
          <div class="container">
            {{-- <div class="section-title">
              <h2>Akreditasi</h2>
            </div> --}}
            <div class="section-body akreditasi-item">
              <div class="row">
                <div class="col-md-4">
                  <div class="section-body-item">
                    <div class="row">
                      <div class="col-md-3">
                        <img src="{{asset('frontend/assets/img/akredit.png') }}" alt=""width="60" height="60">
                      </div>
                      <div class="col-md-9">
                        <h4>Sambutan Dekan</h4>
                      </div>
                      <div class="col-md-12">
                        <h4>Asalamualaikum wr,wb</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="section-body-item">
                    <div class="row">
                      <div class="col-md-3">
                        <img src="{{asset('frontend/assets/img/akredit.png') }}" alt=""width="60" height="60">
                      </div>
                      <div class="col-md-9">
                        <h4>Terakreditasi (B) BAN-PT</h4>
                      </div>
                      <div class="col-md-12">
                        <h4>Sesuai dengan keputusan Akreditasi Institusi Perguruan Tinggi untuk Universitas Suryakancana dengan nomor: 788/SK/BAN-PT/Akred/S/X/2014</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="section-body-item">
                    <div class="row">
                      <div class="col-md-3">
                         <img src="{{asset('frontend/assets/img/flag.png') }}" alt=""width="60" height="60">
                      </div>
                      <div class="col-md-9">
                        <h4>Program Studi </h4>
                      </div>
                      <div class="col-md-12">
                        <h5></h5>
                        <h4>Agribisnis</h4>
                        <h4>Agroteknologi</h4>
                        <h4>Administrasi Bisnis Internasional</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {{-- <section id="prestasi">
          <div class="container">
            <div class="section-title">
              <h2>Prestasi Terbaru</h2>
            </div>
              <div class="section-item">
                <div class="row">
                  <div class="col-md-6 ">
                    <img class="section-item-thumbnail" src="{{asset('frontend/assets/img/juara-olimpiade.jpeg') }}" alt="">
                  </div>
                  <div class="col-md-6 col-item-kanan">
                    <div class="section-item-title">
                      <h3>Medali Perak dalam olimpyade in Information di Pekanbaru</h3>
                  
                      <div class="section-item-meta">
                        <span><i class="far fa-calendar-alt"></i>20 Agustus</span>
                        <span><i class="fas fa-map-marked-alt"></i>Pekanbaru</span>
                      </div>
                    </div>
                      <div class="section-item-body">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A corrupti ab atque totam quis explicabo rem nam iure tenetur quibusdam.</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="section-item">
                <div class="row">
                  <div class="col-md-6">
                    <img class="section-item-thumbnail" src="{{asset('frontend/assets/img/juara-olimpiade.jpeg') }}" alt="">
                  </div>
                  <div class="col-md-6 col-item-kanan">
                    <div class="section-item-title">
                      <h3>Medali Perak dalam olimpyade in Information di Pekanbaru</h3>
                      <div class="section-item-meta">
                        <span><i class="far fa-calendar-alt"></i>20 Agustus</span>
                        <span><i class="fas fa-map-marked-alt"></i>Pekanbaru</span>
                      </div>
                    </div>
                      <div class="section-item-body">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A corrupti ab atque totam quis explicabo rem nam iure tenetur quibusdam.</p>
                      </div>
                  </div>
                </div>
              </div>
            <div class="btn-selengkapnya">
              <a href="#" class="btn btn-more">Lihat Selengkapnya</a>
            </div>
          </div>
        </section> --}}

        {{-- <section id="ekstrakulikuler" >
          <div class="container">
            <div class="section-title">
              <h2>HIMPUNAN</h2>
            </div>
            <div class="section-body ekstrakurikuler-item">
              <div class="row">
                <div class="col-md-4 mb-4">
                  <div class="section-body-item">
                    <div class="row">
                      <div class="col-md-3">
                        icon
                      </div>
                      <div class="col-md-9">
                        <h4>Praja Muda Karana (Pramuka)</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="section-body-item">
                    <div class="row">
                      <div class="col-md-3">
                        icon
                      </div>
                      <div class="col-md-9">
                        <h4>Praja Muda Karana (Pramuka)</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="section-body-item">
                    <div class="row">
                      <div class="col-md-3">
                        icon
                      </div>
                      <div class="col-md-9">
                        <h4>Praja Muda Karana (Pramuka)</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="section-body-item">
                    <div class="row">
                      <div class="col-md-3">
                        icon
                      </div>
                      <div class="col-md-9">
                        <h4>Praja Muda Karana (Pramuka)</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="section-body-item">
                    <div class="row">
                      <div class="col-md-3">
                        icon
                      </div>
                      <div class="col-md-9">
                        <h4>Praja Muda Karana (Pramuka)</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="section-body-item">
                    <div class="row">
                      <div class="col-md-3">
                        icon
                      </div>
                      <div class="col-md-9">
                        <h4>Praja Muda Karana (Pramuka)</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> --}}

        <!-- tenaga pendidik -->
        {{-- <section id="tenaga-pendidik" class="top-section">
          <div class="container">
            <div class="section-title">
              <h2>Tenaga Pendidik</h2>
            </div>
           
            <div class="section-body">
              <div id="slider-tools-1"></div>
              <div class="owl-carousel" id="tenaga-pendidik-slider">
                <div class="section-item-slider">
                 <a href=""><img class="foto-guru" src="{{asset('frontend/assets/img/foto-guru-1.jpg') }}" alt=""></a>
                 <div class="section-item-caption">
                  <a href=""><h5>Nama Guru</h5></a>
                  <h6>Bidang Studi</h6>
                 </div>
                
                </div>
                <div class="section-item-slider">
                  <a href=""><img class="foto-guru" src="{{asset('frontend/assets/img/foto-guru-2.jpg') }}" alt=""></a>
                  <div class="section-item-caption">
                   <a href=""><h5>Nama Guru</h5></a>
                   <h6>Bidang Studi</h6>
                  </div>
                 </div>
  
                 <div class="section-item-slider">
                  <img class="foto-guru" src="{{asset('frontend/assets/img/foto-guru-3.jpg') }}" alt="">
                  <div class="section-item-caption">
                   <h5>Nama Guru</h5>
                   <h6>Bidang Studi</h6>
                  </div>
                 
                 </div>
              </div>
            </div>
            <div class="btn-selengkapnya mt-4">
              <a href="" class="btn btn-more">Guru Lainnya</a>
            
            </div>

          </div>
        </section> --}}
        <!-- akhir tenaga pendidik -->

        {{-- <section id="alumni" class="top-section">
          <div class="container">
            <div class="section-title">
              <h2>Profil Alumni</h2>
            </div>
            <div class="section-body">
              <div id="slider-tools-2"></div>
              <div class="owl-carousel" id="alumni-slider">
                <div class="section-item-slider">
                  <div class="row">
                    <div class="col-md-5">
                      <img src="{{asset('frontend/assets/img/bu-susi-p.jpg') }}" class="foto-alumni" alt="">
                    </div>
                    <div class="col-md-7">
                      <div class="section-item-content">
                        <h3>Nama Alumni</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor dolores quasi fugiat odio, quas reprehenderit eum cum, sequi dolorem cupiditate non neque ipsam veritatis eligendi </p>
                        <a  href="" class="more">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="section-item-slider">
                  <div class="row">
                    <div class="col-md-5">
                      <img src="{{asset('frontend/assets/img/prof-dwikorita.jpg') }}" class="foto-alumni" alt="">
                    </div>
                    <div class="col-md-7">
                      <div class="section-item-content">
                        <h3>Nama Alumni</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor dolores quasi fugiat odio, quas reprehenderit eum cum, sequi dolorem cupiditate non neque ipsam veritatis eligendi </p>
                        <a  href="" class="more">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                
              </div>
            
            </div>
          </div>
        </section> --}}

        <!-- galery -->
       <section id="gallery">
         <div class="container">
           <div class="section-title">
             <h2>Gallery / Dokumentasi</h2>
           </div>

           <div class="section-body">
             <div id="slider-tools-3"></div>
             <div class="owl-carousel" id="gallery-slider">
                <div class="section-item-slider">
                  <img src="{{asset('frontend/assets/img/galeri-1.jpg') }}" class="gallery" alt="">
                  <div class="section-item-caption">
                    <h5>Nama Dokumentasi</h5>
                    <h6>Nama Tempat</h6>
                  </div>
                </div>
                <div class="section-item-slider">
                  <img src="{{asset('frontend/assets/img/galeri-2.jpeg') }}" class="gallery" alt="">
                  <div class="section-item-caption">
                    <h5>Nama Dokumentasi</h5>
                    <h6>Nama Tempat</h6>
                  </div>
                </div>
             </div>
           </div>

           <div class="btn-selengkapnya mt-4">
             <a href="#" class="btn btn-more">Lihat Gallery lainnya</a>
           </div>
         </div>
       </section>
        <!-- akhir galery -->

        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="footer-col">
                  <div class="brand">
                    <img src="{{asset('frontend/assets/img/logo1.png') }}" alt="">
                    <h1>Fakultas Sains Terapan</h1>
                  </div>
                    <p class="tentang">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat illo nesciunt quos officiis asperiores aliquid pariatur architecto voluptates. Quidem eaque ipsa pariatur officiis reiciendis quam alias repellendus? Possimus, cumque vitae.</p>
                    <ul class="sosmed">
                      <li><a href=""><i class="fab fa-facebook"></i></a></li>
                      <li><a href=""><i class="fab fa-instagram"></i></a></li>
                      <li><a href=""><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
              </div>

              <div class="col-md-4">
                <div class="footer-col">
                  <h2>Kontak</h2>
                  <p class="alamat">Jl. Muhajirin</p>
                  <ul class="kontak">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>Telp/Fax : 0892323121</li>
                    <li><i class="fas fa-envelope"></i>Email : humas@teamverrul.com</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="footer-col">
                  <h2>Navigasi</h2>
                  <ul class="footer-nav">
                    <li><a href="">Profil</a></li>
                    <li><a href="">Visi dan Misi</a></li>
                    <li><a href="">Struktur Organisasi</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>



        <script src="{{asset('frontend/assets/js/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{asset('frontend/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{asset('frontend/assets/js/main.js') }}"></script>
  </body>
</html>
