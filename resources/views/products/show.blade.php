@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>

        <img src="{{ $product->image_path }}" class="img-fluid mb-3" style="max-width: 300px;">

        <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>

        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>

        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
@endsection
