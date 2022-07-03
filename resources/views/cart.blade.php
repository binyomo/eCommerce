@extends('/main')

@section('container')

	<div class="container my-5">
		@if($orderDetails)
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
		@else
			<div><h1>Ayo Mulai Belanja</h1></div>
		@endif

	</div>

@endsection