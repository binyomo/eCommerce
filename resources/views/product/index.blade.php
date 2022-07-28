@extends('/main')

@section('container')

    <section class="bg-light top-link">
        <div class="container">
            <p class="py-3"><a class="text-danger" href="">Home</a> / Product</p>
        </div>
    </section>

    <section class="product my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Product</p>
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-end">   
                        <select class="form-select w-auto">
                            <option selected="">Populer</option>
                            <option>Terbaru</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection