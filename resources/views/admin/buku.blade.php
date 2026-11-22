
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Buku</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Data Buku</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-2">
                <i class="fa fa-user me-sm-1"></i>
                @if(auth()->check())
                <span class="d-sm-inline d-none">{{ auth()->user()->username }}</span>
            @endif
            

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
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data Buku</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-4 ml-2">
                  <div class="text-right">
                    <div class="btn btn-success btn-icon-split mb-4 d-inline-block" data-toggle="modal" data-target="#exampleModal">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Buku</span>
                    </div>
                </div>
                  
                  @foreach ($buku as $item)
    <div class="modal fade" id="modalDeskripsi{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="modalDeskripsiLabel{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeskripsiLabel{{ $item->id }}">Deskripsi Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{ $item->deskripsi }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endforeach


                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog " role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route("buku.create")}}" method="POST">
                            @csrf
                            <div class="form-group">
                              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="sampul" name="gambar" placeholder="Sampul Buku">
                        </div>
                        {{-- <div class="form-group border p-3">
                          <label for="sampul">Sampul Buku</label>
                          <input type="file" class="form-control-file" id="sampul" name="gambar" accept="image/*">
                          <small id="sampulHelp" class="form-text text-muted">Unggah gambar sampul buku.</small>
                      </div> --}}
                      
                        <div class="form-group">
                            <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="tahunTerbit" name="tahunTerbit" placeholder="Tahun Terbit">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="tahunTerbit" name="deskripsi" placeholder="Deskripsi">
                        </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Kategori:</label>
                              <div class="card">
                                <div class="card">
                                  <div class="card-body">
                                      <h5 class="card-title">Pilih Kategori</h5>
                                      <select name="kategori" id="kategori" class="form-select mb-3">
                                          @foreach($kategoris as $kategori)
                                              <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                                          @endforeach
                                      </select>
                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKategoriModal">Tambah Kategori Buku</button>
                                  </div>
                              </div>
                            </div>
                            
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Tambah Buku</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="tambahKategoriModal" tabindex="-1" aria-labelledby="tambahKategoriModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahKategoriModalLabel">Tambah Kategori Buku</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Isi modal di sini, misalnya form untuk menambah kategori baru -->
                                <form action="/add-category" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary" onclick="submitForm()">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                

                  <thead>

                    
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Buku</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Penulis</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Penerbit</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahun Terbit</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      @foreach ($buku as $item)
                        <tr>
                            <td><img src="{{$item->gambar}}" alt="{{$item->judul}}" style="max-width: 100px; max-height: 100px;"></td>
                            <td class="text-center">{{$item->judul}}</td>
                            <td class="text-center">{{$item->penulis}}</td>
                            <td class="text-center">{{$item->penerbit}}</td>
                            <td class="text-center">{{$item->tahunTerbit}}</td>
                            <td class="text-center">{{$item->kategori}}</td>
                            <td>
                              <div class="text-center">
                                <button class="btn btn-primary btn-circle btn-view" data-toggle="modal" data-target="#modalDeskripsi{{ $item->id }}">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            
                          </td>
                          
                            {{-- <td>{{$item->deskripsi}}</td> --}}
                            <td>
                              
      
                                      <!-- Tombol untuk membuka modal -->
                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $item->id }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    
                                    
                                  </div>
                              </div>
                          
                              <!-- Modal untuk form edit -->
                              <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Buku</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <!-- Form edit buku -->
                                              {{-- @foreach ($buku as $item) --}}
                                              <form action="{{ route('bukus.update', ['buku' => $item->id]) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="judul">Judul</label>
                                                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $item->judul }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="penulis">Penulis</label>
                                                    <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $item->penulis }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="sampul">Sampul Buku</label>
                                                    <input type="text" class="form-control" id="sampul" name="sampul" value="{{ $item->sampul }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="penerbit">Penerbit</label>
                                                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $item->penerbit }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tahun_terbit">Tahun Terbit</label>
                                                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $item->tahunTerbit }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="deskripsi">Deskripsi</label>
                                                    <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $item->deskripsi }}</textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                            
                                            
                                          </div>
                                      </div>
                                  </div>
                              </div>
                         <form action="{{ route('bukus.destroy', ['id' => $item->id]) }}"method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Apakah Ingin Menghapus Buku Ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                              
                        </td>
                        </tr>
                        @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Tema</h5>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->

        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
      </div>
    </div>
  </div>
  <script>
    function submitForm() {
        // Submit form tambah kategori
        document.querySelector('#tambahKategoriModal form').submit();
    }
</script>
  <!--   Core JS Files   -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>