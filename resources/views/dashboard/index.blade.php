<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HomePage</title>
    <link rel="stylesheet" href="{{asset('mdb/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
</head>

<body style="background-color: #ddd">
    <!-- Navbar -->
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
            role="button"
            ><i class="fab fa-github"></i
          ></button>
        </div>
    </div>    <!-- Container wrapper -->
  </nav>  <!-- Navbar -->
  <div class="container mt-1">
    <div class="card">
      <div class="card-body">
        <h1>Hello</h1>
      </div>
    </div>  
  </div>
    <script src="{{asset('mdb/js/mdb.min.js')}}"></script>
    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <script>
        $(document).ready(()=>{
            $('.btn').click(()=>{
                alert('ok')
            })
        })
    </script>
</body>
</html>