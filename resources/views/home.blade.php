<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PERPUSTAKAAN DIGITAL</title>
  <link rel="apple-touch-icon" sizes="76x76" href="https://cdn.icon-icons.com/icons2/604/PNG/512/travel_journey-10_icon-icons.com_56006.png">
  <link rel="icon" type="" href="https://cdn.icon-icons.com/icons2/604/PNG/512/travel_journey-10_icon-icons.com_56006.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
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
<body>


  
@include('partials/nav')

<div class="container-fluid">
  <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('img/curved-images/curved0.jpg'); background-position-y: 50%;">
      <span class="mask bg-gradient-primary opacity-6"></span>
  </div>
  <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
          <div class="col-auto"></div>
              <div class="container mt-5">

      </div>
  </div>
</div>

<div class="container">
  <div class="card">
      <div class="card-body">
          <h5 class="card-title">Selamat Datang di Perpustakaan Online</h5>
          <p class="card-text">Nikmati akses ke ribuan buku secara online. Daftar dan pinjam sekarang juga!</p>
          <a  class="btn btn-primary" href="/buku">Pinjam Sekarang</a>
      </div>
  </div>
  <div class="content">
      <h2>Informasi Perpustakaan</h2>
      <p>Perpustakaan Online menyediakan akses ke berbagai buku berkualitas dalam berbagai genre.</p>
      <p>Anda dapat mencari buku, membaca sinopsis, dan melakukan pemesanan secara online.</p>
      <p>Nikmati kenyamanan membaca di mana saja dan kapan saja dengan Perpustakaan Online.</p>
  </div>
</div>

{{-- <div class="categori_container">
    <div class="categories">
        <a href="#">Fiksi</a>
        <a href="#">Non-Fiksi</a>
        <a href="#">Romantis</a>
        <a href="#">Misteri</a>
        <!-- Tambahkan kategori buku lainnya sesuai kebutuhan -->
    </div>
</div> --}}


{{-- <div class="book-images">
  <img src="/img/buku.2.jpg" alt="Non-Fiksi Book" data-toggle="modal" data-target="#bookModal" data-title="Non-Fiksi Book">
  <img src="romance.jpg" alt="Romantis Book" data-toggle="modal" data-target="#bookModal" data-title="Romantis Book">
  <img src="mystery.jpg" alt="Misteri Book" data-toggle="modal" data-target="#bookModal" data-title="Misteri Book">
  <!-- Tambahkan gambar buku untuk kategori lainnya sesuai kebutuhan -->
</div> --}}


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- ... (Bagian sebelumnya tetap sama) -->

<!-- Modal -->
{{-- <div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bookModalLabel">Book Title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="book-details">
            <div class="book-description" id="bookDescription">
              <!-- Deskripsi buku akan muncul di sini -->
            </div>
            <div class="book-image-container">
              <img src="" alt="Book Image" id="bookImage">
            </div>
          </div>
          <p>Give your rating:</p>
          <div class="rating-container">
            <input type="radio" name="rating" value="5" id="star5"><label for="star5">5 stars</label>
            <input type="radio" name="rating" value="4" id="star4"><label for="star4">4 stars</label>
            <input type="radio" name="rating" value="3" id="star3"><label for="star3">3 stars</label>
            <input type="radio" name="rating" value="2" id="star2"><label for="star2">2 stars</label>
            <input type="radio" name="rating" value="1" id="star1"><label for="star1">1 star</label>
          </div>
          <p>Write your review:</p>
          <textarea class="form-control" rows="4" id="reviewText"></textarea>
          <button type="button" class="btn btn-primary mt-3" onclick="submitReview()">Submit Review</button>
          <button type="button" class="btn btn-success mt-3" onclick="pinjamBuku()">Pinjam Buku</button>

        </div>
      </div>
    </div>
  </div> --}}
  

  @include('partials/footer')
  <script>
    // Data deskripsi dan gambar buku sesuai dengan kategori
    const bookDetails = {
      'Fiksi Book': {
        description: 'Ini adalah deskripsi untuk buku Fiksi. Buku ini memikat pembaca dengan cerita yang penuh imajinasi dan petualangan.',
        image: '<img src="/img/buku.1.jpg" width="30px" height="20px" alt="Fiksi"'
      },
      'Non-Fiksi Book': {
        description: 'Ini adalah deskripsi untuk buku Non-Fiksi. Buku ini memberikan informasi yang mendalam tentang topik tertentu.',
        image: 'non-fiction.jpg'
      },
      'Romantis Book': {
        description: 'Ini adalah deskripsi untuk buku Romantis. Buku ini mengisahkan kisah cinta yang mengharukan.',
        image: '<img src="/img/buku.1.jpg" width="3px" height="2px" alt="Romantis Book Cover">'
      },
      'Misteri Book': {
        description: 'Ini adalah deskripsi untuk buku Misteri. Buku ini penuh dengan teka-teki dan kejutan yang menarik.',
        image: 'mystery.jpg'
      }
      // Tambahkan deskripsi dan gambar untuk kategori buku lainnya sesuai kebutuhan
    };
  
    // Fungsi untuk menampilkan deskripsi dan gambar buku
    function showBookDetails(title) {
      const details = bookDetails[title];
      document.getElementById('bookDescription').innerHTML = details.description;
      document.getElementById('bookImage').src = details.image;
    }
  
    // Fungsi untuk reset modal setelah modal tertutup
    $('#bookModal').on('hidden.bs.modal', function () {
      document.getElementById('bookDescription').innerHTML = '';
      document.getElementById('bookImage').src = '';
      $('input[name=rating]').prop('checked', false);
      $('#reviewText').val('');
    });
  
    // Fungsi untuk menangani klik pada gambar buku
    $('.book-images img').on('click', function () {
      const bookTitle = $(this).data('title');
      showBookDetails(bookTitle);
      $('#bookModalLabel').text(bookTitle);
      $('#bookModal').modal('show');
    });
  
    // Fungsi untuk menangani submit review
    function submitReview() {
      const rating = $("input[name='rating']:checked").val();
      const reviewText = $("#reviewText").val();
  
      // Lakukan sesuatu dengan rating dan reviewText, misalnya menyimpannya atau menampilkan pesan sukses
      alert("Review submitted! Rating: " + rating + ", Review: " + reviewText);
  
      // Tutup modal setelah submit
      $('#bookModal').modal('hide');
    }
  </script>
  
  </body>
  </html>