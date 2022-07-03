<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="description">
      <meta content="" name="keywords">

      <title>Toko Online</title>

      <!-- Favicons -->
      <link href="" rel="icon">
      <link href="" rel="apple-touch-icon">

      <!-- Vendor CSS -->
      <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
      <link href="/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

      <link rel="stylesheet" type="text/css" href="/css/user/login.css">
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          @yield('container')
          
          <div class="login100-more" style="background-image: url('/img/user/login/bg.jpg');"></div>
        </div>
      </div>
    </div>
    <!-- Vendor JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->
    <link href="/css/bootstrap.min.js" rel="stylesheet">
    @if(session()->has('success'))
      <script type="text/javascript">
        alert('{{ session('success') }}');     
      </script>
    @endif

    @if(session()->has('loginError'))
      <script type="text/javascript">
        alert('{{ session('loginError') }}');     
      </script>
    @endif
 
  </body>
</html>