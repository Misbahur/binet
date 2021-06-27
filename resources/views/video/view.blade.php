@extends('layouts.home')
@section('title', $video->judul)
@section('content')
{{-- Iklan --}}
<div class="left-iklan mt-2">
  <img src="{{ url('/storage/iklan/left-iklan.jpg') }}" alt="Iklan">
</div>
<div class="right-iklan mt-2">
  <img src="{{ url('/storage/iklan/left-iklan.jpg') }}" alt="Iklan">
</div>

<div class="main-content">
  <nav aria-label="breadcrumb">
    <div class="container">
      <div class="row mr-lg-3 ml-lg-4">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">TVRI</a></li>
          <li class="breadcrumb-item"><a href="{{ route('video') }}">Nonton</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $video->judul }}</li>
        </ol>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row mt-3 mb-5 mr-lg-3 ml-lg-3">
      <div class="col-12 col-lg-8 left-content">
        <div class="main-news">
          <div class="main-image">
            <div class="plyr__video-embed" id="player">
              <iframe
                src="https://www.youtube.com/embed/{{ $video->url }}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>
          <div class="main-title text-center mt-3">
            <h1>{{ $video->judul }}</h1>
          </div>
          <div class="main-full-news pt-3">
            <p>
              {!! $video->deskripsi !!}
            </p>
          </div>
        </div>
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
                        <img src="{{ url('/storage/video/thumbnail', $newVideo->thumbnail) }}" class="mr-3 rounded" alt="..." height="75px" width="100px">
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
          <img src="{{ url('/storage/iklan/middle-iklan-right.jpg') }}" alt="">
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
              <p>{{ $video->judul }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection