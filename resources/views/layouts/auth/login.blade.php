<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/frontend/icon/hamburger.png" type="image/png">
  <title>@yield('title')</title>

  <link rel="shortcut icon" href="{{ url('/frontend/images/logo/tvrisumut.png') }}">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('/frontend/library/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('/frontend/css/main.css') }}">

</head>
<body>

  <main>
    @yield('content')
  </main>

  <script src="{{ url('/frontend/library/jquery/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ url('/frontend/library/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>