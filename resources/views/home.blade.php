@extends('layouts.home')
@section('title', 'BINET (Kabar Terpercaya)')

@section('content')
  {{-- Iklan --}}
  <div class="left-iklan mt-2">
    @if ($leftAdvertisement)
      @if (($leftAdvertisement->awalTampil && $leftAdvertisement->akhirTampil) <=  \Carbon\Carbon::now()->format('Y-m-d'))
        <a href="{{ $leftAdvertisement->url }}" target="_blank">
          <img src="{{ url('/storage/iklan', $leftAdvertisement->iklan) }}" alt="">
        </a>
      @endif
    @else
      <a href="#">
        <img src="{{ url('/storage/iklan/leftBlank.png') }}" alt="">
      </a>
    @endif
  </div>
  <div class="right-iklan mt-2">
    @if ($rightAdvertisement)
      @if (($rightAdvertisement->awalTampil && $rightAdvertisement->akhirTampil) <=  \Carbon\Carbon::now()->format('Y-m-d'))
        <a href="{{ $rightAdvertisement->url }}" target="_blank">
          <img src="{{ url('/storage/iklan', $rightAdvertisement->iklan) }}" alt="">
        </a>
      @endif
    @else
      <a href="#">
        <img src="{{ url('/storage/iklan/leftBlank.png') }}" alt="">
      </a>
    @endif
  </div>

  <!-- Hots News -->
  <div class="banner mt-4">
    <div class="container">
      <div class="row mr-lg-3 ml-lg-3">
        <div class="col-12 col-lg-8 left-content">
          @if (!$hotNews)
            <h3>Tidak ada Berita Hot News Saat Ini</h3>
          @else 
            <div class="jumbotron p-0">
              <img src="{{ url('/storage/thumbnails', $hotNews->news->thumbnail) }}" alt="" class="img-fluid">
              <div class="title-news">
                <p class="badge badge-danger">{{ $hotNews->news->kategori }}</p>
                <a href="{{ route('view', $hotNews->news->slug) }}">
                  <h1>{{ $hotNews->news->judul }}</h1>
                </a>
              </div>
            </div>
          @endif
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
                        <img src="{{ url('/storage/thumbnails', $newsL->news->thumbnail) }}" class="mr-3 rounded" alt="..." height="75px" width="100px">
                      </div>  
                    </div>
                    <div class="media-body">
                      <p class="m-0">{{ $newsL->news->judul }}</p>
                      <a href="{{ route('view', $newsL->news->slug) }}">Baca Selengkapnya...</a>
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
              <div class="thumbnail">
                <div class="zoom-effect">
                  <div class="kotak">
                    <a href="{{ route('view', $newsLimitA->news->slug) }}">
                      <img src="{{ url('/storage/thumbnails', $newsLimitA->news->thumbnail) }}" class="mr-3 rounded" alt="Thumbnail">
                    </a>
                  </div>  
                </div>
              </div>
              <div class="media-body">
                <p class="m-0">{{ $newsLimitA->news->judul }}</p>
              </div>
            </div>
          </div>
        @endforeach
        <div class="col-12 col-lg-4 col-md-6">
          {{-- Middle Iklan --}}
          <div class="middle-iklan-right">
            @if ($middleAdvertisement)
              @if (($middleAdvertisement->awalTampil && $middleAdvertisement->akhirTampil) <=  \Carbon\Carbon::now()->format('Y-m-d'))
                <a href="{{ $middleAdvertisement->url }}" target="_blank">
                  <img src="{{ url('/storage/iklan', $middleAdvertisement->iklan) }}" alt="">
                </a>
              @endif
            @else
              <a href="#">
                <img src="{{ url('/storage/iklan/middleBlank.png') }}" alt="">
              </a>
            @endif
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
      <div class="row mr-lg-3 ml-lg-3 mt-3 justify-content-center">
        @foreach ($videos as $video)
          <div class="col-12 col-md-6 pt-3">
            <div class="card">
              <div class="card-body p-0">
                <div class="vidio-thumbnail">
                  <div class="zoom-effect">
                    <div class="kotak">
                      <a href="{{ route('video.show', $video->slug) }}">
                        <img src="{{ url('/storage/video/thumbnail', $video->thumbnail) }}" alt="Thumbnail" class="rounded img-fluid">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="vidio-title">
                  <h4>{{ $video->judul }}</h4>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <div class="row mt-4 justify-content-center">
        <a href="#" class="btn btn-load-more">LIHAT LEBIH BANYAK >></a>
      </div>
    </div>
  </div>
@endsection