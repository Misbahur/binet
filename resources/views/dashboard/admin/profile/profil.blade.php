@extends('layouts.dashboard.admin.dashboard')
@section('title', 'Profile Author')
@section('content')
<div class="card shadow">
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-lg-6">
        <h5>Profil Informasi Pribadi</h5>
        <p>Silahkan Lengkapi Informasi Pribadi Kamu Agar Dapat Menulis Berita</p>
      </div>
      <div class="col-12 col-lg-6">
        <form action="{{ route('user-profile-information.update') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
          <div class="form-group">
            <img src="{{ url('/storage/profil/', Auth::user()->profil) }}" alt="Profil" width="100px" class="d-block rounded-circle">
            <label for="profil">Profil</label>
            <input type="file" name="profil" id="" class="form-control-file @error('profil') is-invalid @enderror">
            @error('profil')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? Auth::user()->name }}">
            @error('name')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? Auth::user()->email }}">
            @error('email')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="no_hp">Nomor Handphone</label>
            <input type="text" name="no_hp" id="" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') ?? Auth::user()->no_hp }}">
            @error('no_hp')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') ?? Auth::user()->alamat }}</textarea>
            @error('name')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <a href="{{ route('dashboard.admin') }}" class="btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection