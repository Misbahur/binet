<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link rel="shortcut icon" href="{{ url('/frontend/images/logo/tvrisumut.png') }}">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
  <link rel="stylesheet" href="{{ url('/frontend/library/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('/frontend/css/main.css') }}">
</head>
<body>
  
  <!-- Navbar -->
  @include('includes.navbar')
  
  <!-- Content -->
  <main class="mb-5">
    {{-- Flash News --}}
    <div class="flash-news">
      <div class="container">
        <div class="row">
          <p class="float-left mr-3">Berita Terkini : </p>
          <p>
            <marquee behavior="left" width="1000px">
              @forelse ($hotNewsLimit as $hotNewsL)
                ({{ $hotNewsL->news->status->tgl }}) {{ $hotNewsL->news->judul }}..... <a href="{{ route('view', $hotNewsL->news->slug) }}" class="text-decoration-none"> Baca Selengkapnya &emsp;&emsp;&emsp;&emsp; </a>
              @empty
                Tidak ada berita hot saat ini
              @endforelse
            </marquee>
          </p>
        </div>
      </div>
    </div>

    @yield('content')

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