@extends('/main')

@section('container')
    
    <section class="bg-light top-link">
        <div class="container">
            <p class="py-3"><a class="text-danger" href="/">Home</a> / Product</p>
        </div>
    </section>

    <section class="product mt-5">
        <div class="container">
            <div class="d-flex">
            <p class="me-auto">Product</p>

            <select class="form-select w-auto">
                <option selected="">Populer</option>
                <option>Terbaru</option>
            </select>
            </div>
        </div>
    </section>

    <section class="product" id="product">
        <div class="container py-5">
            <div class="row">

                @foreach($products as $product)
                <div class="col-md-3">
                    <div class="card">
                        <a href="/product/{{ $product->id }}"><img src="https://dummyimage.com/300x300/dee2e6/6c757d.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body text-center">
                            <h5 class="fw-bold card-title"><a href="/product/{{ $product->id }}">{{ $product->name }}</a></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fw-bold card-text">@currency( $product->price )</p>
                        </div>
                    </div>    
                </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
