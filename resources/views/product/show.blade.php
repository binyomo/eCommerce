@extends('/main')

@section('container')

	<div class="container py-5 my-5">
		<div class="row">
			<div class="col-md-6 mb-xl-0 mb-5">
				<h1>{{ $product->name }}</h1>
				<h3>@currency($product->price)</h3>
			</div>
			<div class="col-md-6">
				<h4>Pesan Barang :</h4>
				<form action="/product" method="post">
					@csrf
					<input type="hidden" name="id" value="{{ $product->id }}">
					<div class="form-floating">
				        <input type="number" class="form-control" id="amount" name="amount" placeholder="amount">
				        <label for="amount">Jumlah Barang</label>
				    </div>
				    <button type="submit" class="col-12 btn bg-primary text-light">Pesan</button>
				</form>
			</div>
		</div>
	</div>

@endsection