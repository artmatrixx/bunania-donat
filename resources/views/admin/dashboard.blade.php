@extends('admin.layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard Admin</h1>
    <p>Jumlah produk: {{ $jumlahProduk }}</p>
@endsection
