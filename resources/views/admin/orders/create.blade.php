@extends('admin.layouts.admin')

@section('title', 'Tambah Pesanan')

@section('content')
    <h1>Tambah Pesanan</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <p>Nama pemesan: <input type="text" name="customer_name" value="{{ old('customer_name') }}"></p>
        <p>No. HP: <input type="text" name="phone" value="{{ old('phone') }}"></p>
        <p>Alamat: <textarea name="address">{{ old('address') }}</textarea></p>
        <p>Pesanan: <textarea name="items">{{ old('items') }}</textarea></p>
        <p>Total harga: <input type="number" name="total_price" value="{{ old('total_price') }}"></p>
        <button type="submit">Simpan</button>
        <a href="{{ route('admin.orders.index') }}">Batal</a>
    </form>
@endsection