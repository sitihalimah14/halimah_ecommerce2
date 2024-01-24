<!-- FUNGSI EXTENDS DIGUNAKAN UNTUK ME-LOAD MASTER LAYOUTS YANG ADA, KARENA INI ADALAH HALAMAN HOME MAKA KITA ME-LOAD LAYOUTS ADMIN.BLADE.PHP -->
<!-- KETIKA MELOAD FILE BLADE, MAKA EKSTENSI .BLADE.PHP TIDAK PERLU DITULISKAN -->
@extends('layouts.dashboard')

<!-- TAG YANG DIAPIT OLEH SECTION('TITLE') AKAN ME-REPLACE @YIELD('TITLE') PADA MASTER LAYOUTS -->
@section('title')
<title>Dashboard</title>
@endsection

<!-- TAG YANG DIAPIT OLEH SECTION('CONTENT') AKAN ME-REPLACE @YIELD('CONTENT') PADA MASTER LAYOUTS -->
@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header">
                        <h4 class="card-title">Aktivitas Toko</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-3 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="callout callout-info">
                                            <small class="text-muted">Omset Harian</small>
                                            <br>
                                            <strong class="h4">Rp {{$totalRevenue}}</strong>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-3 mb-3">
                            <div class="card">
                                    <div class="card-body">
                                        
                                        <div class="callout callout-danger">
                                            
                                            <small class="text-muted">Pelanggan Baru (H-7)</small>
                                            <br>
                                            <strong class="h4">{{$registeredUsersCount}}</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mb-3">
                            <div class="card">
                                    <div class="card-body">
                                        
                                        <div class="callout callout-primary">
                                            <small class="text-muted">Perlu Dikirim</small>
                                            <br>
                                            <strong class="h4">{{$shippingCount}}</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mb-3">
                            <div class="card">
                                    <div class="card-body">
                                        
                                        <div class="callout callout-success">
                                            <small class="text-muted">Total Produk</small>
                                            <br>
                                            <strong class="h4">{{$productCount}}</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection