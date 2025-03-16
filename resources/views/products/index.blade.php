@extends('layouts.app')

@section('content')
	<form method="GET" action="{{ route('products.index') }}">
  	  <input type="text" name="search" placeholder="Search products...">
  	  <button type="submit">Search</button>
	</form>

    <div class="products">
        @foreach ($products as $product)
            <div class="card">
                <img src="{{ $product->image_path }}" alt="{{ $product->name }}">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <p>Price: ${{ $product->price }}</p>
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">See More</a>
            </div>
        @endforeach
    </div>
@endsection
