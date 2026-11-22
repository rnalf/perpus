<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Perpustakaan Digital</title>
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

    .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1cb;
            min-width: 160px;
            border-radius: 15px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            border-radius: 15px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #dddddd8d;
            border-radius: 15px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .kotak {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.376);
            transition: 0.3s;
            width: 200px;
            border-radius: 15px;
            padding: 10px;
            margin: 30px;
        }

        .kotak:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
    
  </style>
</head>
<body>


  
@include('partials/nav')


<div class="container-fluid">
  <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('img/curved-images/curved-11.jpg'); background-position-y: 50%;">
      <span class=""></span>
  </div>
  <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
      <div class="row gx-4">
        <div class="col-3 d-flex justify-content-center">
          
          
            <div class="col-auto"></div>
                <div class="container mt-5">
  
        </div>
          
      </div>
      
      </div>
  </div>
</div>

{{-- <div class="dropdown">
    <div class="kotak">
        <span>Kategori Buku</span>
        <div class="dropdown-content">
          @foreach($kategoris as $kategori);
          <li><a class="dropdown-item" href="#"></a></li>
      @endforeach
        </div>
    </div>
</div> --}}


<div class="dropdown">
  <div class="kotak">
      <span>Kategori Buku</span>
      <div class="dropdown-content">
        @foreach($kategoris as $kategori)
        <a class="dropdown-item" href="#">{{$kategori->nama}}</a>
    @endforeach
      </div>
  </div>
</div>


<div class="book-images">
  <div class="container">
      <div class="row">
          @foreach($bukus as $buku)
          <div class="col-5 col-md-3 col-lg-2">
              <div class="card rounded-lg mb-3">
                <div class="text-center">
                  <a href="detail/{{$buku->id}}">
                  <img src="{{$buku->gambar}}" alt="Non-Fiksi Book" class="mt-2 mx-auto card-img-top">
                </a>
              </div>
                  <div class="card-body">
                      <h5 class="font-weight-bold text-lg" style="font-family: 'Bebas Neue', sans-serif;">{{ $buku->judul }}</h5>
                      <p class="card-text">{{ $buku->penulis }}</p>
                      
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</div>





  <!-- Tambahkan gambar buku untuk kategori lainnya sesuai kebutuhan -->
</div>
@include('partials/footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- ... (Bagian sebelumnya tetap sama) -->

<!-- Modal -->
<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bookModalLabel">{{ $buku->judul }}</h5>
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
              <img src="{{ $buku->gambar }}" class="mt-2 mx-auto card-img-top w-20" alt="Book Image" id="bookImage">

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
  </div>
  
  <script>
    // Data deskripsi dan gambar buku sesuai dengan kategori
    const bookDetails = {
      'Fiksi Book': {
        description: 'Ini adalah deskripsi untuk buku Fiksi. Buku ini memikat pembaca dengan cerita yang penuh imajinasi dan petualangan.',
        image: '<img src="{{ $buku->gambar }}" class="mt-2 mx-auto card-img-top w-20" alt="Book Image" id="bookImage">'
      },
        'Fiksi Book': {
        description: 'Ini adalah deskripsi untuk buku Fiksi. Buku ini memikat pembaca dengan cerita yang penuh imajinasi dan petualangan.',
        image: '<img src="/img/buku.1.jpg">'
      },'Non-Fiksi Book': {
        description: 'Ini adalah deskripsi untuk buku Non-Fiksi. Buku ini memberikan informasi yang mendalam tentang topik tertentu.',
        image: '<img src="{{ $buku->gambar }}" class="mt-2 mx-auto card-img-top w-20" alt="Book Image" id="bookImage">'
      },
      'Romantis Book': {
        description: 'Ini adalah deskripsi untuk buku Romantis. Buku ini mengisahkan kisah cinta yang mengharukan.',
        image: '<img src="/img/buku.1.jpg">'
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
  
      // Lakukan sesuatu dengan rating dan reviewText, misalnya menyi
      alert("Review submitted! Rating: " + rating + ", Review: " + reviewText);
  
      // Tutup modal setelah submit
      $('#bookModal').modal('hide');
    }
  </script>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</script>

  </body>
  </html>
  