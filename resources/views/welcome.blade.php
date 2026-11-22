<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="https://cdn.icon-icons.com/icons2/604/PNG/512/travel_journey-10_icon-icons.com_56006.png">
  <link rel="icon" type="" href="https://cdn.icon-icons.com/icons2/604/PNG/512/travel_journey-10_icon-icons.com_56006.png">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="css/nucleo-icons.css" rel="stylesheet" />
  <link href="css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
  <!-- Navbar -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="https://cdn.icon-icons.com/icons2/604/PNG/512/travel_journey-10_icon-icons.com_56006.png">
    <link rel="icon" type="" href="https://cdn.icon-icons.com/icons2/604/PNG/512/travel_journey-10_icon-icons.com_56006.png">
    <title>
      Soft UI Dashboard by Creative Tim
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
    <style>

        .search-container {
          padding: 15px;
          text-align: right;
        }
    
        .search-container input {
          padding: 8px;
          border: none;
          border-radius: 5px;
          margin-right: 5px;
        }
    
        .search-container button {
          padding: 8px 15px;
          border: none;
          border-radius: 5px;
          background-color: #696cff;
          color: #000000;
        }
    
        .categories {
          margin: 20px 0;
          text-align: center;
        }
    
        .categories a {
          display: inline-block;
          margin: 0 10px;
          color: #696cff;
          text-decoration: none;
          font-weight: bold;
          transition: color 0.3s ease-in-out;
        }
    
        .categories a:hover {
          color: #000000 !important;
        }
    
        .book-images {
          display: flex;
          justify-content: center;
          margin-top: 20px;
        }
    
        .book-images img {
          width: 100px;
          height: 150px;
          margin: 0 10px;
          border-radius: 5px;
          cursor: pointer;
          transition: transform 0.3s ease-in-out;
        }
    
        .book-images img:hover {
          transform: scale(1.1);
        }
    
        .modal-header, .modal-body {
          text-align: center;
        }
    
        .rating-container {
          display: flex;
          justify-content: center;
          margin-top: 20px;
        }
    
        .rating-container input {
          margin: 0 5px;
        }
      </style>
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
                <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                 
                  
                    <li class="nav-item d-flex align-items-center">
                        <a class="btn btn-round btn-sm mb-0 btn-outline-balck me-2" href="login">Login</a>
                      </li>
                      <ul class="navbar-nav d-lg-block d-none">
                        <li class="nav-item">
                          <a href="register" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-light">Register</a>
                        </li>
                      </ul>
                    
                
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
    <!-- Github buttons -->
    
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script async defer src="https://kit.fontawesome.com/d91e407071.js" crossorigin="anonymous"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/public/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  </body>
  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <section class="min-vh-100 ">
      <div class="page-header align-items-start min-vh-50 pt-4 pb-11 m-5  border-radius-lg" style="background-image: url('img/curved-images/curved14.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h1 class="text-white mb-2 mt-5">Selamat Datang</h1>
              <h3 class="text-white">Di Perpustakaan Digital</h3>
              
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n11 mt-md-n6 mt-n7">
          <div class="col-xl-8 col-lg-5 col-md-10 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <p class="text-lead text-black">Perpustakaan digital adalah platform yang menyediakan akses 
                online ke berbagai koleksi buku, jurnal, dan materi bacaan lainnya. Dengan perpustakaan 
                digital, pengguna dapat dengan mudah mencari, membaca, dan mengunduh materi-materi 
                tersebut tanpa perlu mengunjungi perpustakaan fisik. Ini memungkinkan akses yang lebih 
                luas dan fleksibel bagi pembaca dari berbagai lokasi, sehingga meningkatkan kesempatan 
                untuk belajar dan mengakses informasi.</p>
              </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="book-images">
        <img src="/img/buku.1.jpg" alt="Non-Fiksi Book" data-toggle="modal" data-target="#bookModal" data-title="Non-Fiksi Book">
        <img src="/img/buku.2.jpg" alt="Romantis Book" data-toggle="modal" data-target="#bookModal" data-title="Romantis Book">
        <img src="/img/buku.3.jpg" alt="Misteri Book" data-toggle="modal" data-target="#bookModal" data-title="Misteri Book">
        <!-- Tambahkan gambar buku untuk kategori lainnya sesuai kebutuhan -->
      </div>

    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    @include('partials/footer')
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  </main>
  <!--   Core JS Files   -->
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap.min.js"></script>
  <script src="js/plugins/perfect-scrollbar.min.js"></script>
  <script src="js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>