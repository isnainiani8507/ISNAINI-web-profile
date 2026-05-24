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
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,800;1,700&display=swap');
      
      .ftco-navbar-light {
        background: #fff !important;
        box-shadow: 0 5px 20px -5px rgba(0,0,0,0.1) !important;
        top: 0 !important;
      }
      .ftco-navbar-light .navbar-nav > li > a { color: #000 !important; font-weight: 600; }
      .ftco-navbar-light .navbar-nav > li > a:hover,
      .ftco-navbar-light .navbar-nav > li.active > a { color: #b1b493 !important; }
      .ftco-navbar-light .navbar-brand { color: #000 !important; }
      .ftco-navbar-light .navbar-brand span { color: #b1b493 !important; }

      @media (min-width: 992px) {
        /* Reduce padding and font-size so the navbar doesn't look crowded */
        .ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
          padding-left: 10px !important;
          padding-right: 10px !important;
          font-size: 14px !important;
        }
      }
    </style>
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
          <i class="fa fa-bars"></i> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav nav ml-auto">
            <li class="nav-item">
              <a href="#home-section" class="nav-link"><span>Home</span></a>
            </li>
            <li class="nav-item">
              <a href="#academic-profile-section" class="nav-link"><span>Academic Profile</span></a>
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
              <a href="#targets-section" class="nav-link"
                ><span>Targets</span></a
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

    <section
      class="ftco-about ftco-section ftco-no-pb hero-new-section"
      id="home-section"
    >
      <div class="container">
        <div class="row d-flex no-gutters align-items-center">
          <div class="col-md-6 col-lg-5 d-flex flex-column justify-content-center align-items-center pt-2 pt-md-0">
            
            <div class="interactive-tech-container mb-4">
              <div class="tech-sphere"></div>
              <div class="tech-orbit">
                <div class="orbit-item html-badge"><i class="fa fa-html5"></i></div>
                <div class="orbit-item css-badge"><i class="fa fa-css3"></i></div>
                <div class="orbit-item js-badge">JS</div>
                <div class="orbit-item php-badge">PHP</div>
              </div>
              <div class="code-typing-box shadow-lg">
                <div class="code-header">
                  <span class="dot red"></span>
                  <span class="dot yellow"></span>
                  <span class="dot green"></span>
                </div>
                <div class="code-body">
                  <span class="code-line"><span class="keyword">function</span> <span class="func">buildFuture</span>() {</span>
                  <span class="code-line indent">  <span class="keyword">return</span> <span class="string">"Innovation & Excellence"</span>;</span>
                  <span class="code-line">}</span>
                  <span class="code-cursor">_</span>
                </div>
              </div>
            </div>

            <div class="action-buttons text-center w-100 mt-4 mb-5 mb-md-0" style="z-index: 10;">
              <a href="#contact-section" class="btn btn-primary btn-custom py-3 px-4 mr-2 mb-2" style="border-radius: 30px; font-weight: 600; box-shadow: 0 10px 20px rgba(177, 180, 147, 0.4); transition: transform 0.3s ease, box-shadow 0.3s ease;">Hire Me</a>
              <a href="{{ asset('CV_ISNAINI FATHUL JANNAH.pdf') }}" class="btn btn-custom py-3 px-4 mb-2 text-white" download="CV_ISNAINI FATHUL JANNAH.pdf" style="border-radius: 30px; font-weight: 600; background: linear-gradient(135deg, #b1b493, #8f9273); border: none; box-shadow: 0 10px 20px rgba(143, 146, 115, 0.4); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                Download CV <i class="fa fa-download ml-1"></i>
              </a>
            </div>

          </div>
          <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 pt-4 pb-5">
            <div class="pt-md-3 pb-md-5">
              <div class="row justify-content-start pb-3">
                <div class="col-md-12 heading-section ftco-animate">
                  <span class="subheading" style="color: #b1b493; font-weight: 700; letter-spacing: 2px;">HELLO THERE!</span>
                  <h2 class="mb-4" style="font-size: 48px; font-weight: 800; font-family: 'Playfair Display', serif; font-style: italic; background: linear-gradient(90deg, #333, #b1b493); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    Isnaini Fathul Jannah
                  </h2>
                  
                  <div class="about-desc-card shadow-sm mb-4 p-4" style="background: rgba(177, 180, 147, 0.1); border-left: 4px solid #b1b493; border-radius: 0 12px 12px 0;">
                    <p class="mb-0 text-dark" style="line-height: 1.8; font-size: 15px;">
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
                  </div>

                  <div class="contact-grid mb-4">
                    <div class="contact-item d-flex align-items-center mb-3">
                      <div class="icon-box d-flex justify-content-center align-items-center rounded-circle mr-3" style="width: 40px; height: 40px; background: #f1f2eb; color: #b1b493;"><i class="fa fa-calendar"></i></div>
                      <div class="info d-flex flex-column">
                        <span class="label text-muted" style="font-size: 12px; font-weight: 600; text-transform: uppercase;">Tanggal Lahir</span>
                        <span class="value font-weight-bold text-dark">27 Mei 2005</span>
                      </div>
                    </div>
                    <div class="contact-item d-flex align-items-center mb-3">
                      <div class="icon-box d-flex justify-content-center align-items-center rounded-circle mr-3" style="width: 40px; height: 40px; background: #f1f2eb; color: #b1b493;"><i class="fa fa-map-marker"></i></div>
                      <div class="info d-flex flex-column">
                        <span class="label text-muted" style="font-size: 12px; font-weight: 600; text-transform: uppercase;">Lokasi</span>
                        <span class="value font-weight-bold text-dark">Colomadu, Karanganyar</span>
                      </div>
                    </div>
                    <div class="contact-item d-flex align-items-center mb-3">
                      <a href="mailto:isnainiani8507@gmail.com" class="icon-box d-flex justify-content-center align-items-center rounded-circle mr-3 interactive-icon" style="width: 40px; height: 40px; background: #f1f2eb; color: #b1b493; text-decoration: none;"><i class="fa fa-envelope"></i></a>
                      <div class="info d-flex flex-column">
                        <span class="label text-muted" style="font-size: 12px; font-weight: 600; text-transform: uppercase;">Email</span>
                        <span class="value font-weight-bold"><a href="mailto:isnainiani8507@gmail.com" class="text-dark">isnainiani8507@gmail.com</a></span>
                      </div>
                    </div>
                    <div class="contact-item d-flex align-items-center mb-3">
                      <a href="https://wa.me/6281326260457" target="_blank" class="icon-box d-flex justify-content-center align-items-center rounded-circle mr-3 interactive-icon" style="width: 40px; height: 40px; background: #f1f2eb; color: #b1b493; text-decoration: none;"><i class="fa fa-whatsapp"></i></a>
                      <div class="info d-flex flex-column">
                        <span class="label text-muted" style="font-size: 12px; font-weight: 600; text-transform: uppercase;">WhatsApp</span>
                        <span class="value font-weight-bold"><a href="https://wa.me/6281326260457" target="_blank" class="text-dark">0813-2626-0457</a></span>
                      </div>
                    </div>
                  </div>

                  <div class="interests-container mb-5 d-flex flex-wrap">
                    <span class="interest-badge px-3 py-2 mr-2 mb-2 rounded-pill shadow-sm" style="background: #fff; border: 1px solid #eee; font-size: 13px; font-weight: 600;"><i class="fa fa-headphones mr-2" style="color: #b1b493;"></i>Music</span>
                    <span class="interest-badge px-3 py-2 mr-2 mb-2 rounded-pill shadow-sm" style="background: #fff; border: 1px solid #eee; font-size: 13px; font-weight: 600;"><i class="fa fa-book mr-2" style="color: #b1b493;"></i>Learn</span>
                    <span class="interest-badge px-3 py-2 mr-2 mb-2 rounded-pill shadow-sm" style="background: #fff; border: 1px solid #eee; font-size: 13px; font-weight: 600;"><i class="fa fa-film mr-2" style="color: #b1b493;"></i>Movie</span>
                    <span class="interest-badge px-3 py-2 mr-2 mb-2 rounded-pill shadow-sm" style="background: #fff; border: 1px solid #eee; font-size: 13px; font-weight: 600;"><i class="fa fa-paint-brush mr-2" style="color: #b1b493;"></i>Design</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <style>
      .hero-new-section {
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding-top: 80px;
        position: relative;
        overflow: hidden;
      }
      
      @media (max-width: 991.98px) {
        .hero-new-section {
          padding-top: 120px;
          min-height: auto;
          padding-bottom: 50px;
        }
      }

      /* Interactive Tech Container */
      .interactive-tech-container {
        position: relative;
        width: 100%;
        max-width: 450px;
        height: 450px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        margin-left: -15px; /* Shift to left */
        margin-top: -80px; /* Shift upwards */
      }

      @media (max-width: 767px) {
        .interactive-tech-container {
          margin-top: 20px;
          margin-left: 0;
        }
      }

      .interactive-icon {
        transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease !important;
      }
      .interactive-icon:hover {
        transform: scale(1.15) rotate(5deg);
        box-shadow: 0 5px 15px rgba(177, 180, 147, 0.4);
        background-color: #b1b493 !important;
        color: #fff !important;
      }

      .btn-custom:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(177, 180, 147, 0.5) !important;
      }

      .tech-sphere {
        width: 280px;
        height: 380px;
        border-radius: 140px 140px 30px 30px; /* Modern arch shape */
        background-color: #b1b493;
        background-image: url('images/3-3.jpg');
        background-size: cover;
        background-position: center top;
        border: 4px solid #b1b493;
        box-shadow: 0 0 40px rgba(177, 180, 147, 0.4), inset 0 0 30px rgba(0,0,0,0.2);
        position: absolute;
        animation: float 6s ease-in-out infinite;
        z-index: 1;
      }

      .contact-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
      }
      
      @media (max-width: 576px) {
        .contact-grid {
          grid-template-columns: 1fr;
        }
      }

      .tech-orbit {
        position: absolute;
        width: 440px;
        height: 440px;
        border: 1px dashed rgba(177, 180, 147, 0.4);
        border-radius: 50%;
        animation: spin 20s linear infinite;
        z-index: 2;
      }

      .orbit-item {
        position: absolute;
        width: 50px;
        height: 50px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: 700;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        font-size: 20px;
        animation: counter-spin 20s linear infinite;
      }

      .html-badge { top: -25px; left: 50%; transform: translateX(-50%); color: #E34F26; }
      .css-badge { bottom: -25px; left: 50%; transform: translateX(-50%); color: #1572B6; }
      .js-badge { left: -25px; top: 50%; transform: translateY(-50%); color: #F7DF1E; font-size: 16px; }
      .php-badge { right: -25px; top: 50%; transform: translateY(-50%); color: #777BB4; font-size: 14px; }

      .code-typing-box {
        position: absolute;
        bottom: 20px;
        right: -30px;
        width: 260px;
        background: #1e1e1e;
        border-radius: 10px;
        overflow: hidden;
        z-index: 3;
        font-family: 'Courier New', Courier, monospace;
        font-size: 13px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        animation: float-delayed 7s ease-in-out infinite;
      }
      
      @media (max-width: 767.98px) {
        .interactive-tech-container {
           height: 350px;
           margin-bottom: 30px;
        }
        .code-typing-box {
           right: 10px;
           width: 240px;
           bottom: 10px;
        }
      }

      .code-header {
        background: #2d2d2d;
        padding: 8px 12px;
        display: flex;
        gap: 6px;
      }
      .code-header .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
      }
      .dot.red { background: #ff5f56; }
      .dot.yellow { background: #ffbd2e; }
      .dot.green { background: #27c93f; }

      .code-body {
        padding: 15px;
        color: #fff;
        line-height: 1.6;
      }
      .code-line { display: block; }
      .code-line.indent { padding-left: 20px; }
      .keyword { color: #c678dd; }
      .func { color: #61afef; }
      .string { color: #98c379; }
      .code-cursor {
        display: inline-block;
        width: 8px;
        height: 15px;
        background: #fff;
        animation: blink 1s step-end infinite;
      }

      @keyframes spin { 100% { transform: rotate(360deg); } }
      @keyframes counter-spin { 100% { transform: rotate(-360deg); } }
      @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-15px); } }
      @keyframes float-delayed { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }
      @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } }

      /* Responsive text fixes */
      @media (max-width: 768px) {
        .about-info li { flex-wrap: wrap; }
        .about-info li a { margin-top: 10px; margin-left: 0 !important; width: 100%; text-align: center; }
        h2.mb-4 { font-size: 28px !important; }
      }
    </style>

    <style>
      .btn-primary { transition: all 0.3s ease; }
      .btn-primary:hover { transform: translateY(-5px) scale(1.05); box-shadow: 0 10px 20px rgba(0,0,0,0.2); }
      .btn-primary:active { transform: translateY(0) scale(1); box-shadow: 0 5px 10px rgba(0,0,0,0.2); }
      
      .academic-card { 
        border-radius: 24px; 
        border: 1px solid rgba(177, 180, 147, 0.4); 
        background-color: #f1f2eb; 
        background-image: 
            radial-gradient(circle at 100% 0%, rgba(177, 180, 147, 0.5) 0%, transparent 60%),
            radial-gradient(circle at 0% 100%, rgba(177, 180, 147, 0.3) 0%, transparent 60%);
        position: relative; 
        overflow: hidden; 
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); 
      }
      .academic-card::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, #b1b493, #8f9273); opacity: 0; transition: opacity 0.3s; }
      .academic-card:hover { transform: translateY(-8px); box-shadow: 0 15px 30px rgba(177, 180, 147, 0.2) !important; border-color: #8f9273; }
      .academic-card:hover::before { opacity: 1; }
      .academic-icon-box { width: 55px; height: 55px; border-radius: 15px; background: linear-gradient(135deg, #ffffff, #f1f3f5); display: flex; align-items: center; justify-content: center; margin-bottom: 20px; transition: transform 0.5s; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
      .academic-card:hover .academic-icon-box { transform: rotate(10deg) scale(1.1); background: linear-gradient(135deg, #b1b493, #8f9273); }
      .academic-card:hover .academic-icon-box i { color: #fff !important; }
      
      /* Alternating Timeline Styles */
      .timeline-container { position: relative; width: 100%; max-width: 900px; margin: 0 auto; padding: 20px 0; }
      .timeline-container::after { content: ''; position: absolute; width: 4px; background-color: #d3d5bd; top: 0; bottom: 0; left: 50%; margin-left: -2px; }
      
      .timeline-item { padding: 10px 40px; position: relative; background-color: inherit; width: 50%; }
      .timeline-item.left { left: 0; }
      .timeline-item.right { left: 50%; }
      
      .timeline-item::after { content: ''; position: absolute; width: 20px; height: 20px; right: -10px; background-color: #f8f9fa; border: 4px solid #b1b493; top: 25px; border-radius: 50%; z-index: 1; transition: all 0.3s; }
      .timeline-item.right::after { left: -10px; }
      
      .timeline-card { border-radius: 12px; background: #f6f7f2; border: 1px solid #e2e4d5; position: relative; overflow: hidden; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.03); }
      .timeline-card:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(177, 180, 147, 0.2); border-color: #b1b493; }
      .timeline-item:hover::after { background-color: #b1b493; transform: scale(1.3); }

      /* Khaki color for Left Cards */
      .timeline-item.left .timeline-card { background-color: #b1b493; border-color: #8f9273; }
      .timeline-item.left .timeline-card h3 { color: #ffffff !important; }
      .timeline-item.left .timeline-card h5 { color: #f1f3f5 !important; }
      .timeline-item.left .timeline-card p, .timeline-item.left .timeline-card i { color: #e9ecef !important; }
      .timeline-item.left .timeline-card .rounded-pill { background: rgba(255, 255, 255, 0.2) !important; color: #ffffff !important; }

      /* Responsive Timeline for Mobile */
      @media screen and (max-width: 768px) {
        .timeline-container::after { left: 31px; }
        .timeline-item { width: 100%; padding-left: 70px; padding-right: 25px; }
        .timeline-item.right { left: 0; }
        .timeline-item.left::after, .timeline-item.right::after { left: 21px; }
      }
    </style>

    <section class="ftco-section" id="academic-profile-section" style="background-color: #f8f9fa;">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading" style="color: #b1b493;">CURRENT STATUS</span>
            <h2 class="mb-4">Current Academic Profile</h2>
          </div>
        </div>
        <div class="row">
          <!-- Kampus & Prodi -->
          <div class="col-md-6 mb-4 ftco-animate">
            <div class="academic-card shadow-sm p-4 h-100 d-flex flex-column">
              <div class="academic-icon-box shadow-sm">
                <i class="fa fa-university" style="font-size: 26px; color: #b1b493; transition: color 0.3s;"></i>
              </div>
              <h3 class="h5 font-weight-bold mb-3 text-dark">Informasi Kampus</h3>
              <h4 class="h6 mb-2" style="color: #b1b493; font-weight: 700; letter-spacing: 0.5px; font-size: 15px;">POLITEKNIK INDONUSA SURAKARTA</h4>
              <p class="text-muted mb-4" style="font-size: 14px;"><i class="fa fa-map-marker mr-2" style="color: #b1b493;"></i> Kampus 1, Surakarta, Jawa Tengah</p>
              <div class="mt-auto pt-3" style="border-top: 1px dashed #ced4da;">
                <p class="mb-1 text-muted small text-uppercase font-weight-bold" style="letter-spacing: 1px;">Program Studi</p>
                <p class="text-dark font-weight-bold mb-0" style="font-size: 16px;">Teknologi Rekayasa Perangkat Lunak</p>
              </div>
            </div>
          </div>
          
          <!-- Semester & IPK -->
          <div class="col-md-6 mb-4 ftco-animate">
            <div class="academic-card shadow-sm p-4 h-100 d-flex flex-column">
              <div class="academic-icon-box shadow-sm">
                <i class="fa fa-line-chart" style="font-size: 26px; color: #b1b493; transition: color 0.3s;"></i>
              </div>
              <h3 class="h5 font-weight-bold mb-3 text-dark">Pencapaian Akademik</h3>
              <p class="text-muted mb-4" style="font-size: 14px;">Status dan hasil studi terakhir saat ini.</p>
              <div class="row mt-auto position-relative z-index-1">
                <div class="col-6">
                  <div class="p-3 text-center h-100" style="background: linear-gradient(135deg, #b1b493 0%, #8f9273 100%); border: none; box-shadow: 0 10px 20px rgba(177, 180, 147, 0.3); border-radius: 16px; color: #fff; transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 15px 25px rgba(177, 180, 147, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 20px rgba(177, 180, 147, 0.3)';">
                    <span class="d-block small text-uppercase font-weight-bold mb-1" style="color: rgba(255,255,255,0.8); letter-spacing: 1px;">Semester</span>
                    <span class="font-weight-bold mb-0" style="font-size: 28px; line-height: 1; color: #fff;">4</span>
                  </div>
                </div>
                <div class="col-6">
                  <div class="p-3 text-center h-100" style="background: linear-gradient(135deg, #2E8B57 0%, #226b43 100%); border: none; box-shadow: 0 10px 20px rgba(46, 139, 87, 0.3); border-radius: 16px; color: #fff; transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 15px 25px rgba(46, 139, 87, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 20px rgba(46, 139, 87, 0.3)';">
                    <span class="d-block small text-uppercase font-weight-bold mb-1" style="color: rgba(255,255,255,0.8); letter-spacing: 1px;">IPK (Smt 3)</span>
                    <span class="font-weight-bold mb-0" style="font-size: 28px; line-height: 1; color: #fff;">3.84</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Mata Kuliah Relevan -->
          <div class="col-md-12 ftco-animate">
            <div class="academic-card shadow-sm p-4">
              <div class="d-flex align-items-center mb-3 pb-3" style="border-bottom: 1px dashed #ced4da;">
                <div class="academic-icon-box shadow-sm mb-0 mr-3" style="width: 45px; height: 45px;">
                  <i class="fa fa-book" style="font-size: 20px; color: #b1b493; transition: color 0.3s;"></i>
                </div>
                <h3 class="h5 font-weight-bold mb-0 text-dark">Mata Kuliah Relevan Saat Ini</h3>
              </div>
              <div class="d-flex flex-wrap justify-content-center pt-2">
                <span class="badge badge-pill badge-light border px-4 py-2 m-2 shadow-sm" style="font-size: 13px; font-weight: 500; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#b1b493'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#212529';"><i class="fa fa-code mr-2" style="color: inherit;"></i>Pemrograman Web</span>
                <span class="badge badge-pill badge-light border px-4 py-2 m-2 shadow-sm" style="font-size: 13px; font-weight: 500; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#b1b493'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#212529';"><i class="fa fa-mobile mr-2" style="color: inherit;"></i>Pemrograman Perangkat Bergerak</span>
                <span class="badge badge-pill badge-light border px-4 py-2 m-2 shadow-sm" style="font-size: 13px; font-weight: 500; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#b1b493'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#212529';"><i class="fa fa-cogs mr-2" style="color: inherit;"></i>Kecerdasan Buatan</span>
                <span class="badge badge-pill badge-light border px-4 py-2 m-2 shadow-sm" style="font-size: 13px; font-weight: 500; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#b1b493'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#212529';"><i class="fa fa-tasks mr-2" style="color: inherit;"></i>Manajemen Proyek Perangkat Lunak</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section" id="education-section">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading" style="color: #b1b493;">MY ACADEMIC JOURNEY</span>
            <h2 class="mb-4"> Educational background</h2>
          </div>
        </div>
        
        <div class="timeline-container">
          @foreach ($educations as $index => $edu)
            <div class="timeline-item {{ $index % 2 == 0 ? 'left' : 'right' }} ftco-animate">
              <div class="timeline-card p-4">
                <span class="font-weight-bold px-3 py-1 rounded-pill d-inline-block mb-2" style="background: rgba(177, 180, 147, 0.15); color: #8f9273; letter-spacing: 0.5px; font-size: 12px;">
                  <i class="fa fa-calendar mr-2"></i>{{ $edu->start_year }} - {{ $edu->end_year ?? 'Sekarang' }}
                </span>
                <h3 class="mb-1" style="font-weight: 700; color: #343a40; font-size: 18px;">{{ $edu->school_name }}</h3>
                <h5 class="text-muted" style="font-size: 14px; font-weight: 500;">{{ $edu->degree }}</h5>
                <p class="mt-2 mb-0" style="color: #6c757d; font-size: 13px;"><i class="fa fa-map-marker mr-2" style="color: #b1b493;"></i> {{ $edu->city }}</p>
              </div>
            </div>
          @endforeach
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
            <h2 class="mb-4">The Field I'm Currently Working In</h2>
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
                <div class="mt-3">
                    <a href="https://github.com/isnainiani8507/ISNAINI-web-profile.git" target="_blank" class="btn btn-outline-light btn-sm rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 40px; height: 40px; transition: transform 0.3s; transform-origin: center;" onmouseover="this.style.transform='scale(1.1) rotate(10deg)'" onmouseout="this.style.transform='scale(1)'" title="Check out this project's GitHub repository.">
                        <i class="fa fa-github" style="font-size: 20px;"></i>
                    </a>
                </div>
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
                <div class="mt-3">
                    <a href="https://github.com/isnainiani8507/student-crud-app-kodular.git" target="_blank" class="btn btn-outline-light btn-sm rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 40px; height: 40px; transition: transform 0.3s; transform-origin: center;" onmouseover="this.style.transform='scale(1.1) rotate(10deg)'" onmouseout="this.style.transform='scale(1)'" title="Check out this project's GitHub repository.">
                        <i class="fa fa-github" style="font-size: 20px;"></i>
                    </a>
                </div>
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
                <div class="mt-3">
                    <a href="https://github.com/isnainiani8507/student-cash-management-system.git" target="_blank" class="btn btn-outline-light btn-sm rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 40px; height: 40px; transition: transform 0.3s; transform-origin: center;" onmouseover="this.style.transform='scale(1.1) rotate(10deg)'" onmouseout="this.style.transform='scale(1)'" title="View Github Repo">
                        <i class="fa fa-github" style="font-size: 20px;"></i>
                    </a>
                </div>
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
                <div class="mt-3">
                    <a href="https://github.com/yunitainesis/hestii_henna.git" target="_blank" class="btn btn-outline-light btn-sm rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 40px; height: 40px; transition: transform 0.3s; transform-origin: center;" onmouseover="this.style.transform='scale(1.1) rotate(10deg)'" onmouseout="this.style.transform='scale(1)'" title="View Github Repo">
                        <i class="fa fa-github" style="font-size: 20px;"></i>
                    </a>
                </div>
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
                <div class="mt-3">
                    <a href="https://github.com/devannoap31/student-emotional-consultation-web-with-AI.git" target="_blank" class="btn btn-outline-light btn-sm rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 40px; height: 40px; transition: transform 0.3s; transform-origin: center;" onmouseover="this.style.transform='scale(1.1) rotate(10deg)'" onmouseout="this.style.transform='scale(1)'" title="View Github Repo">
                        <i class="fa fa-github" style="font-size: 20px;"></i>
                    </a>
                </div>
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
                <div class="mt-3">
                    <a href="#" target="_blank" class="btn btn-outline-light btn-sm rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 40px; height: 40px; transition: transform 0.3s; transform-origin: center;" onmouseover="this.style.transform='scale(1.1) rotate(10deg)'" onmouseout="this.style.transform='scale(1)'" title="View Github Repo">
                        <i class="fa fa-github" style="font-size: 20px;"></i>
                    </a>
                </div>
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
                <div class="mt-2">
                    <a href="{{ asset('Sertifikat TDA - Mengelola Keuangan.pdf') }}" target="_blank" class="btn btn-primary btn-sm rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 40px; height: 40px; transition: transform 0.3s; transform-origin: center; background-color: #b1b493; border-color: #b1b493;" onmouseover="this.style.transform='scale(1.1) rotate(10deg)'" onmouseout="this.style.transform='scale(1)'" title="View PDF">
                        <i class="fa fa-file-pdf-o" style="font-size: 18px;"></i>
                    </a>
                </div>
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
                <div class="mt-2">
                    <a href="{{ asset('Seminar Nasional - Peran Media Kreatif otomotif & Informasi.pdf') }}" target="_blank" class="btn btn-primary btn-sm rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 40px; height: 40px; transition: transform 0.3s; transform-origin: center; background-color: #b1b493; border-color: #b1b493;" onmouseover="this.style.transform='scale(1.1) rotate(10deg)'" onmouseout="this.style.transform='scale(1)'" title="View PDF">
                        <i class="fa fa-file-pdf-o" style="font-size: 18px;"></i>
                    </a>
                </div>
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
                <div class="mt-2">
                    <a href="{{ asset('SERTIFIKAT PANITIA Pelatihan Public Speaking Character Building - Isnaini Fathul Jannah.pdf') }}" target="_blank" class="btn btn-primary btn-sm rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 40px; height: 40px; transition: transform 0.3s; transform-origin: center; background-color: #b1b493; border-color: #b1b493;" onmouseover="this.style.transform='scale(1.1) rotate(10deg)'" onmouseout="this.style.transform='scale(1)'" title="View PDF">
                        <i class="fa fa-file-pdf-o" style="font-size: 18px;"></i>
                    </a>
                </div>
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

    <!-- TARGETS START -->
    <section class="ftco-section bg-primary" id="targets-section">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div
            class="col-md-12 heading-section heading-section-white text-center ftco-animate"
          >
            <span class="subheading">TARGETS</span>
            <h2 class="mb-2">Post-Internship Goals</h2>
            <p>
              Proyek dan sistem yang ingin saya kembangkan sebagai bentuk penerapan pengalaman serta kemampuan yang diperoleh selama masa magang.
            </p>
          </div>
        </div>
        
        <style>
          .target-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 35px 25px;
            height: 100%;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
          }
          .target-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.25);
          }
          .target-icon {
            font-size: 36px;
            margin-bottom: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: rgba(177, 180, 147, 0.15);
            color: #b1b493;
            transition: all 0.4s ease;
          }
          .target-card:hover .target-icon {
            transform: scale(1.1) rotate(5deg);
            background: #b1b493;
            color: #fff;
          }
          .target-category {
            font-size: 13px;
            font-weight: 600;
            padding: 6px 15px;
            border-radius: 30px;
            background-color: rgba(177, 180, 147, 0.2);
            color: #7b7f58;
            margin-bottom: 15px;
            letter-spacing: 0.5px;
          }
          .target-title {
            font-size: 20px;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
            line-height: 1.3;
          }
          .target-desc {
            font-size: 14.5px;
            color: #666;
            margin-bottom: 25px;
            flex-grow: 1;
            line-height: 1.6;
          }
          .target-status {
            font-size: 13px;
            font-weight: 600;
            padding: 6px 20px;
            border-radius: 30px;
            background-color: rgba(255, 152, 0, 0.15);
            color: #e67e22;
            width: fit-content;
            display: flex;
            align-items: center;
            gap: 6px;
          }
          .target-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #ff9800, #ffc107);
            opacity: 0;
            transition: opacity 0.3s;
          }
          .target-card:hover::before {
            opacity: 1;
          }
        </style>

        <div class="row ftco-animate">
          <!-- Card 1 -->
          <div class="col-md-4 mb-4">
            <div class="target-card">
              <div class="target-icon">
                <i class="fa fa-map-o"></i>
              </div>
              <div class="target-category">🗺️ Information System</div>
              <h3 class="target-title">Boarding House Finder App</h3>
              <p class="target-desc">
                Platform pencarian kost berbasis web khusus wilayah Surakarta. Memudahkan mahasiswa menemukan kost sesuai budget, lokasi, dan fasilitas yang diinginkan.
              </p>
              <div class="target-status">
                <i class="fa fa-clock-o"></i> Planning
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="col-md-4 mb-4">
            <div class="target-card">
              <div class="target-icon">
                <i class="fa fa-money"></i>
              </div>
              <div class="target-category">💰 Financial System</div>
              <h3 class="target-title">Shared Saving Goals App</h3>
              <p class="target-desc">
                Aplikasi perencanaan tabungan bersama untuk siapa saja yang memiliki tujuan keuangan yang sama. Buat target, pantau kontribusi setiap anggota, dan raih tujuan bersama lebih terorganisir.
              </p>
              <div class="target-status">
                <i class="fa fa-clock-o"></i> Planning
              </div>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col-md-4 mb-4">
            <div class="target-card">
              <div class="target-icon">
                <i class="fa fa-tasks"></i>
              </div>
              <div class="target-category">📚 Academic System</div>
              <h3 class="target-title">Academic Task Manager App</h3>
              <p class="target-desc">
                Sistem manajemen tugas kuliah khusus mahasiswa Indonesia. Dilengkapi reminder deadline, dashboard per mata kuliah, dan tracking progress tugas harian.
              </p>
              <div class="target-status">
                <i class="fa fa-clock-o"></i> Planning
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- TARGETS END -->

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
            <form action="#" class="bg-light p-4 p-md-5 contact-form" onsubmit="sendEmail(event)">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      id="senderName"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="email"
                      class="form-control"
                      id="senderEmail"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      id="senderSubject"
                      placeholder="Subject"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea
                      id="senderMessage"
                      cols="30"
                      rows="7"
                      class="form-control"
                      placeholder="Message"
                      required
                    ></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <button
                      type="submit"
                      class="btn btn-primary py-3 px-5"
                    >Send Message</button>
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
               © 2026 This website is made with
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
    <script>
      function sendEmail(e) {
        e.preventDefault();
        var name = document.getElementById('senderName').value;
        var email = document.getElementById('senderEmail').value;
        var subject = document.getElementById('senderSubject').value;
        var message = document.getElementById('senderMessage').value;

        var body = "Hi Isnaini,\n\n" + message + "\n\nDari: " + name + " (" + email + ")";
        var mailtoLink = "mailto:isnainiani8507@gmail.com?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);
        
        window.location.href = mailtoLink;
      }
    </script>
  </body>
</html>
