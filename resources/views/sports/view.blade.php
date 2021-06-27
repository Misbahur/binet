@extends('layouts.home')
@section('title', $news->judul)

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
          <li class="breadcrumb-item"><a href="{{ route('hotNews') }}">Sports</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $news->judul }}</li>
        </ol>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row mt-3 mb-5 mr-lg-3 ml-lg-3">
      <div class="col-12 col-lg-8 left-content">
        <div class="main-news">
          <div class="main-image">
            <img src="{{ url('/storage/banner', $news->banner) }}" alt="" class="img-fluid rounded mx-auto d-block">
            <p class="text-center pt-2">{{ $news->status->hari }} , {{  $news->status->tgl }}</p>
          </div>
          <div class="main-title text-center mt-3">
            <h1>{{ $news->judul }}</h1>
          </div>
          <div class="main-full-news pt-3">
            <p>
              {!! $news->berita !!}
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 right-content">
        <div class="card pb-5">
          <div class="card-body">
            <div class="news-content">
              <h3>Berita Terbaru</h3>
              @foreach ($newsLimit as $newsL)
                <div class="media mt-3">
                  <div class="zoom-effect">
                    <div class="kotak">
                      <img src="{{ url('/storage/thumbnail', $newsL->thumbnail) }}" class="mr-3 rounded" alt="..." height="75px" width="100px">
                    </div>  
                  </div>
                  <div class="media-body">
                    <p class="m-0">{{ $newsL->judul }}</p>
                    <a href="{{ route('sports.show', $newsL->slug) }}">Baca Selengkapnya...</a>
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
          <h3>Baca Juga Berita Lainnya</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        @foreach ($newsLimitAll as $newsLimitA)
        <div class="col-12 col-lg-3 col-md-6 mt-3">
          <div class="card">
            <div class="zoom-effect">
              <div class="kotak">
                <a href="{{ route('sports.show', $newsLimitA->slug) }}">
                  <img src="{{ url('/storage/thumbnail', $newsLimitA->thumbnail) }}" class="card-img-top rounded mx-auto d-block" alt="...">
                </a>
              </div>
            </div>
            <div class="card-body">
              <p>{{ $newsLimitA->judul }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection