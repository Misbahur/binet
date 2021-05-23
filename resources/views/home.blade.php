@extends('layouts.home')
@section('title', 'TVRI (Televisi Republik Indonesia)')

@section('content')
  <!-- Hots News -->
  <div class="banner mt-4">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8 left-content">
          <div class="jumbotron p-0">
            <img src="/frontend/images/banner.jpg" alt="" class="img-fluid">
            <div class="title-news">
              <p class="badge badge-danger">Sports</p>
              <a href="{{ route('view') }}">
                <h1>Jadwal Kejuaran Asian Games Volly Putri</h1>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-4 right-content">
          <div class="card">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Old News -->
  <div class="old-news pb-5">
    <div class="container">
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

  <!-- Hr -->
  <div class="container mt-5 mb-5">
    <hr>
  </div>

  <!-- vidio -->
  <div class="vidio">
    <div class="container">
      <div class="row title">
        <div class="col-12">
          <h3>Mari Tonton Vidio Kami Juga</h3>
        </div>
      </div>
      <div class="row mt-3 justify-content-center">
        <div class="col-12 col-md-6 pt-3">
          <div class="vidio-frame">
            <div class="embed-responsive embed-responsive-16by9 rounded">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/watch?v=W639Zcgr1SI&list=RDf1bp6JmDIQI&index=3" allowfullscreen></iframe>
            </div>
            <div class="vidio-frame-title">
              <h4>Manusia Bodoh Ada Band</h4>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 pt-3">
          <div class="vidio-frame">
            <div class="embed-responsive embed-responsive-16by9 rounded">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/watch?v=VV533WNITzs&list=RDf1bp6JmDIQI&index=8" allowfullscreen></iframe>
            </div>
            <div class="vidio-frame-title">
              <h4>Fiersa Bersari Waktu Yang Salah</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 pt-3">
          <div class="vidio-frame">
            <div class="embed-responsive embed-responsive-16by9 rounded">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/watch?v=W639Zcgr1SI&list=RDf1bp6JmDIQI&index=3" allowfullscreen></iframe>
            </div>
            <div class="vidio-frame-title">
              <h4>Manusia Bodoh Ada Band</h4>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 pt-3">
          <div class="vidio-frame">
            <div class="embed-responsive embed-responsive-16by9 rounded">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/watch?v=VV533WNITzs&list=RDf1bp6JmDIQI&index=8" allowfullscreen></iframe>
            </div>
            <div class="vidio-frame-title">
              <h4>Fiersa Bersari Waktu Yang Salah</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4 justify-content-center">
        <a href="#" class="btn btn-load-more">LIHAT LEBIH BANYAK >></a>
      </div>
    </div>
  </div>
@endsection