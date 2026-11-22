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
    <div class="container mt-8">
        <div class="row ">
            <!-- Deskripsi Buku -->
            
            <!-- Card dengan gambar buku -->
            <div class="col-md-3 col-sm-6">
                <div class="card card-sm">
                    <div class="text-center">
                        <img src="{{$buku->gambar}}" alt="Gambar Buku" class="mt-2 mx-auto card-img-top" style="max-width: 150px; max-height: 230px;">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{ $buku->judul }}</h3>
                        <p class="card-text">Penulis: {{ $buku->penulis }}</p>
                        <p class="card-text">Penerbit: {{ $buku->penerbit }}</p>
                        <p class="card-text">Tahun Terbit: {{ $buku->tahunTerbit }}</p>
                        <!-- Button trigger modal -->
    <a href="{{ route('pinjam.index', $buku->judul) }}" class="btn btn-primary">Pinjam Buku</a>
  
  
  
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Deskripsi Buku</h3>
                        <p class="card-text">{{ $buku->deskripsi}}</p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h4 class="card-title">Komentar</h4>
                        @if ($buku->ulasan->isEmpty())
                        <p>Komentar Belum ada</p>
                    @else
                    @foreach($buku->ulasan as $comment)
                    <div class="card mb-3 comment-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="https://i.pinimg.com/564x/56/2e/be/562ebed9cd49b9a09baa35eddfe86b00.jpg" alt="Profile Picture" class="rounded-circle mr-2" style="width: 30px; height: 30px;">
                                    <h6 class="card-title mb-0 mr-auto">{{ $comment->user->username }}</h6>
                                </div>
                                <p class="card-text">{{ $comment->ulasan }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                    @endif
                    
                            <form action="{{route('komen.create',$buku->id)}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            {{-- <input type="text" name="comment" class="form-control" placeholder="Tambahkan Komentar...."> --}}
                                            <textarea name="ulasan" type="text" id="" class="form-control" cols="30" rows="10" style="height: 102px;" ></textarea>
                                        </div>
                                        <button class="btn btn-success" style="margin-top: 5px; width: 100%"  placeholder="Tambahkan Komentar...." type="submit">Kirim</button>
                                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
