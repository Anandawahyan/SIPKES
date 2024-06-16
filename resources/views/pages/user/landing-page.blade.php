<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SIPKES - Landing Page</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/Landing.css') }}" />
  </head>

  <body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            width="30" height="30" 
            class="d-inline-block align-top"
            src="{{ asset('img/sipkes/logosipkes.png') }}"
            alt=""
          />
          SIPKES
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="#hero">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Program</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Poster</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">Artikel</a>
            </li>
          </ul>
          <a href="#" class="btn btn-brand ms-lg-3">Masuk</a>
          <a href="#" class="btn btn-brand ms-lg-3">Daftar</a>
        </div>
      </div>
    </nav>

    <!-- HERO -->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1
              data-aos="fade-left"
              class="text-uppercase text-white fw-semibold display-1"
            >
              Situs Profil Kesehatan Desa
            </h1>
            <h5 class="text-white mt-3 mb-4" data-aos="fade-right">
              INTEGRASI TEKNOLOGI DAN KESEHATAN: PENYULUHAN TERAPI OBAT DESA
              PASURUHAN DIDUKUNG WEBSITE PENGELOLAAN DATA MENUJU PERKEMBANGAN
              BERKELANJUTAN
            </h5>
            <div data-aos="fade-up" data-aos-delay="50">
              <a href="#services" class="btn btn-brand me-2">Layanan</a>
              <a href="#blog" class="btn btn-light ms-2">Artikel</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div
            class="col-12 text-center"
            data-aos="fade-down"
            data-aos-delay="50"
          >
            <div class="section-title">
              <h1 class="display-4 fw-semibold">Program</h1>
              <div class="line"></div>
            </div>
          </div>
        </div>
        <div class="row justify-content-between align-items-center mb-3">
          <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
            <img src="{{ asset('img/sipkes/sosialisasi.png') }}" alt="" />
          </div>
          <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
            <h3>Penyuluhan Kesehatan dan Pemberdayaan PKK</h3>
            <p class="mt-3 mb-4">
              Salah satu upaya penting untuk meningkatkan derajat kesehatan
              masyarakat. Dengan meningkatkan pengetahuan, sikap, dan praktik
              masyarakat tentang kesehatan, diharapkan dapat mewujudkan keluarga
              sehat dan sejahtera.
            </p>
            <a href="#blog" class="btn btn-brand me-2">Selengkapnya</a>

        </div>
      </div>
      <div class="row justify-content-between align-items-center mt-5">
        
        <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
          <h3>Cek Kesehatan Gratis</h3>
          <p class="mt-3 mb-4">
            Cek kesehatan gratis 3 bulan sekali merupakan program yang bertujuan untuk meningkatkan kesadaran masyarakat tentang pentingnya menjaga kesehatan.
          </p>
          <a href="#blog" class="btn btn-brand me-2">Selengkapnya</a>

      </div>
      <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
        <img src="{{ asset('img/sipkes/cekup.png') }}" alt="" />
      </div>
    </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section-padding border-top">
      <div class="container">
        <div class="row">
          <div
            class="col-12 text-center"
            data-aos="fade-down"
            data-aos-delay="150"
          >
            <div class="section-title">
              <h1 class="display-4 fw-semibold">Daftar Layanan</h1>
              <div class="line"></div>
            </div>
          </div>
        </div>
        <div class="row g-4 text-center">
          <div
            class="col-lg-4 col-sm-6"
            data-aos="fade-down"
            data-aos-delay="150"
          >
            <div class="service theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i class="ri-user-2-fill"></i>
              </div>
              <h5 class="mt-4 mb-3">Profil Kesehatan</h5>
              <p>
                Data hasil pemeriksaan kesehatan warga lanjut usia Desa
                Pasuruhan
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 col-sm-6"
            data-aos="fade-down"
            data-aos-delay="250"
          >
            <div class="service theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i class="ri-pie-chart-2-fill"></i>
              </div>
              <h5 class="mt-4 mb-3">Informasi Kesehatan</h5>
              <p>
                Informasi terkait kesehatan berupa infografis dan artikel
                kesehatan.
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 col-sm-6"
            data-aos="fade-down"
            data-aos-delay="350"
          >
            <div class="service theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i class="ri-mail-send-fill"></i>
              </div>
              <h5 class="mt-4 mb-3">Manajemen Pasien</h5>
              <p>Media pengelolaan data hasil pemeriksaan kesehatan warga</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- COUNTER -->
    <section id="hero" class="section-padding">
      <div class="container text-center">
        <div class="row g-4">
          <div
            class="col-lg-3 col-sm-6"
            data-aos="fade-down"
            data-aos-delay="150"
          >
            <h1 class="text-white display-4">100+</h1>
            <h6 class="text-uppercase mb-0 text-white mt-3">Total Pasien</h6>
          </div>
          <div
            class="col-lg-3 col-sm-6"
            data-aos="fade-down"
            data-aos-delay="250"
          >
            <h1 class="text-white display-4">30+</h1>
            <h6 class="text-uppercase mb-0 text-white mt-3">Relawan</h6>
          </div>
          <div
            class="col-lg-3 col-sm-6"
            data-aos="fade-down"
            data-aos-delay="350"
          >
            <h1 class="text-white display-4">5</h1>
            <h6 class="text-uppercase mb-0 text-white mt-3">Desa</h6>
          </div>
          <div
            class="col-lg-3 col-sm-6"
            data-aos="fade-down"
            data-aos-delay="450"
          >
            <h1 class="text-white display-4">15+</h1> 
            <h6 class="text-uppercase mb-0 text-white mt-3">Anggota</h6>
          </div>
        </div>
      </div>
    </section>

    <!-- PORTFOLIO -->
    <section id="portfolio" class="section-padding">
      <div class="container">
        <div class="row">
          <div
            class="col-12 text-center"
            data-aos="fade-down"
            data-aos-delay="150"
          >
            <div class="section-title">
              <h1 class="display-4 fw-semibold">Poster</h1>
              <div class="line"></div>
              <p>Rangkuman informasi dan infografis kesehatan</p>
            </div>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
            <div class="portfolio-item image-zoom">
              <div class="image-zoom-wrapper">
                <img src="{{ asset('img/sipkes/poster1.jpg') }}" alt="" />
              </div>
              <a
                href="{{ asset('img/sipkes/poster1.jpg') }}"
                data-fancybox="gallery"
                class="iconbox"
                ><i class="ri-search-2-line"></i
              ></a>
            </div>
            <div class="portfolio-item image-zoom mt-4">
              <div class="image-zoom-wrapper">
                <img src="{{ asset('img/sipkes/poster2.jpg') }}" alt="" />
              </div>
              <a
                href="{{ asset('img/sipkes/poster2.jpg') }}"
                data-fancybox="gallery"
                class="iconbox"
                ><i class="ri-search-2-line"></i
              ></a>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
            <div class="portfolio-item image-zoom">
              <div class="image-zoom-wrapper">
                <img src="{{ asset('img/sipkes/poster1.jpg') }}" alt="" />
              </div>
              <a
                href="{{ asset('img/sipkes/poster1.jpg') }}"
                data-fancybox="gallery"
                class="iconbox"
                ><i class="ri-search-2-line"></i
              ></a>
            </div>
            <div class="portfolio-item image-zoom mt-4">
              <div class="image-zoom-wrapper">
                <img src="{{ asset('img/sipkes/poster2.jpg') }}" alt="" />
              </div>
              <a
                href="{{ asset('img/sipkes/poster2.jpg') }}"
                data-fancybox="gallery"
                class="iconbox"
                ><i class="ri-search-2-line"></i
              ></a>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
            <div class="portfolio-item image-zoom">
              <div class="image-zoom-wrapper">
                <img src="{{ asset('img/sipkes/poster1.jpg') }}" alt="" />
              </div>
              <a
                href="{{ asset('img/sipkes/poster1.jpg') }}"
                data-fancybox="gallery"
                class="iconbox"
                ><i class="ri-search-2-line"></i
              ></a>
            </div>
            <div class="portfolio-item image-zoom mt-4">
              <div class="image-zoom-wrapper">
                <img src="{{ asset('img/sipkes/poster2.jpg') }}" alt="" />
              </div>
              <a
                href="{{ asset('img/sipkes/poster2.jpg') }}"
                data-fancybox="gallery"
                class="iconbox"
                ><i class="ri-search-2-line"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
      <!-- TEAM -->
    <section id="team" class="section-padding">
      <div class="container">
          <div class="row">
              <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                  <div class="section-title">
                      <h1 class="display-4 fw-semibold">Anggota Tim</h1>
                      <div class="line"></div>

                  </div>
              </div>
          </div>
          <div class="row g-4 text-center ">
              <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                  <div class="team-member image-zoom">
                      <div class="image-zoom-wrapper">
                          <img src="{{ asset('img/sipkes/poster1.jpg') }}" alt="">
                      </div>
                      <div class="team-member-content">
                          <h4 class="text-white">Jon Doe</h4>
                          <p class="mb-0 text-white">Webflow Artist</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                  <div class="team-member image-zoom">
                      <div class="image-zoom-wrapper">
                          <img src="{{ asset('img/sipkes/poster1.jpg') }}" alt="">
                      </div>
                      <div class="team-member-content">
                          <h4 class="text-white">Jon Doe</h4>
                          <p class="mb-0 text-white">Webflow Artist</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                  <div class="team-member image-zoom">
                      <div class="image-zoom-wrapper">
                          <img src="{{ asset('img/sipkes/poster1.jpg') }}" alt="">
                      </div>
                      <div class="team-member-content">
                          <h4 class="text-white">Jon Doe</h4>
                          <p class="mb-0 text-white">Webflow Artist</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>


    <!-- CONTACT -->
    <section class="section-padding bg-light" id="contact">
      <div class="container">
        <div class="row">
          <div
            class="col-12 text-center"
            data-aos="fade-down"
            data-aos-delay="150"
          >
            <div class="section-title">
              <h1 class="display-4 fw-semibold">Hubungi tim kami</h1>
              <div class="line bg-white"></div>
              <p class="">
                Hubungi kami untuk mempelajari lebih lanjut tentang bagaimana kami dapat membantu masyarakat menjalani pola hidup yang sehat.
              </p>
            </div>
          </div>
        </div>
        <div
          class="row justify-content-center"
          data-aos="fade-down"
          data-aos-delay="250"
        >
          <div class="col-lg-8">
            <form action="#" class="row g-3 p-lg-5 p-4 bg-white theme-shadow">
              <div class="form-group col-lg-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter first name"
                />
              </div>
              <div class="form-group col-lg-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter last name"
                />
              </div>
              <div class="form-group col-lg-12">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Enter Email address"
                />
              </div>
              <div class="form-group col-lg-12">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter subject"
                />
              </div>
              <div class="form-group col-lg-12">
                <textarea
                  name="message"
                  rows="5"
                  class="form-control"
                  placeholder="Enter Message"
                ></textarea>
              </div>
              <div class="form-group col-lg-12 d-grid">
                <button class="btn btn-brand">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- BLOG -->
    <section id="blog" class="section-padding">
      <div class="container">
        <div class="row">
          <div
            class="col-12 text-center"
            data-aos="fade-down"
            data-aos-delay="150"
          >
            <div class="section-title">
              <h1 class="display-4 fw-semibold">Artikel</h1>
              <div class="line"></div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
            <div class="team-member image-zoom">
              <div class="image-zoom-wrapper">
                <img src="{{ asset('img/sipkes/artikel-1.jpg') }}" alt="" />
              </div>
              <h5 class="mt-4">Benarkah Konsumsi Obat Hipertensi Bisa Bikin Gagal Ginjal? Ini Kata Dokter</h5>
              <p>
                Hipertensi, Obat
              </p>
              <a href="#">Selengkapnya</a>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
            <div class="team-member image-zoom">
              <div class="image-zoom-wrapper">
                <img src="{{ asset('img/sipkes/artikel-2.jpg') }}" alt="" />
              </div>
              <h5 class="mt-4">Aturan Porsi Makan Bagi Penderita Maag-Diabetes yang Ingin Diet</h5>
              <p>
                Diabetes, Maag
              </p>
              <a href="#">Selengkapnya</a>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
            <div class="team-member image-zoom">
              <div class="image-zoom-wrapper">
                <img src="{{ asset('img/sipkes/artikel-3.jpg') }}" alt="" />
              </div>
              <h5 class="mt-4">Allopurinol Obat Asam Urat, Begini Aturan Minum dan Efek Sampingnya</h5>
              <p>
                Obat, Asam urat
              </p>
              <a href="#">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
            <div class="team-member image-zoom">
              <div class="image-zoom-wrapper">
                <img src="{{ asset('img/sipkes/artikel-1.jpg') }}" alt="" />
              </div>
              <h5 class="mt-4">Benarkah Konsumsi Obat Hipertensi Bisa Bikin Gagal Ginjal? Ini Kata Dokter</h5>
              <p>
                Hipertensi, Obat
              </p>
              <a href="#">Selengkapnya</a>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
            <div class="team-member image-zoom">
              <div class="image-zoom-wrapper">
                <img src="{{ asset('img/sipkes/artikel-2.jpg') }}" alt="" />
              </div>
              <h5 class="mt-4">Aturan Porsi Makan Bagi Penderita Maag-Diabetes yang Ingin Diet</h5>
              <p>
                Diabetes, Maag
              </p>
              <a href="#">Selengkapnya</a>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
            <div class="team-member image-zoom">
              <div class="image-zoom-wrapper">
                <img src="{{ asset('img/sipkes/artikel-3.jpg') }}" alt="" />
              </div>
              <h5 class="mt-4">Allopurinol Obat Asam Urat, Begini Aturan Minum dan Efek Sampingnya</h5>
              <p>
                Obat, Asam urat
              </p>
              <a href="#">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark">
      <div class="footer-top">
        <div class="container">
          <div class="row gy-5">
            <div class="col-lg-3 col-sm-6 ">
              <div class="social-icons">
                <h1 class="text-white row-1">SIPKES</h1>
                <a href="#"
                ><img class="row-1" src="{{ asset('img/sipkes/logoSipkes.svg') }}" alt=""
                /></a>
              </div>
              
             
              <div class="line"></div>
              <p>
                Jl. Kaliurang No.Km. 14,5, Krawitan, Umbulmartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584
              </p>
              <div class="social-icons">
                <a href="#"><i class="ri-twitter-fill"></i></a>
                <a href="#"><i class="ri-instagram-fill"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <h5 class="mb-0 text-white">Layanan</h5>
              <div class="line"></div>
              <ul>
                <li><a href="#">Profil Kesehatan</a></li>
                <li><a href="#">Informasi Kesehatan</a></li>
                <li><a href="#">Manajemen Pasien</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-sm-6">
              <h5 class="mb-0 text-white">Program</h5>
              <div class="line"></div>
              <ul>
                <li><a href="#">Penyuluhan DAGUSIBU</a></li>
                <li><a href="#">Cek Kesehatan</a></li>

              </ul>
            </div>
            <div class="col-lg-3 col-sm-6">
              <h5 class="mb-0 text-white">Kontak</h5>
              <div class="line"></div>
              <ul>
                <li>+6281234567890</li>
                <li>www.sipkes.co.id</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row g-4 justify-content-between">
            <div class="col-auto">
              <p class="mb-0">© Copyright SIPKES 2024</p>
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('js/Landing.js') }}"></script>
  </body>
</html>
