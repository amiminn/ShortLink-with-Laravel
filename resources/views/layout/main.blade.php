<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kode Nuklir</title>
    <link rel="icon" type="image/x-icon" width="25px" href="{{ asset('img/ijo.png') }}">
    <link rel="stylesheet" href="{{asset('mdb/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('mdb/css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('animate.css/animate.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300&display=swap" rel="stylesheet">
    <style>
      *{
        font-family: 'JetBrains Mono', monospace;
      }
    </style>
</head>
<body class="bg-gr">
  {{-- preloader --}}
  <div class="preloader">
    <div class="loading">
      <img src="{{ asset('img/loading.gif') }}" width="80">
    </div>
  </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
          <!-- Navbar brand -->
          <a class="navbar-brand me-2">
            <img
              src="{{ asset('img/ijo.png') }}"
              width="29"
            />
          </a>  <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
            </ul>   <!-- Left links -->
            <div class="d-flex align-items-center">
              <button
                class="btn btn-dark px-3"
                id="login"
                ><i class="fab fa-github"></i
              ></button>
            </div>
        </div>    <!-- Container wrapper -->
      </nav>  <!-- Navbar -->
    @yield('content')
      <footer class="bg-white text-center text-middle" style="height: 60px">
      <div class="p-3">
        <i class="fas fa-copyright"></i> <i><b>amiminn</b> - simple laravel project</i>
      </div>
    </footer>

    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <script src="{{asset('mdb/js/popper.min.js')}}"></script>
    <script src="{{asset('mdb/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('mdb/js/mdb.min.js')}}"></script>
    <script>
      $(document).ready(function(){
      $(".preloader").fadeOut();
        })
    </script>
    @stack('scripts')
</body>
</html>