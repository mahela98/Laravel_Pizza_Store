<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

  <link rel="stylesheet" href="/css/main.css" >
</head>

<body class="antialiased">

@yield('content')

<footer>
    CopyRight 2020 piza house
</footer>
</body>

</html>