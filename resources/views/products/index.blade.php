@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="GET" action="{{ route('products.index') }}">
            <input type="text" name="search" class="form-control mb-3" placeholder="Search products..." value="{{ request('search') }}">
        </form>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $product->image_path }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p>Brand: {{ $product->brand->name }}</p>
                            <p>Price: ${{ $product->price }}</p>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $products->links() }}
    </div>
@endsection
