<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kode Nuklir</title>
    <link rel="stylesheet" href="{{asset('mdb/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('mdb/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
          <!-- Navbar brand -->
          <a class="navbar-brand me-2">
            <img
              src="{{ asset('img/brand.png') }}"
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

    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <script src="{{asset('mdb/js/popper.min.js')}}"></script>
    <script src="{{asset('mdb/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('mdb/js/mdb.min.js')}}"></script>
    @stack('scripts')
</body>
</html>