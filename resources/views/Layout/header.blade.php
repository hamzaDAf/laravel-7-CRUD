<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <title>Laravel 7 CRUD</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">

</head>

<body class="bg-secondary">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Navbar content -->
    <a class="navbar-brand" href="{{ url('/') }}">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="{{ url('products') }}">Products</a>
        <a class="nav-link" href="{{ url('products/create') }}">
            Add-Product<img src="{{ asset('img/plus.svg') }}" alt="plus" style="width: 1.5em">
        </a>
      </div>

      <div class="ml-auto">
        <a class="btn btn-outline-primary mr-sm-2"
            href="{{ url('/home') }}">Home</a>
        <a  class="btn btn-outline-success my-2 my-sm-0"
            href="{{ url('/login') }}">Login</a>
        <a class="btn btn-outline-light my-2 my-sm-0"
            href="{{ url('/resester') }}">Register</a>
      </div>

    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div>

  <script src="{{ asset("js/jquery.slim.min.js") }}"></script>
  <script src="{{ asset("/js/bootstrap.bundle.min.js") }}"></script>

  @yield('script')

</body>
</html>
