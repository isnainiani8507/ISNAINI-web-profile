<!DOCTYPE html>
<html lang="en">
<head>
    <title>Certifications - Personal Website</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('images/dua.png') }}" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <style>
        
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
        .ftco-navbar-light .navbar-toggler { color: #000 !important; border-color: rgba(0,0,0,0.1) !important; }
        .ftco-navbar-light .navbar-toggler span { color: #000 !important; }

        @media (min-width: 992px) {
            .ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
                padding-left: 10px !important;
                padding-right: 10px !important;
                font-size: 14px !important;
            }
        }


        
            100% { transform: translateY(-1000px) rotate(720deg); opacity: 0; border-radius: 50%; }
        }
        .blog-entry { margin-bottom: 40px; transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1); border: 1px solid transparent; }
        .blog-entry:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(177, 180, 147, 0.25) !important; border-color: rgba(177, 180, 147, 0.3); }
        .blog-entry .block-20 { display: block; height: 250px; border-radius: 10px; background-size: cover; background-position: center; transition: filter 0.3s; }
        .blog-entry:hover .block-20 { filter: brightness(1.05); }
        .blog-entry .text { position: relative; border-top: 0; border-radius: 2px; }
        .blog-entry .text .heading { font-size: 20px; margin-bottom: 16px; font-weight: 500; }
        .blog-entry .text .heading a { color: #000; }
        .blog-entry .text .heading a:hover { color: #F96D00; }
        .blog-entry .text .meta { font-size: 14px; color: #b3b3b3; }
        .blog-entry .text .meta span { color: #b3b3b3; font-weight: 500; }
        .blog-entry .text .meta a { color: #b3b3b3; }
        .blog-entry .text .meta a:hover { color: #F96D00; }
    </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="/">Isnaini<span>.</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
          <i class="fa fa-bars"></i> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav nav ml-auto">
            <li class="nav-item"><a href="/#home-section" class="nav-link"><span>Home</span></a></li>
            <li class="nav-item"><a href="/certifications" class="nav-link"><span>Certifications</span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    

    <section class="ftco-section bg-light" style="padding-top: 120px;">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Certifications</span>
            <h2 class="mb-4">My Certifications & Participations</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          @foreach ($certifications as $cert)
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end shadow bg-white p-3 rounded">
              <a href="#" class="block-20" style="background-image: url('{{ asset($cert->image) }}');"></a>
              <div class="text mt-3 float-right d-block">
                <div class="d-flex align-items-center mb-3 meta">
                  <p class="mb-0">
                    <span class="mr-2">{{ $cert->date }}</span>
                    <a href="#" class="mr-2">{{ $cert->role }}</a>
                  </p>
                </div>
                <h3 class="heading"><a href="#">{{ $cert->name }}</a></h3>
                <p>{{ $cert->description }}</p>
                <div class="mt-2">
                    <a href="{{ $cert->pdf ? asset($cert->pdf) : '#' }}" target="_blank" class="btn btn-primary btn-sm rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 40px; height: 40px; transition: transform 0.3s; transform-origin: center; background-color: #b1b493; border-color: #b1b493;" onmouseover="this.style.transform='scale(1.1) rotate(10deg)'" onmouseout="this.style.transform='scale(1)'" title="View PDF">
                        <i class="fa fa-file-pdf-o" style="font-size: 18px;"></i>
                    </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section" style="padding-top: 3em !important; padding-bottom: 2em !important; background: #1a1a1a; color: rgba(255,255,255,0.7);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with ❤️ by <a href="/" target="_blank" style="color: #F96D00;">ISNAINI.</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

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
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
