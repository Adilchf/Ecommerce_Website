<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />


  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('bootstrap/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap5.css') }}" rel="stylesheet">

</head>

<body>

    <div class="content">
    @yield('content')



    </div>











<script src="{{ asset('bootstrap/js/bootstrap5.js') }}" defer></script>


@yield('scripts')

</body>

</html>
