@extends('layouts.home')
@section('title', 'TVRI Noton')
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
          <li class="breadcrumb-item"><a href="{{ route('home') }}">TVRI</a></li>
          <li class="breadcrumb-item active" aria-current="page">Nonton</li>
        </ol>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row justify-content-center mr-lg-3 ml-lg-4">
      @foreach ($videos as $video)
      <div class="col-12 col-lg-3 col-md-4 mt-3">
        <div class="card">
          <div class="zoom-effect">
            <div class="kotak">
              <a href="{{ route('video.show', $video->slug) }}">
                <img src="{{ url('/storage/video/thumbnail', $video->thumbnail) }}" class="card-img-top rounded mx-auto d-block" alt="...">
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

@endsection