<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Lara Stater - Make websites easier</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

  <!-- ========================= CSS here ========================= -->
  <link rel="stylesheet" href="{{ asset('assets/css/landingpage/bootstrap-5.0.0-alpha-2.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('assets/css/landingpage/LineIcons.2.0.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('assets/css/landingpage/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('assets/css/landingpage/main.css') }}" type="text/css" />

</head>

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

  <!-- ========================= preloader start ========================= -->
  <div class="preloader">
    <div class="loader">
      <div class="ytp-spinner">
        <div class="ytp-spinner-container">
          <div class="ytp-spinner-rotator">
            <div class="ytp-spinner-left">
              <div class="ytp-spinner-circle"></div>
            </div>
            <div class="ytp-spinner-right">
              <div class="ytp-spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- preloader end -->




  <!-- ========================= header start ========================= -->
  <header class="header">
    <div class="navbar-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/img/landingpage/logo/logo.svg') }}" alt="Logo" />
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul id="nav" class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#features">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#about">About</a>
                  </li>

                  <li class="nav-item">
                    <a class="page-scroll" href="#why">Why</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#version">Version</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
              <!-- navbar collapse -->
            </nav>
            <!-- navbar -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- navbar area -->
  </header>
  <!-- ========================= header end ========================= -->

  <!-- ========================= hero-section start ========================= -->
  <section id="home" class="hero-section">
    <div class="container">
      <div class="row align-items-center position-relative">
        <div class="col-lg-6">
          <div class="hero-content">
            <h1 class="wow fadeInUp" data-wow-delay=".4s">Lara Stater</h1>
            <p class="wow fadeInUp" data-wow-delay=".6s">
              Build websites faster with Lara Stater! Enjoy the magic that exists.
            </p>
            <a href="https://github.com/rahmatsubandi/lara-stater" target="_blank" rel="nofollow"
              class="main-btn border-btn btn-hover wow fadeInUp" data-wow-delay=".6s"> <i
                class="lni lni-github-original"></i> Download</a>
            <a href="#features" class="scroll-bottom"> <i class="lni lni-arrow-down"></i></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
            <img src="{{ asset('assets/img/landingpage/hero/hero-img.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================= hero-section end ========================= -->

  <!-- ========================= feature-section start ========================= -->
  <section id="features" class="feature-section pt-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-8 col-sm-10">
          <div class="single-feature">
            <div class="icon">
              <i class="lni lni-laravel"></i>
            </div>
            <div class="content">
              <h3>Laravel 7</h3>
              <p>Built using the modern PHP framework, Laravel version 7.25.0 to stay up to date with technology</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-8 col-sm-10">
          <div class="single-feature">
            <div class="icon">
              <i class="lni lni-layout"></i>
            </div>
            <div class="content">
              <h3>Clean Design & Code</h3>
              <p>Implementing a clean design, and neat costing arrangements to make it easier for developers to read the
                code</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-8 col-sm-10">
          <div class="single-feature">
            <div class="icon">
              <i class="lni lni-coffee-cup"></i>
            </div>
            <div class="content">
              <h3>Easy to Use</h3>
              <p>Beginners, intermediates, even experts can easily operate and develop Lara Stater</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================= feature-section end ========================= -->

  <!-- ========================= about-section start ========================= -->
  <section id="about" class="about-section pt-150">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6">
          <div class="about-img wow fadeInUp" data-wow-delay=".1s">
            <img src="{{ asset('assets/img/landingpage/about/about-1.png') }}" alt="" class="w-100">
            <img src="{{ asset('assets/img/landingpage/about/about-left-shape.svg') }}" alt="" class="shape shape-1">
            <img src="{{ asset('assets/img/landingpage/about/left-dots.svg') }}" alt="" class="shape shape-2">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="about-content">
            <div class="section-title mb-30">
              <h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Manage photos easily like in a file manager</h1>
              <p class="wow fadeInUp" data-wow-delay=".4s">Manage images with a view similar to a file manager, can make
                it easier to manage multiple-scale images, find out what images are on the system, and much more..</p>
            </div>
            <button disabled class="main-btn btn-hover border-btn wow fadeInUp" data-wow-delay=".6s"
              style="cursor: no-drop;">Discover More</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================= about-section end ========================= -->

  <!-- ========================= about2-section start ========================= -->
  <section id="about" class="about-section pt-150">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6">
          <div class="about-content">
            <div class="section-title mb-30">
              <h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Easily manage website settings on the dashboard page
              </h1>
              <p class="wow fadeInUp" data-wow-delay=".4s">Set website name, email address, phone number, address, city,
                logo, display, permissions and more..</p>
            </div>
            <ul>
              <li>Easily to Use</li>
              <li>Easily to Development</li>
              <li>Easily to Manage</li>
            </ul>
            <button disabled class="main-btn btn-hover border-btn wow fadeInUp" data-wow-delay=".6s"
              style="cursor: no-drop;">Learn More</button>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 order-first order-lg-last">
          <div class="about-img-2 wow fadeInUp" data-wow-delay=".1s">
            <img src="{{ asset('assets/img/landingpage/about/about-2.png') }}" alt="" class="w-100">
            <img src="{{ asset('assets/img/landingpage/about/about-right-shape.svg') }}" alt="" class="shape shape-1">
            <img src="{{ asset('assets/img/landingpage/about/right-dots.svg') }}" alt="" class="shape shape-2">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================= about2-section end ========================= -->

  <!-- ========================= about3-section start ========================= -->
  <section id="about" class="about-section pt-150">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12">
          <div class="about-content">
            <div class="section-title text-center mb-20">
              <button disabled class="main-btn btn-hover fadeInUp" data-wow-delay=".6s" style="cursor: no-drop;">More
                Detail..</button>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- ========================= about3-section end ========================= -->

  <!-- ========================= feature-section start ========================= -->
  <section id="why" class="feature-extended-section pt-100">
    <div class="feature-extended-wrapper">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-5 col-xl-6 col-lg-8 col-md-9">
            <div class="section-title text-center mb-60">
              <h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Why Choose Lara Stater?</h1>
              <p class="wow fadeInUp" data-wow-delay=".4s">In every website, of course, the existing features are always
                monotonous or the same. With Lara Stater, we can simplify and speed up our work as developers.</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single-feature-extended">
              <div class="icon">
                <i class="lni lni-display"></i>
              </div>
              <div class="content">
                <h3>Prefix</h3>
                <p>Good preparation for building a website with Laravel</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature-extended">
              <div class="icon">
                <i class="lni lni-leaf"></i>
              </div>
              <div class="content">
                <h3>Awesome Design</h3>
                <p>Minimalist and neat design for comfortable viewing</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature-extended">
              <div class="icon">
                <i class="lni lni-grid-alt"></i>
              </div>
              <div class="content">
                <h3>Ready to Use</h3>
                <p>Ready to use for all types of use, needs and development</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature-extended">
              <div class="icon">
                <i class="lni lni-code"></i>
              </div>
              <div class="content">
                <h3>Programming Language</h3>
                <p>Using a programming language that is very familiar and widely used</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature-extended">
              <div class="icon">
                <i class="lni lni-layers"></i>
              </div>
              <div class="content">
                <h3>Essential Sections</h3>
                <p>Parts that can be easily adjusted according to needs</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature-extended">
              <div class="icon">
                <i class="lni lni-rocket"></i>
              </div>
              <div class="content">
                <h3>Highly Optimized</h3>
                <p>Light in the scope of the server so as not to burden the system too much</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- ========================= feature-section end ========================= -->

  <!-- ========================= pricing-section end ========================= -->
  <section id="pricing" class="pricing-section">
  </section>
  <!-- ========================= pricing-section end ========================= -->

  <!-- ========================= testimonial-section start ========================= -->
  <section id="version" class="testimonial-section pt-90">
    <div class="container">
      <div class="section-title text-center">
        <h1 class="mb-30">Development version</h1>
        <p>The current version is still in development or beta testing 1.1.x</p><br />
        <a href="https://github.com/rahmatsubandi/lara-stater" target="_blank"
          class="main-btn border-btn btn-hover wow fadeInUp" rel="nofollow"><i class="lni lni-github"></i> Download
          Now</a>
      </div>
    </div>
  </section>
  <!-- ========================= testimonial-section end ========================= -->

  <!-- ========================= subscribe-section start ========================= -->
  <section id="contact" class="subscribe-section pt-120 wow fadeInUp" data-wow-delay=".5s">
    <div class="container">
      <div class="subscribe-wrapper img-bg">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-7">
            <div class="section-title mb-15">
              <h1 class="text-white mb-25">Subscribe Our Newsletter</h1>
              <p class="text-white pr-5">Maybe the subscription feature is not yet available..</p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-5">
            <form action="#" class="subscribe-form">
              <input type="email" name="subs-email" id="subs-email" placeholder="Your Email" readonly
                style="cursor: no-drop;">
              <button type="submit" class="main-btn btn-hover" style="cursor: no-drop;" disabled
                style="cursor: no-drop;">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================= subscribe-section end ========================= -->

  <!-- ========================= footer start ========================= -->
  <footer class="footer">
    <div class="container">
      <div class="widget-wrapper">
        <div class="row">

          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="footer-widget">
              <div class="logo mb-30">
                <a href="#"> <img src="{{ asset('assets/img/landingpage/logo/logo.svg') }}" alt=""> </a>
              </div>
              <p class="desc mb-30 text-white">Handcrafted full <span>❤</span> by
                <a href="http://rahmatsubandi.me/" target="_blank" rel="noopener noreferrer" class="text-white">Rahmat
                  Subandi</a>,
                and <a href="http://owldevs.id/" target="_blank" rel="noopener noreferrer" class="text-white">Team</a>.
              </p>
              <ul class="socials">
                <li>
                  <a href="jvascript:void(0)"> <i class="lni lni-facebook-original"></i> </a>
                </li>
                <li>
                  <a href="jvascript:void(0)"> <i class="lni lni-twitter-original"></i> </a>
                </li>
                <li>
                  <a href="jvascript:void(0)"> <i class="lni lni-instagram-original"></i> </a>
                </li>
                <li>
                  <a href="jvascript:void(0)"> <i class="lni lni-linkedin-original"></i> </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-xl-2 col-lg-2 col-md-6">
            <div class="footer-widget">
              <h3>Fast Link</h3>
              <ul class="links">
                <ul class="links">
                  <li> <a href="{{ route('login') }}">Login</a> </li>
                  <li> <a href="{{ route('register') }}">Registration</a> </li>
                  <li> <a href="{{ route('password.request') }}">Forgot Password</a> </li>
                  <li> <a href="mailto:rhmtin12@gmail.com">Need Support ?</a> </li>
                </ul>
              </ul>
            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="footer-widget">
              <h3>Analytics</h3>
              <ul class="links">
                <li>
                  <a href="https://app.splitbee.io/public/larastater.netlify.app" target="_blank"
                    rel="noopener noreferrer">
                    <img alt="Splitbee Analytics" src="https://splitbee.io/splitbee-badge.svg" decoding="async"
                      data-nimg="true">
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="footer-widget">
              <h3>Sponsorship</h3>
              <ul class="links">
                <li>
                  <script type='text/javascript' src='https://storage.ko-fi.com/cdn/widget/Widget_2.js'></script>
                  <script type='text/javascript'>
                    kofiwidget2.init('Buy me coffee', '#0a48b3', 'B0B85U6Z6');kofiwidget2.draw();
                  </script>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>

    </div>
  </footer>
  <!-- ========================= footer end ========================= -->

  <!-- ========================= scroll-top ========================= -->
  <a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  <!-- ========================= JS here ========================= -->
  <script src="{{ asset('assets/js/landingpage/bootstrap.5.0.0.alpha-2-min.js') }}"></script>
  <script src="{{ asset('assets/js/landingpage/wow.min.js') }}"></script>
  <script src="{{ asset('assets/js/landingpage/main.js') }}"></script>
</body>

</html>