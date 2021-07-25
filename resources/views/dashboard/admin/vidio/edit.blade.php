@extends('layouts.dashboard.admin.dashboard')
@section('title', 'Edit Video')
@section('content')
<h1 class="h3 text-gray-800">Edit Video</h1>
<div class="row justify-content-center mt-3">
  <div class="col-12">
    <div class="card shadow">
      <div class="card-body">
        <form action="{{ route('adminvidio.update', $video->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
          <input type="hidden" name="thumbnailLama" value="{{ $video->thumbnail }}">
          <div class="form-row">
            <div class="form-group col-12 col-lg-6">
              <label for="judul">Judul Video</label>
              <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" value="{{ $video->judul }}">
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
              <label for="url">Url Youtube</label>
              <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" id="url" value="{{ $video->url }}">
              @error('url')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi Video</label>
            <textarea name="deskripsi" id="berita" rows="8" class="form-control @error('deskripsi') is-invalid @enderror">{{ $video->deskripsi }}</textarea>
            @error('deskripsi')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <a href="{{ route('adminvidio.index') }}" class="btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-primary">Upload Video</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection