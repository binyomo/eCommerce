@extends('/main')

@section('container')

	<div class="container my-5">
		<h1 class="py-3">History</h1>

		@if($orders->count())
			@foreach($orders as $order)
			<div class="col-12 bg-light p-5 border mb-2">
				<div class="row">
					<div class="col-md-6">
						<h1>Total Harga:</h1>
						<h3>{{ $order->jumlah_harga }}.000</h3>
						<p>No Order: <strong>{{ $order->code }}</strong></p>
					</div>
					<div class="col-md-6">
						<h2>{{ $order->created_at->diffForHumans() }}</h2>
						<a href="/history/{{ $order->id }}">See Detail</a>
					</div>
				</div>
			</div>
			@endforeach
		@else
			<div class="text-center">
				<h1>Ayo Mulai Belanja</h1>
			</div>
		@endif

	</div>

@endsection