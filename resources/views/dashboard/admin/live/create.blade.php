@extends('layouts.dashboard.admin.dashboard')
@section('title', 'Buat Stream')
@section('content')
<h1 class="h3 text-gray-800">Buat Stream</h1>
<div class="row justify-content-center mt-3">
  <div class="col-12">
    <div class="card shadow">
      <div class="card-body">
        <form action="{{ route('adminlive.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-12 col-lg-6">
              <label for="judul">Judul Video</label>
              <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" value="{{ old('judul') }}">
              @error('judul')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-12 col-lg-6">
              <label for="url">Url Youtube</label>
              <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" id="url" value="{{ old('url') }}">
              <small class="form-text text-muted">https://www.youtube.com/watch?v=<span class="text-success">ZBcSTqAneh4</span>. Cukup masukkan link URL yang berwarna hijau</small>
              @error('url')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi LiveStreaming</label>
            <textarea name="deskripsi" id="berita" rows="8" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <a href="{{ route('adminlive.index') }}" class="btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-primary">Buat Stream</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection