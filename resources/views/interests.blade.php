<!DOCTYPE html>
<html lang="en">
<head>
    <title>Interests - Personal Website</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('images/dua.png') }}" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
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
            <li class="nav-item"><a href="/interests" class="nav-link"><span>Interests</span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    

    <section class="ftco-section bg-light" style="padding-top: 120px;">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">My Interests</span>
            <h2 class="mb-4">Bidang yang Sedang Saya Tekuni</h2>
          </div>
        </div>
        <div class="row">
          @foreach ($interests as $interest)
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
              <div class="icon shadow d-flex align-items-center justify-content-center">
                <span class="{{ $interest->icon }}"></span>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">{{ $interest->name }}</h3>
                <p>{{ $interest->description }}</p>
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
