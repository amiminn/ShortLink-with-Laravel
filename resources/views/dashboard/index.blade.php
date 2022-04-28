<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HomePage</title>
    <link rel="stylesheet" href="{{asset('mdb/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('animate.css/animate.min.css')}}">
</head>

<body style="background-color: #ddd">
    <div class="container">
        <div class="card animate__animated animate__bounce">
            <div class="card-body">
                <h1>Hello</h1>
                <button class="btn btn-primary">goo</button>
                <form class="mt-2">
                    <div class="form-outline">
                        <input type="text" id="form12" class="form-control" />
                        <label class="form-label" for="form12">Example label</label>
                    </div>
                </form>
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