<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
<body>
    <div class="container pt-3">
        <h1 class="bg-primary">Universitas MDP</h1>
        <hr>
        <h2>@yield('subtitle')</h2>
        @yield('content')
        @yield('copyright')

        &copy; {{date('Y')}} Putra Ganda Dewata
    </div>
</body>
</html>