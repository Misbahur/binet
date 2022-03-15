@extends('layouts.home')
@section('title', 'BINET Ekonomi')
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

<div class="hot-news">
  <nav aria-label="breadcrumb">
    <div class="container">
      <div class="row mr-lg-3 ml-lg-4">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">BINET</a></li>
          <li class="breadcrumb-item active" aria-current="page">Ekonomi</li>
        </ol>
      </div>
    </div>
  </nav>

  @include('includes.kategorimenu')

  <div class="container">
    <div class="row justify-content-center mr-lg-3 ml-lg-4">
      @foreach ($news as $news)
      <div class="col-12 col-lg-3 col-md-4 mt-3">
        <div class="card">
          <div class="zoom-effect">
            <div class="kotak">
              <a href="{{ route('hotNews.show', $news->slug) }}">
                <img src="{{ url('/storage/thumbnails', $news->thumbnail) }}" class="card-img-top rounded mx-auto d-block" alt="...">
              </a>
            </div>
          </div>
          <div class="card-body">
            <p>{{ $news->judul }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection