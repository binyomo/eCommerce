@extends('/main')

@section('container')

	<section class="bg-light top-link">
        <div class="container">
            <p class="py-3"><a class="text-danger" href="/">Home</a> / <a class="text-danger" href="/product">Product</a> / {{ $product->name }}</p>
        </div>
    </section>

	<section id="product-detail" class="product-detail">
		<div class="container py-5">
			<div class="row">	
				<div class="col-md-6 px-5">	
					<img src="https://dummyimage.com/300x300/dee2e6/6c757d.jpg" class="card-img-top" alt="...">
				</div>
				<div class="col-md-6 px-5">	
					<h1>{{ $product->name }}</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt facere, natus soluta dolores iusto! Molestiae expedita veritatis nesciunt doloremque sint asperiores fuga voluptas, distinctio, aperiam, ratione dolore.</p>

					<p>Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.</p>

					<h3 class="text-danger">@currency($product->price)</h3>

					<div class="row">	
						<div class="col-6">	
							<div class="input-group ">
							    <span class="input-group-btn">
							        <button class="btn btn-danger btn-minus" type="button">-</button>
							    </span>
							    <input type="text" class="form-control text-center" value="1">
							    <span class="input-group-btn">
							        <button class="btn btn-danger btn-plus" type="button">+</button>
							    </span>
							</div>
						</div>
						
						<div class="col-6">
							<button class="btn btn-danger">Kirim</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection