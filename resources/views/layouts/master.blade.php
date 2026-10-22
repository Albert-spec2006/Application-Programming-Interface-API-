<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'DIKS HAIR CUT — Barbershop')</title>
  <meta name="description" content="@yield('description', 'DIKS HAIR CUT — potongan rapi, detail presisi, dan gaya yang terasa personal.')">
  <meta name="keywords" content="">

  <link href="{{ asset('assets/img/diks-favicon.svg') }}" rel="icon" type="image/svg+xml">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/css/barbershop.css') }}" rel="stylesheet">
</head>

<body>

  @yield('content')

</body>

</html>
