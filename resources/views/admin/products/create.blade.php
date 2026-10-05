@extends('admin.layouts.admin')

@section('title', 'Tambah Produk')

@section('content')
    <h1>Tambah Produk</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <p>Nama: <input type="text" name="name" value="{{ old('name') }}"></p>
        <p>Deskripsi: <textarea name="description">{{ old('description') }}</textarea></p>
        <p>Harga: <input type="number" name="price" value="{{ old('price') }}"></p>
        <p>Nama file gambar: <input type="text" name="images" value="{{ old('images') }}"></p>
        <button type="submit">Simpan</button>
    </form>
@endsection
