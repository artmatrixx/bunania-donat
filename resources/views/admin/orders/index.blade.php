@extends('admin.layouts.admin')

@section('title', 'Pesanan')

@section('content')
    <h1>Daftar Pesanan</h1>

    <a href="{{ route('orders.create') }}">+ Tambah Pesanan</a>

    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Pesanan</th>
            <th>Total Harga</th>
            <th>Status</th>
        </tr>
        @forelse ($orders as $order)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->items }}</td>
                <td>Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                <td>
                    <form action="{{ route('admin.orders.status', $order->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="status" onchange="this.form.submit()">
                            @foreach (['baru', 'diproses', 'selesai'] as $s)
                                <option value="{{ $s }}" @selected($order->status == $s)>{{ $s }}</option>
                            @endforeach
                        </select>
                    </form>
                </td>
            </tr>
                <td>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST"
                        onsubmit="return confirm('Yakin hapus pesanan ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
        @empty
            <tr><td colspan="5">Belum ada pesanan.</td></tr>
        @endforelse
    </table>
@endsection