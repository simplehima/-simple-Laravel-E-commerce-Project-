@extends('layouts.app')

@section('content')
    <div class="product-detail">
        <h1>{{ $product->name }}</h1>
        <img src="{{ $product->image_path }}" alt="{{ $product->name }}">
        <p>{{ $product->description }}</p>
        <p>Price: ${{ $product->price }}</p>
    </div>
@endsection
