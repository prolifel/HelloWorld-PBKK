@php
    setlocale (LC_TIME, 'id_ID');
    setlocale (LC_TIME, 'INDONESIA');
@endphp

@extends('layouts.admin')

@section('title')
    <title>Laporan Pembelian</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active">Laporan Pembelian</li>
    </ol>
    {{-- <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Daftar Pembelian
                                <div class="float-right">
                                    <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                                </div>
                            </h4>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <form action="{{ route('product.index') }}" method="get">
                                <div class="input-group mb-3 col-md-3 float-right">
                                    <input type="text" name="q" class="form-control" placeholder="Cari..." value="{{ request()->q }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button">Cari</button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>Nama</th>
                                            <th>Nomor Telepon</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th>Detail</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($order as $row)
                                        <tr>
                                            <td><strong>{{ $row->invoice }}</strong></td>
                                            <td>{{ $row->customer_name }}</td>
                                            <td>{{ $row->customer_phone }}</td>
                                            <td>{{ $row->customer_address }}</td>
                                            <td>{!! $row->status_label !!}</td>
                                            <td>
                                                <a href="{{ route('reports.show', ['report' => $row->invoice]) }}" class="btn btn-primary btn-sm">Detail</a>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            {!! $order->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-fluid mt-3">
        <div class="card mb-4">
            <div class="card-header border-0">
                <h4 class="card-title">Data Pelanggan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <tr>
                            <td>Tanggal Pemesanan</td>
                            <td>:</td>
                            <td>
                                @php
                                    setlocale (LC_ALL, 'IND');
                                    echo strftime( "%A, %d %B %Y %H:%M", strtotime($order->created_at));
                                @endphp
                            </td>
                        </tr>
                        <tr>
                            <td width="30%">Nama Lengkap</td>
                            <td width="5%">:</td>
                            <td>{{ $order->customer_name }}</td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon</td>
                            <td>:</td>
                            <td>{{ $order->customer_phone }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $order->customer_address }}, {{ $order->district->name }} {{ $order->district->city->name }}, {{ $order->district->city->province->name }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header border-0">
                <h4 class="card-title">Detail Pesanan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Berat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($order->details as $row)
                            <tr>
                                <td>{{ $row->product->name }}</td>
                                <td>{{ number_format($row->price) }}</td>
                                <td>{{ $row->qty }} Item</td>
                                <td>{{ $row->weight }} gr</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
