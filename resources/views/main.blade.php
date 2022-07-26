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

		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

	  	<!-- Vendor CSS -->
	  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.4/sweetalert2.min.css" integrity="sha512-jtQXcnq6H9BVx+dOsdudNCZmNe2hBMqcPpnVgeZcV9L3615F4+QMQebbWW9TV2otOSk/kQgum0MpWefB3uL3pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<!-- Main CSS -->
		<link rel="stylesheet" type="text/css" href="/css/style.css">
	</head>
	<body>
		<div class="bg-secondary text-center text-white py-2 d-none d-md-block">
			Anda Ingin Memulai Berjualan Di TokoOnline? Daftar Menjadi Mitra Kami Di <a href="" class="text-primary fw-bold">Sini</a>
		</div>

		<div class="nav-top py-md-5 py-3">
			<div class="container">
				<div class="row align-content-center">
					<div class="col-6 col-md-4 order-2 order-md-1">
						<form class="row g-0 align-items-center">
						  	<div class="col-1">
						    	<i class="col-auto fs-5 lh-lg fa-solid fa-magnifying-glass"></i>
						  	</div>
						  	<div class="col-11">
						    	<input class="col-auto border-0 form-control" type="search" placeholder="Search" aria-label="Search">
							</div>
						</form>
					</div>
					<div class="col-12 col-md-4 order-1 order-md-2 text-center py-md-0 py-2">
						<h3>Toko <strong>Online</strong></h3>
					</div>
					<div class="col-6 col-md-4 order-3 order-md-3 text-end text-dark">
						<a class="px-1 fs-5" href=""><i class="fas fa-circle-user"></i></a>
						<a class="px-1 fs-5" href="">
							<i class="fas fa-cart-shopping position-relative">
								<span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
								    <span class="visually-hidden">New alerts</span>
								</span>
							</i>
						</a>
						<i class="nav-mobile fas fa-bars px-3 d-md-none fs-5"></i>
					</div>
				</div>
			</div>
		</div>

		<nav class="d-none d-md-block navbar navbar-expand-lg border-top">
		  	<div class="container">
		      <ul class="navbar-nav justify-content-center">
		        <li class="nav-item">
		          <a class="nav-link text-dark" aria-current="page" href="#">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link text-dark" href="#">Product</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link text-dark" href="#">About</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link text-dark" href="#">Contact</a>
		        </li>
		      </ul>
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
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    	<script src="https://kit.fontawesome.com/4c9c83a78a.js" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.4/sweetalert2.min.js" integrity="sha512-GDiDlK2vvO6nYcNorLUit0DSRvcfd7Vc0VRg7e3PuZcsTwQrJQKp5hf8bCaad+BNoBq7YMH6QwWLPQO3Xln0og=="crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    	<script type="text/javascript" src="/js/script.js"></script>
 
    	@if(session()->has('success'))
	      <script type="text/javascript">
	        alert('{{ session('success') }}');     
	      </script>
	    @endif
	</body>
</html>