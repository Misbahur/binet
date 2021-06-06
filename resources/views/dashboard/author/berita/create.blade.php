@extends('layouts.dashboard.author.dashboard')
@section('title', 'Tulis Berita')
@section('content')
<h1 class="h3 text-gray-800">Tulis Berita</h1>
<div class="row justify-content-center mt-3">
  <div class="col-12">
    <div class="card shadow">
      <div class="card-body">
        <form action="{{ route('authorberita.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-12 col-lg-6">
              <label for="judul">Judul Berita</label>
              <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" value="{{ old('judul') }}">
              @error('judul')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group col-12 col-lg-3">
              <label for="thumbnail">Thumbnail</label>
              <input type="file" name="thumbnail" class="form-control-file @error('thumbnail') is-invalid @enderror" id="thumbnail" value="{{ old('thumbnail') }}" onchange="previewImageThumbnail()">
              @error('thumbnail')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group col-lg-3">
              <label for="preview">Preview Thumbnail</label>
              <img id="previewThumbnail" width="180px" height="100px">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-12 col-lg-6">
              <label for="ketegori">Kategori Berita</label>
              <select name="kategori" id="kategori" class="form-control @error('kategori') is-invalid @enderror">
                <option>Pilih Kategori</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->kategori }}">{{ $category->kategori }}</option>
                @endforeach
              </select>
              @error('ketegori')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group col-12 col-lg-3">
              <label for="banner">Banner</label>
              <input type="file" name="banner" class="form-control-file @error('banner') is-invalid @enderror" id="banner" value="{{ old('banner') }}" onchange="previewImageBanner()">
              @error('banner')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group col-lg-3">
              <label for="preview">Preview Banner</label>
              <img id="previewBanner" width="180px" height="100px">
            </div>
          </div>
          <div class="form-group">
            <label for="berita">Tulis Berita</label>
            <textarea name="berita" id="berita" rows="4" class="form-control @error('berita') is-invalid @enderror">{{ old('berita') }}</textarea>
            @error('berita')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <a href="{{ route('authorberita.index') }}" class="btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-primary">Tulis Berita</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection