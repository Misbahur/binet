@extends('layouts.home')
@section('title', $live->judul ?? '')
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

<div class="main-content">
  <nav aria-label="breadcrumb">
    <div class="container">
      <div class="row mr-lg-3 ml-lg-4">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">BINET</a></li>
          <li class="breadcrumb-item"><a href="{{ route('video') }}">Live Streaming</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $live->judul ?? '' }}</li>
        </ol>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row mt-3 mb-5 mr-lg-3 ml-lg-3">
      <div class="col-12 col-lg-8 left-content">
        @if ($live->judul ?? '')
          <div class="main-news">
            <div class="main-image">
              <div class="plyr__video-embed" id="player">
                <iframe
                  src="https://www.youtube.com/embed/{{ '' }}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                  allowfullscreen
                  allowtransparency
                  allow="autoplay"
                ></iframe>
              </div>
            </div>
            <div class="main-title text-center mt-3">
              <h1>{{ 'Tidak Ada Live' }}</h1>
            </div>
            <div class="main-full-news p-3">
              <p>
                {{ 'Not Found' }}
              </p>
            </div>
          </div>
        @else
          <div class="main-news">
            <div class="main-image">
              <div class="plyr__video-embed" id="player">
                <iframe
                  src="https://www.youtube.com/embed/{{ $live->url }}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                  allowfullscreen
                  allowtransparency
                  allow="autoplay"
                ></iframe>
              </div>
            </div>
            <div class="main-title text-center mt-3">
              <h1>{{ $live->judul }}</h1>
            </div>
            <div class="main-full-news p-3">
              <p>
                {!! $live->deskripsi !!}
              </p>
            </div>
          </div>
        @endif
      </div>
      <div class="col-12 col-lg-4 right-content">
        <div class="card pb-5">
          <div class="card-body">
            <div class="news-content">
              <h3>Video Terbaru</h3>
              @foreach ($newVideos as $newVideo)
                <div class="media mt-3">
                  <div class="zoom-effect">
                    <div class="kotak">
                      <a href="{{ route('video', $newVideo->slug) }}">
                        <img src="{{ url('/storage/video/thumbnails', $newVideo->thumbnail) }}" class="mr-3 rounded" alt="..." height="75px" width="100px">
                      </a>
                    </div>  
                  </div>
                  <div class="media-body">
                    <p class="m-0">{{ $newVideo->judul }}</p>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="middle-iklan-right pt-5">
          {{-- Middle Iklan --}}
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

    <hr>

    <!-- Rekomendasi Berita -->
    <div class="recomment-news">
      <div class="row mt-5 mr-lg-3 ml-lg-3">
        <div class="col-12">
          <h3>Tonton Video Lainnya</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        @foreach ($videoAll as $videoA)
        <div class="col-12 col-lg-3 col-md-6 mt-3">
          <div class="card">
            <div class="zoom-effect">
              <div class="kotak">
                <a href="">
                  <img src="{{ url('/storage/video/thumbnail', $videoA->thumbnail) }}" class="card-img-top rounded mx-auto d-block" alt="...">
                </a>
              </div>
            </div>
            <div class="card-body">
              <p>{{ $live->judul }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection