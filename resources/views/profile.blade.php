<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="https://cdn.icon-icons.com/icons2/604/PNG/512/travel_journey-10_icon-icons.com_56006.png">
  <link rel="icon" type="" href="https://cdn.icon-icons.com/icons2/604/PNG/512/travel_journey-10_icon-icons.com_56006.png">
    <title>Profil Peminjam</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .info-item {
            margin-bottom: 15px;
        }

        .info-label {
            font-weight: bold;
            color: #555;
            width: 100px; /* Lebar label */
            display: inline-block; /* Membuat label dan nilai sejajar */
        }

        .info-value {
            color: #333;
        }

        /* Menambahkan gaya untuk formulir edit profil */
        #editProfileModal .modal-dialog {
            max-width: 400px;
        }

        #editProfileModal .modal-body {
            text-align: left;
        }
    </style>
</head>
<body>

    
    @include('partials/nav')

    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('img/curved-images/curved11.jpg'); background-position-y: 50%;">
            <span class=""></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto"></div>
                <div class="col-auto my-auto">
                    <div class="h-100 text-center"> <!-- tambahkan class text-center di sini -->
                        <h2>Profil Peminjam</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    



<div class="profile-container">
    <img src="/img/profile.jpg" alt="User Profile" class="profile-image">
    

    <div class="profile-info">
        <div class="info-item">
            <span class="info-label">Username:</span>
            <span class="info-value">{{ auth()->user()->username }}</span>
        </div>

        <div class="info-item">
            <span class="info-label">Email:</span>
            <span class="info-value">{{ auth()->user()->email }}</span>
        </div>

        <div class="info-item">
            <span class="info-label">Nama:</span>
            <span class="info-value">{{ auth()->user()->namalengkap }}</span>
        </div>

        <div class="info-item">
            <span class="info-label">Alamat:</span>
            <span class="info-value">{{ auth()->user()->alamat }}</span>
        </div>

        <!-- Tambahkan kolom-kolom tambahan sesuai kebutuhan -->

        <div class="info-item">
            <span class="info-label">Status:</span>
            <span class="info-value">Aktif</span>
        </div>
    </div>

    <!-- Tombol Edit Profil -->
<!-- Button trigger modal Edit Profil -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProfilModal">
    Edit Profil
</button>



<!-- Modal Edit Profil -->
<div class="modal fade" id="editProfilModal" tabindex="-1" role="dialog" aria-labelledby="editProfilModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulir Edit Profil akan ditambahkan di sini -->
                    {{-- <form>
                        <div class="form-group">
                            <label for="editNama">Nama:</label>
                            <input type="text" class="form-control" id="editNama" placeholder="Masukkan Nama" value="{{ auth()->user()->namalengkap }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="editEmail">Email:</label>
                            <input type="text" class="form-control" id="editEmail" placeholder="Masukkan Email" value="{{ auth()->user()->email}}">
                        </div>
                        <div class="form-group">
                            <label for="editEmail">User Name:</label>
                            <input type="text" class="form-control" id="editEmail" placeholder="Masukan Username" value="{{ auth()->user()->username}}" >
                        </div>
                        <div class="form-group">
                            <label for="editEmail">Alamat:</label>
                            <input type="text" class="form-control" id="editEmail" placeholder="Masukkan Alamat" value="{{ auth()->user()->alamat}}">
                        </div>
                    </form> --}}

                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="{{ auth()->user()->username }}">
                        </div>
                        <div class="form-group">
                            <label for="editEmail">Email:</label>
                            <input type="text" class="form-control" id="editEmail" placeholder="Masukkan Email" value="{{ auth()->user()->email}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="editNama">Nama:</label>
                            <input type="text" class="form-control" id="editNama" placeholder="Masukkan Nama" value="{{ auth()->user()->namalengkap }}">
                        </div>
                        <div class="form-group">
                            <label for="editEmail">Alamat:</label>
                            <input type="text" class="form-control" id="editEmail" placeholder="Masukkan Alamat" value="{{ auth()->user()->alamat}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                
            </form>
            </div>
        </div>
</div>

<!-- Button trigger modal Hapus Akun -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusAkunModal">
    Hapus Akun
</button>

<!-- Modal Hapus Akun -->
<div class="modal fade" id="hapusAkunModal" tabindex="-1" role="dialog" aria-labelledby="hapusAkunModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileModalLabel">Hapus Akun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form content goes here -->
                <p>Apakah Anda yakin ingin menghapus akun?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>

    
</div>
@include('partials/footer')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

</body>
</html>
