<!doctype html>
<html lang="en">
  <head>
    <title>Isnaini - Personal Website</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    /><!-- Ganti src jadi href -->
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('images/dua.png') }}" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <nav
      class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target"
      id="ftco-navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="index.html">Isnaini<span>.</span></a>
        <button
          class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle"
          type="button"
          data-toggle="collapse"
          data-target="#ftco-nav"
          aria-controls="ftco-nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav nav ml-auto">
            <li class="nav-item">
              <a href="#home-section" class="nav-link"><span>Home</span></a>
            </li>
            <li class="nav-item">
              <a href="#about-section" class="nav-link"><span>About</span></a>
            </li>
            <li class="nav-item">
              <a href="#education-section" class="nav-link"><span>Education</span></a>
            </li>
            <li class="nav-item">
              <a href="#skills-section" class="nav-link"><span>Skills</span></a>
            </li>
            <li class="nav-item">
              <a href="#interests-section" class="nav-link"
                ><span>Interests</span></a
              >
            </li>
            <li class="nav-item">
              <a href="#projects-section" class="nav-link"
                ><span>Projects</span></a
              >
            </li>
            <li class="nav-item">
              <a href="#certifications-section" class="nav-link"
                ><span>Certifications</span></a
              >
            </li>
            <li class="nav-item">
              <a href="#contact-section" class="nav-link"
                ><span>Contact</span></a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section id="home-section" class="hero">
      <div class="home-slider owl-carousel">
        <div class="slider-item">
          <div class="overlay"></div>
          <div class="container-fluid px-md-0">
            <div
              class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
              data-scrollax-parent="true"
            >
              <div
                class="one-third order-md-last img"
                style="background-image: url(images/1.jpg)"
              >
                <div class="overlay"></div>
                <div class="overlay-1"></div>
              </div>
              <div
                class="one-forth d-flex align-items-center ftco-animate"
                data-scrollax=" properties: { translateY: '70%' }"
              >
                <div class="text">
                  <span class="subheading">
                    Welcome to My Learning Journey!</span
                  >
                  <h1 class="mb-4 mt-3">
                    Hi, I am <span> Isnaini </span>Dedicated to Crafting Quality
                    Software.
                  </h1>
                  <p>
                    <a href="#about-section" class="btn btn-primary">Hire me</a>

                    <a href="{{ asset('CV_Isnaini.pdf') }}" 
                    class="btn btn-primary btn-outline-primary" 
                    download="CV_Isnaini_Daulay.pdf">
                    Download CV
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-item">
          <div class="overlay"></div>
          <div class="container-fluid px-md-0">
            <div
              class="row d-flex no-gutters slider-text align-items-end justify-content-end"
              data-scrollax-parent="true"
            >
              <div
                class="one-third order-md-last img"
                style="background-image: url(images/2.jpg)"
              >
                <div class="overlay"></div>
                <div class="overlay-1"></div>
              </div>
              <div
                class="one-forth d-flex align-items-center ftco-animate"
                data-scrollax=" properties: { translateY: '70%' }"
              >
                <div class="text">
                  <span class="subheading">
                    From Logic to User Experience
                  </span>
                  <h1 class="mb-4 mt-3">
                    Software Engineering <span>Student </span>
                    & Web Enthusiast
                  </h1>
                  <p>
                    <a href="#" class="btn btn-primary">Hire me</a>
                    <a href="#" class="btn btn-primary btn-outline-primary"
                      >Download CV</a
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter img bg-light" id="section-counter">
      <div class="container">
        <div class="row">
          <div
            class="col-md-3 justify-content-center counter-wrap ftco-animate"
          >
            <div class="block-18 d-flex">
              <div
                class="icon d-flex justify-content-center align-items-center"
              >
                <span class="flaticon-suitcase"></span>
              </div>
              <div class="text">
                <strong class="number" data-number="12">0</strong>
                <span>Projects Completed</span>
              </div>
            </div>
          </div>
          <div
            class="col-md-3 justify-content-center counter-wrap ftco-animate"
          >
            <div class="block-18 d-flex">
              <div
                class="icon d-flex justify-content-center align-items-center"
              >
                <span class="flaticon-loyalty"></span>
              </div>
              <div class="text">
                <strong class="number" data-number="5">0</strong>
                <span>Satisfied Users</span>
              </div>
            </div>
          </div>
          <div
            class="col-md-3 justify-content-center counter-wrap ftco-animate"
          >
            <div class="block-18 d-flex">
              <div
                class="icon d-flex justify-content-center align-items-center"
              >
                <span class="flaticon-coffee"></span>
              </div>
              <div class="text">
                <strong class="number" data-number="99">0</strong>
                <span>Cups of coffee</span>
              </div>
            </div>
          </div>
          <div
            class="col-md-3 justify-content-center counter-wrap ftco-animate"
          >
            <div class="block-18 d-flex">
              <div
                class="icon d-flex justify-content-center align-items-center"
              >
                <span class="flaticon-calendar"></span>
              </div>
              <div class="text">
                <strong class="number" data-number="2">0</strong>
                <span>Years Learning</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      class="ftco-about ftco-section ftco-no-pt ftco-no-pb"
      id="about-section"
    >
      <div class="container">
        <div class="row d-flex no-gutters">
          <div class="col-md-6 col-lg-5 d-flex">
            <div class="img-about img d-flex align-items-stretch">
              <div class="overlay"></div>
              <div
                class="img d-flex align-self-stretch align-items-center"
                style="background-image: url(images/3.jpg)"
              ></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
            <div class="py-md-5">
              <div class="row justify-content-start pb-3">
                <div class="col-md-12 heading-section ftco-animate">
                  <span class="subheading">My Intro</span>
                  <h2
                    class="mb-4"
                    style="font-size: 34px; text-transform: capitalize"
                  >
                    About Me
                  </h2>
                  <p style="text-align: justify; text-indent: 50px">
                    Menjadi mahasiswa Teknologi Rekayasa Perangkat Lunak
                    mengajarkan saya bahwa ketelitian dan logika adalah kunci.
                    Dengan latar belakang pendidikan di Politeknik Indonusa
                    Surakarta, saya telah mengembangkan berbagai proyek sistem
                    web dan aplikasi database. Blog ini adalah ruang bagi saya
                    untuk membagikan proses belajar dan hasil karya saya, di
                    mana saya memadukan kemampuan teknis dengan dedikasi tinggi
                    untuk memberikan hasil terbaik dalam setiap tantangan yang
                    ada.
                  </p>

                  <ul
                    class="about-info mt-4 px-md-0 px-2"
                    style="list-style: none"
                  >
                    <!-- Baris Nama -->
                    <li class="d-flex mb-3">
                      <div
                        style="width: 140px; font-weight: bold; flex-shrink: 0"
                      >
                        Nama
                      </div>
                      <div style="width: 20px">:</div>
                      <div style="color: #999">Isnaini Fathul Jannah</div>
                    </li>
                    <!-- Baris Tanggal Lahir -->
                    <li class="d-flex mb-3">
                      <div
                        style="width: 140px; font-weight: bold; flex-shrink: 0"
                      >
                        Tanggal Lahir
                      </div>
                      <div style="width: 20px">:</div>
                      <div style="color: #999">27 Mei, 2005</div>
                    </li>
                    <!-- Baris Alamat -->
                    <li class="d-flex mb-3">
                      <div
                        style="width: 140px; font-weight: bold; flex-shrink: 0"
                      >
                        Alamat
                      </div>
                      <div style="width: 20px">:</div>
                      <div style="color: #999">
                        Paulan Timur, RT.03/RW.03, Colomadu, Karanganyar
                      </div>
                    </li>
                    <!-- Baris Kode Pos -->
                    <li class="d-flex mb-3">
                      <div
                        style="width: 140px; font-weight: bold; flex-shrink: 0"
                      >
                        Kode Pos
                      </div>
                      <div style="width: 20px">:</div>
                      <div style="color: #999">57173</div>
                    </li>

                    <!-- Baris Email -->
                    <li class="d-flex align-items-center mb-3">
                      <div
                        style="width: 140px; font-weight: bold; flex-shrink: 0"
                      >
                        Email
                      </div>
                      <div style="width: 20px">:</div>
                      <div style="color: #999999; margin-right: 15px">
                        isnainiani8507@gmail.com
                      </div>
                      <a
                        href="mailto:isnainiani8507@gmail.com"
                        class="btn btn-primary"
                        style="
                          font-size: 12px;
                          padding: 5px 15px;
                          white-space: nowrap;
                          margin-left: auto;
                        "
                        >Kirim Email</a
                      >
                    </li>

                    <!-- Baris Telepon -->
                    <li class="d-flex align-items-center mb-3">
                      <div
                        style="width: 140px; font-weight: bold; flex-shrink: 0"
                      >
                        Telepon
                      </div>
                      <div style="width: 20px">:</div>
                      <div style="color: #999; margin-right: 15px">
                        0813-2626-0457
                      </div>
                      <a
                        href="https://wa.me/6281326260457"
                        target="_blank"
                        class="btn btn-success"
                        style="
                          font-size: 12px;
                          padding: 5px 15px;
                          white-space: nowrap;
                          margin-left: auto;
                        "
                        >WhatsApp</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-md-12">
                  <div class="my-interest d-lg-flex w-100">
                    <div class="interest-wrap d-flex align-items-center">
                      <div
                        class="icon d-flex align-items-center justify-content-center"
                      >
                        <span class="flaticon-listening"></span>
                      </div>
                      <div class="text">Music</div>
                    </div>
                    <div class="interest-wrap d-flex align-items-center">
                      <div
                        class="icon d-flex align-items-center justify-content-center"
                      >
                        <span class="flaticon-web-programming"></span>
                      </div>
                      <div class="text">Learn</div>
                    </div>
                    <div class="interest-wrap d-flex align-items-center">
                      <div
                        class="icon d-flex align-items-center justify-content-center"
                      >
                        <span class="flaticon-video-player"></span>
                      </div>
                      <div class="text">Movie</div>
                    </div>
                    <div class="interest-wrap d-flex align-items-center">
                      <div
                        class="icon d-flex align-items-center justify-content-center"
                      >
                        <span class="flaticon-computer"></span>
                      </div>
                      <div class="text">Design</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <style>
      .btn-primary { transition: all 0.3s ease; }
      .btn-primary:hover { transform: translateY(-5px) scale(1.05); box-shadow: 0 10px 20px rgba(0,0,0,0.2); }
      .btn-primary:active { transform: translateY(0) scale(1); box-shadow: 0 5px 10px rgba(0,0,0,0.2); }
    </style>
    <section class="ftco-section" id="education-section">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">MY ACADEMIC JOURNEY</span>
            <h2 class="mb-4">Riwayat Pendidikan</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div style="border-left: 3px solid #2E8B57; padding-left: 30px; position: relative;">
            @foreach ($educations as $edu)
              <div class="bg-white rounded-lg shadow p-4 mb-4 ftco-animate" style="position: relative;">
                <div style="position: absolute; width: 20px; height: 20px; background: #2E8B57; border-radius: 50%; left: -42px; top: 30px; border: 4px solid #f8f9fa;"></div>
                <span class="font-weight-bold" style="color: #2E8B57; letter-spacing: 2px;">{{ $edu->start_year }} - {{ $edu->end_year ?? 'Sekarang' }}</span>
                <h3 class="mt-2">{{ $edu->school_name }}</h3>
                <h5 class="text-muted">{{ $edu->degree }}</h5>
                <p class="mt-3 mb-0"><i class="fa fa-map-marker mr-2" style="color: #2E8B57;"></i> {{ $edu->city }}</p>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light" id="skills-section">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">My Learning Progress</span>
            <h2 class="mb-4">My Skills</h2>
            <p>
              Fokus utama saya saat ini adalah membangun fondasi yang kuat di
              bidang pengembangan perangkat lunak.
            </p>
          </div>
        </div>
        <div class="row progress-circle mb-5">
          <div class="col-lg-4 mb-4">
            <div class="bg-white rounded-lg shadow p-4">
              <h2 class="h5 font-weight-bold text-center mb-4">
                PHP & Laravel
              </h2>

              <!-- Progress bar (Persentase disesuaikan jadi 80% agar lebih humble) -->
              <div class="progress mx-auto" data-value="80">
                <span class="progress-left">
                  <span class="progress-bar border-primary"></span>
                </span>
                <span class="progress-right">
                  <span class="progress-bar border-primary"></span>
                </span>
                <div
                  class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center"
                >
                  <div class="h2 font-weight-bold">
                    75<sup class="small">%</sup>
                  </div>
                </div>
              </div>

              <!-- Deskripsi tambahan agar kartu tidak terlihat kosong -->
              <div class="text-center mt-4">
                <span class="small text-gray"
                  >Fokus pada pembuatan routes, views, dan sistem backend
                  sederhana.</span
                >
              </div>
            </div>
          </div>
          <!-- PHP & Laravel -END -->

          <div class="col-lg-4 mb-4">
            <div class="bg-white rounded-lg shadow p-4">
              <h2 class="h5 font-weight-bold text-center mb-4">HTML & CSS</h2>

              <!-- Progress bar (Persentase disesuaikan jadi 80% agar lebih humble) -->
              <div class="progress mx-auto" data-value="80">
                <span class="progress-left">
                  <span class="progress-bar border-primary"></span>
                </span>
                <span class="progress-right">
                  <span class="progress-bar border-primary"></span>
                </span>
                <div
                  class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center"
                >
                  <div class="h2 font-weight-bold">
                    80<sup class="small">%</sup>
                  </div>
                </div>
              </div>

              <!-- Deskripsi tambahan agar kartu tidak terlihat kosong -->
              <div class="text-center mt-4">
                <span class="small text-gray"
                  >Membangun struktur website yang rapi dan memastikan tampilan
                  responsif.</span
                >
              </div>
            </div>
          </div>
          <!-- HTML & CSS -END -->

          <div class="col-lg-4 mb-4">
            <div class="bg-white rounded-lg shadow p-4">
              <h2 class="h5 font-weight-bold text-center mb-4">
                Database (SQL)
              </h2>

              <!-- Progress bar (Persentase disesuaikan jadi 80% agar lebih humble) -->
              <div class="progress mx-auto" data-value="80">
                <span class="progress-left">
                  <span class="progress-bar border-primary"></span>
                </span>
                <span class="progress-right">
                  <span class="progress-bar border-primary"></span>
                </span>
                <div
                  class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center"
                >
                  <div class="h2 font-weight-bold">
                    70<sup class="small">%</sup>
                  </div>
                </div>
              </div>

              <!-- Deskripsi tambahan agar kartu tidak terlihat kosong -->
              <div class="text-center mt-4">
                <span class="small text-gray"
                  >Memahami pengelolaan data menggunakan MySQL dan
                  phpMyAdmin.</span
                >
              </div>
            </div>
          </div>
          <!-- Database (SQL) -END -->

          <div class="col-lg-4 mb-4">
            <div class="bg-white rounded-lg shadow p-4">
              <h2 class="h5 font-weight-bold text-center mb-4">JavaScript</h2>

              <!-- Progress bar (Persentase disesuaikan jadi 80% agar lebih humble) -->
              <div class="progress mx-auto" data-value="80">
                <span class="progress-left">
                  <span class="progress-bar border-primary"></span>
                </span>
                <span class="progress-right">
                  <span class="progress-bar border-primary"></span>
                </span>
                <div
                  class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center"
                >
                  <div class="h2 font-weight-bold">
                    60<sup class="small">%</sup>
                  </div>
                </div>
              </div>

              <!-- Deskripsi tambahan agar kartu tidak terlihat kosong -->
              <div class="text-center mt-4">
                <span class="small text-gray"
                  >Terus belajar menerapkan interaktivitas dasar pada elemen
                  halaman web.</span
                >
              </div>
            </div>
          </div>
          <!-- JavaScript -END -->

          <div class="col-lg-4 mb-4">
            <div class="bg-white rounded-lg shadow p-4">
              <h2 class="h5 font-weight-bold text-center mb-4">Python</h2>

              <!-- Progress bar (Persentase disesuaikan jadi 80% agar lebih humble) -->
              <div class="progress mx-auto" data-value="80">
                <span class="progress-left">
                  <span class="progress-bar border-primary"></span>
                </span>
                <span class="progress-right">
                  <span class="progress-bar border-primary"></span>
                </span>
                <div
                  class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center"
                >
                  <div class="h2 font-weight-bold">
                    55<sup class="small">%</sup>
                  </div>
                </div>
              </div>

              <!-- Deskripsi tambahan agar kartu tidak terlihat kosong -->
              <div class="text-center mt-4">
                <span class="small text-gray"
                  >Memperkuat pemahaman logika pemrograman melalui dasar-dasar
                  Python.</span
                >
              </div>
            </div>
          </div>
          <!-- Python -END -->

          <div class="col-lg-4 mb-4">
            <div class="bg-white rounded-lg shadow p-4">
              <h2 class="h5 font-weight-bold text-center mb-4">
                Teamwork & Collaboration
              </h2>

              <!-- Progress bar (Persentase disesuaikan jadi 80% agar lebih humble) -->
              <div class="progress mx-auto" data-value="80">
                <span class="progress-left">
                  <span class="progress-bar border-primary"></span>
                </span>
                <span class="progress-right">
                  <span class="progress-bar border-primary"></span>
                </span>
                <div
                  class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center"
                >
                  <div class="h2 font-weight-bold">
                    85<sup class="small">%</sup>
                  </div>
                </div>
              </div>

              <!-- Deskripsi tambahan agar kartu tidak terlihat kosong -->
              <div class="text-center mt-4">
                <span class="small text-gray"
                  >Senang berkolaborasi dalam tim untuk diskusi dan pemecahan
                  masalah proyek web.</span
                >
              </div>
            </div>
          </div>
          <!-- Teamwork & Collaboration -END -->
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <a href="/skills" class="btn btn-primary py-3 px-5">Lihat Lainnya</a>
            </div>
        </div>
      </div>
    </section>

    <section class="ftco-section" id="interests-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">MY INTERESTS</span>
            <h2 class="mb-4">Bidang yang Sedang Saya Tekuni</h2>
            <p>
              Fokus utama saya saat ini di Teknologi Rekayasa Perangkat Lunak
              adalah mendalami aspek teknis dan kreatif dalam membangun sebuah
              sistem.
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div
              class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate"
            >
              <div
                class="icon d-flex align-items-center justify-content-center"
              >
                <span class="flaticon-3d-design"></span>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Web Structure</h3>
                <p>
                  Mempelajari bagaimana menyusun kerangka website yang rapi dan
                  standar menggunakan HTML.
                </p>
              </div>
            </div>
          </div>
          <!-- -END -->
          <div class="col-md-6 col-lg-3">
            <div
              class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate"
            >
              <div
                class="icon shadow d-flex align-items-center justify-content-center"
              >
                <span class="flaticon-app-development"></span>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Web Styling</h3>
                <p>
                  Menekuni teknik styling menggunakan CSS untuk membuat tampilan
                  website yang responsif dan enak dilihat di berbagai perangkat.
                </p>
              </div>
            </div>
          </div>
          <!-- -END -->
          <div class="col-md-6 col-lg-3">
            <div
              class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate"
            >
              <div
                class="icon shadow d-flex align-items-center justify-content-center"
              >
                <span class="flaticon-web-programming"></span>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Backend Logic</h3>
                <p>
                  Belajar membangun logika aplikasi web menggunakan framework
                  Laravel untuk mengelola proses data di balik layar.
                </p>
              </div>
            </div>
          </div>
          <!-- -END -->
          <div class="col-md-6 col-lg-3">
            <div
              class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate"
            >
              <div
                class="icon shadow d-flex align-items-center justify-content-center"
              >
                <span class="flaticon-branding"></span>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Data Management</h3>
                <p>
                  Mendalami cara penyimpanan dan pengelolaan informasi melalui
                  sistem database seperti MySQL dan SQLite.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- -END -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-12 text-center">
                <a href="/interests" class="btn btn-primary py-3 px-5">Lihat Lainnya</a>
            </div>
        </div>
      </div>
    </section>

    <section class="ftco-hireme">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-8 col-lg-8 d-flex align-items-center">
            <div class="w-100 py-4">
              <h2>Mari menjalin koneksi!</h2>
              <p>
                Terima kasih sudah berkunjung ke blog pribadi saya. Jika ada
                pertanyaan mengenai isi blog atau proyek yang saya kerjakan,
                jangan ragu untuk menyapa saya melalui email atau WhatsApp.
              </p>
              <p class="mb-0">
                <a
                  href="https://wa.me/6281326260457"
                  class="btn btn-white py-3 px-4"
                  >Contact me</a
                >
              </p>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 d-flex align-items-end">
            <img src="{{ asset('images/penulis-2.png') }}" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-project" id="projects-section">
      <div class="container-fluid px-md-4">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">LEARNING JOURNEY</span>
            <h2 class="mb-4">My Recent Projects</h2>
            <p>
              Proyek yang saya kerjakan selama menempuh studi di Teknologi
              Rekayasa Perangkat Lunak untuk mengasah kemampuan teknis saya.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div
              class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
              style="background-image: url(images/project_1.png)"
            >
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Personal Portfolio Website</a></h3>
                <span>WEB DEVELOPMENT</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div
              class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
              style="background-image: url(images/project_2.png)"
            >
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#"> Student Management App </a></h3>
                <span>Mobile App Development</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div
              class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
              style="background-image: url(images/project_333.jpg)"
            >
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Visual Foxpro Project</a></h3>
                <span>Database Application</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div
              class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
              style="background-image: url(images/project_4.png)"
            >
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Hestii Henna Booking System</a></h3>
                <span>FULLSTACK WEB DEVELOPMENT</span>
              </div>
            </div>
          </div>
        </div>
        <!-- ATAS END -->
        <div class="row justify-content-center">
          <div class="col-md-3">
            <div
              class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
              style="background-image: url(images/project_5.webp)"
            >
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">AI Chatbot for Emotional Support</a></h3>
                <span>PYTHON & NLP</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div
              class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
              style="background-image: url(images/project_6.jpeg)"
            >
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Simple AI Prediction Model</a></h3>
                <span>PYTHON & DATA SCIENCE</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-12 text-center">
                <a href="/projects" class="btn btn-primary py-3 px-5">Lihat Lainnya</a>
            </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section bg-primary">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div
            class="col-md-12 heading-section heading-section-white text-center ftco-animate"
          >
            <span class="subheading">INSPIRATIONS</span>
            <h2 class="mb-2">The Power of Growth & Mindset!</h2>
            <p>
              Kumpulan pemikiran dari berbagai tokoh hebat yang memotivasi saya
              untuk terus bertumbuh, berani mencoba, dan konsisten dalam
              berproses.
            </p>
          </div>
        </div>

        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <span class="fa fa-quote-left"></span>
                    <p class="mb-4 pl-5">
                      The only way to do great work is to love what you do. If
                      you haven't found it yet, keep looking. Don't settle.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(images/tokoh-1.jpeg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Steve Jobs</p>
                        <span class="position">Co-founder of Apple Inc.</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TES 1 -->
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <span class="fa fa-quote-left"></span>
                    <p class="mb-4 pl-5">
                      Tidak peduli seberapa sering kita terjatuh, seberapa besar
                      desas desus yang menyebar, jangan menyerah. Jika kita
                      berusaha maka impian kita akan terwujud.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(images/mysuamijuga.jpeg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Choi Beomgyu</p>
                        <span class="position">Member of TXT</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TES 2 -->
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <span class="fa fa-quote-left"></span>
                    <p class="mb-4 pl-5">
                      Gausah pikir yang tidak perlu dipikir, pikirlah apa yang
                      harus dipikir, mikir!
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(images/billgates.jpeg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Teman Saya</p>
                        <span class="position"> Anak Rumahan </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TES 3 -->
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <span class="fa fa-quote-left"></span>
                    <p class="mb-4 pl-5">
                      Kegagalan adalah sebuah pilihan di sini. Jika sesuatu
                      tidak gagal, berarti kamu kurang berinovasi.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(images/elon.webp)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Elon Musk</p>
                        <span class="position">CEO of SpaceX & Tesla</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TES 4 -->
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <span class="fa fa-quote-left"></span>
                    <p class="mb-4 pl-5">
                      Teknologi bukan tentang menggantikan orang, tapi tentang
                      memberdayakan mereka untuk melakukan hal-hal yang tidak
                      bisa dilakukan sebelumnya.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(images/tokoh-3.jpeg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Vitalik Buterin</p>
                        <span class="position">Co-founder of Ethereum</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--CERTIFICATE START-->
    <section class="ftco-section" id="certifications-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">CERTIFICATIONS</span>
            <h2 class="mb-4">My Certifications & Participations</h2>
            <p>
              Dokumentasi sertifikat dan partisipasi saya dalam berbagai
              pelatihan teknis maupun pengembangan diri selama masa studi.
            </p>
          </div>
        </div>
        <!-- CERTIFICATE END -->
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a
                href="#certifications-section"
                class="block-20"
                style="
                  background-image: url(&quot;images/sertifikat-2.jpg&quot;);
                "
              >
              </a>
              <div class="text mt-3 float-right d-block">
                <div class="d-flex align-items-center mb-3 meta">
                  <p class="mb-0">
                    <span class="mr-2">November 14, 2024</span>
                    <a href="#" class="mr-2">Peserta</a>
                  </p>
                </div>
                <h3 class="heading">
                  <a href="#certifications-section">Seri Literasi Keuangan TDA Soloraya</a>
                </h3>
                <p>
                  Edukasi mengenai pengelolaan keuangan pribadi untuk mencapai
                  tujuan hidup jangka panjang bersama Komunitas TDA Soloraya.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a
                href="#certifications-section"
                class="block-20"
                style="
                  background-image: url(&quot;images/sertifikat-1.jpg&quot;);
                "
              >
              </a>
              <div class="text mt-3 float-right d-block">
                <div class="d-flex align-items-center mb-3 meta">
                  <p class="mb-0">
                    <span class="mr-2">Januari 18, 2025</span>
                    <a href="#" class="mr-2">Peserta</a>
                  </p>
                </div>
                <h3 class="heading">
                  <a href="#certifications-section"
                    >Seminar Nasional Media Kreatif Digital</a
                  >
                </h3>
                <p>
                  Mempelajari peran media kreatif dalam perkembangan Teknologi
                  Informasi dan industri otomotif masa kini.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry">
              <a
                href="#certifications-section"
                class="block-20"
                style="
                  background-image: url(&quot;images/sertifikat-3.jpg&quot;);
                "
              >
              </a>
              <div class="text mt-3 float-right d-block">
                <div class="d-flex align-items-center mb-3 meta">
                  <p class="mb-0">
                    <span class="mr-2">Januari 14-15, 2026</span>
                    <a href="#" class="mr-2">Panitia</a>
                  </p>
                </div>
                <h3 class="heading">
                  <a href="#certifications-section"
                    >Pelatihan Public Speaking: Character Building</a
                  >
                </h3>
                <p>
                  Berkontribusi dalam kepanitiaan pelatihan komunikasi
                  mahasiswa, sekaligus dipercaya mengemban tanggung jawab
                  sebagai Ketua Pelaksana acara.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-12 text-center">
                <a href="/certifications" class="btn btn-primary py-3 px-5">Lihat Lainnya</a>
            </div>
        </div>
      </div>
    </section>

    <!--contact START-->
    <section
      class="ftco-section"
      id="contact-section"
      style="padding-bottom: 2em !important"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">LET'S CONNECT</span>
            <h2 class="mb-4">Hello World❌ Hello Isnaini✅</h2>
            <p>
              Kodingan emang kaku, tapi orangnya jangan. Daripada pusing
              sendiri, mending sapa aku di sini. Siapa tahu frekuensi kita lebih
              cocok daripada koneksi database yang lagi bermasalah. Drop pesan
              kamu ya!
            </p>
          </div>
        </div>
        <!-- contact END -->

        <div class="row block-9">
          <div class="col-md-8">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Your Name"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Your Email"
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Subject"
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea
                      name=""
                      id=""
                      cols="30"
                      rows="7"
                      class="form-control"
                      placeholder="Message"
                    ></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input
                      type="submit"
                      value="Send Message"
                      class="btn btn-primary py-3 px-5"
                    />
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-4 d-flex pl-md-5">
            <div class="row">
              <div class="dbox w-100 d-flex">
                <div
                  class="icon d-flex align-items-center justify-content-center"
                >
                  <span class="fa fa-map-marker"></span>
                </div>
                <div class="text">
                  <p>
                    <span>Alamat </span> Paulan Timur, RT.03/RW.03, Colomadu,
                    Karanganyar
                  </p>
                </div>
              </div>
              <div class="dbox w-100 d-flex">
                <div
                  class="icon d-flex align-items-center justify-content-center"
                >
                  <span class="fa fa-phone"></span>
                </div>
                <div class="text">
                  <p>
                    <span>Telepon </span>
                    <a href="tel://1234567920">0813-2626-0457</a>
                  </p>
                </div>
              </div>
              <div class="dbox w-100 d-flex">
                <div
                  class="icon d-flex align-items-center justify-content-center"
                >
                  <span class="fa fa-paper-plane"></span>
                </div>
                <div class="text">
                  <p>
                    <span>Email</span>
                    <a href="mailto:isnainiani8507@gmail.com">
                      isnainiani8507@gmail.com</a
                    >
                  </p>
                </div>
              </div>
              <div class="dbox w-100 d-flex">
                <div
                  class="icon d-flex align-items-center justify-content-center"
                >
                  <span class="fa fa-globe"></span>
                </div>
                <div class="text">
                  <p>
                    <span>Website </span>
                    <a href="https://github.com/isnainiani8507">ISNAINI.</a>
                  </p>
                </div>
              </div>
            </div>
            <!-- <div id="map" class="map"></div> -->
          </div>
        </div>
      </div>
    </section>

    <footer
      class="ftco-footer ftco-section"
      style="padding-top: 3em !important; padding-bottom: 2em !important"
    >
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Deskripsi Diri</h2>
              <p>
                Mahasiswa Teknologi Rekayasa Perangkat Lunak di Politeknik
                Indonusa Surakarta yang sedang mendalami dunia Web dan Mobile
                Development. Fokus saya saat ini adalah membangun solusi digital
                yang bermanfaat dan terus belajar hal baru.
              </p>
              <p><a href="#" class="btn btn-primary">Learn more</a></p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li>
                  <a href="#home-section"
                    ><span class="fa fa-chevron-right mr-2"></span>Home</a
                  >
                </li>
                <li>
                  <a href="#about-section"
                    ><span class="fa fa-chevron-right mr-2"></span>About</a
                  >
                </li>
                <li>
                  <a href="#skills-section"
                    ><span class="fa fa-chevron-right mr-2"></span>Skills</a
                  >
                </li>
                <li>
                  <a href="#interests-section"
                    ><span class="fa fa-chevron-right mr-2"></span>Interests</a
                  >
                </li>
                <li>
                  <a href="#projects-section"
                    ><span class="fa fa-chevron-right mr-2"></span>Projects</a
                  >
                </li>
                <li>
                  <a href="#certifications-section"
                    ><span class="fa fa-chevron-right mr-2"></span
                    >Certifications</a
                  >
                </li>
                <li>
                  <a href="#contact-section"
                    ><span class="fa fa-chevron-right mr-2"></span>Contact</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Kontak</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li>
                    <a href="#"
                      ><span class="icon fa fa-map-marker"></span
                      ><span class="text"
                        >Colomadu, Karanganyar, Jawa Tengah</span
                      ></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon fa fa-phone"></span
                      ><span class="text">0813 2626 0457</span></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon fa fa-paper-plane"></span
                      ><span class="text">isnainiani8507@gmail.com</span></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <ul class="ftco-footer-social list-unstyled mt-2">
              <li class="ftco-animate">
                <a href="mailto:isnainiani8507@gmail.com"
                  ><span class="fa fa-envelope"></span
                ></a>
              </li>
              <li class="ftco-animate">
                <a href="https://x.com/?lang=id"
                  ><span class="fa fa-twitter"></span
                ></a>
              </li>
              <li class="ftco-animate">
                <a href="https://github.com/isnainiani8507"
                  ><span class="fa fa-github"></span
                ></a>
              </li>
              <li class="ftco-animate">
                <a href="https://www.linkedin.com/in/isnai"
                  ><span class="fa fa-linkedin"></span
                ></a>
              </li>
              <li class="ftco-animate">
                <a href="https://facebook.com/na.na.isna.202020"
                  ><span class="fa fa-facebook"></span
                ></a>
              </li>
              <li class="ftco-animate">
                <a href="https://www.instagram.com/isnafaja/"
                  ><span class="fa fa-instagram"></span
                ></a>
              </li>
              <li class="ftco-animate">
                <a href="https://www.youtube.com/"
                  ><span class="fa fa-youtube-play"></span
                ></a>
              </li>
            </ul>
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              Copyright © 2026 All rights reserved | This website is made with
              ❤️
              <i aria-hidden="true"></i> by
              <a href="https://colorlib.com" target="_blank">ISNAINI.</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle
          class="path-bg"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke="#eeeeee"
        />
        <circle
          class="path"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke-miterlimit="10"
          stroke="#F96D00"
        />
      </svg>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
