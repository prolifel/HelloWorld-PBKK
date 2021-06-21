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
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Laporan Pembelian
                            </h4>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            {{-- TODO: buat seacrh nya --}}
                            {{-- <form action="{{ route('product.index') }}" method="get">
                            <div class="input-group mb-3 col-md-3 float-right">
                                <input type="text" name="q" class="form-control" placeholder="Cari..." value="{{ request()->q }}">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button">Cari</button>
                                </div>
                            </div>
                            </form> --}}
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
                                            <td>
                                                <form method="post" action="{{ route('reports.destroy', ['report' => $row->id]) }}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="button" data-toggle="modal" data-target="#modalEditStatus" class="btn btn-warning btn-sm">Ubah Status</button>
                                                    {{-- <a href="{{ route('reports.edit', ['report' => $row->id]) }}" class="btn btn-warning btn-sm">Edit Status</a> --}}
                                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <div class="modal" tabindex="-1" role="dialog" id="modalEditStatus">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Ubah Status Pesanan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('reports.update', ['report' => $row->id]) }}" method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="modal-body">
                                                            <select name="status" class="custom-select" required>
                                                                <option {{ $row->status == '0' ? 'selected':'' }}> Pilih Status</option>
                                                                <option value="1" {{ $row->status == '1' ? 'selected':'' }}>Dikonfirmasi</option>
                                                                <option value="2" {{ $row->status == '2' ? 'selected':'' }}>Proses</option>
                                                                <option value="3" {{ $row->status == '3' ? 'selected':'' }}>Dikirim</option>
                                                                <option value="4" {{ $row->status == '4' ? 'selected':'' }}>Selesai</option>
                                                            </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
    </div>
</main>
@endsection
