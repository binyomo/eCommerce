@extends('/main')

@section('container')
<div class="container py-5 text-light text-center">
	<div class="row">
		<div class="col-md-6 pb-lg-0 pb-3">
			<div class="p-5 bg-dark">
				<h3>History</h3>
				<a href="/history" class="text-decoration-none text-light">Click <strong>Here</strong> For More</a>
			</div>
		</div>
		<div class="col-md-6">
			<div class="p-5 bg-dark">
				<h3>Cart</h3>
				<a href="/cart" class="text-decoration-none text-light">Click <strong>Here</strong> For More</a>
			</div>
		</div>
	</div>
	
	
	<form action="/user/logout" method="post" class="nav-item">
		@csrf
		<button class="btn py-2 my-4 bg-danger text-light col-12" type="submit" onclick="confirm('Anda Yakin Keluar?')">
			<i class="fas fa-sign-out-alt"></i>
			<span> Log Out</span>
		</button>
	</form>	
</div>
@endsection