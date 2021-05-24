@extends('layouts.auth.login')
@section('title', 'Login Admin Berita')

@section('content')
<section class="section-login d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-6 text-center">
        <div class="card shadow">
          <div class="card-body">
            <h1>Login Admin Berita</h1>
            <p>Mari Berikan Berita Terbaik Dan Up To Date</p>
            <a href="{{ route('home') }}">
              <img src="{{ url('/frontend/images/logo/tvrisumut.png') }}" alt="Logo" class="pb-4">
            </a>
            <form action="{{ route('login') }}" method="POST">
              @csrf
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Input your email" autofocus value="{{ old('email') }}">
                @error('email')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control @error('email') is-invalid @enderror" placeholder="Input your password">
                @error('password')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group form-check text-left">
                <input type="checkbox" class="form-check-input" id="remeber" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remeber">Remember me</label>
              </div>
              <button type="submit" class="btn btn-login px-4 py-2 mb-3 btn-block">Login</button>
              <a href="{{ route('register') }}">Registrasi</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection