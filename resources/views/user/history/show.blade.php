@extends('/main')

@section('container')

	<div class="container my-5">
		<h1 class="py-3">Detail History</h1>
		
			@foreach($orderDetails as $orderDetail)
			<div class="col-12 bg-light p-5 border mb-2">
				<div class="row">
					<div class="col-md-6">
						<h3 class="mb-0">{{ $orderDetail->product->nama }}</h3>
						<h4>{{ $orderDetail->product->harga }}0</h4>
						<p>Jumlah : {{ $orderDetail->jumlah }}pcs</p>
					</div>
					<div class="col-md-6">
						<p class="mb-0">Jumlah Harga :</p>
						<h1>{{ $orderDetail->jumlah_harga }}.000</h1>
					</div>
				</div>
			</div>
			@endforeach

			<div class="col-12 bg-dark text-light px-5 py-3 border mt-2">
				<div class="row">
					<div class="col-md-6">
						<h3 class="mb-0">Tagihan Belanja</h3>
						<p>Jumlah : {{ $order->jumlah_harga }}.000</p>
					</div>
					<div class="col-md-6">
						<a href="/history" class="btn btn-light py-2 col-12">Kembali</a>	
						<p class="text-muted mb-0">Order : {{ $order->created_at->diffForHumans() }}</p>
					</div>
				</div>
			</div>

	</div>

@endsection