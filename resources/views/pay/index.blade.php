<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      {{-- src="https://app.midtrans.com/snap/snap.js" --}}
      data-client-key={{ env('CLIENT_KEY') }}></script>
    </head>
  <body>
      <p>{{ env('CLIENT_KEY') }}</p>
      <p id="token" style="color: red">
        {{ $token }}
    </p>
    <a href="https://simulator.sandbox.midtrans.com/gopay/ui/index" target="blank">scan Qr</a>
    <button id="bayar">Pay!</button>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(()=>{
        const token = `{{ $token }}`
        console.log(token);
        $('#bayar').click(()=>{
            window.snap.pay(token)
        })
    })
    </script>
  </body>
</html>