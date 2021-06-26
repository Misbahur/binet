@extends('layouts.home')
@section('title', 'TVRI (Televisi Republik Indonesia)')

@section('content')
  {{-- Iklan --}}
  <div class="left-iklan mt-2">
    <img src="{{ url('/storage/iklan/left-iklan.jpg') }}" alt="Iklan">
  </div>
  <div class="right-iklan mt-2">
    <img src="{{ url('/storage/iklan/left-iklan.jpg') }}" alt="Iklan">
  </div>

  <!-- Hots News -->
  <div class="banner mt-4">
    <div class="container">
      <div class="row mr-lg-3 ml-lg-3">
        <div class="col-12 col-lg-8 left-content">
          <div class="jumbotron p-0">
            <img src="{{ url('/storage/thumbnail', $hotNews->news->thumbnail) }}" alt="" class="img-fluid">
            <div class="title-news">
              <p class="badge badge-danger">{{ $hotNews->news->kategori }}</p>
              <a href="{{ route('view') }}">
                <h1>{{ $hotNews->news->judul }}</h1>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-4 right-content">
          <div class="card">
            <div class="card-body">
              <div class="news-content">
                <h3>Berita Terbaru</h3>
                @foreach ($newsLimit as $newsL)
                  <div class="media mt-3">
                    <div class="zoom-effect">
                      <div class="kotak">
                        <img src="{{ url('/storage/thumbnail', $newsL->news->thumbnail) }}" class="mr-3 rounded" alt="..." height="75px" width="100px">
                      </div>  
                    </div>
                    <div class="media-body">
                      <p class="m-0">{{ $newsL->news->judul }}</p>
                      <a href="#">Baca Selengkapnya...</a>
                    </div>
                  </div>
                @endforeach
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
      <div class="row mr-lg-3 ml-lg-3">
        @foreach ($newsLimitAll as $newsLimitA)
          <div class="col-12 col-lg-4 col-md-6 mt-3">
            <div class="media mt-3">
              <div class="zoom-effect">
                <div class="kotak">
                  <img src="{{ url('/storage/thumbnail', $newsLimitA->news->thumbnail) }}" class="mr-3 rounded" alt="Thumbnail">
                </div>  
              </div>
              <div class="media-body">
                <p class="m-0">{{ $newsLimitA->news->judul }}</p>
                <a href="#">Baca Selengkapnya...</a>
              </div>
            </div>
          </div>
        @endforeach
        <div class="col-12 col-lg-4 col-md-6">
          <div class="middle-iklan-right">
            <img src="{{ url('/storage/iklan/middle-iklan-right.jpg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Hr -->
  <div class="container mt-5 mb-5">
    <hr class="mr-lg-3 ml-lg-3">
  </div>

  <!-- vidio -->
  <div class="vidio">
    <div class="container">
      <div class="row mr-lg-3 ml-lg-3 title">
        <div class="col-12">
          <h3>Mari Tonton Vidio Kami Juga</h3>
        </div>
      </div>
      {{-- <div class="row mr-lg-3 ml-lg-3 mt-3 justify-content-center">
        <div class="col-12 col-md-6 pt-3">
          <div class="vidio-frame">
            <div class="embed-responsive embed-responsive-16by9 rounded">
              <iframe class="embed-responsive-item" src="{{ url('/frontend/VID-20210425-WA0018.mp4') }}" allowfullscreen></iframe>
            </div>
            <div class="vidio-frame-title">
              <h4>Manusia Bodoh Ada Band</h4>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 pt-3">
          <div class="vidio-frame">
            <div class="embed-responsive embed-responsive-16by9 rounded">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/y8nFBBRz4Ws" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;  picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="vidio-frame-title">
              <h4>Fiersa Bersari Waktu Yang Salah</h4>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="row justify-content-center">
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
      </div> --}}

      <div class="row mt-4 justify-content-center">
        <a href="#" class="btn btn-load-more">LIHAT LEBIH BANYAK >></a>
      </div>
    </div>
  </div>
@endsection