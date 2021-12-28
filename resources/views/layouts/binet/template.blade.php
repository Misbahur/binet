<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link rel="shortcut icon" href="{{ url('/frontend/images/logo/logo1hitam.png') }}">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
  <link rel="stylesheet" href="{{ url('/frontend/library/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('/frontend/css/main.css') }}">
</head>
<body>
  
  <!-- Navbar -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light first-navbar">
      <!-- Mobile Logo -->
      <a href="{{ route('home') }}">
        <img src="{{ url('/frontend/images/logo/logo1hitam.png') }}" alt="" width="150px" class="logo d-md-none mx-auto">
      </a>
      <!-- Dekstop Logo-->
      <a href="{{ route('home') }}">
        <img src="{{ url('/frontend/images/logo/logo1hitam.png') }}" alt="" width="170px" class="logo d-none d-md-block">
      </a>
      <button class="navbar-toggler small" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse small" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          @if (Route::has('login'))
            @auth
              {{-- Dekstop --}}
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="{{ route('logout') }}" class="my-2 py-2 my-lg-0 d-none d-md-block btn btn-signup ml-lg-4" onclick="event.preventDefault(); this.closest('form').submit();">
                  Logout
                </a>
              </form>
              @else
                <!-- Dekstop Button -->
                <a href="{{ route('login') }}" class="my-2 py-2 my-lg-0 d-none d-md-block btn btn-login ml-lg-4">
                  Login
                </a>
        
                <!-- Dekstop Button -->
                <a href="{{ route('register') }}" class="my-2 py-2 my-lg-0 d-none d-md-block btn btn-signup ml-lg-4">
                  Sign Up
                </a>
            @endauth
          @endif
        </ul>
      </div>
    </nav>
  </div> 
  <nav class="navbar navbar-expand-lg navbar-light secondary-navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
      <li class="nav-item pr-4">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item pr-4">
        <a class="nav-link" href="{{ route('hotNews') }}">Hot News</a>
      </li>
      <li class="nav-item pr-4">
        <a class="nav-link" href="{{ route('ekonomi') }}">Ekonomi</a>
      </li>
      <li class="nav-item pr-4">
        <a class="nav-link" href="{{ route('sejarah&budaya') }}">Budaya & Sejarah</a>
      </li>
      <li class="nav-item pr-4">
        <a class="nav-link" href="{{ route('hiburan') }}">Hiburan</a>
      </li>
      <li class="nav-item pr-4">
        <a class="nav-link" href="{{ route('hiburan') }}">Gaya Hidup</a>
      </li>
      <li class="nav-item pr-4">
        <a class="nav-link" href="{{ route('video') }}">Binet Nonton</a>
      </li>
      <li class="nav-item pr-4">
        <a class="nav-link" href="#">Live Streaming</a>
      </li>
      @if (Route::has('login'))
        @auth
          {{-- Mobile --}}
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <a href="{{ route('logout') }}" class="d-sm-block mb-2 py-2 d-md-none btn btn-signup btn-block ml-sm-0 text-white" onclick="event.preventDefault(); this.closest('form').submit();" style="background-color: #040a3d">
              Logout
            </a>
          </form>
          @else
            <!-- Mobile Button -->
            <a href="{{ route('login') }}" class="d-sm-block text-white py-2 d-md-none btn btn-login btn-block ml-sm-0" style="background-color: #040a3d">
              Login
            </a>
            <!-- Mobile Button -->
            <a href="{{ route('register') }}" class="d-sm-block text-white py-2 d-md-none btn btn-signup btn-block ml-sm-0" style="background-color: #040a3d">
              Sign Up
            </a>
        @endauth
      @endif
    </ul>
    </div>
  </nav>
  
  <!-- Content -->
  <main class="mb-5">

    <div class="container">
      @yield('content')
    </div>

  </main>

  <!-- Footer -->
  @include('includes.footer')

  <script src="{{ url('/frontend/library/jquery/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ url('/frontend/library/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="https://cdn.plyr.io/3.6.8/plyr.polyfilled.js"></script>
  <script>
    const player = new Plyr('#player');
  </script>
</body>
</html>