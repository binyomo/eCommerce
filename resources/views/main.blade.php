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
	  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.4/sweetalert2.min.css" integrity="sha512-jtQXcnq6H9BVx+dOsdudNCZmNe2hBMqcPpnVgeZcV9L3615F4+QMQebbWW9TV2otOSk/kQgum0MpWefB3uL3pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<!-- Main CSS -->
		<link rel="stylesheet" type="text/css" href="/css/admin/template.css">
		<link rel="stylesheet" type="text/css" href="/css/admin/admin.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/product">Product</a></li>
                    </ul>
                    <a href="/user" class="btn btn-outline-dark mx-1" type="submit">
                        <i class="fas fa-user me-1"></i>
                        @if(Auth::check())
                        	{{ auth()->user()->username }}
                        @else
                        	User
                        @endif
                    </a>
                    <a href="/cart" class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                    </a>
                </div>
            </div>
        </nav>

		<div class="container-fluid">
	    	@yield('container')
	    </div>

	    <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>

		<!-- Vendor JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->
		<link href="/css/bootstrap.min.js" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    	<script src="https://kit.fontawesome.com/4c9c83a78a.js" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.4/sweetalert2.min.js" integrity="sha512-GDiDlK2vvO6nYcNorLUit0DSRvcfd7Vc0VRg7e3PuZcsTwQrJQKp5hf8bCaad+BNoBq7YMH6QwWLPQO3Xln0og=="crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    	<!-- Main JS -->
    	<script type="text/javascript" src="/js/admin/template.js"></script>
    	<script type="text/javascript" src="/js/admin/admin.js"></script>
 
    	@if(session()->has('success'))
	      <script type="text/javascript">
	        alert('{{ session('success') }}');     
	      </script>
	    @endif
	</body>
</html>