@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Orders</h1>
        <ul class="list-group">
            @foreach ($orders as $order)
                <li class="list-group-item">
                    Ordered: <strong>{{ $order->product->name }}</strong> by User #{{ $order->user_id }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
