@extends('layouts.dashboard.admin.dashboard')
@section('title', 'Tambah Kategori Berita')
@section('content')
<h1 class="h3 text-gray-800">Tambah Kategori</h1>
<div class="row justify-content-center mt-3">
  <div class="col-12 col-lg-6">
    <div class="card shadow">
      <div class="card-body">
        <form action="{{ route('kategori.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" class="form-control @error('kategori') is-invalid @enderror" id="kategori">
            @error('kategori')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <a href="{{ route('kategori.index') }}" class="btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-primary">Tambah Kategori</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection