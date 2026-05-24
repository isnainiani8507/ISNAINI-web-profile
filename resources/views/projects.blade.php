<!DOCTYPE html>
<html lang="en">
<head>
    <title>Projects - Personal Website</title>
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
        .project { height: 300px; width: 100%; margin-bottom: 30px; position: relative; background-size: cover; background-position: center; border-radius: 10px; overflow: hidden; }
        .project .overlay { position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5); opacity: 0; transition: .3s all ease; }
        .project:hover .overlay { opacity: 1; }
        .project .text { position: absolute; bottom: 0; left: 0; right: 0; padding: 20px; transition: .3s all ease; opacity: 0; }
        .project:hover .text { opacity: 1; bottom: 10%; }
        .project .text h3 a { color: #fff; font-size: 20px; font-weight: 500; }
        .project .text span { color: rgba(255, 255, 255, 0.8); font-size: 12px; letter-spacing: 2px; text-transform: uppercase; font-weight: 600; }
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
            <li class="nav-item"><a href="/projects" class="nav-link"><span>Projects</span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    

    <section class="ftco-section bg-light" style="padding-top: 120px;">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Learning Journey</span>
            <h2 class="mb-4">My Recent Projects</h2>
          </div>
        </div>
        <div class="row">
          @foreach ($projects as $project)
          <div class="col-md-4{{ ($loop->last && $loop->count % 3 === 1) ? ' offset-md-4' : '' }}">
            <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url('{{ asset($project->image) }}')">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">{{ $project->name }}</a></h3>
                <span>{{ $project->category }}</span>
                <div class="mt-3">
                    <a href="{{ $project->github_link }}" target="_blank" class="btn btn-outline-light btn-sm rounded-circle d-inline-flex justify-content-center align-items-center" style="width: 40px; height: 40px; transition: transform 0.3s; transform-origin: center;" onmouseover="this.style.transform='scale(1.1) rotate(10deg)'" onmouseout="this.style.transform='scale(1)'" title="View Github Repo">
                        <i class="fa fa-github" style="font-size: 20px;"></i>
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
