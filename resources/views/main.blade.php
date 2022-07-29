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
		<section class="bg-light text-center d-none d-md-block">
			<p class="py-2 border-bottom">Anda Ingin Memulai Berjualan Di TokoOnline? Daftar Menjadi Mitra Kami Di <a href="" class="text-danger fw-bold">Sini</a></p>
		</section>

		<section id="header" class="header">
			<div class="nav-top py-md-5 py-3">
				<div class="container">
					<div class="row align-content-center">
						<div class="col-6 col-md-4 order-2 order-md-1">
							<form class="row g-0 align-items-center px-1 px-md-0">
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
							<a class="px-1 fs-5" href="/user"><i class="fas fa-circle-user"></i></a>
							<a class="px-1 fs-5" href="/cart">
								<i class="fas fa-cart-shopping position-relative">
									<span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
								</i>
							</a>
							<i class="nav-mobile fas fa-bars px-3 d-md-none fs-5"></i>
						</div>
					</div>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg border-top">
			  	<div class="container justify-content-center">
			      <ul class="navbar-nav">
			        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
			          <a class="nav-link" aria-current="page" href="/">Beranda</a>
			        </li>
			        <li class="nav-item {{ Request::is('product*') ? 'active' : '' }}">
			          <a class="nav-link" href="/product">Product</a>
			        </li>
			        <li class="nav-item {{ Request::is('tentang') ? 'active' : '' }}">
			          <a class="nav-link" href="#">Tentang</a>
			        </li>
			        <li class="nav-item {{ Request::is('kontak') ? 'active' : '' }}">
			          <a class="nav-link" href="#">Kontak</a>
			        </li>
			      </ul>
			  	</div>
			</nav>
		</section>

		<div class="content">
			<div class="navbar-gap"></div>
	    	@yield('container')
	    </div>

	    <footer class="py-5 bg-light border-top">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-md-8">

		    			<div class="row">	
			    			<div class="col-md-4 pb-3 pb-md-0">
			    				<ul class="pb-3">
			    					<li><p class="fw-bold">Page TokoOnline</p></li>
					              	<li><i class="fas fa-chevron-right"></i> <a href="/">Beranda</a></li>
					              	<li><i class="fas fa-chevron-right"></i> <a href="/product">Product</a></li>
					              	<li><i class="fas fa-chevron-right"></i> <a href="/about">Tentang</a></li>
					              	<li><i class="fas fa-chevron-right"></i> <a href="/contact">Kontak</a></li>
					            </ul>

					            <ul>
			    					<li><p class="fw-bold">Masuk Akun</p></li>
					              	<li><i class="fas fa-chevron-right"></i> <a href="/user">User</a></li>
					              	<li><i class="fas fa-chevron-right"></i> <a href="/mitra">Mitra</a></li>
					            </ul>
				    		</div>
			    			<div class="col-md-4">
			    				<ul class="pb-3">
			    					<li><p class="fw-bold">Bantuan & Panduan</p></li>
					              	<li><i class="fas fa-chevron-right"></i> <a href="#">TokoOnline Care</a></li>
					              	<li><i class="fas fa-chevron-right"></i> <a href="#">Syarat & Ketentuan</a></li>
					              	<li><i class="fas fa-chevron-right"></i> <a href="#">Kebijakan Privasi</a></li>
					              	<li><i class="fas fa-chevron-right"></i> <a href="#">Keamanan</a></li>
					            </ul>
			    			</div>
			    			<div class="col-md-4 pb-5">
			    				<ul>
			    					<li><p class="fw-bold">Social Media</p></li>
					              	<a href=""><i class="fs-5 mx-1 fa-brands fa-facebook"></i></a>
					              	<a href=""><i class="fs-5 mx-1 fa-brands fa-twitter"></i></a>
					              	<a href=""><i class="fs-5 mx-1 fa-brands fa-instagram"></i></a>
					              	<a href=""><i class="fs-5 mx-1 fa-brands fa-tiktok"></i></a>
					            </ul>
			    			</div>
		    			</div>

		    		</div>	    		
		    		<div class="col-md-4">
		    			<div class="px-5 m">
		    				<img src="/img/logo.png" class="img-fluid">
		    			</div>
		    			<p class="text-center mt-4 fw-bold">&copy; Aryo - TokoOnline</p>
		    		</div>
		    	</div>
	    	</div>
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