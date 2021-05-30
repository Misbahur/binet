<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TVRI</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/frontend/library/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/frontend/css/main.css">
</head>
<body>
  
  <!-- Navbar -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light first-navbar">
      <!-- Mobile Logo -->
      <img src="/frontend/images/logo/tvrisumut.png" alt="" width="150px" class="logo d-md-none mx-auto">
      <!-- Dekstop Logo-->
      <img src="/frontend/images/logo/tvrisumut.png" alt="" width="170px" class="logo d-none d-md-block">
      <button class="navbar-toggler small" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse small" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <!-- Mobile Button -->
          <a href="login.html" class="d-sm-block py-2 d-md-none btn btn-login btn-block ml-sm-0">
            Login
          </a>
          <!-- Dekstop Button -->
          <a href="login.html" class="my-2 py-2 my-lg-0 d-none d-md-block btn btn-login ml-lg-4">
            Login
          </a>

          <!-- Mobile Button -->
          <a href="login.html" class="d-sm-block py-2 d-md-none btn btn-signup btn-block ml-sm-0">
            Sign Up
          </a>
          <!-- Dekstop Button -->
          <a href="login.html" class="my-2 py-2 my-lg-0 d-none d-md-block btn btn-signup ml-lg-4">
            Sign Up
          </a>
        </ul>
      </div>
    </nav>
  </div> 
  <nav class="navbar navbar-expand-lg navbar-light secondary-navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item pr-4">
          <a class="nav-link" href="{{ route('berita.index') }}">Home</a>
        </li>
        <li class="nav-item pr-4">
          <a class="nav-link" href="#">TVRI News</a>
        </li>
        <li class="nav-item pr-4">
          <a class="nav-link" href="#">TVRI Edukasi</a>
        </li>
        <li class="nav-item pr-4">
          <a class="nav-link" href="#">TVRI Sport</a>
        </li>
        <li class="nav-item pr-4">
          <a class="nav-link" href="#">TVRI Otomotiv</a>
        </li>
        <li class="nav-item pr-4">
          <a class="nav-link" href="#">Live Streaming</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <!-- Content -->
  <main class="mb-5">

    <!-- Main Content -->
    <div class="main-content">
      <nav aria-label="breadcrumb">
        <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('berita.index') }}">News</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $news->slug }}</li>
          </ol>
        </div>
      </nav>

      <div class="container">
        <div class="row mt-5 mb-5">
          <div class="col-12 col-lg-8 left-content">
            <div class="main-news">
              <div class="main-image">
                <img src="{{ url('/storage/banner/', $news->banner) }}" alt="" class="img-fluid rounded mx-auto d-block">
                <p class="text-center pt-2">{{ $news->status->hari . ' / ' . $news->status->tgl }}</p>
              </div>
              <div class="main-title text-center mt-3">
                <h1>{{ $news->judul }}</h1>
              </div>
              <div class="main-full-news pt-3">
                {!! $news->berita !!}
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 right-content">
            <div class="card border-0">
              <div class="card-body">
                <div class="news-content">
                  <h3>Berita Terbaru</h3>
                  <div class="media mt-3">
                    <div class="zoom-effect">
                      <div class="kotak">
                        <img src="/frontend/images/food.jpg" class="mr-3 rounded" alt="..." width="100px">
                      </div>
                    </div>
                    <div class="media-body">
                      <p class="m-0">Will you do the same for me? It's time to face the music</p>
                      <a href="#">Baca Selengkapnya...</a>
                    </div>
                  </div>
                  <div class="media mt-3">
                    <div class="zoom-effect">
                      <div class="kotak">
                        <img src="/frontend/images/food.jpg" class="mr-3 rounded" alt="..." width="100px">
                      </div>
                    </div>
                    <div class="media-body">
                      <p class="m-0">Will you do the same for me? It's time to face the music</p>
                      <a href="#">Baca Selengkapnya...</a>
                    </div>
                  </div>
                  <div class="media mt-3">
                    <div class="zoom-effect">
                      <div class="kotak">
                        <img src="/frontend/images/food.jpg" class="mr-3 rounded" alt="..." width="100px">
                      </div>
                    </div>
                    <div class="media-body">
                      <p class="m-0">Will you do the same for me? It's time to face the music</p>
                      <a href="#">Baca Selengkapnya...</a>
                    </div>
                  </div>
                  <div class="media mt-3">
                    <div class="zoom-effect">
                      <div class="kotak">
                        <img src="/frontend/images/food.jpg" class="mr-3 rounded" alt="..." width="100px">
                      </div>
                    </div>
                    <div class="media-body">
                      <p class="m-0">Will you do the same for me? It's time to face the music</p>
                      <a href="#">Baca Selengkapnya...</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <hr>

        <!-- Rekomendasi Berita -->
        <div class="recomment-news">
          <div class="row mt-5">
            <div class="col-12">
              <h3>Baca Juga Berita Lainnya</h3>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 col-lg-3 col-md-6 mt-3">
              <div class="card">
                <div class="zoom-effect">
                  <div class="kotak">
                    <img src="/frontend/images/car.jpg" class="card-img-top rounded mx-auto d-block" alt="...">
                  </div>
                </div>
                <div class="card-body">
                  <h4>Sports Cars</h4>
                  <p class="card-text">Some quick example text to build on the</p>
                  <a href="#">Baca Selengkapnya...</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 mt-3">
              <div class="card">
                <div class="zoom-effect">
                  <div class="kotak">
                    <img src="/frontend/images/car.jpg" class="card-img-top rounded mx-auto d-block" alt="...">
                  </div>
                </div>
                <div class="card-body">
                  <h4>Sports Cars</h4>
                  <p class="card-text">Some quick example text to build on the</p>
                  <a href="#">Baca Selengkapnya...</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 mt-3">
              <div class="card">
                <div class="zoom-effect">
                  <div class="kotak">
                    <img src="/frontend/images/car.jpg" class="card-img-top rounded mx-auto d-block" alt="...">
                  </div>
                </div>
                <div class="card-body">
                  <h4>Sports Cars</h4>
                  <p class="card-text">Some quick example text to build on the</p>
                  <a href="#">Baca Selengkapnya...</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 mt-3">
              <div class="card">
                <div class="zoom-effect">
                  <div class="kotak">
                    <img src="/frontend/images/car.jpg" class="card-img-top rounded mx-auto d-block" alt="...">
                  </div>
                </div>
                <div class="card-body">
                  <h4>Sports Cars</h4>
                  <p class="card-text">Some quick example text to build on the</p>
                  <a href="#">Baca Selengkapnya...</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="mt-5">
    <div class="container">
      <div class="row justify-content-center pt-5 pb-5">
        <div class="col-12 col-lg-3 d-flex align-items-center">
          <div class="row">
            <div class="col-lg-12">
              <img src="/frontend/images/logo/tvrisumut.png" alt="Logo">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <h5>Tentang Kami</h5>
          <ul class="list-unstyled">
            <li><a href="#">Sejarah</a></li>
            <li><a href="#">Visi Misi</a></li>
            <li><a href="#">Hubungi Kami</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h5>Layanan Kami</h5>
          <ul class="list-unstyled">
            <li><a href="#">Live Streaming</a></li>
            <li><a href="#">Berita Publikasi</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h5>Sosial Media</h5>
          <div class="sosial-media">
            <a href="#"><img src="/frontend/images/icon/facebook.png" alt=""></a>
            <a href="#"><img src="/frontend/images/icon/twitter.png" alt=""></a>
            <a href="#"><img src="/frontend/images/icon/instagram.png" alt=""></a>
            <a href="#"><img src="/frontend/images/icon/youtube.png" alt=""></a>
          </div>
        </div>
      </div>
      <div class="row justify-content-center align-items-center pt-5 border-top pb-5">
        <div class="col-auto text-muted">
          Copyrights © 2020 All Rights Reserved by LPP TVRI Sumatera Utara
        </div>
      </div>
    </div>
  </footer>

  <script src="/frontend/library/jquery/jquery-3.5.1.min.js"></script>
  <script src="/frontend/library/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>