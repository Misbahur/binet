@extends('layouts.auth.login')
@section('title', 'Registrasi Admin Berita')

@section('content')
<section class="section-login d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-6 text-center">
        <div class="card shadow">
          <div class="card-body">
            <h1>Registrasi Admin Berita</h1>
            <p>Mari Berikan Berita Terbaik Dan Up To Date</p>
            <a href="{{ route('home') }}">
              <img src="{{ url('/frontend/images/logo/tvrisumut.png') }}" alt="Logo" class="pb-4">
            </a>
            <form action="{{ route('register') }}" method="POST">
              @csrf
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Input nama kamu" autofocus value="{{ old('name') }}">
                  @error('name')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-group col-lg-6">
                  <input type="number" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Input nomor handphone" value="{{ old('no_hp') }}">
                  @error('no_hp')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Input email kamu" value="{{ old('email') }}">
                @error('email')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Input password kamu">
                  @error('password')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-group col-lg-6">
                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Konfirmasi password">
                  @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <button type="submit" class="btn btn-login px-4 py-2 mb-3 btn-block">Registrasi</button>
              <a href="{{ route('login') }}">Saya sudah punya akun</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection