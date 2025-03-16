@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <img src="{{ $product->image_path }}" class="card-img-top">
            <div class="card-body">
                <h1>{{ $product->name }}</h1>
                <p>{{ $product->description }}</p>
                <p class="fw-bold">Brand: {{ $product->brand->name }}</p>
                <p class="fw-bold">Price: ${{ $product->price }}</p>
                <form method="POST" action="{{ route('orders.store') }}">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit" class="btn btn-success">Order Now</button>
                </form>
                <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Products</a>
            </div>
        </div>
    </div>
@endsection
