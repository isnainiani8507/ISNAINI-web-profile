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
        .ftco-navbar-light:not(.scrolled) { background: transparent !important; }
        .ftco-navbar-light .navbar-nav > .nav-item > .nav-link { color: #fff !important; font-weight: 600; }
        .ftco-navbar-light .navbar-brand { color: #fff !important; }
        .ftco-navbar-light .navbar-toggler { color: #fff !important; }
        .ftco-navbar-light.scrolled .navbar-nav > .nav-item > .nav-link { color: #000 !important; }
        .ftco-navbar-light.scrolled .navbar-brand { color: #000 !important; }

        .hero-wrap { height: 90px; background: #b1b493; position: relative; overflow: hidden; }
        .hero-wrap::before {
            content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0;
            background: radial-gradient(circle at 15% 50%, rgba(255, 255, 255, 0.08), transparent 50%),
                        radial-gradient(circle at 85% 30%, rgba(0, 0, 0, 0.1), transparent 50%);
            z-index: 0; pointer-events: none;
        }
        .hero-wrap .slider-text { height: 400px; position: relative; z-index: 10; pointer-events: none; }
        .hero-wrap .slider-text * { pointer-events: auto; }
        .hero-wrap .bread { font-weight: 800; letter-spacing: -1px; text-shadow: 2px 4px 10px rgba(0,0,0,0.1); color: white !important; }
        .circles { position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; margin: 0; padding: 0; z-index: 1; pointer-events: none; }
        .circles li { 
            position: absolute; display: block; list-style: none; width: 20px; height: 20px; 
            background: rgba(255, 255, 255, 0.15); 
            backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.05);
            animation: animate 25s linear infinite; bottom: -150px; border-radius: 20%; 
        }
        .circles li:nth-child(1) { left: 25%; width: 80px; height: 80px; animation-delay: 0s; }
        .circles li:nth-child(2) { left: 10%; width: 20px; height: 20px; animation-delay: 2s; animation-duration: 12s; }
        .circles li:nth-child(3) { left: 70%; width: 20px; height: 20px; animation-delay: 4s; }
        .circles li:nth-child(4) { left: 40%; width: 60px; height: 60px; animation-delay: 0s; animation-duration: 18s; background: rgba(255, 255, 255, 0.1); }
        .circles li:nth-child(5) { left: 65%; width: 20px; height: 20px; animation-delay: 0s; }
        .circles li:nth-child(6) { left: 75%; width: 110px; height: 110px; animation-delay: 3s; background: rgba(255, 255, 255, 0.2); }
        .circles li:nth-child(7) { left: 35%; width: 150px; height: 150px; animation-delay: 7s; background: rgba(0, 0, 0, 0.05); }
        .circles li:nth-child(8) { left: 50%; width: 25px; height: 25px; animation-delay: 15s; animation-duration: 45s; }
        .circles li:nth-child(9) { left: 20%; width: 15px; height: 15px; animation-delay: 2s; animation-duration: 35s; background: rgba(255, 255, 255, 0.2); }
        .circles li:nth-child(10) { left: 85%; width: 150px; height: 150px; animation-delay: 0s; animation-duration: 11s; }
        @keyframes animate {
            0% { transform: translateY(0) rotate(0deg); opacity: 1; border-radius: 20%; }
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
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav nav ml-auto">
            <li class="nav-item"><a href="/#home-section" class="nav-link"><span>Home</span></a></li>
            <li class="nav-item"><a href="/projects" class="nav-link"><span>Projects</span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="hero-wrap d-flex align-items-center justify-content-center">
      <ul class="circles">
        <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
      </ul>
    </section>

    <section class="ftco-section bg-light">
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
