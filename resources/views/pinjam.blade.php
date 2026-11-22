<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="https://cdn.icon-icons.com/icons2/604/PNG/512/travel_journey-10_icon-icons.com_56006.png">
  <link rel="icon" type="" href="https://cdn.icon-icons.com/icons2/604/PNG/512/travel_journey-10_icon-icons.com_56006.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .comment-card {
    transition: transform 0.2s;
}

.comment-card:hover {
    transform: scale(1.02);
}

    </style>
</head>


<body >
    @include('partials/nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6"> <!-- Adjust the column size as needed -->
                <div class="card">
                    <div class="card-header">Form Peminjaman</div>
                    <div class="card-body">
                        <form action="{{ route('peminjaman.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" >
                            </div>
                            <div class="form-group">
                                <label for="judulBuku">Judul Buku</label>
                                <input type="text" class="form-control" id="judulBuku" name="judulBuku" value="{{$buku->judulBuku}}">
                            </div>
                            <div class="form-group">
                                <label for="tanggalPeminjam">Tanggal Peminjam</label>
                                <input type="date" class="form-control" id="tanggalPeminjam" name="tanggalPeminjam" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggalPengembalian">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" id="tanggalPengembalian" name="tanggalPengembalian" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Pinjam</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
