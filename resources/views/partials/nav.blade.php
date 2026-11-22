

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/img/ic11.png">
  <link rel="icon" type="" href="/img/ic11.png">
  <title>
    PERPUSTAKAAN DIGITAL
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset ('css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{ asset ('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('css/soft-ui-dashboard.css?v=1.0.7')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="home">
              PERPUSTAKAAN DIGITAL
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link {{ Request::segment(1) == 'home' ? "text-primary" : ''}}" href="/home">
                    <i class="fas fa-house opacity-6 text-dark me-1"></i>
                    Home
                  </a>
                <li class="nav-item">
                  <a class="nav-link {{ Request::segment(1) == 'buku' ? "text-primary" : ''}}" href="/buku">
                    <i class="fa-solid fa-book opacity-6 text-dark me-1"></i>
                    Buku
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::segment(1) == 'profile' ? "text-primary" : ''}}" href="/profile">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Profile
                  </a>
                </li>
              
                
                <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-round btn-sm mb-0 me-1 btn-outline-primary" name="logout">LogOut</button>
              </form>
              
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>

  <script src="../public/js/core/popper.min.js"></script>
  <script src="../public/js/core/bootstrap.min.js"></script>
  <script src="../public/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../public/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  
  <script>
    // Redirect to welcome page after logout
    document.querySelector('form').addEventListener('submit', function() {
        localStorage.clear(); // Clear local storage
        window.location.replace("/welcome"); // Redirect to welcome page
    });
</script>

  <!-- Github buttons -->
  
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script async defer src="https://kit.fontawesome.com/d91e407071.js" crossorigin="anonymous"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/public/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>