<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="https://cdn.icon-icons.com/icons2/604/PNG/512/travel_journey-10_icon-icons.com_56006.png">
  <link rel="icon" type="" href="https://cdn.icon-icons.com/icons2/604/PNG/512/travel_journey-10_icon-icons.com_56006.png">
  <title>
    Admin
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

<body class="g-sidenav-show  bg-gray-100">
  @include('partials/sidebar')
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Peminjaman</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Data Peminjaman</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-2">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">{{ auth()->user()->username }}</span>
              </a>
              <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-round btn-sm mb-0 me-1 btn-outline-primary" name="logout">LogOut</button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Daftar Peminjaman Buku</h5>
            <div class="table-responsive">
                <table class="table">
                    <thead>

                    
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Peminjaman</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Pengembalian</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                          
                        </tr>
                      </thead>
                      @if(isset($peminjamans))
<tbody>
    @foreach ($peminjamans as $peminjaman)
    <tr>
        <td>{{ $peminjaman->user->username }}</td>
        <td>{{ $peminjaman->buku->judul }}</td>
        <td>{{ $peminjaman->tanggalpeminjaman }}</td>
        <td>{{ $peminjaman->tanggalpengembalian }}</td>
        <td>
          <form action="{{ route('peminjaman.kembalikan', ['id' => $peminjaman->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-primary">Kembalikan</button>
            <a href="" class="btn btn-success">Generate Laporan</a>
        </form>
        
        </td>
    </tr>
    @endforeach
</tbody>
@endif

                      
                </table>
            </div>
        </div>
    </div>
    
    
</body>
    </html>