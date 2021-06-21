@extends('layouts.admin')

@section('title')
    <title>Dashboard Marketplace</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Marketplace</li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-header">
                            <h5 class="card-title">
                                Jumlah Pesanan Baru
                            </h5>
                        </div>
                        <div class="card-body">
                            <h3>{{ $orderNew }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">
                            <h6 class="card-title">
                                Jumlah Pesanan Konfirmasi
                            </h6>
                        </div>
                        <div class="card-body">
                            <h3>{{ $orderConfirm }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-header">
                            <h5 class="card-title">
                                Jumlah Pesanan Dikirim
                            </h5>
                        </div>
                        <div class="card-body">
                            <h3>{{ $orderProcess }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">
                            <h5 class="card-title">
                                Jumlah Pesanan Selesai
                            </h5>
                        </div>
                        <div class="card-body">
                            <h3>{{ $orderDone }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
