@extends('layouts.dashboard.admin.dashboard')
@section('title', 'Buat Iklan Berita TVRI')
@section('content')
<h1 class="h3 text-gray-800">Buat Iklan</h1>
<div class="row justify-content-center mt-3">
  <div class="col-12">
    <div class="card shadow">
      <div class="card-body">
        <form action="{{ route('iklan.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-12 col-lg-6">
              <label for="perusahaan">Nama Perusahaan</label>
              <input type="text" name="perusahaan" class="form-control @error('perusahaan') is-invalid @enderror" id="perusahaan" value="{{ old('perusahaan') }}">
              @error('perusahaan')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group col-12 col-lg-3">
              <label for="awalTampil">Awal Tampil</label>
              <input type="text" name="awalTampil" class="form-control @error('awalTampil') is-invalid @enderror datepicker" id="awalTampil" value="{{ old('awalTampil') }}">
              @error('awalTampil')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group col-12 col-lg-3">
              <label for="akhirTampil">Akhir Tampil</label>
              <input type="text" name="akhirTampil" class="form-control @error('akhirTampil') is-invalid @enderror dateicker" id="akhirTampil" value="{{ old('akhirTampil') }}">
              @error('akhirTampil')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-12 col-lg-6">
              <label for="url">URL Iklan</label>
              <input type="text" name="url" class="form-control @error('url') is-invalid @enderror dateicker" id="url" value="{{ old('url') }}">
              @error('url')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group col-12 col-lg-3">
              <label for="iklan">Iklan</label>
              <input type="file" name="iklan" class="form-control-file @error('iklan') is-invalid @enderror" id="iklan" value="{{ old('iklan') }}" onchange="previewImageIklan()">
              @error('iklan')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group col-lg-3">
              <label for="preview">Preview Iklan</label>
              <img id="previewIklan" width="180px" height="100px">
            </div>
          </div>
          <a href="{{ route('iklan.index') }}" class="btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-primary">Buat Iklan</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection