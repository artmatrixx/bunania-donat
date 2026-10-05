@extends('admin.layouts.admin')

@section('title', 'Edit Produk')

@section('content')
    <h1>Edit Produk</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p>Nama: <input type="text" name="name" value="{{ old('name', $product->name) }}"></p>
        <p>Deskripsi: <textarea name="description">{{ old('description', $product->description) }}</textarea></p>
        <p>Harga: <input type="number" name="price" value="{{ old('price', $product->price) }}"></p>
        <p>Nama file gambar: <input type="text" name="images" value="{{ old('images', $product->images) }}"></p>
        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection
