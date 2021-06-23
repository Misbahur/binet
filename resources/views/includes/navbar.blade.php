<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light first-navbar">
    <!-- Mobile Logo -->
    <img src="{{ url('/frontend/images/logo/tvrisumut.png') }}" alt="" width="150px" class="logo d-md-none mx-auto">
    <!-- Dekstop Logo-->
    <img src="{{ url('/frontend/images/logo/tvrisumut.png') }}" alt="" width="170px" class="logo d-none d-md-block">
    <button class="navbar-toggler small" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse small" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mr-auto top-iklan text-center">
        <img src="{{ url('/storage/iklan/top-iklan.jpg') }}" alt="">
      </ul>
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
        <a class="nav-link" href="#">TVRI News</a>
      </li>
      <li class="nav-item pr-4">
        <a class="nav-link" href="#">TVRI Edukasi</a>
      </li>
      <li class="nav-item pr-4">
        <a class="nav-link" href="#">TVRI Sport</a>
      </li>
      <li class="nav-item pr-4">
        <a class="nav-link" href="#">TVRI Otomotif</a>
      </li>
      <li class="nav-item pr-4">
        <a class="nav-link" href="#">TVRI Nonton</a>
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