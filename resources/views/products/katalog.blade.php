@extends('layouts.app')

@section('title', 'Katalog')

@section('content')
    <h1>Katalog Produk</h1>
    <div class="product-list">
        @foreach ($products as $product)
            <div class="product-item">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <a href="{{ route('products.show', $product->id) }}">Lihat Detail</a>
            </div>
        @endforeach
    </div>

@endsection
