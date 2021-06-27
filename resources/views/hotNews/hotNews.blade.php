@extends('layouts.home')
@section('title', 'TVRI Hot News')
@section('content')
{{-- Iklan --}}
<div class="left-iklan mt-2">
  <img src="{{ url('/storage/iklan/left-iklan.jpg') }}" alt="Iklan">
</div>
<div class="right-iklan mt-2">
  <img src="{{ url('/storage/iklan/left-iklan.jpg') }}" alt="Iklan">
</div>

<div class="hot-news">
  <nav aria-label="breadcrumb">
    <div class="container">
      <div class="row mr-lg-3 ml-lg-4">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">TVRI</a></li>
          <li class="breadcrumb-item active" aria-current="page">Hot News</li>
        </ol>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row justify-content-center mr-lg-3 ml-lg-4">
      @foreach ($news as $news)
      <div class="col-12 col-lg-3 col-md-4 mt-3">
        <div class="card">
          <div class="zoom-effect">
            <div class="kotak">
              <a href="{{ route('hotNews.show', $news->news->slug) }}">
                <img src="{{ url('/storage/thumbnail', $news->news->thumbnail) }}" class="card-img-top rounded mx-auto d-block" alt="...">
              </a>
            </div>
          </div>
          <div class="card-body">
            <p>{{ $news->news->judul }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection