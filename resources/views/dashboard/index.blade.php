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
            id="login"
            ><i class="fab fa-github"></i
          ></button>
        </div>
    </div>    <!-- Container wrapper -->
  </nav>  <!-- Navbar -->


  <div class="container mt-1">
    {{-- login --}}
    <div class="card d-none mb-1" id="formlogin">
      <div class="card-body">
        <form>
          <div class="form-outline mb-3">
            <input type="text" id="uname" class="form-control" autocomplete="off" />
            <label class="form-label" for="uname">Username</label>
          </div>
          <button class="btn btn-primary btn-block btn-in">sign in</button>
        </form>
      </div>
    </div>  
    
    <div class="card mb-1">
      <div class="card-body">
        <form class="exe mb-3">
          <div class="form-outline mb-3">
            <input type="text" id="yourLink" class="form-control" autocomplete="off" />
            <label class="form-label" for="yourLink">Your link is here</label>
          </div>
         <div class="mb-3">
          <label class="visually-hidden" for="targetLink">Short Link</label>
          <div class="input-group ">
            <div class="input-group-text">{{ env('APP_URL') }}/</div>
            <input type="text" class="form-control" id="targetLink" autocomplete="off" placeholder="Short Link" />
          </div>
         </div>
          <button id="shorter" class="btn btn-primary btn-block btn-in">Shorter</button>
        </form>

        <hr>
        {{-- callback --}}
        <div class="card">
          <div class="card-body">
            response : <span class="response">-</span><br>
            Short link : <span class="shortLink">-</span><br>
            Target link : <span class="targetLink">-</span>
          </div>
        </div>

      </div>
    </div>
    
    
  </div>  
    <script src="{{asset('mdb/js/mdb.min.js')}}"></script>
    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <script>
        $(document).ready(()=>{
            $('#login').click(()=>{
                $('#formlogin').toggleClass('d-none')
                .addClass('animate__animated animate__fadeInUp')

                $('.btn-in').click(()=>{
                  $('.btn-in').removeClass('btn-primary').addClass('btn-info').html('load..')
                })
            })

            $('.exe').submit((event)=>{
              event.preventDefault();
              const vFrom = $('#yourLink').val();
              const vTo = $('#targetLink').val();
              const url = 'http://localhost:8000/api/srt';
              $.post(url, {
                srt: vTo,
                link: vFrom
              }, (data, status)=>{
                $('.response').html(status)
                $('.shortLink').html('{{ env('APP_URL') }}/' + data.data.srt)
                $('.targetLink').html(data.data.link)
              $('#yourLink').val('');
              $('#targetLink').val('');
              })
            })
        })
    </script>
</body>
</html>