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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data User</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Data User</h6>
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
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data User</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-4 ml-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahDataModal">
                    Tambah Data
                </button>
              
              
                  <div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              <form action="{{ route('users.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="namalengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select class="form-control" id="role" name="role">
                                        <option value="peminjam">Peminjam</option>
                                        <option value="petugas">Petugas</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                

                  <thead>

                    
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Lengkap</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>

                  </thead>
                    <tbody>@foreach ($users as $user)
                      <tr>
                          <td class="text-center">{{ $user->username }}</td>
                          <td class="text-center">{{ $user->email }}</td>
                          <td class="text-center">{{ $user->namalengkap }}</td>
                          <td class="text-center">{{ $user->role }}</td>
                          <td>
                              <div class="text-center">
                                  <button class="btn btn-primary btn-circle btn-view" data-toggle="modal" data-target="#modalDeskripsi{{ $user->id }}">
                                      <i class="fas fa-eye"></i>
                                  </button>
                              </div>
                      
                              <!-- Modal -->
                              <div class="modal fade" id="modalDeskripsi{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="modalDeskripsiTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="modalDeskripsiTitle">Alamat Pengguna</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <p>{{ $user->alamat }}</p>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </td>
                          <td>
                              <div class="text-center">
                                  <button class="btn btn-primary btn-circle btn-edit" data-toggle="modal" data-target="#modalEdit{{ $user->id }}">
                                      <i class="fas fa-edit"></i>
                                  </button>
                                  <form action="{{ route('users.destroy', ['id' => $user->id]) }}"method="POST" style="display: inline-block">

                                    @csrf
    
                                    @method('DELETE')
    
                                    <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Apakah Ingin Menghapus Buku Ini?')">
    
                                        <i class="fas fa-trash"></i>
    
                                    </button>
    
                                </form>
                              </div>
                      
                              <!-- Modal Edit -->
                              <div class="modal fade" id="modalEdit{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="modalEditTitle{{ $user->id }}" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="modalEditTitle{{ $user->id }}">Edit Informasi Pengguna</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <form action="{{ route('update.user', $user->id) }}" method="POST">
                                                  @csrf
                                                  @method('PUT')
                                                  <div class="mb-3">
                                                      <label for="username">Username</label>
                                                      <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
                                                  </div>
                                                  <div class="mb-3">
                                                      <label for="email">Email</label>
                                                      <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                                  </div>
                                                  <div class="mb-3">
                                                      <label for="namalengkap">Nama Lengkap</label>
                                                      <input type="text" class="form-control" id="namalengkap" name="namalengkap" value="{{ $user->namalengkap }}">
                                                  </div>
                                                  <div class="mb-3">
                                                      <label for="alamat">Alamat</label>
                                                      <textarea class="form-control" id="alamat" name="alamat">{{ $user->alamat }}</textarea>
                                                  </div>
                                                  <div class="mb-3">
                                                      <label for="role">Role</label>
                                                      <select class="form-control" id="role" name="role">
                                                          <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                                          <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                                      </select>
                                                  </div>
                                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                   
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
  <!--   Core JS Files   -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  function tambahData() {
      // Ambil data dari form
      var username = document.getElementById('username').value;
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
      var namalengkap = document.getElementById('namalengkap').value;
      var alamat = document.getElementById('alamat').value;
      var role = document.getElementById('role').value;

      // Kirim data ke server (misalnya dengan AJAX)
      // Pastikan Anda memiliki endpoint yang sesuai untuk menangani penambahan data

      // Setelah berhasil, tutup modal
      $('#tambahDataModal').modal('hide');

      // Optional: Tampilkan pesan sukses atau refresh halaman
      alert('Data berhasil ditambahkan');
      location.reload();
  }
</script>
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