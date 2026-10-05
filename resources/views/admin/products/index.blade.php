@extends('admin.layouts.admin')

@section('title', 'Daftar Produk')

@section('content')
    <h1>Daftar Produk</h1>
    <a href="{{ route('admin.products.create') }}">+ Tambah Produk</a>

    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        @forelse ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('admin.products.edit', $product->id) }}">Edit</a>

                    <form action="{{ route('admin.products.destroy', $product->id) }}"
                          method="POST" style="display:inline"
                          onsubmit="return confirm('Yakin hapus produk ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4">Belum ada produk.</td></tr>
        @endforelse
    </table>
@endsection
